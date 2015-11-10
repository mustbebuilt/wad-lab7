<?php 
require('../../includes/conn.inc.php'); 
require('cms/includes/functions.inc.php'); 
// Check Form submitted
if(isset($_GET['filmName'])){
	// Build Search String
	$sFilmName = safeString($_GET['filmName']);
	$searchString = "%".$sFilmName."%";
	// prepare SQL
	$stmt = $mysqli->prepare("SELECT filmName FROM movies WHERE filmName LIKE ?");
	$stmt->bind_param('s', $searchString);
	$stmt->execute(); 
	$stmt->bind_result($filmName); 
	$stmt->store_result();
	$myNumRows = $stmt->num_rows;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Prepare Used to Search Movies with Counter</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<header>
<h1>Search Page</h1>
<?php
include('includes/nav.inc.php');
?>
</header>
<section>
<form id="form1" name="form1" method="get" action="">

  <p>Film Name: 
    <input name="filmName" type="text" id="filmName">
	<input type="submit" name="submit">
  </p>
</form>
</section>


<?php
if(isset($_GET['filmName'])){
echo "We found {$myNumRows} films";
}
echo "<ul>";
if(isset($_GET['filmName'])){
	while ($stmt->fetch()) {
		echo "{$filmName}";
	}
echo "</ul>";
}
?>
</ul>
</div>
</body>
</html>