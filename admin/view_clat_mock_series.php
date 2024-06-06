<?php
    include_once "support.php";
    include_once "conn.php";
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    } 
// single Delete clat Prep


$c_p_del=$_GET['c_p_del'];
if(isset($c_p_del)) {
    $del_clat_p="DELETE FROM clat_mock_series WHERE clat_mock_series_id='$c_p_del'";
    $exe_clat__del=mysqli_query($conn,$del_clat_p);
}

// single Delete clat end Prep

// multi delete start

    $clatdel=$_POST['clatdel'];
    foreach ($clatdel as $key => $value) {
        if($_POST['submit']) {
           $delall_clat_p="DELETE FROM clat_mock_series WHERE clat_mock_series_id='$value'"; 
           $exe_delall_clat_p=mysqli_query($conn,$delall_clat_p);
        }

    }

// multi delete end 

// update status is start

$id_stst=$_GET['id_stst'];
$status=$_GET['status'];
if(isset($id_stst)) {
    $up="UPDATE clat_mock_series SET
        clat_mock_series_status='$status'
        WHERE clat_mock_series_id ='$id_stst';
    ";
    $exe_up=mysqli_query($conn,$up);
}

// update status is end

// pegination is start

$Limit = 6;

$sel_pagination = "SELECT * FROM clat_mock_series";

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

    include_once "header_admin.php";
?>
      <div class="col-9 clm_dash">
                <a href="home.php">
                    <span class="text-black">Home</span>
                </a>
                <h2 class="my-1 text-center"> View Clat Mock test </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>
                                        <button class="btn btn-danger" name="submit" value="submit" type="submit">Delete</button>
                                    </th>
                                    <th> ID </th>
                                    <th>Selling</th>
                                    <th>Title</th>
                                    <th>P1</th>
                                    <th>P2</th>
                                    <th>p3</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Percentage</th>
                                    <th>color</th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                                    <?php
                                       $sel_clat_p="SELECT * FROM clat_mock_series LIMIT $start,$Limit";
                                       $exe_clat_p=mysqli_query($conn,$sel_clat_p);
                                       while($fetch_clat_p=mysqli_fetch_assoc($exe_clat_p)) {
                                           
                                    ?>
                            <tbody>
                                 <tr>
                                    <td>
                                        <input type="checkbox" name="clatdel[]" value="<?php echo $fetch_clat_p['clat_mock_series_id'] ?>">
                                    </td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_id'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_best'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_title'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_p1'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_p2'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_p3'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_price'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_discount'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_percent'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_mock_series_color'] ?></td>


                                    <td>
                                        <?php 
                                            if($fetch_clat_p['clat_mock_series_status']) {
                                        ?>
                                        <a href="view_clat_mock_series.php? id_stst=<?php echo $fetch_clat_p['clat_mock_series_id'] ?>&status=0">
                                                <button class="btn btn-success" type="button">ACTIVE</button>
                                        </a>
                                            
                                        <?php
                                            }else{
                                        ?>
                                            <a href="view_clat_mock_series.php? id_stst=<?php echo $fetch_clat_p['clat_mock_series_id'] ?>&status=1">
                                                <button class="btn btn-danger" type="button">INACTIVE</button>
                                            </a>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="edit_clat_mock_series.php?edit_id=<?php echo $fetch_clat_p['clat_mock_series_id'] ?>">
                                            <button class="btn btn-success" type="button">Edit</button>
                                    
                                         </a>
                                        
                                        <a href="view_clat_mock_series.php? c_p_del=<?php echo $fetch_clat_p['clat_mock_series_id'] ?>">
                                             <button class="btn btn-danger mt-2 " type="button">Delete</button>
                                        </a>
                                        
                                    </td>
                                   
                                    
                                 </tr>
                                 <?php
                                       }              
                                 ?>
                            </tbody>
                        </table>
                        
                    </form>
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="view_clat_mock_series.php?page=<?php echo $prev; ?>">Previous</a></li>

                                <?php
                                    for($i = 1 ; $i <= $no_of_pages ; $i++) {


                                    if($i == $_GET['page'])  {

                                ?>

                                    <li class="page-item active">
                                        <a class="page-link" href="view_clat_mock_series.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php


                                    } else {

                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="view_clat_mock_series.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php

                                    }
            
                               
                                    }
                                ?>
                            
                                <li class="page-item">
                                    <a class="page-link" href="view_clat_mock_series.php?page=<?php echo $next; ?>">Next</a>
                                </li>
                            </ul>
                    </nav>  
                   

     </div>

<?php
        include_once "footer_admin.php";

?>