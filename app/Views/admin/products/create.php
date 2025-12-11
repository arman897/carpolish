<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Products|Create<?= $this->endSection() ?>

<?= $this->section('content') ?>




<main>
    <?php $session = session() ?>

    <?php $invalidCreds = session()->get('invalid_creds'); ?>
    <?php $errors = $invalidCreds['errors'] ?? []; ?>


    <?php if ($session->get('invalid_creds') !== null) : ?>
        <div class="card card-<?= $session->get('invalid_creds')['type'] ?>">
            <div class="card-header">
                <h3 class="card-title"> <?php foreach (array_keys($session->get('invalid_creds')['errors']) as $item) : ?>
                        <?= $session->get('invalid_creds')['errors'][$item] ?><br>
                    <?php endforeach; ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
        </div>

    <?php endif; ?>




    <form method="post" action=<?= base_url('admin/products/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <!-- Main Image -->
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger rounded">
                <label for="main_image" class="form-label">Product Main Image</label>
                <?php if (!empty($errors['main_image'])) : ?>
                    <span class="bg-danger text-white p-1 rounded">** <?= esc($errors['main_image']) ?></span>
                <?php endif; ?>
                <input type="file" name="main_image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
            </div>
        </div>

        <!-- Other Images -->
        <div class="mb-3">
            <label class="form-label">Other Images</label>
            <div id="other-images-container">
                <div class="d-flex mb-2 align-items-center image-input-group">
                    <input type="file" name="other_images[]" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
                    <button type="button" class="btn btn-danger ms-2 remove-image" disabled>Delete</button>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-2" id="add-image">+ Add More Image</button>
        </div>



        <!-- Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const container = document.getElementById("other-images-container");
                const addBtn = document.getElementById("add-image");

                addBtn.addEventListener("click", function() {
                    const div = document.createElement("div");
                    div.classList.add("d-flex", "mb-2", "align-items-center", "image-input-group");
                    div.innerHTML = `
            <input type="file" name="other_images[]" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
            <button type="button" class="btn btn-danger ms-2 remove-image">Delete</button>
        `;
                    container.appendChild(div);
                    updateDeleteButtons();
                });

                container.addEventListener("click", function(e) {
                    if (e.target.classList.contains("remove-image")) {
                        e.target.closest(".image-input-group").remove();
                        updateDeleteButtons();
                    }
                });

                function updateDeleteButtons() {
                    const groups = container.querySelectorAll(".image-input-group");
                    groups.forEach((group, index) => {
                        const btn = group.querySelector(".remove-image");
                        btn.disabled = (groups.length === 1);
                    });
                }

                updateDeleteButtons();
            });
        </script>








        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <?php if (!empty($errors['title'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['title']) ?></span>
            <?php endif; ?>
            <input type="text" name="title" class="form-control" value="<?= esc(set_value('title')) ?>">
        </div>







        <div class="mb-3">
            <label for="p_cat" class="form-label">Product Category</label>
            <?php if (!empty($errors['p_cat'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['p_cat']) ?></span>
            <?php endif; ?>
            <select name="p_cat" class="form-control">
                <option value="" selected disabled>-- Select Category --</option>
                <?php if (!empty($catData)): ?>
                    <?php foreach ($catData as $cat): ?>
                        <option value="<?= esc($cat['id']) ?>" <?= set_select('p_cat', $cat['id']) ?>>
                            <?= esc($cat['title']) ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>









        <!-- Star Rating (1 to 5) -->
        <div class="mb-3">
            <label for="star" class="form-label">Star Rating (1-5)</label>
            <?php if (!empty($errors['star'])) : ?>
                <span class="bg-danger text-white p-1 rounded"> ** <?= esc($errors['star']) ?></span>
            <?php endif; ?>
            <input type="number" name="star" class="form-control" value="<?= esc(set_value('star')) ?>" min="1" max="5">
        </div>

        <!-- Review (Accept Number) -->
        <div class="mb-3">
            <label for="review" class="form-label">Review (Number)</label>
            <?php if (!empty($errors['review'])) : ?>
                <span class="bg-danger text-white p-1 rounded"> ** <?= esc($errors['review']) ?></span>
            <?php endif; ?>
            <input type="number" name="review" class="form-control" value="<?= esc(set_value('review')) ?>">
        </div>

        <!-- Actual Price -->
        <div class="mb-3">
            <label for="actual_price" class="form-label">Actual Price</label>
            <?php if (!empty($errors['actual_price'])) : ?>
                <span class="bg-danger text-white p-1 rounded"> ** <?= esc($errors['actual_price']) ?></span>
            <?php endif; ?>
            <input type="number" name="actual_price" class="form-control" value="<?= esc(set_value('actual_price')) ?>" step="0.01">
        </div>

        <!-- Offer Price -->
        <div class="mb-3">
            <label for="offer_price" class="form-label">Offer Price</label>
            <?php if (!empty($errors['offer_price'])) : ?>
                <span class="bg-danger text-white p-1 rounded"> ** <?= esc($errors['offer_price']) ?></span>
            <?php endif; ?>
            <input type="number" name="offer_price" class="form-control" value="<?= esc(set_value('offer_price')) ?>" step="0.01">
        </div>

        <!--  -->











        <div class="mb-3">
            <label for="product_details" class="form-label">Product Description</label>
            <?php if (!empty($errors['product_details'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['product_details']) ?></span>
            <?php endif; ?>
            <textarea name="product_details" rows="10" class="form-control"><?= esc(html_entity_decode(set_value('product_details'))) ?></textarea>
            <script>
                CKEDITOR.replace('product_details', {
                    removeButtons: 'Font,FontSize',
                });
            </script>
        </div>






        <div class="mb-3">
            <label for="other_details" class="form-label">Other Information</label>
            <?php if (!empty($errors['other_details'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['other_details']) ?></span>
            <?php endif; ?>

            <textarea name="other_details" rows="10" class="form-control"><?= esc(html_entity_decode(set_value('other_details'))) ?></textarea>
            <script>
                CKEDITOR.replace('other_details', {
                    removeButtons: 'Font,FontSize',
                });
            </script>

        </div>





        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="artist_image" class="form-label">Artist Image</label>
                <?php if (!empty($errors['artist_image'])) : ?>
                    <span class="bg-danger">** <?= esc($errors['artist_image']) ?></span>
                <?php endif; ?>
                <input type="file" name="artist_image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
                <!-- <small class="text-warning">Please provide image size: 1042 × 730 pixels</small> -->
            </div>
        </div>



        <div class="mb-3">
            <label for="artist_name" class="form-label">Artist Name</label>
            <?php if (!empty($errors['artist_name'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['artist_name']) ?></span>
            <?php endif; ?>
            <input type="text" name="artist_name" class="form-control" value="<?= esc(set_value('artist_name')) ?>">
        </div>





        <button type="submit" class="btn btn-primary">Create</button>

    </form>

</main>



<?= $this->endSection() ?>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->