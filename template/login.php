<?php include 'header.php';?>
<div style="max-width: 400px; margin:0 auto;">
    <?php if($_SESSION['loginError']):?>
    <div class="alert alert-success" role="alert">
        <ul>
            <?php foreach ($_SESSION['loginError'] as $error):?>
                <li><?php echo $error;?></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endif;?>
    <div class="page-header">
        <h1>用户登录 <small><a href="reg.php">注册新账号</a></small></h1>
    </div>
    <form role="form" action="login-post.php" method="post" >
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" placeholder="" name="username">
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="">
        </div>
        <button type="submit" class="btn btn-default">登录</button>
    </form>
</div>
<?php include 'footer.php'?>