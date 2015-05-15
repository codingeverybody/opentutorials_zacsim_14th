<?php
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials");
?>
<!DOCTYPE html>
<html>
<head>
    <title>오픈튜토리얼스</title>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body>
    <header>
        <h1><a href="http://localhost/">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
        <?php
        echo file_get_contents("list.txt");
        ?>
        </ol>
    </nav>
    <article>
<?php
$sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];
?>
    </article>
</body>
</html>
