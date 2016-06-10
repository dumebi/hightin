<?php 
include('storescripts/connect_to_mysql.php');
include('storescripts/crypto.php');
// This block grabs the whole list for viewing
if(isset($_GET['d'])){
	$id = decrypt($_GET['d']);
	$product_list = "";
	$name = "";
	$shop_products = mysqli_query($conn,"select * from products where id=".$id."") or die(mysqli_error($conn));
	$productCount = mysqli_affected_rows($conn);
	if ($productCount > 0) {
		while($row = mysqli_fetch_array($shop_products)){ 
				 $id = $row["id"];
				 $name = $row["name"];
				 $image = $row["image"];
				 $body = $row["body"];
				 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
				 
				 $product_list .= ' 
	 
					<div class="col-md-10 col-md-offset-1 text-center">
					
                    <div class="best-feature-img">
                        <img src="images/products/'.$image.'">
                    </div>
					 <p>
					<h3>'.$name.'</h3>
                        '.$body.'
                </p>
                </div>

				 ';
					
		}
	} else {
		//$product_list = "You have no products listed in your store yet";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page title -->
    <title></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Style -->
    <link rel="stylesheet" href="css/theme.css">

</head>
<body>

<!-- PRELOADER 
<div id="preloader">
    <div class="loader">
        <img src="img/loader.svg">
        <span>Please wait, loading...</span>
    </div>
</div>
<!-- /PRELOADER -->
<?php include_once('header.php'); ?>


<!-- MAIN -->
<main >
    <!-- /SECTION: Testimonials -->
    <!-- SECTION: Best Feature -->
    <section id="best-feature" class="section non-pb">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <header>
                        <h2 class="section-title"><?php echo $name; ?></h2>
                   
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <?php echo $product_list; ?>
            </div><!-- /Section content -->
			</br>
        </div>
    </section>
    <!-- SECTION: /Best Feature -->


<?php include_once('footer.php'); ?>


<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/general.js"></script>

</body>
</html>