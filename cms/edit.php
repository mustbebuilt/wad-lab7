<?php 
require('../../../includes/conn.inc.php');
require('includes/functions.inc.php');
$sFilmID = safeInt($_GET['filmID']);
$stmt = $mysqli->prepare("SELECT filmID, filmName, filmDescription, filmImage, filmPrice, filmReview FROM movies WHERE filmID = ?");
$stmt->bind_param('i', $sFilmID);
$stmt->execute(); 
$stmt->bind_result($filmID, $filmName, $filmDescription, $filmImage, $filmPrice, $filmReview);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edit <?php echo $filmName; ?></title>
<link href="styles/cms.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">

<header>
<h1>Edit <?php echo $filmName; ?></h1>
<?php
require('includes/nav.inc.php');
?>
</header>
<section>
<form name="form1" method="post" action="process/editRecord.php">
<input name="filmID" type="hidden" value="<?php echo $filmID; ?>">
  <p class="indent">
    <label for="filmName">Film Title</label>
    <input type="text" name="filmName" id="filmName" value="<?php echo $filmName; ?>">
  </p>
  <p class="indent">
    <label for="filmImage">Film Image</label>
    <input type="text" name="filmImage" id="filmImage" value="<?php echo $filmImage; ?>">
  </p>
  <p class="indent">
    <label for="filmDescription">Film Description</label>
    <textarea name="filmDescription" id="filmDescription" cols="45" rows="5"><?php echo $filmDescription; ?></textarea>
  </p>
 <p class="indent">
    <label for="filmPrice">Film Price</label>
    <input type="text" name="filmPrice" id="filmPrice" value="<?php echo $filmPrice; ?>">
  </p>
  <p>
  <span class="indent">Star Rating:</span>
    <label for="filmReview_1">1</label>
      <input type="radio" name="filmReview" value="1" id="filmReview_1" <?php if($filmReview == 1){echo "checked";}?>>

    <label for="filmReview_2">2</label>
      <input type="radio" name="filmReview" value="2" id="filmReview_2" <?php if($filmReview == 2){echo "checked";}?>>

    <label for="filmReview_3">3</label>
      <input type="radio" name="filmReview" value="3" id="filmReview_3" <?php if($filmReview == 3){echo "checked";}?>>

    <label for="filmReview_4">4</label>
      <input type="radio" name="filmReview" value="4" id="filmReview_4" <?php if($filmReview == 4){echo "checked";}?>>

    <label for="filmReview_5">5</label>
      <input type="radio" name="filmReview" value="5" id="filmReview_5" <?php if($filmReview == 5){echo "checked";}?>>
    </p>
  <p>
    <input type="submit" name="button" id="button" value="Update">
  </p>
</form>
</section>
<?php
require('includes/footer.inc.php');
?>
</div>
</body>
</html>