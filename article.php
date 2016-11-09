<?php include 'header.php';?>
    <article>
    <?php if (isset($render['article'])): ?>
        <h1><?php echo $render['article']['title']; ?></h1>
        <div class="bar">
            创建日期：<?php echo date('Y-m-d H:i:s', $render['article']['created']); ?>
        </div>
        <div class="article">
            <?php echo nl2br($render['article']['content']); ?>
        </div>
    <?php else: ?>
        文章不存在
    <?php endif?>
    </article>
<?php include 'footer.php';?>