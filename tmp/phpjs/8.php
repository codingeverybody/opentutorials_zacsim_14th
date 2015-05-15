<html>
  <head>
    <title></title>

  </head>
  <body>
    <h1>JavaScript</h1>
    <ul>
    <script>
    names = ["egoing","sangho","yoona","taeho","yongsun","true"];
    i = 0;
    while(i < names.length){
      document.write("<li>"+names[i]+"</li>");
      i = i + 1;
    }
    </script>
    </ul>

    <h1>PHP</h1>
    <ul>
    <?php
    $names = array("egoing","sangho","yoona","taeho","yongsun","true");
    $i = 0;
    while($i < count($names)){
      echo "<li>".$names[$i]."</li>";
      $i = $i + 1;
    }
    ?>
    </ul>
  </body>
</html>
