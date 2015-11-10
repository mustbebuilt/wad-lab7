<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert New Film</title>
<link href="styles/cms.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">

<header>
<h1>Insert New Film</h1>
<?php
include('includes/nav.inc.php');
?>
</header>

<section>



<form name="form1" method="post" action="process/insertRecord.php">
  <p class="indent">
    <label for="filmName">Film Title</label>
    <input type="text" name="filmName" id="filmName" value="">
  </p>
  <p class="indent">
    <label for="filmImage">Film Image</label>
    <input type="text" name="filmImage" id="filmImage" value="">
  </p>
  <p class="indent">
    <label for="filmDescription">Film Description</label>
    <textarea name="filmDescription" id="filmDescription" cols="45" rows="5"></textarea>
  </p>
 <p class="indent">
    <label for="filmPrice">Film Price</label>
    <input type="text" name="filmPrice" id="filmPrice" value="">
  </p>
  <p>
  <span class="indent">Star Rating:</span>
    <label for="filmReview_1">1</label>
      <input type="radio" name="filmReview" value="1" id="filmReview_1">

    <label for="filmReview_2">2</label>
      <input type="radio" name="filmReview" value="2" id="filmReview_2">

    <label for="filmReview_3">3</label>
      <input type="radio" name="filmReview" value="3" id="filmReview_3">

    <label for="filmReview_4">4</label>
      <input type="radio" name="filmReview" value="4" id="filmReview_4">

    <label for="filmReview_5">5</label>
      <input type="radio" name="filmReview" value="5" id="filmReview_5" checked>
    </p>
  <p>
    <input type="submit" name="button" id="button" value="Insert">
  </p>
</form>

</section>

<?php
include('includes/footer.inc.php');
?>

</div>
</body>
</html>