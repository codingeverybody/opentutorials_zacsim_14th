<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('opentutorials');
$result = mysql_query("SELECT id, title FROM topic");
?>
<html>
	<body>
		<ul>
			<?php
				while($row = mysql_fetch_array($result)){
					echo '<li><a href="view.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
				}
			?>
		</ul>
	</body>
</html>