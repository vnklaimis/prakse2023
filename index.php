<!DOCTYPE html>
<html lang="en-US">
<head>
 	<title>Test task - ScandiWeb</title>
   <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

</head>

<body class="bg-light">
    <?php
	session_start();
    include_once('db_config.php');
    $query = mysqli_query($conn,"SELECT * FROM products LIMIT 12");
?>
<div class="container">
    <p class="a" style="font-size: 25px; margin: 1% 1%;"><b>Product List</b></p>
    <hr class="a" size="5" color="black">
    <form action='/addproduct' method='POST'>           
        <input type='submit' style="float: right; margin: -6% 15%;" value='ADD' />      
    </form>   
    <hr class="c" size="5" color="black">
    <p class="b">Scandiweb Test Assignment</p>
<form name=".delete-checkbox" action="action.php" method="post" onsubmit="return deleteConfirm();"/>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                	extract($row);
        ?>
        <div style="margin-left: 3%; margin-top: -57%">
            <div class="float-child a" > 
                <input type="checkbox" name="selected_id[]" id="delete-checkbox" class="delete-checkbox" value="<?php echo $id; ?>"  />      
                <p class="c"><?php echo $SKU;?></p>
                <p class="b"><?php echo $Name;?></p>
                <p class="b"><?php echo $Price;?>$</p>
                <p class="b"><?php echo $Atributes;?></p>                
            </div>
        </div>
        <?php } }else{ ?>
            <!--<p colspan="3" style="text-align: center; margin: 25% 0%;">No records found.</p> -->
        <?php } ?>
        <?php 
            if(mysqli_num_rows($query) == 0){
        ?>
        <form action='action.php' method='POST'>     
            <input type='submit' name='btn_delete' id='delete-product-btn' style="float: right; margin: -60.1% 1%;" value='MASS DELETE' />       
        </form>
        <?php } elseif(mysqli_num_rows($query) <= 4 && mysqli_num_rows($query) >= 1){ ?>
        <form action='action.php' method='POST'>    
            <input type='submit' name='btn_delete' id='delete-product-btn' style="float: right; margin: -6% 1%;" value='MASS DELETE' />       
        </form>

        <?php } elseif(mysqli_num_rows($query)<= 8 && mysqli_num_rows($query) > 4 ){ ?>
        <form action='action.php' method='POST'>    
            <input type='submit' name='btn_delete' id='delete-product-btn' style="float: right; margin: -38.4% 1%;" value='MASS DELETE' />       
        </form>

        <?php } elseif(mysqli_num_rows($query) <= 12 && mysqli_num_rows($query) > 8){?>
        <form action='action.php' method='POST'>     
            <input type='submit' name='btn_delete' id='delete-product-btn' style="float: right; margin: -54.7% 1%;" value='MASS DELETE' />       
        </form>
    <?php } ?>
</form>
</div>
</body>
</html>