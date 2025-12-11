<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Create Product<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>

    <form action="<?= base_url('admin/blogs/create') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="blog_img">Blog Image</label>
        <input type="file" name="image" id="blog _img" class="form-control" accept="image/*" required>
    </div>
     <div class="form-group">
        <label for="blog_tags">Blog Tags</label>
        <input type="text" name="tags" id="blog_tags" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="blog_title">Blog Title</label>
        <input type="text" name="title" id="blog_title" class="form-control" required>
    </div>
    <div class="form-group mb-3">
    <label for="published_on" class="form-label fw-bold">Published Date</label>
    <?php $today = date('Y-m-d'); ?>
    <input type="date" name="published_on" id="" class="form-control">
    </div>
     <div class="form-group">
        <label for="blog_slug">Blog Slug</label>
        <input type="text" name="slug" id="blog_slug" class="form-control" placeholder="Enter custom slug (optional)">
    </div>
    <div class="form-group">
        <label for="blog_content">Blog Content</label>
        <textarea name="content" id="blog_content" rows="6" class="form-control ckeditor-description" required></textarea>
    </div>


      





    <button type="submit" class="btn btn-primary">Create Blog</button>
</form>

</main>

<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
// Initialize CKEditor for all .ckeditor-title and .ckeditor-description
function initializeCKEditors() {
    document.querySelectorAll('.ckeditor-title').forEach(function(textarea, i){
        if (!textarea.classList.contains('ckeditor-applied')) {
            CKEDITOR.replace(textarea, { height: 80 });
            textarea.classList.add('ckeditor-applied');
        }
    });
    document.querySelectorAll('.ckeditor-description').forEach(function(textarea, i){
        if (!textarea.classList.contains('ckeditor-applied')) {
            CKEDITOR.replace(textarea, { height: 160 });
            textarea.classList.add('ckeditor-applied');
        }
    });
}
initializeCKEditors();

document.getElementById('add-more').addEventListener('click', function() {
    let block = document.querySelector('.content-block').cloneNode(true);

    // Clear file, title, description
    block.querySelector('input[type="file"]').value = "";
    block.querySelectorAll('textarea').forEach(el => { el.value = ""; });

    // Remove CKEditor instance from cloned textarea (if present)
    block.querySelectorAll('textarea').forEach(el => {
        el.classList.remove('ckeditor-applied');
        el.removeAttribute('id'); // prevents CKEditor ID collision
    });

    document.getElementById('content-wrapper').appendChild(block);

    // Re-initialize CKEditor on newly added textareas only
    initializeCKEditors();
});
</script>

<?= $this->endSection() ?>
