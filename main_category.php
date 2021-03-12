<main>
    <div class="container_2">
        <div class="sort">
            <h1><?php echo $category_name['name'];?></h1>
            <nav>
                <ul>
                    <li><a href=""><span>По дате</span></a></li>
                    <li><a href=""><span>По популярности</span></a></li>
                    <li><a href=""><span>По комментариям</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <?php
            require 'link.php';
            $category_id = $_GET['category'];
            $news = $mysql->query("SELECT * FROM `news` WHERE `category`= '$category_id'");
            for($i = 1;$row=$news->fetch_array();$i++)
            {
                echo '<a href="article.php?news_id='.$row['news_id'].'"</a>';
                echo '<div class="category_article">';
                echo '<h1>'.$row['heading'] .'</h1>';
                echo '<img src="'.$row['img'].'"> ';
                echo '<p>'.$row['text'].'</p>';
                echo '<div class="stats">';
                echo '<span>12300</span>';
                echo '<span>900</span>';
                echo '<span>'.$row['date'].'</span>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="sidebar">
        </div>
    </div>
</main>


