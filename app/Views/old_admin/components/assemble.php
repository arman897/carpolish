<?= $this->include('admin/components/header') ?>
<?= $this->include('admin/components/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <?= $this->renderSection('content') ?>
    </div>
    <!-- /.content-header -->
</div>
<?= $this->renderSection('scripts') ?>
<?= $this->include('admin/components/footer') ?>