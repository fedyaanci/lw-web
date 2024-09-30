<article class="most-recent__item">
    <img class="most-recent__item_img" src="<?= $post['image_url'] ?>" alt="img">
    <div class="most-recent__item_content-area">
        <h3 class="most-recent__main-txt">
            <?= $post['title'] ?>
        </h3>
        <span class="most-recent__bot-txt">
            <?= $post['subtitle'] ?>
        </span>
        <div class="most-recent__item_author-info">
            <div class="most-recent__author-info">
                <img class="author-info__img" src="<?= $post['author_url'] ?>" alt="img">
                <span class="most-recent__author-info_txt">
                    <?= $post['author'] ?>
                </span>
                <span class="most-recent__author-info_date">
                    <?= $post['publish_date'] ?>
                </span>
            </div>
        </div>
    </div>
    <a class="post_link" href='/post.php?id=<?= $post['post_id'] ?>'><span></span></a>
</article>