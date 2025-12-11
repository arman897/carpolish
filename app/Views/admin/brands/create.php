<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('p_name') ?>Brands|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?php $session = session() ?>

    <?php $invalidCreds = session()->get('invalid_creds'); ?>
    <?php $errors = $invalidCreds['errors'] ?? []; ?>

    <?php if ($session->get('invalid_creds') !== null) : ?>
        <div class="card card-<?= $session->get('invalid_creds')['type'] ?>">
            <div class="card-header">
                <h3 class="card-title">
                    <?php foreach ($errors as $err): ?>
                        <?= esc($err) ?><br>
                    <?php endforeach; ?>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- ⭐ FORM START -->
    <form method="post" action="<?= base_url('admin/brands/create') ?>" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <!-- ⭐ IMAGE FIELD WITH DRAG & DROP + LIVE PREVIEW -->
        <div class="mb-3">
            <label class="form-label">Logo</label>
            <?php if (!empty($errors['logo'])) : ?>
                <span class="bg-danger">** <?= esc($errors['logo']) ?></span>
            <?php endif; ?>

            <div class="row g-3 align-items-start">

                <!-- ⭐ PREVIEW BOX -->
                <div class="col-12 col-md-3">
                    <div id="previewBox"
                        style="width:100%; height:120px; border-radius:10px; background:rgba(255,255,255,0.05);
                       border:1px dashed rgba(255,255,255,0.15); display:flex; align-items:center;
                       justify-content:center; overflow:hidden;">

                        <img id="previewImage" src="" alt="Preview"
                            style="width:100%; height:100%; object-fit:contain; display:none;">

                        <i id="previewPlaceholder" class="fas fa-image fa-2x text-light"></i>
                    </div>
                </div>

                <!-- ⭐ DRAG & DROP ZONE -->
                <div class="col-12 col-md-9">
                    <div id="dropZone"
                        style="padding:18px; border:2px dashed rgba(255,255,255,0.25); border-radius:10px;
                       text-align:center; cursor:pointer; transition:.25s;">

                        <i class="fas fa-upload fa-2x text-light"></i>

                        <h6 class="mt-2 mb-1">Drag & Drop or Click to Upload</h6>
                        <p class="small text-muted mb-0">JPG, JPEG, PNG, WEBP — Max 2MB</p>
                    </div>

                    <input type="file" id="service_image" name="logo"
                        accept="image/png, image/jpeg, image/jpg, image/webp"
                        style="display:none;">
                </div>

            </div>
        </div>







        <!-- ⭐ TITLE FIELD -->
        <div class="mb-3">
            <label for="name" class="form-label">Brand Name</label>
            <?php if (!empty($errors['name'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['name']) ?></span>
            <?php endif; ?>
            <input type="text" name="name" class="form-control" value="<?= esc(set_value('name')) ?>">
        </div>




        <!-- ⭐ ANIMATED SUBMIT BUTTON -->
        <button type="submit" id="submitBtn" class="btn btn-primary btn-lg px-4">
            <span id="submitText">Create</span>
        </button>


    </form>

</main>


<!-- ⭐ JS SCRIPT FOR DRAG-DROP, PREVIEW, BUTTON ANIMATION -->
<script>
    const dropZone = document.getElementById("dropZone");
    const fileInput = document.getElementById("service_image");

    const previewImg = document.getElementById("previewImage");
    const previewPlaceholder = document.getElementById("previewPlaceholder");

    // CLICK → open input
    dropZone.addEventListener("click", () => fileInput.click());

    // SELECTED FILE
    fileInput.addEventListener("change", function() {
        showPreview(this.files[0]);
    });

    // DRAG OVER
    dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.style.borderColor = "#fff";
    });

    // DRAG LEAVE
    dropZone.addEventListener("dragleave", () => {
        dropZone.style.borderColor = "rgba(255,255,255,0.25)";
    });

    // DROP
    dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.style.borderColor = "rgba(255,255,255,0.25)";

        const file = e.dataTransfer.files[0];
        fileInput.files = e.dataTransfer.files;
        showPreview(file);
    });

    // PREVIEW FUNCTION
    function showPreview(file) {
        if (!file) return;

        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                previewImg.style.display = "block";
                previewPlaceholder.style.display = "none";
            };
            reader.readAsDataURL(file);
        }
    }
</script>




<?= $this->endSection() ?>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->