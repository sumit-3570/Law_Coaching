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
                 <h1 class="clat_title mb-md-20 mb-12 ">AILET Coaching Classes</h1>
                 <p class="p_title">Get the best online AILET coaching in India with Law Prep Tutorial. We are #1 law entrance coaching institute to help you crack the exam and secure admission to the National Law University (NLU), Delhi.</p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->
<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start ">   AILET Coaching Programs</h1>
        <div class="row section2_clat_rw row-cols-xxl-4 row-cols-lg-3 row-cols-2  justify-content-xl-between justify-content-center">
          <?php
                $sel_ailet_cou="SELECT * FROM ailet_classes WHERE ailet_course_status='1'";
                $exe_ailet_cou=mysqli_query($conn,$sel_ailet_cou);
                while($fetch_ailet_cou=mysqli_fetch_assoc($exe_ailet_cou)) {
                  
            ?>
                 <div class="col clm_section2_clat pt-4 pb-5 ">
                <div class="first_c d-flex justify-content-between ">
                    <img src="img/live-class.svg" alt="" style="width:52px; height: 52px; " class="img_live">
                    <span class="live_label fs-11 fw-600  rounded-1  px-2 text-uppercase"><?php echo $fetch_ailet_cou['ailet_classes_live'] ?></span>
                </div>
                <div class="c_head">
                    <a href="https://www.lawpreptutorial.com/ailet-online-coaching-2026-foundation">
                        <h3 class="clat_title mb-md-20 mb-12 my-3 " style="border:none;"><?php echo $fetch_ailet_cou['ailet_classes_heading'] ?></h3>
                    </a>   
                        <ul class="list-unstyled">
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Duration: <span style="font-weight:500;"><?php echo $fetch_ailet_cou['ailet_classes_duration'] ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px" class="mb-2">Eligibility: <span style="font-weight:500;"> <?php echo $fetch_ailet_cou['ailet_classes_eligible'] ?></span>  </li>
                            <li style="background-color:#f6efef; width:218px"><?php echo $fetch_ailet_cou['ailet_classes_hour'] ?> <span style="font-weight:500;"> Hours of Classes</span>  </li>
                        </ul> 
                </div>
                <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                    <?php echo $fetch_ailet_cou['ailet_classes_hour'] ?>/-
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

 <!-- section4_ FAq about start -->

 <div class="container-fluid section8_main">
      <div class="container section8_middle">
        <h2 class="home_title text-center mb-12 pt-5">FAQs About AILET Coaching Classes</h2>
        <p class="sub_title text-center mt-3">Find answers to your questions about AILET 2025 coaching</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is AILET?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>AILET (All India Law Entrance Test) is a national-level entrance exam conducted by National Law University, Delhi, for admissions into undergraduate and postgraduate law programs."
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What courses are offered through AILET?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>AILET primarily offers admission to BA LLB (Hons), LLM, and PhD programs at National Law University, Delhi."
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How does Law Prep Tutorial help in AILET preparation?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Law Prep Tutorial offers comprehensive online coaching for AILET, including live lectures, study materials, mock tests, and personalized guidance to help students excel in the exam."
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