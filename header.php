<header>
    <div class="header_top">
        <img src="./img/logo.png" alt="">
        <form name="search" method="post" action="#">
            <input type="search" name="query" placeholder="Поиск по сайту">
            <button type="submit"></button>
        </form>
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <a href="login.php"><span>Войти</span></a>
        <?php else:?>
                <a href="exit.php" class="header_button_1"><span class="header_button_1">Выйти</span></a>
        <?php endif;?>
        <?php
        if($_COOKIE['user'] == 'admin'):
        ?>
            <a href="admin.php" class="header_button_2"><span class="header_button_2">Админка</span></a>
        <?php endif;?>

    </div>
    <div class="navigation">
        <div class="line"></div>
        <a href=""><img src="./img/home.png" alt=""></a>
        <nav>
            <ul>
                <li><a href="">В мире</a></li>
                <li><a href="">В Москве</a></li>
                <li><a href="">Политика</a></li>
                <li><a href="">Происшествия</a></li>
                <li><a href="">Наука и техника</a></li>
                <li><a href="">Спорт</a></li>
            </ul>
        </nav>
        <a href=""><span>Ещё</span></a>
    </div>
</header>