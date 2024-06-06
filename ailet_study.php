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
                    $sel_ailet_study="SELECT * FROM ailet_study WHERE ailet_study_course_status='1'" ;
                    $exe_ailet_study=mysqli_query($conn,$sel_ailet_study);
                    $fetch_ailet_study=mysqli_fetch_assoc( $exe_ailet_study);
                    
            ?>
            <div class="col-12 text-center  pt-4">
                 <h1 class="clat_title mb-md-20 mb-12 "><?php echo $fetch_ailet_study['ailet_study_heading'] ?></h1>
                 <p class="p_title"><?php echo $fetch_ailet_study['ailet_study_para'] ?></p>
            </div>
           </div>
                
        </div>
</div>

<!-- clat section 1 end -->

<!-- clat section2 clat start  coaching program -->

<div class="container-fluid section2_clat_main">
    <div class="container section2_clat_middle">
    <h1 class="clat_title mb-md-20 mb-12 text-center text-lg-start mb-4">AILET GAME CHANGER</h1>
        <div class="row section2_clat_rw  justify-content-xl-between justify-content-center">
            <?php
                $sel_ailet_material="SELECT * FROM ailet_study_course";
                $exe_ailet_material=mysqli_query($conn,$sel_ailet_material);
               while($fetch_ailet_material=mysqli_fetch_assoc($exe_ailet_material)) {
            ?>
                        <div class="col-6 clm_study mb-3 rounded-2 ">
                    <img src="img/<?php echo $fetch_ailet_material['ailet_study_course_image'] ?>" alt="" style="width:100%; height: 226px;">
                    <a href="https://www.lawpreptutorial.com/study-material/clat/game-changer-kit">
                        <h3 class="study_head mt-3"><?php echo $fetch_ailet_material['title'] ?></h3>
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
                        <li class="my-1"><?php echo $fetch_ailet_material['ailet_study_course_line_1'] ?></li>
                        <li class="my-1"><?php echo $fetch_ailet_material['ailet_study_course_line_2'] ?></li>
                        <li class="my-1"><?php echo $fetch_ailet_material['ailet_study_course_line_3'] ?></li>
                        <li class="my-1"><?php echo $fetch_ailet_material['ailet_study_course_line_4'] ?></li>
                    </ul>
                    <div class="course_price_info d-xl-flex justify-content-between align-items-center mt-3">
                        <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                        <?php echo $fetch_ailet_material['ailet_study_course_price'] ?> 
                            /-
                            <span class="discount"> <?php echo $fetch_ailet_material['ailet_study_course_discount'] ?> </span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet"><?php echo $fetch_ailet_material['percent_discount'] ?>t</span>
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





<?php
     include_once "footer.php";
?>