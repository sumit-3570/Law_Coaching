<?php
    include_once "support.php";
    include_once "conn.php";

  
    $up_coaching_heading=$_POST['up_coaching_heading'];
    $up_coaching_para=$_POST['up_coaching_para'];
    $up_coaching_image=$_POST['up_coaching_image'];
    $edit_all=$_GET['edit_all'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE up_judiciry_coach SET
        up_judiciry_coach_title='$up_coaching_heading',
        up_judiciry_coach_para='$up_coaching_para',
        up_judiciry_coach_image='$up_coaching_image'
        WHERE up_judiciry_coach_id ='$edit_all';
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit UP Coaching why</span>
                    <h3 class="my-3 text-center"> Edit UP Coaching why </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Coaching why Title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_coaching_heading"Placeholder="<?php echo $up_coaching_heading ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Coaching why Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_coaching_para"Placeholder="<?php echo $up_coaching_para ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">up Coaching why Images</label>
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="up_coaching_image"Placeholder="<?php echo $up_coaching_image ?>">
                                  
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>