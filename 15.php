<html>
  <body>
    <h1>html</h1>
    Hello world
    <h1>JavaScript</h1>
    <script>
      students = ["egoing", "leezche", "graphittie", "a"];
      i=0;
      while(i < students.length){
        document.write(students[i]+" 주사 맞기<br />");
        i = i + 1;
      }
    </script>
    <h1>PHP</h1>
    <?php
    $students = ["egoing", "leezche", "graphittie", "a"];
    $i=0;
    while($i < count($students)){
      print($students[$i]." 주사 맞기<br />");
      $i = $i + 1;
    }
    ?>
  </body>
</html>
