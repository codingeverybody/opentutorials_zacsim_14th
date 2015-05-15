<html>
  <body>
    <h1>PHP</h1>
    <?php
      $pass = $_GET["pass"];
      if($pass == "111111") {
        print("Hi master");
      } else {
        print("Who are you?");
      }

    ?>
  </body>
</html>
