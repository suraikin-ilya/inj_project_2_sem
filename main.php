<?php
$mysql = new mysqli('127.0.0.1','root', '','inj_project');
?>
<main>
    <div class="container">
        <div class="content">
            <div class="news_container">
                <a href="">
                    <div class="news">
                        <h2>Lorem,   elit ut aliquam, purus sit amet luctus venentis, lectus magna fringilla urna, porttitor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim Lorem ipsum ...</p>
                        <img src="./img/img0.png" alt="">
                    </div>
                </a>
            </div>
            <div class="world">
                <a href=""><h3>В Мире</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '1'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="moscow">
                <a href=""><h3>В Москве</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '2'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="politics">
                <a href=""><h3>Политика</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '3'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="incidents">
                <a href=""><h3>Происшествия</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '4'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="science">
                <a href=""><h3>Наука и Техника</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '5'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="sport">
                <a href=""><h3>Спорт</h3></a>
                <div class="news_container">
                    <?php
                    $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '6'");
                    for($i = 1;$row=$news->fetch_array();$i++)
                    {
                        echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                        echo '<div class="article">';
                        echo '<h4>'. $row['heading'] .'</h4>';
                        echo '<span>12300</span>';
                        echo '<span>900</span>';
                        echo '<span>'.$row['date'].'</span>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="sidebar">
        </div>
    </div>
</main>