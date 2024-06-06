<?php
    include_once "support.php";
    include_once "conn.php";

  
   $up_head=$_POST['up_head'];
   $up_para=$_POST['up_para'];
    $edit_id=$_GET['edit_id'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE up_main_head SET
        up_main_head_title='$up_head',
        up_main_head_para='$up_para'
        WHERE up_main_head_id ='$edit_id';
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit UP Heading</span>
                    <h3 class="my-3 text-center"> Edit UP Heading </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">UP Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_head"placehoder="<?php echo $up_head ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">UP Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="up_para"placehoder="<?php echo $up_para ?>">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>