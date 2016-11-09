<?php include 'header.php';?>
    <div class="row">
        <?php include 'nav.php';?>
        <div class="col-md-8">
            <form action="admin-save.php" method="post">
                <div class="form-group">
                    <label for="article_title">文章标题：</label>
                    <input type="text" class="form-control" id="article_title" name="title" placeholder="文章标题"
                         value="<?php echo $render['article']['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="article_content">正文内容：</label>
                    <textarea class="form-control" id="article_content" name="content" placeholder="正文内容"
                        style="height:300px;"><?php echo $render['article']['content']; ?></textarea>
                </div>
                <?php if (isset($render['article']['created'])): ?>
                    <input type="hidden" name="created" value="<?php echo $render['article']['created']; ?>" />
                <?php endif?>
                <?php if (isset($render['article']['id'])): ?>
                    <input type="hidden" name="id" value="<?php echo $render['article']['id']; ?>" />
                <?php endif?>
                <button type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </div>

<?php include 'footer.php';?>