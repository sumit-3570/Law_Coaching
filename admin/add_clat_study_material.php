<?php
    include_once "support.php";
    include_once "conn.php";

  
   $clat_study_material_head=$_POST['clat_study_material_head'];
   $clat_study_material_para=$_POST['clat_study_material_para'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_study SET
        clat_study_heading='$clat_study_material_head',
        clat_study_para='$clat_study_material_para'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Study Material</span>
                    <h3 class="my-3 text-center"> Add Clat Study Material </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_head">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_para">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>