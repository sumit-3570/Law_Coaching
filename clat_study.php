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
                    $sel_study_c="SELECT * FROM clat_study";
                    $exe_study_c=mysqli_query($conn,$sel_study_c);
                    $fetch_study_c=mysqli_fetch_assoc($exe_study_c);
                 

            ?>
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 "><?php  echo $fetch_study_c['clat_study_heading']?></h1>
                 <p class="p_title"><?php  echo $fetch_study_c['clat_study_para']?></p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->
<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start mb-2">Regular Material</h1>
        <div class="row section2_clat_rw  justify-content-xl-between justify-content-center">
            <?php
                $sel_study_course="SELECT * FROM clat_study_course WHERE clat_study_course_status='1'";
                $exe_study_course=mysqli_query($conn, $sel_study_course);
                $fetch_study_course=mysqli_fetch_assoc($exe_study_course);
                   
            ?>
            <div class="col-6 clm_study mb-3 rounded-2 ">
                    <img src="img/<?php echo $fetch_study_course['clat_study_course_image'] ?>" alt="" style="width:100%; height: 226px;">
                    <a href="https://www.lawpreptutorial.com/study-material/clat/game-changer-kit">
                        <h3 class="study_head mt-3"><?php echo $fetch_study_course['clat_study_course_title'] ?></h3>
                    </a>
                    <div class="star">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <ul>
                        <li class="my-1"><?php echo $fetch_study_course['clat_study_course_lines_1'] ?></li>
                        <li class="my-1"><?php echo $fetch_study_course['clat_study_course_lines_2'] ?></li>
                        <li class="my-1"><?php echo $fetch_study_course['clat_study_course_lines_3'] ?></li>
                        <li class="my-1"><?php echo $fetch_study_course['clat_study_course_lines_4'] ?></li>
                    </ul>
                    <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-3">
                        <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                        <?php echo $fetch_study_course['clat_study_course_price'] ?> 
                            /-
                            <span class="discount"><?php echo $fetch_study_course['clat_study_materia_discount'] ?></span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet">25.72%</span>
                        </p>
                         <button type="button" class="btn btn-secondary">Enroll Now ></button>

                    </div>
                    
            </div>
            
        </div>
    </div>
</div>

<!-- clat section2 clat end  coaching program -->




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