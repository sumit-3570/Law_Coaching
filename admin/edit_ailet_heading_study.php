<?php
    include_once "support.php";
    include_once "conn.php";

  
   $ailet_study_material_head=$_POST['ailet_study_material_head'];
   $ailet_study_material_para=$_POST['ailet_study_material_para'];
   $edit_id=$_GET['edit_id'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE ailet_study SET
        ailet_study_heading='$ailet_study_material_head',
        ailet_study_para='$ailet_study_material_para'
        WHERE ailet_study_id ='$edit_id';
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Ailet Study Material</span>
                    <h3 class="my-3 text-center"> Add Ailet Study Material </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet material Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_head"placeholder="<?php echo $ailet_study_material_head ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet study material paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_para"placeholder="<?php echo $ailet_study_material_para ?>">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>