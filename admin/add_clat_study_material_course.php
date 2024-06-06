<?php
    include_once "support.php";
    include_once "conn.php";

   
    $clat_study_material_image=$_POST['clat_study_material_image'];
    $clat_study_course_tile=$_POST['clat_study_course_tile'];
    $clat_study_material_lines_1=$_POST['clat_study_material_lines_1'];
    $clat_study_material_lines_2=$_POST['clat_study_material_lines_2'];
    $clat_study_material_lines_3=$_POST['clat_study_material_lines_3'];
    $clat_study_material_lines_4=$_POST['clat_study_material_lines_4'];
    $clat_study_materia_Price=$_POST['clat_study_materia_Price'];
    $clat_study_materia_discount=$_POST['clat_study_materia_discount'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_study_course SET
        	clat_study_course_image='$clat_study_material_image',
            clat_study_course_title='$clat_study_course_tile',
            clat_study_course_lines_1='$clat_study_material_lines_1',
            clat_study_course_lines_2='$clat_study_material_lines_2',
            clat_study_course_lines_3='$clat_study_material_lines_3',
            clat_study_course_lines_4='$clat_study_material_lines_4',
            clat_study_course_price='$clat_study_materia_Price',
            clat_study_materia_discount='$clat_study_materia_discount'
            
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Study Course</span>
                    <h3 class="my-3 text-center"> Add Clat Study Course </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Study material image</label>
                                <input type="file" class="form-control my-1" id="exampleFormControlInput1" name="clat_study_material_image">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Study Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_course_tile">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material lines 1 </label>
                              
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_lines_1">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material lines 2 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_lines_2">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material lines 3 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_lines_3">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">clat study material lines 4 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_material_lines_4">
                               
                                
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Study material Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_materia_Price">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Study material Discount</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_study_materia_discount">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>