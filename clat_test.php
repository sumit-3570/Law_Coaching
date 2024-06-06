<?php
        include_once "support.php";
        include_once "conn.php";
      include_once "header.php";

?>
 <!-- clat section 1 start -->

<div class="container-fluid section1_clat_main">
        <div class="container section1_clat_middle">
           <div class="row">
            <?php
                $sel_test_h="SELECT * FROM clat_test_series";
                $exe_test_h=mysqli_query($conn,$sel_test_h);
                $fetch_test_h=mysqli_fetch_assoc($exe_test_h);
                
            ?>
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 "><?php echo $fetch_test_h['clat_test_series_heading'] ?></h1>
                 <p class="p_title"><?php echo $fetch_test_h['clat_test_series_para'] ?></p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<div class="container-fluid main_section1_test">
    <div class="container section1_test_middle">
        <div class="row section1_test_rw justify-content-lg-start justify-content-around">
        <?php
                $sel_test_h_c="SELECT * FROM clat_mock_series";
                $exe_test_h_c=mysqli_query($conn,$sel_test_h_c);
               while($fetch_test_h_c=mysqli_fetch_assoc($exe_test_h_c)) {
                
          ?>
                <div class="col-xl-3 col-md-2 col-12 clm_test_s1 mb-4 "style="background-color:<?php echo $fetch_test_h_c['clat_mock_series_color'] ?>; " >
                <div class="test_series_main d-flex justify-content-between">
                    <img src="img/live-class.svg" alt="" style="width:64px; height:64px;margin-left:31px;">
                   

                    <div class="best "><?php echo $fetch_test_h_c['clat_mock_series_best']?></div>
                    
                </div> 
                <div>
                        <a href="https://www.lawpreptutorial.com/test-series/clat/free">
                            <h3 class="  text-capitalize test_heading text-center mt-5" style="color:#101828;"><?php echo $fetch_test_h_c['clat_mock_series_title']?></h3>
                            
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
                            <li class="my-3"><?php echo $fetch_test_h_c['clat_mock_series_p1']?></li>
                            <li class="my-3"><?php echo $fetch_test_h_c['clat_mock_series_p2']?></li>
                            <li class="my-3"><?php echo $fetch_test_h_c['clat_mock_series_p3']?></li>
                      </ul>
                        
                        
                        
                    </div>
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                    <?php echo $fetch_test_h_c['clat_mock_series_price']?> 
                            /-
                            <span class="discount"> <?php echo $fetch_test_h_c['clat_mock_series_discount']?> </span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet"><?php echo $fetch_test_h_c['clat_mock_series_percent']?></span>
                        </p>
                        <button type="button" class="btn btn-outline-primary my-3 w-100 btn2" >See Details</button>
                      
                        
                 </div> 
            </div>
          
          <?php
               }
                
                
            ?>

            
            
            
           
            
        </div>
    </div>
</div>



<!-- clat section2 clat end  coaching program -->

<!-- clat section3 best clat coaching start -->

<div class="container-fluid section5_main">
      <div class="container section5_middle">
          <h2 class="home_title text-center">Why Choose Law Prep Tutorial for Your Legal Aspirations?</h2>
          <div class="row section5_rw justify-content-around">
            <?php

                    $sel_choose_clat="SELECT * FROM clat_choose_mock";
                    $exe_choose_clat=mysqli_query($conn,$sel_choose_clat);
                    while($fetch_clat_choose=mysqli_fetch_assoc( $exe_choose_clat)){
                    
              ?>
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/<?php echo $fetch_clat_choose['clat_choose_mock_image'] ?>" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading"><?php echo $fetch_clat_choose['clat_choose_mock_sub_head'] ?></h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; "><?php echo $fetch_clat_choose['clat_choose_mock_para'] ?></span>
                </div>
              </div>
              <?php
                }
              ?>
             

          </div>
      </div>

</div>

<!-- clat section3 best clat coaching end -->

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">FAQs Related to Mock Test for CLAT 2025</h2>
        
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              We have covered all the CLAT subjects in our test series.
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>We have covered all the CLAT subjects English, Legal Reasoning, Logical Reasoning, GK and QT in our test series.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Can I practice the CLAT mock test in offline mode?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Yes. You can go for our offline CLAT test series and practice at your nearest centre of Law Prep Tutorial.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Yes. You will find solutions and analysis of all questions.
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Yes, you will get the solutions and video analysis of all the questions. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
              Yes. You will get to see the results and correct answers.
              </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>You will get your result and All India Ranking on our LMS Portal. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
              Does Law Prep Tutorial provides online coaching for CLAT?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Yes. We are India’s leading institute for online CLAT coaching. Check out the linked page for details.  
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

     <!-- section4_ FAq about End -->

 <!-- section5_start of book your trial    -->

 <div class="container-fluid section5_clat_book_main">
    <div class="container section5_clat_book_middle">
        <div class="row">
            <div class="col-12">
                 <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start "> Book Your 3-Days Live Demo Class</h1>
                 <p class="p_title">Join the best CLAT coaching in India and prepare for success in the CLAT exam. With over two decades of experience, Law Prep Tutorial offers top-class mentorship and resources that lead to top results. Kickstart your online CLAT preparation today!</p>
            </div>
        </div>
    </div>
 </div>
 <!-- section5_end of book your trial    -->

<?php
     include_once "footer.php";
?>