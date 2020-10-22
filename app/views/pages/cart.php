<?php require APPROOT . '/views/inc/header.php'; ?>
	<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            		foreach ($data as $key => $value)
                            		{?>
                            			<tr>
		                                    <td class="thumbnail-img">
		                                        <a href="#">
													<img class="img-fluid" src="<?php echo URLROOT;?>/images/<?php echo $value->product_image;?>" alt="" />
												</a>
		                                    </td>
		                                    <td class="name-pr">
		                                        <a href="#">
													<?php echo $value->product_name; ?>
												</a>
		                                    </td>
		                                    <td class="price-pr">
		                                        <p>Rs. <?php echo $value->product_price; ?></p>
		                                    </td>
		                                    <td class="quantity-box"><input type="text" size="4" value="1" min="0" step="1" class="c-input-text" id="Quantity"></td>
		                                </tr>
                            	<?php	}
                            	?>
                            <script type="text/javascript">
                            	
                            </script>                     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
