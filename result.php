<?php

include_once "support.php";
include_once "conn.php";


$Limit = 9;

$sel_pagination = "SELECT * FROM photos";

$exe_pagination = mysqli_query($conn,$sel_pagination);

$no_of_records = mysqli_num_rows($exe_pagination);

$no_of_pages = ceil($no_of_records / $Limit);



$start = 0;

$page = $_GET['page'];

$current_page = $_GET['page'];

if($page > 1) {

    $prev = $page - 1;
} else {

    $prev = 1;
}

if($page < $no_of_pages) {

    $next = $page + 1;
} else {

    $next = $no_of_pages;
}

$page--;

$start = $page * $Limit;

// pegination is end

include_once "header.php";

?>
  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
                    $sel_resilt_c="SELECT * FROM photos LIMIT $start,$Limit";
                    $exe_result_c=mysqli_query($conn,$sel_resilt_c);
                    while($fetch_result_c=mysqli_fetch_assoc($exe_result_c)) {

            ?>
            <div class="col-xl-4 col-lg-3 col-md-2 col-12 clm_result mb-2">
                <img src="img/<?php echo $fetch_result_c['photos_image'] ?>" alt="" style="width:100%; height: 100%;" class="image_result">
                <span class="fs-16 fw-400 air" style="color: #212529;"><?php echo $fetch_result_c['photos_rank'] ?></span>
                <span class="fs-16 fw-400 name_result" style="color: #212529;"><?php echo $fetch_result_c['photos_name'] ?></span>
            </div>
            <?php
                    }
            ?>
         
        </div>
        <nav aria-label="Page navigation example">
                    <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="result.php?page=<?php echo $prev; ?>">Previous</a></li>

                                <?php
                                    for($i = 1 ; $i <= $no_of_pages ; $i++) {


                                    if($i == $_GET['page'])  {

                                ?>

                                    <li class="page-item active">
                                        <a class="page-link" href="result.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php


                                    } else {

                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="result.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php

                                    }
            
                               
                                    }
                                ?>
                            
                                <li class="page-item">
                                    <a class="page-link" href="result.php?page=<?php echo $next; ?>">Next</a>
                                </li>
                            </ul>
                    </nav> 
    </div>
  </div>




<?php
     include_once "footer.php";
?>