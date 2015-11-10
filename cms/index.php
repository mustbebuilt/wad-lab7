<?php 
require('../../../includes/conn.inc.php'); 
$queryFilms = "SELECT * FROM movies";
$resultFilms = $mysqli->query($queryFilms);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Content Management</title>
<link href="styles/cms.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<header>
<h1>Simple CMS</h1>
<nav>
<p><a href="insert.php">&gt;&gt; Insert New Film</a></p>
</nav>
</header>

<table class="tableList">
<tr>
<th>Film Title</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
while($rowFilms = $resultFilms->fetch_assoc()){
echo "<tr>";
echo "<td>{$rowFilms['filmName']}</td>";
echo "<td>View</td>";
echo "<td>Edit</td>";
echo "<td>Delete</td>";
echo "</tr>";
}
?>
</table>
<?php
require('includes/footer.inc.php');
?>
</div>
</body>
</html>