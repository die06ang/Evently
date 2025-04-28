<div>
    <?php if (isset($_SESSION['is_logged'])) : ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>events/addcopy">Share Something</a>
    <?php endif; ?>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['nombreEvt']; ?></h3>
            <hr>
            <p><?php echo $item['descEvt']; ?></p>
        </div>
    <?php endforeach; ?>
</div>