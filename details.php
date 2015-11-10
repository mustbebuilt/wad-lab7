<?php 
require('../../includes/conn.inc.php'); 
$stmt = $mysqli->prepare("SELECT filmID, filmName, filmDescription, filmImage, filmPrice, filmReview FROM movies WHERE filmID = ?");
$stmt->bind_param('i', $_POST['filmID']);
$stmt->execute(); 
$stmt->bind_result($filmID, $filmName, $filmDescription, $filmImage, $filmPrice, $filmReview);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $filmName; ?></title>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<header>
<h1>Film Details</h1>
<?php
include('includes/nav.inc.php');
?>
</header>

<section>

<?php
	// output
	echo "<h1>{$filmName}</h1>";

	echo "<h2>&pound;{$filmPrice}</h2>";
	echo "<p>{$filmDescription}</p>";

?>

</section>

<?php
include('includes/footer.inc.php');
?>

</div>
</body>
</html>