<?php
    include_once "support.php";
    include_once "conn.php";
    p($_POST);
    $up_course_live=$_POST['up_course_live'];
    $up_course_tile=$_POST['up_course_tile'];
    $up_course_duration=$_POST['up_course_duration'];
    $up_course_eligible=$_POST['up_course_eligible'];
    $up_course_hour=$_POST['up_course_hour'];
    $up_course_Price=$_POST['up_course_Price'];
    $edit_all=$_GET['edit_all'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE up_course SET
        up_course_live='$up_course_live', 
        up_course_title='$up_course_tile',
        up_course_duration='$up_course_duration',
        up_course_eligible='$up_course_eligible',
        up_course_hours='$up_course_hour',
        up_course_price='$up_course_Price'
        WHERE up_course_id ='$edit_all';	         
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit up courses</span>
                    <h3 class="my-3 text-center"> Edit up courses </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Course Live</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="up_course_live" placeholder="<?php echo $up_course_live ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_course_tile"placeholder="<?php echo $up_course_tile ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Course duration</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_course_duration"placeholder="<?php echo $up_course_duration ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Course eligible</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="up_course_eligible"placeholder="<?php echo $up_course_eligible ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Course Hour</label>
                                <input type="text" class="form-control my-1"id="exampleFormControlInput1" name="up_course_hour"placeholder="<?php echo $up_course_hour ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Rajstan Course Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_course_Price"placeholder="<?php echo $up_course_Price ?>">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>