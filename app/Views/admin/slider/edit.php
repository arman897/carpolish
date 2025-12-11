<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Slider | Edit<?= $this->endSection() ?>

<?= $this->section('content') ?>

<main>
    <?php $session = session(); ?>
    <?php $errors = $session->getFlashdata('errors') ?? []; ?>

    <?php if (!empty($errors)): ?>
        <div class="card card-danger mb-3">
            <div class="card-header">
                <h3 class="card-title">Please fix the following</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <ul class="mb-0">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php // $slider is supplied by controller ?>
    <?php $id = $slider['id'] ?? null; ?>
    <form id="sliderEditForm"
          method="POST"
          action="<?= base_url('admin/sliders/edit/' . (int)$id) ?>"
          enctype="multipart/form-data">
        <?= csrf_field() ?>
        <!-- If your controller uses method spoofing for PUT, uncomment -->
        <!-- <input type="hidden" name="_method" value="PUT"> -->

        <!-- Keep existing image path so controller can know what to delete/keep -->
        <input type="hidden" name="existing_image" value="<?= esc($slider['banner_image'] ?? '') ?>">

        <div class="row">
            <!-- IMAGE PREVIEW + DROP -->
            <div class="col-12 col-md-4 mb-3">
                <label class="form-label">Banner Image</label>

                <?php if (!empty($errors['banner_image'])) : ?>
                    <div class="text-danger mb-2">** <?= esc($errors['banner_image']) ?></div>
                <?php endif; ?>

                <div id="previewBox"
                     style="width:100%; height:240px; border-radius:8px; background:rgba(255,255,255,0.03);
                            border:1px dashed rgba(0,0,0,0.08); display:flex; align-items:center;
                            justify-content:center; overflow:hidden; margin-bottom:10px;">
                    <img id="previewImage"
                         src="<?= !empty($slider['banner_image']) ? base_url(esc($slider['banner_image'])) : '' ?>"
                         alt="Preview"
                         style="width:100%; height:100%; object-fit:cover; <?= empty($slider['banner_image']) ? 'display:none;' : '' ?>">
                    <i id="previewPlaceholder" class="fas fa-image fa-2x text-muted"
                       style="<?= empty($slider['banner_image']) ? '' : 'display:none;' ?>"></i>
                </div>

                <div id="dropZone"
                     style="padding:14px; border:2px dashed rgba(0,0,0,0.08); border-radius:8px;
                            text-align:center; cursor:pointer; transition:.15s;">
                    <i class="fas fa-upload fa-2x text-muted"></i>
                    <h6 class="mt-2 mb-1">Drag & Drop or Click to Replace</h6>
                    <p class="small text-muted mb-1">JPG, JPEG, PNG, WEBP — Max 4MB</p>
                    <p class="small text-muted mb-0">Leave empty to keep current image</p>
                </div>

                <input type="file" id="banner_image" name="banner_image"
                       accept="image/png, image/jpeg, image/jpg, image/webp"
                       style="display:none;">

                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" value="1" id="remove_image" name="remove_image">
                    <label class="form-check-label" for="remove_image">
                        Remove existing image
                    </label>
                </div>
            </div>

            <!-- OTHER FIELDS -->
            <div class="col-12 col-md-8">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <?php if (!empty($errors['title'])) : ?>
                        <div class="text-danger mb-1">** <?= esc($errors['title']) ?></div>
                    <?php endif; ?>
                    <input type="text"
                           id="title"
                           name="title"
                           class="form-control"
                           value="<?= esc(set_value('title', $slider['title'] ?? '')) ?>"
                           placeholder="Slider title (optional)">
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <?php if (!empty($errors['subtitle'])) : ?>
                        <div class="text-danger mb-1">** <?= esc($errors['subtitle']) ?></div>
                    <?php endif; ?>
                    <input type="text"
                           id="subtitle"
                           name="subtitle"
                           class="form-control"
                           value="<?= esc(set_value('subtitle', $slider['subtitle'] ?? '')) ?>"
                           placeholder="Slider subtitle (optional)">
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link (optional)</label>
                    <?php if (!empty($errors['link'])) : ?>
                        <div class="text-danger mb-1">** <?= esc($errors['link']) ?></div>
                    <?php endif; ?>
                    <input type="url"
                           id="link"
                           name="link"
                           class="form-control"
                           value="<?= esc(set_value('link', $slider['link'] ?? '')) ?>"
                           placeholder="https://example.com/page">
                </div>

                <div class="mb-3 form-check">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox"
                           class="form-check-input"
                           id="is_active"
                           name="is_active"
                           value="1"
                           <?= set_value('is_active', $slider['is_active'] ?? 0) == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_active">Active</label>
                </div>

                <div class="d-flex gap-2">
                    <a href="<?= base_url('admin/sliders') ?>" class="btn btn-secondary">Back</a>

                    <button type="submit" id="submitBtn" class="btn btn-primary">
                        <span id="submitText">Update</span>
                        <span id="submitSpinner" style="display:none; margin-left:8px;">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</main>

<!-- JS for drag & drop, preview, remove toggle, and submit UX -->
<script>
    (function () {
        const dropZone = document.getElementById("dropZone");
        const fileInput = document.getElementById("banner_image");

        const previewImg = document.getElementById("previewImage");
        const previewPlaceholder = document.getElementById("previewPlaceholder");
        const removeImageCheckbox = document.getElementById("remove_image");

        const form = document.getElementById('sliderEditForm');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitSpinner = document.getElementById('submitSpinner');

        // Click opens file picker
        dropZone.addEventListener("click", () => fileInput.click());

        // File selected via picker
        fileInput.addEventListener("change", function() {
            showPreview(this.files[0]);
            // Uncheck remove-image if user selects a new file
            if (this.files.length > 0 && removeImageCheckbox.checked) {
                removeImageCheckbox.checked = false;
            }
        });

        // Dragover styling
        dropZone.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZone.style.borderColor = "#007bff";
            dropZone.style.background = "rgba(0,123,255,0.02)";
        });

        // Dragleave reset
        dropZone.addEventListener("dragleave", () => {
            dropZone.style.borderColor = "rgba(0,0,0,0.08)";
            dropZone.style.background = "transparent";
        });

        // Drop handler
        dropZone.addEventListener("drop", (e) => {
            e.preventDefault();
            dropZone.style.borderColor = "rgba(0,0,0,0.08)";
            dropZone.style.background = "transparent";

            const file = e.dataTransfer.files[0];
            if (!file) return;
            fileInput.files = e.dataTransfer.files; // populate input so server receives file
            showPreview(file);

            // Uncheck remove-image if user drops a new file
            if (removeImageCheckbox.checked) {
                removeImageCheckbox.checked = false;
            }
        });

        // Preview logic
        function showPreview(file) {
            if (!file) return;
            if (!file.type.startsWith("image/")) {
                alert('Please select an image file.');
                return;
            }

            // size check: 4MB
            const maxBytes = 4 * 1024 * 1024;
            if (file.size > maxBytes) {
                alert('Image is too large. Max size is 4MB.');
                fileInput.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewImg.style.display = "block";
                previewPlaceholder.style.display = "none";
            };
            reader.readAsDataURL(file);
        }

        // If user checks "remove image" hide preview and clear file input
        removeImageCheckbox.addEventListener('change', function () {
            if (this.checked) {
                // hide preview
                previewImg.style.display = 'none';
                previewImg.src = '';
                previewPlaceholder.style.display = 'block';
                // clear file input
                try {
                    fileInput.value = '';
                } catch (err) {
                    // ignore
                }
            } else {
                // If existing image URL present in hidden input (server-side), show it again by reloading page or let user re-select.
                // We keep behavior simple and require user to reselect file if they uncheck.
            }
        });

        // Submit: disable button and show spinner to avoid duplicate submits
        form.addEventListener('submit', function (e) {
            // If remove_image is unchecked and no new file selected and there was no existing image, prevent submit
            const existingImage = "<?= esc($slider['banner_image'] ?? '') ?>";
            const removeChecked = removeImageCheckbox.checked;
            const newFileSelected = fileInput.files && fileInput.files.length > 0;

            if (!existingImage && !newFileSelected) {
                alert('Please select an image to upload.');
                e.preventDefault();
                return;
            }

            submitBtn.setAttribute('disabled', 'disabled');
            submitText.style.opacity = '0.6';
            submitSpinner.style.display = 'inline-block';
        });
    })();
</script>

<?= $this->endSection() ?>
