<?php
    include_once "support.php";
    include_once "conn.php";

  
    $apo_course_tile=$_POST['apo_course_tile'];
    $apo_course_duration=$_POST['apo_course_duration'];
    $apo_course_eligible=$_POST['apo_course_eligible'];
    $apo_course_hour=$_POST['apo_course_hour'];
    $apo_course_link=$_POST['apo_course_link'];
    $apo_course_Price=$_POST['apo_course_Price'];
    $apo_course_live=$_POST['apo_course_live'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO apo_course SET
        	apo_title_course='$apo_course_tile',
            apo_course_duration='$apo_course_duration',
            apo_course_eligible='$apo_course_eligible',
            apo_course_hour='$apo_course_hour',
            apo_course_link='$apo_course_link',
            price='$apo_course_Price',
            apo_course_live='$apo_course_live'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add APO courses</span>
                    <h3 class="my-3 text-center"> Add APO courses </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course Live</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="apo_course_live">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="apo_course_tile">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course duration</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="apo_course_duration">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course eligible</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="apo_course_eligible">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course Hour</label>
                                <input type="text" class="form-control my-1"id="exampleFormControlInput1" name="apo_course_hour">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course Link</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="apo_course_link">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Apo Course Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="apo_course_Price">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>