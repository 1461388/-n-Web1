						
<?php 
session_start();
include ('source/permission.php');
include ('source/layout.php');
include ('source/connect.php');
include ('source/header2.php');
//session_start();
?>
<div class="page-index">
          <div class="container">
            <p>
              Home - Profile
            </p>
          </div>
    </div>
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <?php

                   $user = $_SESSION['username'];
                   
                           
                  $sql = mysql_query("select * from khach_hang where username = '$user'");
                  $rows = mysql_fetch_array($sql);
                  ?>
                  <b> <font size="5" color="red"> Thông tin cá nhân </font></b>
                    <li class="steps active">
                      <div class="step-description">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <form >
                              <div class="form-row">
                                <label class="lebel-abs"> Họ & Tên <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="user" value="<?php echo $rows['ten_khach_hang']; ?>" readonly="readonly">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Email <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="email" value="<?php echo $rows['email']; ?>" readonly="readonly">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Địa chỉ <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="address" value="<?php echo $rows['dia_chi']; ?>"" readonly="readonly">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Số điện thoại <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="phone" value="<?php echo $rows['so_dien_thoai']; ?>" readonly="readonly">
                              </div>
                              
                            </form>

                          </div>
                        </div>
                      </div>
                    
                    </li>
                    <div>
                    <b> <font size="5" color="red"> Chỉnh sửa thông tin cá nhân </font></b>
                    </div>
                  <li class="steps active">
                    <div class="step-description">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <form action="edit_profile.php" method="POST">
                              <div class="form-row">
                                <input type="hidden" class="input namefild" name="id_KH" value="<?php echo $rows[0]; ?>">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Họ & Tên <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="fullname">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Email <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="email">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Địa chỉ <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="address">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> Số điện thoại <strong class="red"> * </strong> </label>
                                <input type="text" class="input namefild" name="phone">
                              </div>
                              <input type="submit" name = "Update" value="Chỉnh sửa">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="footer">
        <div class="footer-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="footer-logo">
                  <a href="#">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Contact 
                  <strong>
                    Info
                  </strong>
                </h4>
                <p>
                  No. 08, Nguyen Trai, Hanoi , Vietnam
                </p>
                <p>
                  Call Us : (084) 1900 1008
                </p>
                <p>
                  Email : michael@leebros.us
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Customer
                  <strong>
                    Support
                  </strong>
                </h4>
                <ul class="support">
                  <li>
                    <a href="#">
                      FAQ
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Payment Option
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Booking Tips
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Infomation
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="title">
                  Get Our 
                  <strong>
                    Newsletter 
                  </strong>
                </h4>
                <p>
                  Lorem ipsum dolor ipsum dolor.
                </p>
                <form class="newsletter">
                  <input type="text" name="" placeholder="Type your email....">
                  <input type="submit" value="SignUp" class="button">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-info">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>
                  Copyright � 2012. Designed by 
                  <a href="#">
                    Michael Lee
                  </a>
                  . All rights reseved
                </p>
              </div>
              <div class="col-md-6">
                <ul class="social-icon">
                  <li>
                    <a href="#" class="linkedin">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="google-plus">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="facebook">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>