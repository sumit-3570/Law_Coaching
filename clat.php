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
                  $sel_clat_head="SELECT * FROM clat_coahing";
                  $exe_clat_head=mysqli_query($conn,$sel_clat_head);
                  $fetch_clat_head=mysqli_fetch_assoc($exe_clat_head);
                 

            ?>
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 "><?php echo $fetch_clat_head['clat_coahing_heading']?></h1>
                 <p class="p_title"><?php echo $fetch_clat_head['clat_coahing_paragraph']  ?></p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->
<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start "> CLAT Coaching Programs</h1>
        <div class="row section2_clat_rw row-cols-xxl-4 row-cols-lg-3 row-cols-2  justify-content-xl-between justify-content-center">
          <?php
              $sel_clat_courses="SELECT * FROM clat_classes WHERE clat_classes_status='1' ";
              $exe_clat_courses=mysqli_query($conn,$sel_clat_courses);
             while($fetch_clat_courses=mysqli_fetch_assoc($exe_clat_courses)) {
              
             
           ?>
                 <div class="col clm_section2_clat pt-4 pb-5 ">
                <div class="first_c d-flex justify-content-between ">
                    <img src="img/live-class.svg" alt="" style="width:52px; height: 52px; " class="img_live">
                    <span class="live_label fs-11 fw-600  rounded-1  px-2 text-uppercase"><?php echo $fetch_clat_courses['live_classes'] ?></span>
                </div>
                <div class="c_head">
                    <a href="https://www.lawpreptutorial.com/clat-online-coaching-2025">
                        <h3 class="clat_title mb-md-20 mb-12 my-3 " style="border:none;"><?php echo $fetch_clat_courses['clat_classes_title']  ?></h3>
                        </a>    
                        <ul class="list-unstyled">
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Duration: <span style="font-weight:500;"><?php echo $fetch_clat_courses['clat_classes_duration']  ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Eligibility: <span style="font-weight:500;"><?php echo $fetch_clat_courses['clat_classes_eligible']  ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px"><span style="font-weight:500;"><?php echo $fetch_clat_courses['clat_classes_hour']  ?>+ </span> Hours Of Classes </li>
                        </ul>
                   
                   
                </div>
                <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                    <?php echo $fetch_clat_courses['price']  ?>
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
          <h2 class="home_title text-center">Why Choose Law Prep Tutorial for Your Legal Aspirations?</h2>
          <div class="row section5_rw justify-content-around">
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/5f28a5b2-ee8f-445f-8b57-256ff3fe3e42-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">23 YEARS OF EXCELLENCE</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">With more than two decades of expertise, we bring you a solid foundation for success. Join us and tap into a wealth of resources and coaching by experts.</span>
                </div>

                <div class="batch">
                  <img src="img/573a75c9-d2d4-4560-9ba8-04a10970bf37-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    500+ NLU Selections Every Year</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">As the best CLAT coaching institute in India, we take pride in our achievement of having the highest number of students selected in the NLUs and CLAT colleges</span>
                </div>
                <div class="batch">
                  <img src="img/3fb52984-e88f-4e40-babd-a4a4104a035b-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    20+ All India Branches</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Law Prep Tutorial has more than 20 offline centers around the country. You can join our offline coaching programs as well as online programs.</span>
                </div>
                
              </div>
              <div class="col-lg-6 col-12 section5_clm">
                <div class="batch">
                  <img src="img/d9d0d0f9-f92c-413e-91f9-31ad36f962a7-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    1,00,000+ Students Traine</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">We have successfully trained over 100,000 students to begin successful careers in law fields, and this figure continues to grow.</span>
                </div>

                <div class="batch">
                  <img src="img/c7a804d3-c4ee-4e46-86a9-ea176c277778-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    Top-notch Instructorsr</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">We bestow the largest and most experienced faculty team, with an average experience ranging from 10 to 20 years in the CLAT & Judiciary Industry.</span>
                </div>
                <div class="batch">
                  <img src="img/6a5e4838-be12-439e-b864-38aa23e235e5-1704272756.svg" alt="" style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
                  <h3 class="common_heading">
                    Hybrid Model</h3>
                </div>
                <div class="" style="margin-left: 38px;">
                  <span style="font-size: 14.6667px; color: #667085; ">Choose from in-person or online classes for flexible learning. Through our online platform we've successfully educated over 10,000+ students.</span>
                </div>
                
              </div>
          </div>
      </div>

</div>

<!-- clat section3 best clat coaching end -->

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">FAQs About Law Prep Tutorial</h2>
        <p class="sub_title text-center mt-3">Find answers to your common questions about Law Prep Tutorial and Law Prep Judiciary</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                HOW MANY YEARS OF EXPERIENCE LAW PREP HAVE?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>We take immense pride in the fact that we bring over 23 years of experience to our endeavor.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                WHAT IS THE OFFICAL NUMBER OF LAW PREP TUTORIAL?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>You can contact us on the given number- +91-7665944999 , +91-9414143101 & +91-9351518383.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                HOW CAN I BOOK A COUNSELLING SESSION?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>At Law Prep Tutorial, our committed team of counselors is ready to assist you. To schedule a counseling session, please reach out to the provided contact number -+91-7665944999 , +91-9414143101 & +91-9351518383.
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