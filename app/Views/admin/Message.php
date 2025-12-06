<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Message<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Message</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>username</th>                           
                            <th>email</th>
                            <th>phone</th>
                            
                            <th>message</th>
                            <th>Actions</th>
                            <!-- <th>Actions</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($msg as $key => $messg):
                            ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>

                                <td><?= $messg['username'] ?></td>
                                <td><?= $messg['email'] ?></td>
                                <td><?= $messg['phone'] ?></td>
                                
                                <td><?= $messg['message'] ?></td>

                                <td>
                                    <a href="<?= base_url("admin/message/delete/" . $messg['id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure you want to delete this message?')">
                                        <button class="btn-danger btn">Delete</button>
                                    </a>
                                </td>
                                
                            </tr>
                        <?php endforeach ?>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>username</th>                           
                            <th>email</th>
                            <th>phone</th>
                            
                            <th>message</th>
                            <th>Actions</th>
                            <!-- <th>Actions</th> -->
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
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->