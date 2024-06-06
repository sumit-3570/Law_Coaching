<?php
    include_once "support.php";
    include_once "conn.php";

  
    $student_image=$_POST['student_image'];
    $Student_rank=$_POST['Student_rank'];
    $Student_name=$_POST['Student_name'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }


   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO photos SET
        	photos_image='$student_image',
            photos_rank='$Student_rank',
            photos_name='$Student_name'
          
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Results Photos</span>
                    <h3 class="my-3 text-center"> Add Results Photos </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Photo Image</label>
                                <input type="file" class="form-control my-1" id="exampleFormControlInput1" name="student_image">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Student rank</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="Student_rank">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Student name</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="Student_name">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>