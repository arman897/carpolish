<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Blogs<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <div>
        <a href="<?= base_url('admin/blogs/create') ?>">
            <button type="button" class="btn btn-primary m-2">+ Add Blog</button>
        </a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Blogs</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>Tags</th>

                            <th>Title</th>
                            <th>Slugs</th>
                             <th>Published Date</th>
                            <th>Content</th>
                            <th>view/edit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blg as $key => $data): ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td>
                                    <?php if (isset($data['b_img']) && !empty($data['b_img'])): ?>
                                        <img src="<?= base_url('public/uploads/blogs/' . esc($data['b_img'])) ?>" 
                                             alt="Blog Image" width="60" height="60">
                                    <?php else: ?>
                                        <span class="text-muted">No Image</span>
                                    <?php endif; ?>
                                </td>

                                <td><?= esc($data['b_tags'] ?? 'No Tags') ?></td>
                                <td><?= esc($data['b_title'] ?? 'No Title') ?></td>
                                <td><?= esc($data['b_slug'] ?? 'No Slug') ?></td>
                                <td><?= esc($data['published_on'] ?? 'No Date') ?></td>
                                <td><?= esc(substr($data['b_desc'] ?? 'No Content', 0, 100)) ?>...</td>
                                <td>
                                    <a href="<?= base_url("/admin/blogs/edit/" . $data["id"]) ?>">
                                            <button class="btn btn-success btn-sm w-100">View/Edit</button>
                                        </a></td>
                                <td>
                                    <a href="<?= base_url("admin/blogs/delete/" . $data['id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure you want to delete this blog.....Sir..!!!?')">
                                        <button class="btn-danger btn">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Title</th>
                            <th>Slugs</th>
                            <th>Published Date</th>

                            <th>Content</th>
                            <th>view/edit</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
