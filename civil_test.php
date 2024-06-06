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
                 <h1 class="clat_title mb-md-20 mb-12 ">Civil Judge Mock Test Series</h1>
               
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
                    $sel_civil="SELECT * FROM civil_mock_series WHERE civil_mock_series_status='1'";
                    $exe_civil=mysqli_query($conn,$sel_civil);
                    $fetch_civil=mysqli_fetch_assoc($exe_civil);
                    
            ?>            
            <div class="col-xl-3 col-md-2 col-12 clm_test_s1 mb-3 " style="background-color:<?php  echo $fetch_civil['color']?>; ">
                <div class="test_series_main d-flex justify-content-between">
                    <img src="img/live-class.svg" alt="" style="width:64px; height:64px;margin-left:31px;">
                   

                    <div class="best "><?php  echo $fetch_civil['civil_mock_series_best']?></div>
                    
                </div> 
                <div>
                        <a href="https://www.lawpreptutorial.com/test-series/clat/free">
                            <h3 class="  text-capitalize test_heading text-center mt-5" style="color:#101828;"><?php  echo $fetch_civil['civil_mock_series_title']?></h3>
                            
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
                            <li class="py-2"><?php  echo $fetch_civil['civil_mock_series_p1']?></li>
                            <li class="py-2"><?php  echo $fetch_civil['civil_mock_series_p2']?></li>
                            <li class="py-2"><?php  echo $fetch_civil['civil_mock_series_p3']?></li>
                       </ul>
                    </div>
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#1987547a; ">
                    <?php  echo $fetch_civil['civil_mock_series_price']?>  
                            /-
                            <span class="discount"><?php  echo $fetch_civil['civil_mock_series_discount']?> /-</span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet"><?php  echo $fetch_civil['civil_mock_series_percent']?></span>
                        </p>
                        <button type="button" class="btn btn-outline-primary my-3 w-100" >See Details</button>
                      
                        
                 </div> 
            </div>
            <div class="col-xl-3 col-md-2 col-12 clm_test_s1 mb-4 "style="background-color:#fb659475; " >
                <div class="test_series_main d-flex justify-content-between">
                    <img src="img/live-class.svg" alt="" style="width:64px; height:64px;margin-left:31px;">
                   

                    
                    
                </div> 
                <div>
                        <a href="https://www.lawpreptutorial.com/test-series/clat/free">
                            <h3 class="  text-capitalize test_heading text-center mt-5" style="color:#101828;">RJS INNATUS (ONLINE)</h3>
                            
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
                            <li class="py-2">5 Full Length Mock Test</li>
                            <li class="py-2">20 Subject Papers Subject-wise 18 Law + 2 Language</li>
                            <li class="py-2">In-depth Analysis of Multiple Parameters</li>
                        </ul>
                    </div>
                    <p class="mb-0 base-color fs-16 fw-bold lh-24 text-lg-start text-center" style="color:#101828; ">
                            Rs 
                            4,999  
                            /-
                            <span class="discount">Rs 7000</span>
                            <span class="fs-12 fw-500 lh-24">(Inc. 18% GST)</span>
                            <span class=" percet">28.59%</span>
                        </p>
                        <button type="button" class="btn btn-outline-primary my-3 w-100" >See Details</button>
                      
                        
                 </div> 
            </div>  
        </div>
    </div>
</div>




<?php
     include_once "footer.php";
?>