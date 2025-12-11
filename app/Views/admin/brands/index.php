<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('p_name') ?>Brands<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <div class="d-flex justify-content-between mb-3">
        <h3 class="text-white">Brand List</h3>
        <a href="<?= base_url('admin/brands/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Brand
        </a>
    </div>

    <div class="card" style="background:#111;">
        <div class="card-body table-responsive">

            <table class="table table-dark table-hover align-middle text-center">
                <thead class="bg-secondary">
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($brands as $i => $brand): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>

                            <td>
                                <img src="<?= base_url('uploads/brands/'.$brand['logo']) ?>"
                                     style="width:50px; height:50px; object-fit:contain;">
                            </td>

                            <td class="fw-bold"><?= esc($brand['name']) ?></td>

                            <td><span class="badge bg-info"><?= esc($brand['slug']) ?></span></td>

                            <td>
                                <a href="<?= base_url('admin/brands/edit/'.$brand['brand_id']) ?>" 
                                   class="btn btn-warning btn-sm me-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button onclick="confirmDelete(<?= $brand['brand_id'] ?>)" 
                                        class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>

</main>

<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this brand?")) {
            window.location.href = "<?= base_url('admin/brands/delete/') ?>" + id;
        }
    }
</script>

<?= $this->endSection() ?>
