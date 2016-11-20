<?php include 'header.php';?>
<div style="max-width: 400px; margin:0 auto;">
    <?php if($_SESSION['regError']):?>
    <div class="alert alert-success" role="alert">
        <ul>
            <?php foreach ($_SESSION['regError'] as $error):?>
                <li><?php echo $error;?></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endif;?>
    <div class="page-header">
        <h1>用户注册 <small><a href="login.php">已有账号登录</a></small></h1>
    </div>
    <form role="form" action="reg-post.php" method="post" >
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" placeholder="" name="username">
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="">
        </div>
        <div class="form-group">
            <label for="password2">重复密码</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="">
        </div>
        <button type="submit" class="btn btn-default">注册</button>
    </form>
</div>
<?php include 'footer.php'?>