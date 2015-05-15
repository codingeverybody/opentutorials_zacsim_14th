<html>
  <body>
    <h1>html</h1>
    Hello world
    <h1>JavaScript</h1>
    <ol>
    <script>
      i = 0;
      while(i < 10){
        document.write("<li>Hello world"+i+"</li>");
        i = i + 1;
      }

      for(i=0; i<10; i = i+1){
        document.write("<li>Hello world"+i+"</li>");
      }
    </script>
    </ol>
    <h1>PHP</h1>
    <ul>
    <?php
    $i = 0;
    while($i < 10){
      print("<li>Hello world".$i."</li>");
      $i = $i + 1;
    }
    ?>
    </ul>
  </body>
</html>
