<?php
include_once "support.php";
include_once "conn.php";
// insert the querry
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];



if(isset($_POST['save'])) {

  $ins="INSERT INTO couseling SET
  	couseling_name='$name',
    couseling_email='$email',
    mobile='$mobile',
    couseling_category='$course'

";

$exe=mysqli_query($conn,$ins);

}



include_once "header.php";

?>
<!-- section2_banner start -->
<div class="container-fluid section_2_main my-5">
  <div class="container section_2_middle">
    <div class="row section_2_rw">
      <div class="col-xl-7 col-12 clm p-0 me-4">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <?php 
                  $sel_banner="SELECT * FROM banner";
                  $exe_sel_banner=mysqli_query($conn,$sel_banner);
                  $fetch_banner=mysqli_fetch_assoc($exe_sel_banner);
                 
              
              ?>
              <img src="img/<?php echo $fetch_banner['banner_image1'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/<?php echo $fetch_banner['banner_image2'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/<?php echo $fetch_banner['banner_image3'] ?>" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-xl-4 col-12 clm p-0 " style="background-color: #162331; border-radius: 5px;">
        <h2 class="text-white text-center   fw-400 lh-32 head">WE ARE JUST A CALL AWAY!</h2>
        <p class="label-color-1 lh-24 fs-24 fw-400 text-center">Sign up for a free counseling session with our mentors.
        </p>
        <form method="post">
         
            <input type="text" placeholder="Name" class="inp_1 " name="name">
            <!-- <span class="user">
              <img src="img/user.svg" alt="">
            </span> -->

          <input type="email" placeholder="Email Address" class="inp_1" name="email">
            <!-- <span class="user1">
              <img src="img/sms.svg" alt="">
            </span> -->
          <input type="number" placeholder="Mobile Number" class="inp_1" name="mobile">
          <!-- <span class="user2">
            <!-- <img src="img/call-outline.svg" alt=""> -->
          <!-- </span> --> -->
          
			            <div class="inputform">
									<select name="course" id="course">
										<option value="">Choose your Course</option>
										<option value="clat">CLAT</option>
										<option value="ailet">AILET</option>
										<option value="apo">APO</option>
										<option value="haryana">Haryana Judiciary</option>
										<option value="Up">Up Judiciary</option>
									</select>
								</div>
              <button class="btn btn-danger my-3" type="submit" name="save" value="submit" style="width: 100%;">Book Demo Class</button>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- section2_banner end -->

<!-- section3_coaching program -->
<div class="container-fluid section3_main">
  <div class="container section3_middle">
    <h2 class="home_title mb-md-20 mb-12 text-white text-center pt-5 ">Law Entrance and Judiciary Coaching Programs</h2>
    <p class="section_para text-center pt-2">Supercharge your preparation with the best law entrance and judiciary
      coaching programs!</p>
    <div class="row section_3_rw">
      <div class="col-lg-4 col-12 section3_clm me-3 pt-3 mb-5 ">
        <span class="overlay_heading">Law Entrances</span>
        <h3 class="lh-32 fs-29 fw-400 mb-md-200 text-capitalize base-color" style="margin-top: 98px;">Law Entrances</h3>
        <p class="fs-14 fw-400 base-color mb-md-20 my-4">Be the next law entrance exam topper with the best coaching for
          CLAT, AILET</p>
          <a href="clat.php">
            <button class="btn btn-success my-2 mb-4">CLAT</button>
          </a>
        <a href="ailet.php">
            <button class="btn btn-success my-2 mb-4">AILET</button>
        </a>
        
      </div>
      <div class="col-lg-4 col-12 section3_clm me-3 pt-3 mb-5">
        <span class="overlay_heading_j">Judiciary Exams</span>
        <h3 class="lh-32 fs-29 fw-400 mb-md-200 text-capitalize base-color" style="margin-top: 98px;">Judiciary Exam
        </h3>
        <p class="fs-14 fw-400 base-color mb-md-20 my-4">Be the next law entrance exam topper with the best coaching for
          APO, Haryana and UP</p>
          <a href="apo.php">
            <button class="btn btn-success my-2 mb-4">APO</button>
          </a>
        <a href="Rajastan.php">
           <button class="btn btn-success my-2 mb-4">HRJ</button>
        </a>
        <a href="up.php">
          <button class="btn btn-success my-2 mb-4">UP</button>
        </a>
        
        
      </div>
    </div>
  </div>
</div>
<!-- section3_coaching program end -->

<!-- section4_start -->
<div class="container-fluid section4_main">
  <div class="container section4_middle">
    <h2 class="home_title mb-md-20 mb-12 text-center mt-4">Begin Strategic Preparation for CLAT or Judiciary Exams</h2>
    <p class="section_para text-center mt-4">Enabling success through the best coaching for CLAT and judiciary!</p>
    <div class="row section4_rw  row-cols-xl-5 row-cols-lg-3 justify-content-around row-cols-2 ">
      <?php
          $sel_clat_prep="SELECT * FROM clat_prep";
          $exe_clat_prep=mysqli_query($conn,$sel_clat_prep);
          while($fetch_clat_prep=mysqli_fetch_assoc($exe_clat_prep)) {
            
        ?>
            <div class="col section4_clm text-center">
       
          <img src="img/<?php echo $fetch_clat_prep['clat_prep_image'] ?>" alt="" srcset="">
          <a href="<?php echo $fetch_clat_prep['clat_prep_link']  ?>">
            <p class="card_heading mt-3"><?php echo $fetch_clat_prep['clat_prep_heading'] ?></p>
          </a>
          <a href="clat_test.php">
              <span class="fw-400 fs-16 text-center d-block more-info more " style="color: #667085;">More information</span>
          </a>
          
        </a>

      </div>
        
        <?php
          }
           
      ?>
      
     

    </div>
  </div>
</div>
<!-- section4_End -->

<!-- section5_start legal aaspiration -->
<div class="container-fluid section5_main">
  <div class="container section5_middle">
    <h2 class="home_title text-center">Why Choose Law Prep Tutorial for Your Legal Aspirations?</h2>
    <div class="row section5_rw justify-content-around">
    <?php
          $sel_legal="SELECT * FROM legal_aspiration";
          $exe_legal=mysqli_query($conn,$sel_legal);
         while($fetch_legal=mysqli_fetch_assoc($exe_legal)){
          
      ?>
      <div class="col-lg-6 col-12 section5_clm">
     
        <div class="batch">
          <img src="img/5f28a5b2-ee8f-445f-8b57-256ff3fe3e42-1704272756.svg" alt=""
            style="width: 28px; height: 28px; margin-right: 5px; margin-top: 4px;">
          <h3 class="common_heading"><?php echo $fetch_legal['legal_aspiration_sub_head'] ?></h3>
        </div>
        <div class="" style="margin-left: 38px;">
          <span style="font-size: 14.6667px; color: #667085; "><?php echo $fetch_legal['legal_aspiration_p'] ?></span>
        </div>

        

      </div>
      <?php

         }
      ?>
     
    </div>
  </div>

</div>
<!-- section5_end legal aaspiration -->

<!-- section6_result start -->

<div class="container-fluid section_6_main">
  <div class="container section_6_middle">
    <div class="row">
      <div class="col-12">
        <h2 class="home_title text-center mb-12 mt-5">Results में सर्वोच्च</h2>
        <p class="sub_title text-center mt-3">Making the Way from Vision to Selection</p>
      </div>
      <div class="col-12">
        <img src="img/dbeb5711-e109-47f1-9894-1cca4e24a6ce-1710843841.jpg" alt="" style="width: 100%; height: 100%;">
      </div>
    </div>
  </div>
</div>

<!-- section6_result end -->

<!-- section_7 start recent news -->

<div class="container-fluid section7_main py-4">
  <div class="container section7_middle">
    <h2 class="home_title text-center py-3">Recent News</h2>
    <div class="row section7_rw">
      <div class="col-xl-6 col-12 mb-3 section7_clm  p-0">
        <div class="col-12 d-flex mt-4">
          <div class="col-6 section7_child p-0">
            <img src="img/b894a360-9622-46b8-afe1-9861eb41e79f-1713869181.jpg" alt=""
              style="width: 100%; height: 100%;">
          </div>
          <div class="col-6 section7_child">
            <span class="fs-13 fw-500 red">April 1, 2024</span>
            <a
              href="https://www.thehindu.com/brandhub/pr-release/law-prep-tutorials-continuous-dominance-in-clat-the-inside-story/article68016857.ece">
              <h3 class="common_heading_result">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</h3>
              <p class="lh-24 result_content">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</p>
            </a>
          </div>
        </div>
        <div class="col-12 d-flex mt-4">
          <div class="col-6 section7_child p-0">
            <img src="img/b894a360-9622-46b8-afe1-9861eb41e79f-1713869181.jpg" alt=""
              style="width: 100%; height: 100%;">
          </div>
          <div class="col-6 section7_child">
            <span class="fs-13 fw-500 red">April 1, 2024</span>
            <a
              href="https://www.thehindu.com/brandhub/pr-release/law-prep-tutorials-continuous-dominance-in-clat-the-inside-story/article68016857.ece">
              <h3 class="common_heading_result">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</h3>
              <p class="lh-24 result_content">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</p>
            </a>
          </div>
        </div>


      </div>

      <div class="col-xl-6 col-12 section7_clm p-0">
        <div class="col-12 section7_bane">
          <img src="img/1db69203-b3c8-459b-9eb5-6cbd7fb90363-1713869674.webp" alt="" style="width: 100%; height: 100%;">
        </div>
        <div class="col-12">
          <a
            href="https://www.thehindu.com/brandhub/pr-release/law-prep-tutorials-continuous-dominance-in-clat-the-inside-story/article68016857.ece">
            <span class="fs-13 fw-500 red">April 1, 2024</span>
            <h3 class="common_heading_result">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</h3>
            <p class="lh-24 result_content">Law Prep Tutorial’s Continuous Dominance in CLAT– The Inside Story</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-center">
  <a
    href="https://www.thehindu.com/brandhub/pr-release/law-prep-tutorials-continuous-dominance-in-clat-the-inside-story/article68016857.ece">
    <button type="button" class="btn btn-outline-danger mb-3">See more News</button>
  </a>

</div>


<!-- section_7 start recent news -->

<!-- section8_ FAq about start -->

<div class="container-fluid section8_main">
  <div class="container section8_middle">
    <h2 class="home_title text-center mb-12 mt-5">FAQs About Law Prep Tutorial</h2>
    <p class="sub_title text-center mt-3">Find answers to your common questions about Law Prep Tutorial and Law Prep
      Judiciary</p>
       
    <div class="accordion" id="accordionExample">
    <?php
              $sel_fq="SELECT * FROM question";
              $exe_fq=mysqli_query($conn,$sel_fq);
            while($fetch_fq=mysqli_fetch_assoc($exe_fq)){
            

          ?>
      <div class="accordion-item">
    
          <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <?php echo $fetch_fq['question_heading']?>
              </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong><?php echo $fetch_fq['question_para']?>
              </div>
          </div>
       
      </div>
      <?php
          }
    ?>
      
    </div>
   

  </div>
</div>

<!-- section8_ FAq about End -->

<!-- footer part start -->
<?php
include_once "footer.php";
?>