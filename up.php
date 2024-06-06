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
              <?php
                   $sel_up_head="SELECT * FROM up_main_head";
                   $exe_up_head=mysqli_query($conn,$sel_up_head);
                   $fetch_up_head=mysqli_fetch_assoc($exe_up_head);
                   
              ?>
                 <h1 class="clat_title mb-md-20 mb-12 "><?php echo $fetch_up_head['up_main_head_title']?></h1>
                 <p class="p_title"><?php echo $fetch_up_head['up_main_head_para']?></p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->
<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start ">Regular Courses</h1>
        <div class="row section2_clat_rw row-cols-xxl-4 row-cols-lg-3 row-cols-2  justify-content-xl-start justify-content-center">
          <?php
                $sel_up="SELECT * FROM up_course WHERE up_course_status='1'";
                $exe_up=mysqli_query($conn,$sel_up);
                $fetch_up=mysqli_fetch_assoc($exe_up);
               
          ?>
            <div class="col clm_section2_clat pt-4 pb-5 ">
                <div class="first_c d-flex justify-content-between ">
                    <img src="img/live-class.svg" alt="" style="width:52px; height: 52px; " class="img_live">
                    <span class="live_label fs-11 fw-600  rounded-1  px-2 text-uppercase"><?php echo $fetch_up['up_course_live'] ?></span>
                </div>
                <div class="c_head">
                    <a href="https://www.lawpreptutorial.com/uppcsj-online-coaching-judiciary-regular-batch-one-year-program">
                        <h3 class="clat_title mb-md-20 mb-12 my-3 " style="border:none;"><?php echo $fetch_up['up_course_title'] ?></h3>
                    </a>    
                        <ul class="list-unstyled">
                            <li style="background-color:#f6efef; width:218px" class="mb-2"><?php echo $fetch_up['up_course_duration'] ?></li>
                            
                            <li style="background-color:#f6efef; width:218px"><?php echo $fetch_up['up_course_hours'] ?></li>
                        </ul>
                  
                   
                </div>
                <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                    <?php echo $fetch_up['up_course_price'] ?> 
                        /-
                        <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                    </p>
                    <button type="button" class="btn btn-secondary">Enroll Now ></button>

                </div>
            </div>
           
            
        </div>
    </div>
</div>

<!-- clat section2 clat end  coaching program -->

<!-- clat section3 best clat coaching start -->

<div class="container-fluid section5_main ">
      <div class="container section5_middle">
          <h2 class="home_title text-center">Why Choose Us for UP Judiciary Coaching?</h2>
          
          <div class="row section5_rw justify-content-around mb-3">

          <?php
                $sel_legal="SELECT * FROM up_judiciry_coach";
                $exe_legal=mysqli_query($conn,$sel_legal);
              while($fetch_legal=mysqli_fetch_assoc($exe_legal)){
                 
          ?>
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/<?php echo $fetch_legal['up_judiciry_coach_image'] ?>" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading"><?php echo $fetch_legal['up_judiciry_coach_title'] ?></h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; "><?php echo $fetch_legal['up_judiciry_coach_para'] ?></span>
                </div>  
              </div>
              <?php

                  }
                ?>
       </div>

</div>

<!-- clat section3 best clat coaching end -->

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">FAQs Related to UP Judiciary Coaching</h2>
        <p class="sub_title text-center mt-3">Find answers to your common questions.</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is the UP PCS J exam?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>The Uttar Pradesh Provincial Civil Services (Judicial) Examination, commonly known as the UP PCS J exam, is a competitive examination conducted by the Uttar Pradesh Public Service Commission (UPPSC) to recruit eligible candidates for the position of Civil Judge (Junior Division) in the state's judicial services.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What subjects are covered in UP PCS J coaching?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our coaching covers the entire UP PCS J syllabus, including Civil Law, Criminal Law, Procedural Laws, and General Knowledge. We ensure that candidates are well-prepared for all subjects.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Do you offer flexible coaching program options?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Yes, we offer one-year, two-year, and three-year coaching programs to cater to the diverse needs of our aspirants. You can choose the program duration that aligns with your preparation goals.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
              How do your performance analysis tools work?
              </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Our AI-powered performance analysis tools help candidates track their progress, identify strengths, and address areas for improvement. This data-driven approach enables more effective preparation.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
              What resources and study materials do you provide?
              </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>We provide a wide range of study materials, including law books, reference materials, judgment writing guides, and mock tests. These resources align with the UP PCS J exam syllabus.
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
                 <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start ">Join The Best UP Judiciary Coaching 2024!</h1>
                 <p class="p_title">At Law Prep Judiciary, we understand your ambition to become a part of the esteemed judicial system of Uttar Pradesh. Aspirations like yours deserve the best guidance, and that's precisely what we offer. Our online UP PCS J coaching classes are your gateway to achieving the legal career you've always dreamed of. With over 20 years of experience and an unwavering commitment to excellence, we have honed a learning system that's tailored to the needs of aspiring judicial officers. </p>
            </div>
        </div>
    </div>
 </div>
 <!-- section5_end of book your trial    -->

<?php
     include_once "footer.php";
?>