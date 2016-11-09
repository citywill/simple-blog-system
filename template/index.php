<?php include 'header.php';?>
<?php if ($render['articles']): ?>
<?php foreach ($render['articles'] as $article): ?>
    <section>
        <h1><?php echo $article['title'] ?></h1>
        <div class="excerpt">
            <?php echo mb_substr($article['content'], 0, 140) ?>...
        </div>
        <div class="more"><a href="article.php?id=<?php echo $article['id'] ?>" class="btn btn-primary">查看详情</a></div>
    </section>
<?php endforeach;?>
<?php else: ?>
    <section>
        当前没有文章
    </section>
<?php endif?>
<?php include 'footer.php'?>