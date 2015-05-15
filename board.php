<html>
  <body>
    <h1>PHP</h1>
    <?php
      $bo_table = $_GET["bo_table"];
      if($bo_table == "pds") {
        print("자료실");
      }
      if($bo_table == "new"){
        print("뉴스");
      }
    ?>
  </body>
</html>
