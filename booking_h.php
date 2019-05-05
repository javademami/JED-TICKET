<?php
session_start();
require_once"admin/db/db_config.php";


$query_fetch =select("SELECT book.booking_date,book.booking_for,package.package_name,package.package_rate,movies.movies_name,book.seats FROM book INNER JOIN movies on book.movie_id=movies.moviesid INNER JOIN package on book.package_id = package.package_id where book.userid='".$_SESSION['usersid']."' ");



?>
<html>
<head>
<title>Movies Pro | Home</title>
<?php include_once"head_files.php";?>
<?php include_once"header.php";?>
</head>

<body>
<!--/main-header-->
<!--/banner-section-->

<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->
<?php include_once"login-section.php";?>
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
<div class="agile_featured_movies">

<!--//tab-section-->
<?php //include_once"movies.php";?>

<div class="container">
<h2><?=ucwords($_SESSION['usersname'])?> Booking History</h2></br>
<?php

if(mysqli_num_rows($query_fetch)>0){
?>




<table class="table table-hover">
<thead>
<tr style="font-family: Times ;font-size: 30px ">
<th>Booking Date</th>
<th>Booking For</th>
<th>Ticket Package Name</th>
<th>Ticket Package Price</th>
<th>Movie Name</th>
<th>Total Booked Seats</th>
</tr>
</thead>
<tbody>




<tr class="info" style="font-family: Times ;font-size: 20px ">
<?php 
while($row = mysqli_fetch_array($query_fetch)){
extract($row);
?>
<td><?=$booking_date?></td>
<td><?=$booking_for?></td>
<td><?=ucwords(strtolower($package_name))?></td>
<td><?=$package_rate?> $</td>
<td><?=$movies_name?></td>
<td><?=$seats?></td>
</tr>
<?php } ?>


</tbody>
</table>
<?php } else { echo "No Booking Till yet"; } ?>
</div>

<!--//top-movies-->
</div>
</div>
<!--//content-inner-section-->
<!--/footer-bottom-->
<?php include_once"footer.php";?>
<?php include_once"footer_scripts.php";?>
</body>
</html>				