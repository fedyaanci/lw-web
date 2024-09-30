
<article class="feature-posts__item_img" style="background-image: url(<?= $feature_post['image_url'] ?>)">
    <div class="feature-posts__tag__<?= $feature_post['tag_type'] ?>" background-color: #dd783f;>
        <span class="feature-posts__tag_txt"><?= $feature_post['tag_text'] ?></span>
    </div>
    <h2 class="article-info__main-txt"><?= $feature_post['title'] ?></h2>
    <span class="article-info__bot-txt"><?= $feature_post['subtitle'] ?></span>
    <div class="article-info">
        <div class="author-info">
            <img class="author-info__img" src="<?= $feature_post['author_url'] ?>" alt="img">
            <span class="author-info__txt"><?= $feature_post['author'] ?></span>
        </div>
        <span class="article-info__date"><?= $feature_post['publish_date'] ?></span>
    </div>
    <a class="post_link" href='/post.php?id=<?= $feature_post['post_id'] ?>'><span></span></a>
</article>
