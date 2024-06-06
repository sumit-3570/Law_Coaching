<?php
include_once "support.php";
include_once "conn.php";

$otp_sys=rand(1000,9999);
echo $otp_sys;
if($_POST['submit']) {
   $Otp=$_POST['Otp'];
   if($otp_sys=$Otp) {
     header("location:reset_pass.php");
   }
}



include_once "header.php";

?>
<div class="container-fluid pass_form py-5">
    <form method="post">
    <div class="card text-center " style="width: 500px; margin: 0px 504px; background-color:background: #373B44;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #4286f4, #373B44); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;">
            <div class="card-header h5 text-white bg-primary">Check The OTP</div>
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Please check the otp
                    <h6><?php echo $loginerror?></h6>
                </p>
                <div data-mdb-input-init class="form-outline">
                    <input type="text"  class="form-control my-3" name="Otp" />
                    <label class="form-label" >Otp input</label>
                </div>
                <button class="btn btn-primary" type="submit" name="submit" value="submit"> Send</button>
               
            </div>
        </div>
    </form>
       
</div>





<?php
include_once "footer.php";
?>