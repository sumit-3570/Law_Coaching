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
              $sel_rajast_t="SELECT * FROM rajastan_test_series_head";
              $exe_rajastan_t=mysqli_query($conn,$sel_rajast_t);
              $fetch_rajastan_t=mysqli_fetch_assoc($exe_rajastan_t);
             
            ?>
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 "><?php echo $fetch_rajastan_t['rajastan_test_series_head_heading'] ?></h1>
                 <p><?php echo $fetch_rajastan_t['rajastan_test_series_head_para'] ?></p>
               
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
                $sel_rajastan_mock_se="SELECT * FROM rjs_mock_test WHERE rjs_mock_test_status='1'";  
                $exe_rajastan_mock_se=mysqli_query($conn,$sel_rajastan_mock_se);
                while($fetch_rajastan_mock_se=mysqli_fetch_assoc($exe_rajastan_mock_se)){       

          ?>
            <div class="col-xl-3 col-md-2 col-12 clm_test_s1 mb-4 "style="background-color:<?php echo $fetch_rajastan_mock_se['color'] ?>; " >
                <div class="test_series_main d-flex justify-content-between">
                    <img src="img/live-class.svg" alt="" style="width:64px; height:64px;margin-left:31px;">
                   
                    <div class="best "><?php echo $fetch_rajastan_mock_se['best'] ?></div>
 
                </div> 
                <div>
                        <a href="https://www.lawpreptutorial.com/test-series/clat/free">
                            <h3 class="  text-capitalize test_heading text-center mt-3" style="color:#101828;"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_title'] ?></h3>  
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
                            <li class="py-2"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_p1'] ?></li>
                            <li class="py-2"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_p2'] ?></li>
                            <li class="py-2"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_p3'] ?></li>
                        </ul>
                    </div>
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center " style="color:#101828; margin-top: 40px; ">
                    <?php echo $fetch_rajastan_mock_se['rjs_mock_test_price'] ?>
                            <span class="discount"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_discount'] ?></span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet"><?php echo $fetch_rajastan_mock_se['rjs_mock_test_percentage'] ?></span>
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

<!-- clat section3 best clat coaching start -->

<div class="container-fluid section5_main">
      <div class="container section5_middle">
          <h2 class="home_title text-center">Why Choose Us for Haryana Judiciary Test Series?</h2>
          <div class="row section5_rw justify-content-around">
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/5f28a5b2-ee8f-445f-8b57-256ff3fe3e42-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">AI-Powered LMS App</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085;">Our AI-powered LMS app allows you to practice in real-exam conditions, providing a seamless and efficient learning experience personalized to your needs.</span>
                </div>

                <div class="batch">
                  <img src="img/573a75c9-d2d4-4560-9ba8-04a10970bf37-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  National Leaderboard</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Compare your scores with aspirants across India. Our leaderboard fosters a competitive spirit, motivating you to achieve your best in the Haryana Judiciary exam.</span>
                </div>
                <div class="batch">
                  <img src="img/3fb52984-e88f-4e40-babd-a4a4104a035b-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    Expert-Created Questions</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Our Haryana judiciary test series features questions created by experienced faculty, ensuring they are relevant, challenging, and in line with the latest exam pattern.</span>
                </div>
                
              </div>
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/d9d0d0f9-f92c-413e-91f9-31ad36f962a7-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Performance Analysis
                    </h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Track your performance with detailed analytics. Identify strengths and weaknesses, and focus on areas needing improvement to ensure comprehensive preparation.</span>
                </div>

                <div class="batch">
                  <img src="img/c7a804d3-c4ee-4e46-86a9-ea176c277778-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Realistic Exam Simulations</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Experience exam-like conditions with our Haryana judiciary mock tests, designed to replicate the actual exam environment, reducing anxiety and boosting confidence.</span>
                </div>
                <div class="batch">
                  <img src="img/6a5e4838-be12-439e-b864-38aa23e235e5-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Personalized Feedback</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Receive detailed feedback on your performance, helping you understand mistakes and learn effectively from them for continuous improvement.</span>
                </div>
                
              </div>
          </div>
      </div>

</div>

<!-- clat section3 best clat coaching end -->

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">FAQs Related to RJS Test Series</h2>
        
        
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why should I choose Law Prep’s Rajasthan Judiciary Mock Test Series?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our mock test for Rajasthan Judiciary exam are expertly crafted by seasoned professionals, offering diverse options, comprehensive study materials, AI-powered performance analysis, and flexible, affordable pricing.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
              What additional resources come with the RJS mock tests?
              </button>
            </h2>
            <div id="collapsetwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>In addition to the RJS mock tests, you'll gain access to past year papers, legal ebooks, and an AI-based Learning Management System (LMS) for smart performance analysis.
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
              What are the benefits of using the AI-powered LMS app?
              </button>
            </h2>
            <div id="collapsethree" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our AI-powered LMS app allows you to practice in real-exam conditions, track your performance, receive detailed feedback, and compare your scores with other aspirants on a national leaderboard.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
              Can I access the HJS mock tests on my mobile device?
              </button>
            </h2>
            <div id="collapseeight" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Yes, our Haryana judiciary mock tests are accessible on mobile devices through our LMS app, providing you with the flexibility to practice anytime, anywhere.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
              What should I do if I face technical issues while accessing the mock tests?
              </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>If you encounter any technical issues, please contact our customer support team immediately. They are available to assist you and ensure a smooth testing experience.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
              What is the exam pattern for the Haryana Judiciary Exam?
              </button>
            </h2>
            <div id="collapsesix" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>The exam consists of three stages: Preliminary Examination (objective type), Main Examination (subjective type), and Viva-Voce (interview). The Preliminary exam is a screening test, and the Main exam includes written papers on various law subjects.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="true" aria-controls="collapseseven">
              How can I apply for the Haryana Judiciary Exam?
              </button>
            </h2>
            <div id="collapseseven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>You can apply online through the official website of the Haryana Public Service Commission (HPSC). The application form, along with the required documents, must be submitted before the deadline.
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