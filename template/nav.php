<div class="col-md-4">
    <div class="list-group">
        <a href="#" class="list-group-item disabled">
            管理菜单
        </a>
        <a href="admin.php" class="list-group-item <?php echo ($render['active'] == 'list') ? 'active' : ''; ?>">文章列表</a>
        <a href="admin-edit.php" class="list-group-item <?php echo ($render['active'] == 'edit') ? 'active' : ''; ?>">创建新文章</a>
        <a href="logout.php" class="list-group-item">退出登录</a>
    </div>
</div>