<?php $session = session() ?>






<?php if ($session->getFlashdata('msg') !== null) : ?>
    <div class="alert alert-<?= $session->getFlashdata('msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
        <div>
            <?= $session->getFlashdata('msg')['msg'] ?>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

<?php endif; ?>




<?php if ($session->get('invalid_creds') !== null) : ?>
    <div class="alert alert-<?= $session->get('invalid_creds')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
        <div>
            <?php foreach (array_keys($session->get('invalid_creds')['errors']) as $item) : ?>
                <?= $session->get('invalid_creds')['errors'][$item] ?><br>
            <?php endforeach; ?>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>
<?php if ($session->getFlashdata('error_msg') !== null) : ?>
    <div class="alert alert-<?= $session->getFlashdata('error_msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
        <div>
            <?= $session->getFlashdata('error_msg')['msg'] ?>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>