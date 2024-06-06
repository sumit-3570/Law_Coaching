<?php
        include_once "support.php";
        include_once "conn.php";
    
      include_once "header.php";

?>
    <!-- our center is start section -->
    <div class="container-fluid main_center ">
        <div class="container middle_center">
            <div class="row rw_center">
                <div class="col-12 clm_center text-center">
                    <h1 class="section_title p-3">Our Centers</h1>
                </div>
            </div>
        </div>
    </div>

      <!-- our center is end section -->

      <!-- our center section1 of colum start -->

      <div class="container-fluid section1_main_center mb-3">
        <div class="container section1_middle_center">
            <div class="row justify-content-around  section1_rw_center ">
                <?php
                    $sel_center="SELECT * FROM center WHERE center_status='1'";
                    $exe_center=mysqli_query($conn,$sel_center);
                    while($fetch_center=mysqli_fetch_assoc($exe_center)) { 
                      
                ?>
                <div class="col-xl-4 col-lg-6 col-12 section1_clm_center mb-3 ">
                    <div class="center_heading d-flex ">
                        <div class="image_center">
                            <img src="img/city-default (1).png" alt="" style="width: 100%; height: 100%;">
                        </div>
                        <div class="heading_center_clm">
                            <h2 class="card_heading_center"><?php echo $fetch_center['fetch_center'] ?></h2>
                        </div>
                    </div>
                    <div class="contact_center d-flex ">
                        <img src="img/call-outline (2).svg" alt=""   style="margin-left:17px; margin-top: 18px;" >
                        <div class="phn">
                            <a href="tel:+91 9819151836">
                                <span><?php echo $fetch_center['mobile'] ?></span>
                            </a>
                        </div>
                       
                    </div>
                    <div class="contact_center d-flex ">
                        <img src="img/sms (1).svg" alt=""    style="margin-left:17px; margin-top: 18px;" >
                        <div class="phn">
                            <a href="mailto:lawpreptutorial@gmail.com">
                                <span><?php echo $fetch_center['center_email'] ?></span>
                            </a>
                        </div>
                       
                    </div>
                    <div class="contact_center d-flex ">
                        <img src="img/location.svg" alt=""   style="margin-left:17px; margin-top: 18px;" >
                        <div class="phn">
                            
                                <span><?php echo $fetch_center['center_address'] ?></span>
                           
                        </div>
                       
                    </div>
                    <a href="https://www.lawpreptutorial.com/our-centers/nagpur">
                        <button type="button" class="btn btn-outline-danger w-100 my-4">Tell Me More ></button>
                    </a>
                    
                  
                </div>
                <?php
                    }
                ?>
              
            </div>
        </div>
      </div>
          <!-- our center section1 of colum start -->

<?php
     include_once "footer.php";
?>