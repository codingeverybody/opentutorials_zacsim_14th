<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('opentutorials');
$result = mysql_query("SELECT id, title, description FROM topic WHERE id={$_GET['id']}");
$row = mysql_fetch_array($result);
?>
<html>
	<style>
		h1 {
			border-bottom:1px solid gray;
			padding:20px;
		}
	</style>
	<body>
		<article>
			<h1>
				<?php
				echo $row['title'];
				?>				
			</h1>
			<div>
				<?php
				echo $row['description'];
				?>
			</div>
		</article>
	</body>
</html>