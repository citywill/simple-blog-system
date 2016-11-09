<?php include 'header.php';?>
    <div class="row">
        <?php include 'nav.php';?>
        <div class="col-md-8">
            <?php if ($render['articles']): ?>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>日期</th>
                    <th>编辑</th>
                </tr>
                <?php foreach ($render['articles'] as $article): ?>
                <tr>
                    <td><?php echo $article['id']; ?></td>
                    <td><?php echo $article['title']; ?></td>
                    <td><?php echo date('Y-m-d', $article['created']); ?></td>
                    <td>
                        <a href="admin-edit.php?id=<?php echo $article['id']; ?>">编辑</a>
                        <a href="admin-del.php?id=<?php echo $article['id']; ?>" onclick="return confirm('您确定要删除吗')">删除</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
            <?php else: ?>
                没有找到文章
            <?php endif?>
        </div>
    </div>

<?php include 'footer.php'?>