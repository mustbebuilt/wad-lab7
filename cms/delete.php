<?php 
require('../../../includes/conn.inc.php');
require('includes/functions.inc.php');
$sFilmID = safeInt($_GET['filmID']);
$stmt = $mysqli->prepare("SELECT filmID, filmName FROM movies WHERE filmID = ?");
$stmt->bind_param('i', $sFilmID);
$stmt->execute(); 
$stmt->bind_result($filmID, $filmName);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Delete <?php echo $filmName; ?></title>
<link href="styles/cms.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<header>
<h1>Delete <?php echo $filmName; ?></h1>
<?php
require('includes/nav.inc.php');
?>
</header>

<form name="form1" method="post" action="process/deleteRecord.php">
<p>Are you sure you wish to delete <?php echo $filmName; ?>?</p>
   <p>
    <input type="submit" name="del" id="del" value="Delete">
  </p>
</form>
<form name="form2" method="" action="listall.php" id="saveForm">
    <input type="submit" name="save" id="save" value="Save">
</form>

<?php
require('includes/footer.inc.php');
?>

</div>
</body>
</html>