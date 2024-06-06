<?php
         include_once "support.php";
         include_once "conn.php";
      include_once "header.php";

?>
 <!-- clat section 1 start -->

<div class="container-fluid section1_clat_main">
        <div class="container section1_clat_middle">
           <div class="row">
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 ">AILET Mock Test Series</h1>
                 <p class="p_title">AILET Exam Pattern 2025, Mode, Type of Question, Marking & More</p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<div class="container-fluid main_section1_test">
    <div class="container section1_test_middle">
        <h3 class="text-start mb-5">Regular Classes</h3>
        <div class="row section1_test_rw justify-content-lg-start justify-content-around">
            <?php
                $sel_ailet_test="SELECT * FROM ailet_test_series WHERE ailet_test_series_status='1'";
                $exe_ailet_test=mysqli_query($conn,$sel_ailet_test);
                while($fetch_ailet_test=mysqli_fetch_assoc($exe_ailet_test)) {

                
               

            ?>
           
            <div class="col-xl-3 col-md-2 col-12 clm_test_s1 mb-4 "style="background-color:<?php echo $fetch_ailet_test['ailet_mock_series_color'] ?> " >
                <div class="test_series_main d-flex justify-content-between">
                    <img src="img/live-class.svg" alt="" style="width:64px; height:64px;margin-left:31px;">
                   

                    <div class="best "><?php echo $fetch_ailet_test['ailet_test_series_best'] ?></div>
                    
                </div> 
                <div>
                        <a href="https://www.lawpreptutorial.com/test-series/clat/free">
                            <h3 class="  text-capitalize test_heading text-center mt-5" style="color:#101828;"><?php echo $fetch_ailet_test['ailet_test_series_title'] ?></h3>
                            
                        </a>
                        <div class="star ms-3">
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                        </div>
                    <div class="fs-14 fw-400 lh-24 test-series-card">
                        <ul>
                            <li class="py-2"><?php echo $fetch_ailet_test['ailet_test_series_p1'] ?></li>
                            <li class="py-2"><?php echo $fetch_ailet_test['ailet_test_series_p2'] ?></li>
                            <li class="py-2"><?php echo $fetch_ailet_test['ailet_test_series_p3'] ?></li>
                        </ul>
                    </div>
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                        <?php echo $fetch_ailet_test['ailet_test_series_price'] ?>  
                            /-
                            <span class="discount"><?php echo $fetch_ailet_test['ailet_test_series_discount'] ?> </span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet"><?php echo $fetch_ailet_test['ailet_test_series_percent'] ?></span>
                        </p>
                        <button type="button" class="btn btn-outline-primary my-3 w-100" >See Details</button>
                      
                        
                 </div> 
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>



 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">Have questions?</h2>
        
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why should I purchase these test series?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our scrupulously curated test series is designed to elevate your preparation and instill confidence. Crafted by our experienced faculty, these tests adhere to the current pattern and focus on crucial topics to ensure your success.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
              Why should I purchase these test series of this?
              </button>
            </h2>
            <div id="collapsetwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our scrupulously curated test series is designed to elevate your preparation and instill confidence. Crafted by our experienced faculty, these tests adhere to the current pattern and focus on crucial topics to ensure your success.
              </div>
            </div>
          </div>
          
        </div>
      </div>
</div>

     <!-- section4_ FAq about End -->

<?php
     include_once "footer.php";
?>