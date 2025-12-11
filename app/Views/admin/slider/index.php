<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Slider<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>
        <a href="<?= base_url('admin/sliders/create') ?>">
            <button type="button" class="btn btn-primary m-2">
                Add
            </button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Slider</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Active</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (! empty($slider) && is_array($slider)): ?>
                            <?php foreach ($slider as $key => $p): ?>
                                <tr>
                                    <th scope="row"><?= $key + 1 ?></th>

                                    <td>
                                       <?php if (!empty($p['banner_image'])): ?>
    <img src="<?= base_url(esc($p['banner_image'])) ?>"
         alt="<?= esc($p['title']) ?>"
         style="height:50px; width:50px; object-fit:cover;">
<?php else: ?>
    <span>No image</span>
<?php endif; ?>

                                    </td>

                                    <td><?= esc($p['title']) ?></td>
                                    <td><?= esc($p['subtitle'] ?? '') ?></td>

                                    <td>
                                        <?php if (! empty($p['is_active']) && (int)$p['is_active'] === 1): ?>
                                            <span class="badge badge-success">Active</span>
                                        <?php else: ?>
                                            <span class="badge badge-secondary">Inactive</span>
                                        <?php endif ?>
                                    </td>

                                    <td>
                                        <?= isset($p['created_at']) ? date('d M Y', strtotime($p['created_at'])) : '-' ?>
                                    </td>

                                    <td class="d-flex gap-1">
                                        <a href="<?= base_url("/admin/sliders/edit/" . (int)$p['id']) ?>" class="text-white">
                                            <button class="btn btn-sm btn-warning">Edit</button>
                                        </a>

                                        <!-- Delete form (POST) -->
                                        <form action="<?= base_url("/admin/sliders/delete/" . (int)$p['id']) ?>"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete <?= addslashes(esc($p['title'])) ?>?');"
                                              style="display:inline;">
                                            <?= csrf_field() ?>
                                            <!-- If you're using method spoofing for DELETE, uncomment below -->
                                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No sliders found.</td>
                            </tr>
                        <?php endif ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Active</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</main>

<?= $this->endSection() ?>
