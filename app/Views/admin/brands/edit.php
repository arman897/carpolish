<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('p_name') ?>Brands | Edit<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>

    <?php $errors = session()->get('invalid_creds')['errors'] ?? []; ?>

    <form method="POST" action="<?= base_url('admin/brands/edit/'.$brand['brand_id']) ?>" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <!-- IMAGE DRAG & DROP (same UI as create page) -->
        <div class="mb-4">
            <label class="form-label text-white">Logo</label>

            <div class="row g-3 align-items-start">

                <!-- Preview Box -->
                <div class="col-12 col-md-3">
                    <div id="previewBox"
                        style="width:100%; height:120px; border-radius:10px; background:rgba(255,255,255,0.05);
                       border:1px dashed rgba(255,255,255,0.15); display:flex; align-items:center;
                       justify-content:center; overflow:hidden;">

                        <img id="previewImage"
                            src="<?= base_url('uploads/brands/'.$brand['logo']) ?>"
                            style="width:100%; height:100%; object-fit:contain;">

                    </div>
                </div>

                <!-- Drop Zone -->
                <div class="col-12 col-md-9">
                    <div id="dropZone"
                        style="padding:18px; border:2px dashed rgba(255,255,255,0.25); border-radius:10px;
                           text-align:center; cursor:pointer;">

                        <i class="fas fa-upload fa-2x text-light"></i>

                        <h6 class="mt-2 mb-1 text-white">Drag & Drop or Click to Upload</h6>
                        <p class="small text-muted mb-0">JPG, JPEG, PNG, WEBP — Max 2MB</p>
                    </div>

                    <input type="file" id="service_image" name="logo"
                        accept="image/png, image/jpeg, image/jpg, image/webp"
                        style="display:none;">
                </div>

            </div>
        </div>

        <!-- Brand Name -->
        <div class="mb-3">
            <label class="form-label text-white">Brand Name</label>
            <input type="text" name="name" class="form-control"
                   id="brandName"
                   value="<?= esc($brand['name']) ?>">
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label class="form-label text-white">Slug</label>
            <input type="text" name="slug" class="form-control"
                   id="slug"
                   value="<?= esc($brand['slug']) ?>">
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary btn-lg px-4">Update Brand</button>

    </form>

</main>

<!-- JS for drag & drop + preview + slug -->
<script>
    const dropZone = document.getElementById("dropZone");
    const fileInput = document.getElementById("service_image");
    const previewImg = document.getElementById("previewImage");

    dropZone.addEventListener("click", () => fileInput.click());

    fileInput.addEventListener("change", function() {
        showPreview(this.files[0]);
    });

    dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.style.borderColor = "#fff";
    });

    dropZone.addEventListener("dragleave", () => {
        dropZone.style.borderColor = "rgba(255,255,255,0.25)";
    });

    dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.style.borderColor = "rgba(255,255,255,0.25)";
        const file = e.dataTransfer.files[0];
        fileInput.files = e.dataTransfer.files;
        showPreview(file);
    });

    function showPreview(file) {
        if (!file) return;

        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                previewImg.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }

    // AUTO SLUG
    document.getElementById("brandName").addEventListener("keyup", function() {
        let text = this.value.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById("slug").value = text;
    });
</script>

<?= $this->endSection() ?>
