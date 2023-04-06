<?php 
	$layout = "LayoutTrangTrong.php";
 ?>
             <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php?controller=home">Trang chủ</a></li>
                            <li class="active">Danh mục sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="../assets/admin/GDBH/images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                            <?php 
                                $category = $this->getCategory($category_id);
                                echo isset($category->name) ? $category->name : "";
                              ?>
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Chế độ hiện thị</span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sắp xếp:</p>
                                        <select class="nice-select">
                                            <option value="trending">Mặc định</option>
                                            <option value="sales">Tên (A - Z)</option>
                                            <option value="sales">Tên (Z - A)</option>
                                            <option value="rating">Giá (Thấp &gt; Cao)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                            <?php foreach($data as $row): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?controller=products&action=detail&id">
                                                    <img src="../assets/upload/products/<?php echo $row->photo; ?>" title="<?php echo $row->name; ?>" alt="<?php echo $row->name; ?>">
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
                                                    <h4><a class="product_name" href="index.php?controller=products&action=detail&id"><?php echo $row->name; ?></a></h4>
                                                    <div class="price-box">
                                                      <?php if($row->discount > 0): ?>
                                                      <span class="new-price new-price-2"><?php echo number_format (($row->price)-($row->price*$row->discount/100))?>&nbsp;vnđ</span>
                                                      <span class="old-price"><?php echo number_format ($row->price);?>&nbsp;vnđ </span>
                                                      <span class="discount-percentage">-<?php echo $row->discount;?>%</span>
                                                      <?php else: ?>
                                                        <span class="new-price"><?php echo number_format ($row->price); ?>vnđ</span>
                                                      <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="index.php?controller=cart&action=create&id=<?php echo $row->id; ?>">Thêm vào giỏ</a></li>
                                                        <li><a class="links-details" href="index.php?controller=wishlist&action=create&id"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/1.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Khoan vặn vít</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/2.png" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cắt tôn</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/3.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/4.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/5.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/6.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/7.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/8.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cưa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/9.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cắt đa góc</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/9.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cắt đa góc</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/9.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cắt đa góc</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row product-layout-list last-child">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                <img src="images/product/large-size/products/9.jpg" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Ảnh sản phẩm</a>
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
                                                                <h4><a class="product_name" href="single-product.html">Máy cắt đa góc</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">3.499.000đ</span>
                                                                </div>
                                                                <p>Máy Vặn Vít Dùng Pin TD001GM201 được sản xuất trên dây chuyền lắp ráp thiết bị cao cấp hiện đại, thiết kế đẹp. Tay cầm chắc chắn vừa vặn, có bọc đệm cao su mềm tiện lơi, chống trơn trượt, giúp vận hành thoải mái, kiểm soát máy dễ dàng hơn, và giảm mỏi tay trong quá trình sử dụng. Máy được sản xuất từ chất liệu thép không gỉ, thân máy được thiết kế từ nhựa tổng hợp, chịu được lực va đập lớn. Máy Vặn Vít Dùng Pin TD001GM201 dùng pin Li-ion 40V/4.0Ah có dung lượng lớn nên hiệu suất làm việc cao cùng thời gian sử dụng lâu bền.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#">Thêm vào giỏ</a></li>
                                                                <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Thêm vào ds yêu thích</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Xem ảnh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p></p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
                                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> </a>
                                                    </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li>
                                                      <a href="#" class="Next">  <i class="fa fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                        <div class="col-lg-3 order-2 order-lg-1">
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                                <div class="sidebar-title">
                                    <h2>Makita</h2>
                                </div>
                                <!-- category-sub-menu start -->
                                <div class="hb-dropdown hb-sub-dropdown-category">
                                    <ul>
                                        <li class="has-sub"><a href="single-product.html " >Dụng cụ pin</a>
                                           
                                        </li>
                                        <li class="has-sub"><a href="single-product.html" >Máy khoan/vặn vít</a>
                                            
                                        </li>
                                        <li class="has-sub"><a href="single-product.html" >Máy mài/máy chà</a>
                                            
                                        </li>
                                        <li class="has-sub"><a href="single-product.html">Máy cưa/máy cắt</a>
                                            
                                        </li>
                                        <li class="has-sub"><a href="single-product.html" >Máy bào/máy phay</a>
                                            
                                        </li>
                                        <li class="has-sub"><a href="single-product.html" >Máy Khác</a>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box">
                                <div class="sidebar-title">
                                    <h2>Bộ lọc</h2>
                                </div>
                                <!-- btn-clear-all start -->
                                <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                                <!-- btn-clear-all end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area">
                                    <h5 class="filter-sub-titel">Giá</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">500.000đ-1.000.000đ</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">1.000.000đ-3.000.000đ</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">3.000.000đ-5.000.000đ</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">5.000.000đ-7.000.000đ</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">7.000.000đ-XX.000.000đ</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Xuất sứ</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Japan</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">China</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">U.S</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Germany</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Thailand</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Việt Nam</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                            
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <!-- <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Màu sắc</h5>
                                    <div class="color-categoriy">
                                        <form action="#">
                                            <ul>
                                                <li><span class="white"></span><a href="#">Xanh lá cây (1)</a></li>
                                                <li><span class="black"></span><a href="#">Xanh  (1)</a></li>
                                                <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                                <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                                    <h5 class="filter-sub-titel">Điện áp</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">220v</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">40v max</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">18v</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">12v max</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Khác</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!-- category-sub-menu start -->
                            <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                                <div class="sidebar-title">
                                    <h2>Phụ Kiện</h2>
                                </div>
                                <div class="category-tags">
                                    <ul>
                                        <li><a href="# ">Mũi khoan</a></li>
                                        <li><a href="# ">Đầu vít</a></li>
                                        <li><a href="# ">Lưỡi cắt</a></li>
                                        <li><a href="# ">Lưỡi bào</a></li>
                                        <li><a href="# ">Pin/sạc</a></li>
                                        <li><a href="# ">Khác</a></li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>