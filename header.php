<header>
    <div class="header_top">
        <a href="index.php"><img src="./img/logo.png" alt=""></a>
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
                <li><a href="category.php?category=1">В мире</a></li>
                <li><a href="category.php?category=2">В Москве</a></li>
                <li><a href="category.php?category=3">Политика</a></li>
                <li><a href="category.php?category=4">Происшествия</a></li>
                <li><a href="category.php?category=5">Наука и техника</a></li>
                <li><a href="category.php?category=6">Спорт</a></li>
            </ul>
        </nav>
        <a href=""><span>Ещё</span></a>
    </div>
</header>