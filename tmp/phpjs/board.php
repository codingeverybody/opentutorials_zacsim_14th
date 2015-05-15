<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
    if($_GET['bo_table'] == 'lecture') {
      echo "강의";
    }
    if($_GET['bo_table'] == 'news') {
      echo "뉴스";
    }
    ?>
  </body>
</html>
