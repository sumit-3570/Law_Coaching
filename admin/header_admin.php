<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <div class="container-fluid sect_1_main">
        <h2 class="text-center text-white my-4">ADMIN</h2>
        <div class="btn_log">
            <a href="logout.php">
                 <button class="btn btn-danger ">Log Out</button>
            </a>
                 
        </div>
        
    </div>
    <!-- section2_dashboard panel -->
    <div class="container-fluid dash_section1">
        <div class="row rw_dash">
            <div class="col-3 clm_dash">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Enqury Data
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                <a href="view_enquiry.php">
                                     <button class="btn text-white" style="background-color: #162331 ;">View</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
                                Banner
                            </button>
                        </h2>
                        <div id="flush-collapsetwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_banner.php">
                                     <button class="btn text-white" style="background-color: #162331 ;">Add banner Image</button>
                                </a>
                              
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                               Clat Prepration
                            </button>
                        </h2>
                        <div id="flush-collapsethree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_prepration.php">
                                     <button class="btn text-white" style="background-color: #162331 ;">Add Clat Prepration</button>
                                </a>
                                <a href="view_clat_prepration.php">
                                     <button class="btn text-white" style="background-color: #162331 ;"> View Clat prep</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                               Legal Aspiration
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_legal_aspiration.php">
                                     <button class="btn text-white" style="background-color: #162331 ;">Add Legal Aspiration</button>
                                </a>
                                <a href="view_legal_aspiration.php">
                                     <button class="btn text-white" style="background-color: #162331 ;"> View Legal Aspiration</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                               Question and Answer
                            </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_question.php">
                                     <button class="btn text-white" style="background-color: #162331 ;">Add ques and ans</button>
                                </a>
                                <a href="view_question.php">
                                     <button class="btn text-white" style="background-color: #162331 ;"> View ques and ans</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                              Clat Coaching Program
                            </button>
                        </h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_Coaching.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Coaching Program</button>
                                </a>
                                <a href="view_clat_Coaching.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;"> View Coaching Program</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                              Clat courses
                            </button>
                        </h2>
                        <div id="flush-collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_Courses.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat courses</button>
                                </a>
                                <a href="view_clat_courses.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;"> view Clat courses</button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                              Ailet courses
                            </button>
                        </h2>
                        <div id="flush-collapseeight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_ailet_Courses.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat courses</button>
                                </a>
                                <a href="view_ailet_courses.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat courses</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                              Apo Heading
                            </button>
                        </h2>
                        <div id="flush-collapsenine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_apo_heading.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Apo Heading</button>
                                </a>
                                <a href="view_apo_heading.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Apo Heading</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
                              Apo course
                            </button>
                        </h2>
                        <div id="flush-collapseten" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_apo_course.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Apo course</button>
                                </a>
                                <a href="view_apo_course.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Apo course</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeleven" aria-expanded="false" aria-controls="flush-collapseeleven">
                              Rajastan course
                            </button>
                        </h2>
                        <div id="flush-collapseeleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_rajastan_course.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Rajastan course</button>
                                </a>
                                <a href="view_rajastan_course.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Rajastan course</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwelve" aria-expanded="false" aria-controls="flush-collapsetwelve">
                              UP course
                            </button>
                        </h2>
                        <div id="flush-collapsetwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_up_course.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add UP course</button>
                                </a>
                                <a href="view_up_course.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view UP course</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethirteen" aria-expanded="false" aria-controls="flush-collapsethirteen">
                               Why UP coaching ?
                            </button>
                        </h2>
                        <div id="flush-collapsethirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_up_coaching_why.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add UP Coaching why</button>
                                </a>
                                <a href="view_up_coaching_why.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view UP Coaching why</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefourteen" aria-expanded="false" aria-controls="flush-collapsefourteen">
                              UP main Heading
                            </button>
                        </h2>
                        <div id="flush-collapsefourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_up_heading.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add UP Heading</button>
                                </a>
                                <a href="view_up_heading.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view UP paragraph</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefifteen" aria-expanded="false" aria-controls="flush-collapsefifteen">
                              Clat Study Material
                            </button>
                        </h2>
                        <div id="flush-collapsefifteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_study_material.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat Study Material</button>
                                </a>
                                <a href="view_clat_study_material.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat Study Material</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesixteen" aria-expanded="false" aria-controls="flush-collapsesixteen">
                              Clat Study Course
                            </button>
                        </h2>
                        <div id="flush-collapsesixteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_study_material_course.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat Study Material course</button>
                                </a>
                                <a href="view_clat_study_material_course.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat Study Material course</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseventy" aria-expanded="false" aria-controls="flush-collapseseventy">
                              Aileet Study Heading
                            </button>
                        </h2>
                        <div id="flush-collapseseventy" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_ailet_study_material_course.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Ailet Study Material course</button>
                                </a>
                                <a href="view_ailet_study_material_course.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Ailet Study Material course</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeighteen" aria-expanded="false" aria-controls="flush-collapseeighteen">
                              Ailet Study Course
                            </button>
                        </h2>
                        <div id="flush-collapseeighteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_ailet_study_material_classes.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Ailet Study Material classes</button>
                                </a>
                                <a href="view_ailet_study_material_classes.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Ailet Study Material classes</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseninteen" aria-expanded="false" aria-controls="flush-collapseninteen">
                              Multi_state Study Course
                            </button>
                        </h2>
                        <div id="flush-collapseninteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_multi_study_material_classes.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Multi-state Study Material classes</button>
                                </a>
                                <a href="view_multi_study_material_classes.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Multi-state Study Material classes</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwenty" aria-expanded="false" aria-controls="flush-collapsetwenty">
                              Clat Test Series
                            </button>
                        </h2>
                        <div id="flush-collapsetwenty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_test_series.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat Test Series</button>
                                </a>
                                <a href="view_clat_test_series.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat Test Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_one" aria-expanded="false" aria-controls="flush-collapsetwnty_one">
                              Clat Mock Test
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_one" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_mock_series.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat Mock Series</button>
                                </a>
                                <a href="view_clat_mock_series.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat Mock Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_two" aria-expanded="false" aria-controls="flush-collapsetwnty_two">
                              Clat Mock Choose Why
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_two" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_clat_mock_choose.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Clat Mock choose Why</button>
                                </a>
                                <a href="view_clat_mock_choose.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Clat Mock choose Why</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_three" aria-expanded="false" aria-controls="flush-collapsetwnty_three">
                              Ailet Mock Test
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_three" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_ailet_mock_series.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Ailet Mock Series</button>
                                </a>
                                <a href="view_ailet_mock_series.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Ailet Mock Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_four" aria-expanded="false" aria-controls="flush-collapsetwnty_four">
                              Haryana Mock Test
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_four" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_Haryana_mock_series_head.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Haryana Mock Series Heading</button>
                                </a>
                                <a href="view_Haryana_mock_series_head.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Haryana Mock Series Heading</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_five" aria-expanded="false" aria-controls="flush-collapsetwnty_five">
                              Haryana Mock Test series
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_five" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_Haryana_mock_series_1.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Haryana Mock Series</button>
                                </a>
                                <a href="view_Haryana_mock_series_1.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Haryana Mock Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_six" aria-expanded="false" aria-controls="flush-collapsetwnty_six">
                              Civil Mock Test series
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_six" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_civil_mock_series.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add civil Mock Series</button>
                                </a>
                                <a href="view_civil_mock_series.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view civil Mock Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_saven" aria-expanded="false" aria-controls="flush-collapsetwnty_saven">
                              Rajstan Mock Test series Heading
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_saven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_rajastan_test_series_heading.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Rajstan test Series heading</button>
                                </a>
                                <a href="view_rajastan_test_series_heading.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Rajstan test Series heading</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_eight" aria-expanded="false" aria-controls="flush-collapsetwnty_eight">
                              Rajstan Mock Test series 
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_eight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_rajastan_mock_series.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Rajstan_mock Series</button>
                                </a>
                                <a href="view_rajastan_mock_series.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Rajstan_mock Series</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_nine" aria-expanded="false" aria-controls="flush-collapsetwnty_nine">
                              Results
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_nine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_result_photo.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Result Photos</button>
                                </a>
                                <a href="view_result_photo.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Result Photos</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header ">
                            <button class="accordion-button collapsed itm text-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwnty_ten" aria-expanded="false" aria-controls="flush-collapsetwnty_ten">
                              Center
                            </button>
                        </h2>
                        <div id="flush-collapsetwnty_ten" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bdy">
                                 <a href="add_center.php">
                                     <button class="btn text-white mb-2 ms-5" style="background-color: #162331 ;">Add Our center</button>
                                </a>
                                <a href="view_center.php">
                                     <button class="btn text-white ms-5" style="background-color: #162331 ;">view Our center</button>
                                </a>
                               
                            </div>
                        </div>   
                    </div>
                   
                    
                    
                    
                </div>
            </div>