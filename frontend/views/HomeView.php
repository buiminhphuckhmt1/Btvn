<?php 
	$layout = "LayoutTrangChu.php";
 ?>
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">
                                    <div class="single-slide align-center-left  animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h2>MAKITA</h2>
                                            <h5>Sản phẩm chất lượng, chính hãng.</h5>
                                            <!-- <h3>Starting at <span>$1209.00</span></h3> -->
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua hàng ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide align-center-left animation-style-02 bg-2">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h2>BOSCH</h2>
                                            <h5>Sản phẩm chất lượng, chính hãng.</h5>
                                            <!-- <h3>Starting at <span>$1209.00</span></h3> -->
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua hàng ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide align-center-left animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h2>DCA</h2>
                                            <h5>Sản phẩm chất lượng, chính hãng.</h5>
                                            <!-- <h3>Starting at <span>$1209.00</span></h3> -->
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Mua hàng ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img style="height:230px; width: 370px ;" src="../assets/admin/GDBH/images/banner/1_6.jpg" alt="">
                                </a>
                                <div class="offer-text">
                        <h6 style="color: white;">Giảm giá <span style="color: red;">-10%</span></h6>
                        <h3 style="color: white;">Ưu đãi đặc biệt</h3>
                        <a href="shop-left-sidebar.html" class="links">Mua hàng ngay</a>
                    </div>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                                <a href="#">
                                    <img style="height:230px; width: 370px ;" src="../assets/admin/GDBH/images/banner/1_7.jpg" alt="">
                                </a>
                                <div class="offer-text">
                        <h6 style="color: white;">Giảm giá <span style="color: red;">-10%</span></h6>
                        <h3 style="color: white;">Ưu đãi đặc biệt</h3>
                        <a href="shop-left-sidebar.html" class="links">Mua hàng ngay</a>
                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Begin Static Top Area -->
            <div class="static-top-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static-top-content mt-sm-30">
                                Gift Special: Gift every single day on Weekends - New Coupon code "
                                <span>LimupaSaleoff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Top Area End Here -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phẩm mới</span></a></li>
                                   <!-- <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bán Chạy Nhất</span></a></li> -->
                                </ul>               
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                            <?php 
                                $products = $this->hotProducts();
                            ?>
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                    <?php foreach($products as $row): ?>
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?controller=products&action=detail&id">
                                                    <img src="../assets/upload/products/<?php echo $row->photo; ?>" title="<?php echo $row->name; ?>" alt="<?php echo $row->name; ?>">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#" data-toggle="modal" data-target="#mymodal3">Ảnh sản phẩm</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                    
                                                    <!--  -->
                                                    <h4><a class="product_name" href="index.php?controller=products&action=detail&id"><?php echo $row->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo number_format ($row->price); ?>&nbsp;vnđ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Thêm vào giỏ</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
                                    <div class="modal fade modal-wrapper" id="mymodal3" >
                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 440px;" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                <ul>
                                                <li>
                                                    <h3 class="review-page-title">Ảnh sản phẩm</h3>
                                                    <button class="close1" title="Đóng">
                                                            <a href="#" class="fa fa-close" data-dismiss="modal"></a>         
                                                    </button>
                                                </li>
                            <li>                 
                        <!-- Product Details Left -->
                            <div >
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a >
                                         <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                    <div class="lg-image">
                                        <a>
                                            <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                    <div class="lg-image">
                                        <a>
                                            <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                    <div class="lg-image">
                                        <a>
                                            <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                    <div class="lg-image">
                                        <a>
                                            <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                    <div class="lg-image">
                                        <a>
                                            <img src="images/product/large-size/products/1.jpg" alt="product image">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">                                        
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/product/large-size/products/1.jpg" alt="product image thumb"></div>
                                </div>
                            </div>
                            </li>
                            </ul>
                            <!--// Product Details Left -->
                                                            
                                                        
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            <!--  -->
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner li-static-banner-4 text-center pt-20">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner pb-sm-30 pb-xs-30">
                                
                                    <!-- <img src="images/banner/1_8.jpg" alt="Li's Static Banner"> -->
                                    <iframe width="560" height="300" src="https://www.youtube-nocookie.com/embed/yGcO45wU93g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner">
                                
                                    <!-- <img  height="300" src="images/banner/1_9.jpg" alt="Li's Static Banner"> -->
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/7Ra6x1zx3hs?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                        <?php 
                                    $productsoutstanding = $this->productsoutstanding();
                                ?>
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm nổi bật</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <?php foreach($productsoutstanding as $rowproductsoutstanding): ?>
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?controller=products&action=detail&id">
                                                    <img src="../assets/upload/products/<?php echo $rowproductsoutstanding->photo; ?>" title="<?php echo $rowproductsoutstanding->name; ?>" alt="<?php echo $rowproductsoutstanding->name; ?>">
                                                </a>
                                                
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#">Ảnh sản phẩm</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="index.php?controller=products&action=detail&id"><?php echo $rowproductsoutstanding->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo number_format($rowproductsoutstanding->price); ?>&nbsp;vnđ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Thêm vào giỏ</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="li-static-banner">
                <div class="container">
                    <div class="row">
                        <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="../assets/admin/GDBH/images/bg-banner/2.png" alt="Li's Static Banner">
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                        
                            <div class="li-section-title">
                                <h2>
                                    <span><br>Sản phẩm khuyến mãi</span>
                                </h2>
                            </div>
                            <div class="row">
                            <?php 
                                $productsInCategory= $this->productsInCategory();
                            ?>
                                <div class="special-product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <?php foreach($productsInCategory as $rowproductsInCategory): ?>
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?controller=products&action=detail&id">
                                                    <img src="../assets/upload/products/<?php echo $rowproductsInCategory->photo; ?>"title="<?php echo $rowproductsInCategory->name; ?>" alt="<?php echo $rowproductsInCategory->name; ?>">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#">Ảnh sản phẩm</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="index.php?controller=products&action=detail&id"><?php echo $rowproductsInCategory->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2"><?php echo number_format (($rowproductsInCategory->price)-($rowproductsInCategory->price*$rowproductsInCategory->discount/100))?>&nbsp;vnđ</span>
                                                        <span class="old-price"><?php echo number_format ($rowproductsInCategory->price);?>&nbsp;vnđ </span>
                                                        <span class="discount-percentage">-<?php echo $rowproductsInCategory->discount;?>%</span>
                                                    </div>
                                                    <div class="countersection">
                                                        <div class="li-countdown"></div>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Thêm vào giỏ</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        

                   <!-- Begin Li's Static Banner Area -->
                   <div class="li-static-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="../assets/admin/GDBH/images/banner/1_8.png" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="../assets/admin/GDBH/images/banner/1_9.png" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img style="margin-top: 40px;" src="../assets/admin/GDBH/images/banner/2_0.png" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
