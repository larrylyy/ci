
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
    </head>

    <body>
        <?php foreach ($news as $news_item): ?>

            <h2><?php echo $news_item['id'] ?></h2>
            <div id="main">
                <?php echo $news_item['publisher_name'] ?>
            </div>
            <p><a href="news/<?php echo $news_item['id'] ?>">View other user</a></p>

        <?php endforeach ?>
    </body>
</html>
