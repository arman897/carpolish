<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Slider | Create<?= $this->endSection() ?>

<?= $this->section('content') ?>

<main>
    <?php $session = session(); ?>

    <!-- Global flash messages -->
    <?php if ($session->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= esc($session->getFlashdata('success')) ?></div>
    <?php endif; ?>

    <?php if ($session->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= esc($session->getFlashdata('error')) ?></div>
    <?php endif; ?>

    <?php
    $errors = $session->getFlashdata('errors') ?? [];
    $invalidCreds = $session->get('invalid_creds');
    if ($invalidCreds && !empty($invalidCreds['errors'])) {
        $errors = array_merge($errors, $invalidCreds['errors']);
    }
    ?>

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

    <!-- FORM: posts to store route -->
    <form method="POST" action="<?= base_url('admin/sliders/create') ?>" enctype="multipart/form-data" id="sliderForm">
        <?= csrf_field() ?>

        <!-- IMAGE FIELD: drag & drop + preview -->
        <div class="mb-3">
            <label class="form-label">Banner Image</label>

            <?php if (!empty($errors['banner_image'])): ?>
                <div class="text-danger mb-2">** <?= esc($errors['banner_image']) ?></div>
            <?php endif; ?>

            <div class="row g-3 align-items-start">
                <!-- preview box -->
                <div class="col-12 col-md-3">
                    <div id="previewBox" style="width:100%; height:220px; border-radius:10px; background:rgba(255,255,255,0.03);
                                border:1px dashed rgba(0,0,0,0.08); display:flex; align-items:center;
                                justify-content:center; overflow:hidden;">
                        <img id="previewImage" src="" alt="Preview"
                            style="width:100%; height:100%; object-fit:cover; display:none;">
                        <i id="previewPlaceholder" class="fas fa-image fa-2x text-muted"></i>
                    </div>
                </div>

                <!-- drop zone / file input -->
                <div class="col-12 col-md-9">
                    <div id="dropZone" style="padding:18px; border:2px dashed rgba(0,0,0,0.08); border-radius:10px;
                                text-align:center; cursor:pointer; transition:.15s;">
                        <i class="fas fa-upload fa-2x text-muted"></i>
                        <h6 class="mt-2 mb-1">Drag & Drop or Click to Upload</h6>
                        <p class="small text-muted mb-0">JPG, JPEG, PNG, WEBP — Max 4MB</p>
                        <p class="small text-muted mb-0">Recommended aspect ratio: 16:9 (or square)</p>
                    </div>

                    <input
                        type="file"
                        id="banner_image"
                        name="banner_image"
                        accept="image/png, image/jpeg, image/jpg, image/webp"
                        style="display:none;">
                </div>
            </div>
        </div>

        <!-- TITLE -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <?php if (!empty($errors['title'])): ?>
                <div class="text-danger mb-1">** <?= esc($errors['title']) ?></div>
            <?php endif; ?>
            <input type="text" id="title" name="title" class="form-control" value="<?= esc(set_value('title')) ?>"
                placeholder="Slider title (optional)">
        </div>

        <!-- SUBTITLE -->
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <?php if (!empty($errors['subtitle'])): ?>
                <div class="text-danger mb-1">** <?= esc($errors['subtitle']) ?></div>
            <?php endif; ?>
            <input type="text" id="subtitle" name="subtitle" class="form-control" value="<?= esc(set_value('subtitle')) ?>"
                placeholder="Slider subtitle (optional)">
        </div>

        <!-- LINK -->
        <div class="mb-3">
            <label for="link" class="form-label">Link (optional)</label>
            <?php if (!empty($errors['link'])): ?>
                <div class="text-danger mb-1">** <?= esc($errors['link']) ?></div>
            <?php endif; ?>
            <input type="url" id="link" name="link" class="form-control" value="<?= esc(set_value('link')) ?>"
                placeholder="https://example.com/page">
        </div>

        <!-- IS ACTIVE -->
        <div class="mb-3 form-check">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                <?= set_value('is_active') == 1 ? 'checked' : '' ?>>
            <label class="form-check-label" for="is_active">Active</label>
        </div>

        <div class="d-flex gap-2">
            <a href="<?= base_url('admin/sliders') ?>" class="btn btn-secondary">Back</a>

            <button type="submit" id="submitBtn" class="btn btn-primary btn-lg px-4">
                <span id="submitText">Create</span>
                <span id="submitSpinner" style="display:none; margin-left:8px;">
                    <i class="fas fa-spinner fa-spin"></i>
                </span>
            </button>
        </div>
    </form>
</main>

<!-- JS: drag & drop, preview, submit disable + spinner -->
<script>
    (function () {
        const dropZone = document.getElementById("dropZone");
        const fileInput = document.getElementById("banner_image");

        const previewImg = document.getElementById("previewImage");
        const previewPlaceholder = document.getElementById("previewPlaceholder");

        const form = document.getElementById('sliderForm');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitSpinner = document.getElementById('submitSpinner');

        // Click opens file picker
        dropZone.addEventListener("click", () => fileInput.click());

        // File selected via picker
        fileInput.addEventListener("change", function () {
            showPreview(this.files[0]);
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
            reader.onload = function (e) {
                previewImg.src = e.target.result;
                previewImg.style.display = "block";
                previewPlaceholder.style.display = "none";
            };
            reader.readAsDataURL(file);
        }

        // Submit: disable button and show spinner to avoid duplicate submits
        form.addEventListener('submit', function (e) {
            // Prevent submit if no file selected
            if (!fileInput.files || fileInput.files.length === 0) {
                alert('Please select a banner image to upload.');
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
