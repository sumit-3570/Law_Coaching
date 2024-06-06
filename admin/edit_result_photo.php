<?php
    include_once "support.php";
    include_once "conn.php";

  
    $student_image=$_POST['student_image'];
    $Student_rank=$_POST['Student_rank'];
    $Student_name=$_POST['Student_name'];
    $edit_id=$_GET['edit_id'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   


   
   if(isset($_POST['save'])) {
    $ins_prep_c="UPDATE photos SET
        	photos_image='$student_image',
            photos_rank='$Student_rank',
            photos_name='$Student_name'
            WHERE photos_id='$edit_id';
          
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit Results Photos</span>
                    <h3 class="my-3 text-center"> Edit Results Photos </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Photo Image</label>
                                <input type="file" class="form-control my-1" id="exampleFormControlInput1" name="student_image"placeholder="<?php echo $student_image ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Student rank</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="Student_rank"placeholder="<?php echo $Student_rank?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Student name</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="Student_name"placeholder="<?php echo $Student_name?>">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>