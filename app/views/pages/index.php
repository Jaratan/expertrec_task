<?php require APPROOT . '/views/inc/header.php'; ?>

	<!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="<?php echo URLROOT;?>/images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo URLROOT;?>/images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo URLROOT;?>/images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fruits & Vegetables</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            

            <div class="row special-list">
            	<?php 
            		foreach ($data as $key => $value)
            		{?>
            			<div class="col-lg-3 col-md-6 special-grid best-seller">
		                    <div class="products-single fix">
		                        <div class="box-img-hover">
		                            <img src="<?php echo URLROOT;?>/images/<?php echo $value->product_image;?>" class="img-fluid" alt="Image">
		                            <div class="mask-icon">
		                                <!-- <a class="cart" href="#"> -->
		                                	<form action="<?php echo URLROOT;?>/pages/add_to_cart" method="POST">
		                                		<input type="text" name="product_id" value="<?php echo $value->product_id;?>" style="display:none;">
		                                		<button type="submit" class="cart" name="submit">Add to cart</button>
		                                	</form>
		                            	<!-- </a> -->
		                            </div>
		                        </div>
		                        <div class="why-text">
		                            <h4><?php echo ucwords($value->product_name);?></h4>
		                            <h5>Rs. <?php echo $value->product_price;?></h5>
		                        </div>
		                    </div>
		                </div>
            	<?php	}
            	?>
             
            </div>
        </div>
    </div>
    <!-- End Products  -->

<?php require APPROOT . '/views/inc/footer.php'; ?>