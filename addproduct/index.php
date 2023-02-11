<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test task - ScandiWeb</title>
   <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
</head>

<body class="bg-light">
<?php
  session_start();
    include_once('../db_config.php');
    $query = mysqli_query($conn,"SELECT * FROM products");
?>
<div class="container">

    <p class="a" style="font-size: 25px; margin: 1% 1%;"><b>Product Add</b></p>
    <hr class="a" size="5" color="black">
    <form action='../' method='POST'>     
      <input type="submit" name="Cancel" id="Cancel" style="float: right; margin: -6% 1%;" value="Cancel" />       
    </form>

<fieldset>
  <form class="needs-validation " id="product_form" method="post" action="process.php">
        <input type="submit" name="Save" id="Save" style="float: right; margin: -6% 7%;" value="Save">
    <p>
      <label for="sku">SKU: </label>
      <input class="form-control" type="text" name="sku" id="sku" placeholder="SKU" value="" required>
    </p>
    <p>
      <label for="name">Name: </label>
      <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="" required>
    </p>
    <p>
      <label for="price">Price ($): </label>
      <input class="form-control" type="text" name="price" id="price" placeholder="Price" value="" required>
    </p>
    <p>
      <label for="productType">Type Switcher: </label>
      <!--<input class="form-control" type="text" name="Atributes" id="Atributes" placeholder="Atributes" value="" required>-->
      <select onchange="checkOptions(this)" class="form-select" aria-label=".form-select example" name="productType" id="productType">
        <option selected>Please, select product type </option>
        <option value="DVD">DVD</option>
        <option value="Book">Book</option>
        <option value="Furniture">Furniture</option>
      </select>
    </p>
    <p>
      <label name='size' id='size' style="display: none" for="size" >Size (MB): </label>
      <input class="form-control" name='DVD' id='DVD' type="text" style="display: none" placeholder="Please, input size!"  />
      <label name='weight' id='weight' style="display: none" for="weight" >Weight (KG): </label>
      <input class="form-control" name='Book' id='Book' type="text" style="display: none" placeholder="Please, input weight!"  />
      <label name='height' id='height' style="display: none" for="height" >Height (CM): </label>
      <input class="form-control" name='Furniture1' id='Furniture1' type="text" style="display: none" placeholder="Please, input height!"  />
      <label name='width' id='width' style="display: none" for="width" >Width (CM): </label>
      <input class="form-control" name='Furniture2' id='Furniture2' type="text" style="display: none" placeholder="Please, input width!"  />
      <label name='length' id='length' style="display: none" for="length" >Length (CM): </label>
      <input class="form-control" name='Furniture3' id='Furniture3' type="text" style="display: none" placeholder="Please, input length!"  />
        <!--<label for="DVD">Size (MB): </label>
        <input class="form-control" type="text" name="DVD" id="DVD" placeholder="DVD" value="" required>-->
    </p>
    <p>&nbsp;</p>
  </form>
</fieldset>
</div>

<script type="text/javascript">
var size;
var weight;
var height;
var width;
var length;
var DVD;
var Book;
var Furniture1;
var Furniture2;
var Furniture3;
function checkOptions(select) {
  size = document.getElementById('size');
  weight = document.getElementById('weight');
  height = document.getElementById('height');
  width = document.getElementById('width');
  length = document.getElementById('length');
  DVD = document.getElementById('DVD');
  Book = document.getElementById('Book');
  Furniture1 = document.getElementById('Furniture1');
  Furniture2 = document.getElementById('Furniture2');
  Furniture3 = document.getElementById('Furniture3');
  if (select.options[select.selectedIndex].value == "DVD") {
    size.style.display = 'block';
    weight.style.display = 'none';
    height.style.display = 'none';
    width.style.display = 'none';
    length.style.display = 'none';
    DVD.style.display = 'block';
    Book.style.display = 'none';
    Furniture1.style.display = 'none';
    Furniture2.style.display = 'none';
    Furniture3.style.display = 'none';
  }
  else if (select.options[select.selectedIndex].value == "Book") {
    size.style.display = 'none';
    weight.style.display = 'block';
    height.style.display = 'none';
    width.style.display = 'none';
    length.style.display = 'none';
    DVD.style.display = 'none';
    Book.style.display = 'block';
    Furniture1.style.display = 'none';
    Furniture2.style.display = 'none';
    Furniture3.style.display = 'none';
  }
  else if (select.options[select.selectedIndex].value == "Furniture") {
    size.style.display = 'none';
    weight.style.display = 'none';
    height.style.display = 'block';
    width.style.display = 'block';
    length.style.display = 'block';
    DVD.style.display = 'none';
    Book.style.display = 'none';
    Furniture1.style.display = 'block';
    Furniture2.style.display = 'block';
    Furniture3.style.display = 'block';
  }
  else {
    size.style.display = 'none';
    weight.style.display = 'none';
    height.style.display = 'none';
    width.style.display = 'none';
    length.style.display = 'none';
    DVD.style.display = 'none';
    Book.style.display = 'none';
    Furniture1.style.display = 'none';
    Furniture2.style.display = 'none';
    Furniture3.style.display = 'none';
  }
}
</script>
</body>
</html>