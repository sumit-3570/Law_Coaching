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
                 <h1 class="clat_title mb-md-20 mb-12 ">Rajastan Judiciary Coaching (Online Classes)</h1>
                 <p class="p_title">Join the best coaching for Rajastan Judiciary exam. Law Prep Judiciary is your destination for specialized guidance, solid preparation strategy, and top-notch coaching.</p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->
<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start ">Rajastan Judiciary Preparation Classes</h1>
        <div class="row section2_clat_rw row-cols-xxl-4 row-cols-lg-3 row-cols-2  justify-content-xl-start justify-content-center">
          <?php
              $sel_rajas="SELECT * FROM  rajastan_course WHERE rajastan_course_status='1'";
              $exe_rajas=mysqli_query($conn,$sel_rajas);
              while($fetch_rajas=mysqli_fetch_assoc($exe_rajas)) {

              
              
          ?>
            <div class="col clm_section2_clat pt-4 pb-5 ">
                <div class="first_c d-flex justify-content-between ">
                    <img src="img/live-class.svg" alt="" style="width:52px; height: 52px; " class="img_live">
                    <span class="live_label fs-11 fw-600  rounded-1  px-2 text-uppercase"><?php echo $fetch_rajas['rajastan_course_live'] ?></span>
                </div>
                <div class="c_head">
                    <a href="https://www.lawpreptutorial.com/haryana-judiciary-online-coaching-haryana-judiciary-mains-online-batch-for-language-hindi-english">
                        <h3 class="clat_title mb-md-20 mb-12 my-3 " style="border:none;"><?php echo $fetch_rajas['rajastan_course_title'] ?></h3>
                    </a>    
                        <ul class="list-unstyled">
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Duration: <span style="font-weight:500;"><?php echo $fetch_rajas['rajastan_course_duration'] ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Eligibility: <span style="font-weight:500;"><?php echo $fetch_rajas['rajastan_course_eligible'] ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px"><?php echo $fetch_rajas['rajastan_course_hour'] ?> + <span style="font-weight:500;">Hours of Classes</span>  </li>
                        </ul>
                    
                   
                </div>
                <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                    <?php echo $fetch_rajas['rajastan_course_price'] ?> 
                        /-
                        <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                    </p>
                    <button type="button" class="btn btn-secondary">Enroll Now ></button>

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
          <h2 class="home_title text-center">Why Choose Us for Rajastan Judiciary Coaching?</h2>
          
          <div class="row section5_rw justify-content-around">
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/5f28a5b2-ee8f-445f-8b57-256ff3fe3e42-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">Expert Faculty </h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Experience daily live classes, ensuring dynamic interaction and immediate clarification of concepts, with recorded sessions available for revision at your convenience.</span>
                </div>

                <div class="batch">
                  <img src="img/573a75c9-d2d4-4560-9ba8-04a10970bf37-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Personalized Doubt Sessions</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Prepare with full-length mock tests for both Preliminary and Mains exams, created to accurately reflect the exam format and help you develop effective test-taking strategies.</span>
                </div>
                <div class="batch">
                  <img src="img/3fb52984-e88f-4e40-babd-a4a4104a035b-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Extensive Study Material</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">LParticipate in regular doubt-solving sessions that address your specific queries and obstacles, ensuring no doubts remain unresolved as you prepare for your exam.</span>
                </div>
                
              </div>
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/d9d0d0f9-f92c-413e-91f9-31ad36f962a7-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Comprehensive Curriculum</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Gain access to over 6,000+ practice questions that cover a wide range of topics, meticulously designed to mirror the pattern and difficulty level of the Rajasthan APO exam.</span>
                </div>

                <div class="batch">
                  <img src="img/c7a804d3-c4ee-4e46-86a9-ea176c277778-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Mock Test Series</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Benefit from special classes focused on Rajasthani Social Customs and Dialects, giving you a unique edge in the exam by covering often overlooked, yet crucial, aspects of the syllabus.</span>
                </div>
                <div class="batch">
                  <img src="img/6a5e4838-be12-439e-b864-38aa23e235e5-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                  Personalized Feedback on Answers</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Receive detailed evaluations on more than 50+ mains questions, providing you with personalized feedback to refine your writing skills and improve your performance.</span>
                </div>
                
              </div>
          </div>
      </div>

</div>

<!-- clat section3 best clat coaching end -->

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 mt-5">FAQs About Rajasthan APO Coaching</h2>
        <p class="sub_title text-center mt-3">Find answers to your common questions.</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Where can I find study materials for the Rajasthan APO exam preparation?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Law Prep Judiciary provides comprehensive study materials specifically tailored for the Rajasthan APO exam, including daily live classes, a vast question bank, and full-length mock tests..
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Do you offer demo classes, and if so, what is the duration?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Absolutely! 3 days of demo classes are available for both online and offline students.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How many classes are conducted per week?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>We hold classes six days a week, from Monday to Saturday.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
              What are the class timings?
              </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>WFor online students, classes run from 04:00 pm to 6:00 pm.
                        Offline students attend classes from 06:00 pm to 8:00 pm.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
              Will there be topic-specific tests?
              </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Certainly! Upon completion of each topic, we provide a corresponding test.
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