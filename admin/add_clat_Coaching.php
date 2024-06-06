<?php
    include_once "support.php";
    include_once "conn.php";

  
    $Clat_prog_head=$_POST['Clat_prog_head'];
    $clat_prog_para=$_POST['clat_prog_para'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_coahing SET
        clat_coahing_heading='$Clat_prog_head',
        clat_coahing_paragraph='$clat_prog_para'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Coachin Paragraph</span>
                    <h3 class="my-3 text-center"> Add Clat Coachin Paragraph </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Coaching Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="Clat_prog_head">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat coaching paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_prog_para">
                                  
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>