<?php
    include_once "support.php";
    include_once "conn.php";

   
    $rajastan_course_live=$_POST['rajastan_course_live'];
    $rajastan_course_tile=$_POST['rajastan_course_tile'];
   
    $rajastan_course_duration=$_POST['rajastan_course_duration'];
    $rajastan_course_eligible=$_POST['rajastan_course_eligible'];
    $rajastan_course_hour=$_POST['rajastan_course_hour'];
    $rajastan_course_Price=$_POST['rajastan_course_Price'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO rajastan_course SET
            rajastan_course_live='$rajastan_course_live',
            rajastan_course_title='$rajastan_course_tile',
            
            rajastan_course_duration='$rajastan_course_duration',
            rajastan_course_eligible='$rajastan_course_eligible',
            rajastan_course_hour='$rajastan_course_hour',
            rajastan_course_price='$rajastan_course_Price'   
            
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Rajastan courses</span>
                    <h3 class="my-3 text-center"> Add Rajastan courses </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajastan Course Live</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="rajastan_course_live">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajastan Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="rajastan_course_tile">
                              
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajastan Course duration</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="rajastan_course_duration">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajastan Course eligible</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="rajastan_course_eligible">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajastan Course Hour</label>
                                <input type="text" class="form-control my-1"id="exampleFormControlInput1" name="rajastan_course_hour">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajstan Course Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="rajastan_course_Price">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>