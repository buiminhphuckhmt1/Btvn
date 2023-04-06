<?php 
  $layout = "LayoutTrangChu.php";
 ?>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active">Liên hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->     
            <!-- Begin Contact Main Page Area -->
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container mb-60">
                    <!-- <div id="google-map"></div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16915.3328507342!2d105.54781972853476!3d19.218692020740367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x849878b1fa39bc91!2zMTnCsDEyJzQ4LjkiTiAxMDXCsDMyJzM4LjEiRQ!5e0!3m2!1svi!2s!4v1669269329475!5m2!1svi!2s" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title">Liên hệ với chúng tôi</h3>
                                <p class="contact-page-message mb-25">Liên hệ với chúng tôi để được tư vấn và phản hồi về những khó khăn vướng mắc về các sản phẩm.</p>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Địa Chỉ</h4>
                                    <p>Ql48B, Tuần B, Quỳnh Châu, Quỳnh Lưu, Nghệ An</p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> SĐT</h4>
                                    <p>Bán hàng: 0966472629</p>
                                    <p>Bảo hành(24/7): 0338799081</p>
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                    <p>abccompany@gmail.com</p>
                                    <p>abccompany@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title">Nhắn tin với chúng tôi</h3>
                                <div class="contact-form">
                                    <form  id="contact-form" action="<?php echo $action; ?>" method="post">
                                        <div class="form-group">
                                            <label>Họ và tên <span class="required">*</span></label>
                                            <input type="text" name="name" id="customername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" name="email" id="customerEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Chủ đề</label>
                                            <input type="text" name="topic" id="contactSubject">
                                        </div>
                                        <div class="form-group mb-30">
                                            <label>Tin nhắn</label>
                                            <textarea name="message" id="contactMessage" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Main Page Area End Here -->