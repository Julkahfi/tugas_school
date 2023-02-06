<div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item active">MAIN MENU</li>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-siswa/dashboard.php" class="list-group-item" style="color: #212529;">Siswa</a>
        <?php if ($_SESSION['level'] == 1) { ?>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/dashboard.php" class="list-group-item" style="color: #212529;">User</a>
        <?php } ?>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/logout.php" class="list-group-item" style="color: #212529;">Logout</a>
    </ul>
</div>