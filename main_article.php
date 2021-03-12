<main>
    <div class="container_2">
        <div class="content">
            <div class="article_full">
                <?php
                $mysql = new mysqli('127.0.0.1','root', '','inj_project');
                $news_id = $_GET['news_id'];
                $news = $mysql->query("SELECT * FROM `news` WHERE `news_id`= '$news_id'");
                $row=$news->fetch_array();
                echo '<h1>'.$row['heading'] .'</h1>';
                echo '<span>12300</span>';
                echo '<span>900</span>';
                echo '<span>'.$row['date'].'</span>';
                echo '<img src="'.$row['img'].'"> ';
                echo '<p>'.$row['text'].'</p>';
                ?>
            </div>
        </div>
        <div class="sidebar">
        </div>
    </div>
</main>