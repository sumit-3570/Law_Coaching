<p?php
   include_once "support.php";
   include_once "conn.php";
 
  
  $submit=$_POST['submit'];
  if(isset($submit)) {
    $Email=$_POST['Email'];
     $password=$_POST['password'];
     $sel_sign_in="SELECT * FROM sign_in WHERE sign_in_email='$Email' and sign_in_pass='$password'";
     $exe_sign_in=mysqli_query($conn,$sel_sign_in);
     $fetch_sign_in=mysqli_num_rows($exe_sign_in);
 
    if($fetch_sign_in == 1) {
       header("location:index.php");    
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">

</head>

<body>
  <!-- section statrt menubar -->
  <div class="container-fluid section1_main_1 p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary nv_bar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/33665015-ede5-4084-9a1e-4a871973e211-1665488267.svg"
            style="width: 100px; " alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle nv_1" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Law Classes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="clat.php">CLAT</a></li>
                <li><a class="dropdown-item" href="ailet.php">AILET</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nv_1" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Judiciary Exam
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="apo.php">APO</a></li>
                <li><a class="dropdown-item" href="Rajastan.php">Rajastan Judiciary</a></li>
                <li><a class="dropdown-item" href="up.php">UP judiciary</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nv_1" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Study Material
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="clat_study.php">CLAT</a></li>
                <li><a class="dropdown-item" href="ailet_study.php">AILET</a></li>
                <li><a class="dropdown-item" href="multi_state_study.php">MULTI STATE JUDICIARY</a></li>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nv_1" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Test Series
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="clat_test.php">CLAT</a></li>
                <li><a class="dropdown-item" href="ailet_test.php">AILET</a></li>
                <li><a class="dropdown-item" href="haryana_test.php">Haryana Judiciary</a></li>
                <li><a class="dropdown-item" href="civil_test.php">civil Judge</a></li>
                <li><a class="dropdown-item" href="rajastan_test.php">Rajastan judiciary</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nv_1" href="" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Results
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="result.php">Law Courses</a></li>

              </ul>
            </li>
            <a href="center.php">
              <button class="btn nv_1">Our Center</button>
            </a>
           
            <button type="button" class="btn phone" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-phone nv_1"></i>
            </button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Support</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="fs-32 py-1" style="font-weight:700;">Our friendly team is here to help.</p>
                      <p class="fs-25 py-1">Call Us : <span class="fw-bold">7 Days 9:30 AM to 7:30 PM</span></p>
                      <p class="fs-32 py-1">For CLAT Admission Queries Call</p>
                      <h6 class="text-danger">+91 76659 44999</h6>
                      <p class="fs-32 py-1">For Judiciary Admission Queries Call</p>
                      <h6 class="text-danger">+91 76659 44999</h6>
                      <p class="fs-32 py-1">For Live Classes/Technical Queries Call</p>
                      <h6 class="text-danger">+91 76659 04888 /+91 7851955135</h6>
                      <p class="fs-32 py-1">For Student Portal & Courier Queries Call</p>
                      <h6 class="text-danger">+91 93529 07311</h6>
                      <p class="fs-32 py-1">For General Queries Call:</p>
                      <h6 class="text-danger">0291-2655777</h6>
                     
                    </div>
                    <div class="modal-footer">
                    <div class="foter_cont">
                      <p class="fs-32 py-1">For Any Other Queries Mail:</p>
                      <a href="mailto:support@lawpreptutorial.com">
                        <h6 class="text-info mt-1 ms-1">support@lawpreptutorial.com</h6>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
            



            <button type="button btn-danger px-4 py-0 mx-3 rounded-1 nv_1" class="btn btn-primary"
              data-bs-toggle="modal" data-bs-target="#exampleModal">
              Sign In
            </button>


          </ul>
        </div>
        <form method="post">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                 
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In With Email Number</h1>
                
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div>
                    <input type="text" name="Email"  placeholder="Enter the Email Id"
                      style="width:100%; height: 50px;" class="my-2">
                  </div>
                  <div>
                    <input type="password" name="password" placeholder=" password"
                      style="width:100%; height: 50px;">
                  </div>

                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-danger py-2 mb-3" name="submit" value="submit" style="width: 100%;">Login</button>
                  <a href="forgetpassword.php">
                    <p class="text-info text-center">Forget password?</p>
                  </a>
                
                </div>

              </div>
            </div>
          </div>
        </form>

      </div>
    </nav>
  </div>
  <!-- section start end menubar -->