<div class="header-main-wrapper">
    <span class="header-main-text"><?= $post['title'] ?></span>
    <br>
    <span class="header-main-bot-text"><?= $post['subtitle'] ?></span>
</div>
<img class="image-after-menu" src="<?= $post['image_url'] ?>">
<div class="main-text-wrapper">
    <div class="main-text">
        <p>
            <?= $post['content'] ?>
        </p>
    </div>
</div>