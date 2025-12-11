<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('title') ?>Contact Data<?= $this->endSection() ?>

<?= $this->section('content') ?>



<main>

    <?= $this->include('/admin/components/alert_message'); ?>

    <div>

        <a href="<?= base_url('admin/products/create') ?>">
            <button type="button" class="btn btn-primary m-2">
                Add
            </button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($msg as $key => $p):
                        ?>

                            <tr>

                                <th scope="row"><?= $key + 1 ?></th>


                                <td><?= $p['name'] ?></td>

                                <td><?= $p['email'] ?></td>
                                <td><?= $p['phone'] ?></td>
                                <td><?= $p['subject'] ?></td>
                                <td><?= $p['message'] ?></td>


                                <td><a href="<?= base_url("/admin/messages/delete/" . $p['id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure to delete <?= $p['name'] ?> data?')"><button
                                            class="btn-danger btn">Delete</button></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>


                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
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

<!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!-- Control Sidebar -->



<!-- /.control-sidebar -->