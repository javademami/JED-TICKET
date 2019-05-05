<?php require_once"db/session.php"; require_once"db/db_config.php";	 ?>
<?php
	$res = select("SELECT book.booking_date,book.booking_for,package.package_name,users.name,package.package_rate,movies.movies_name,book.seats FROM book INNER JOIN movies on book.movie_id=movies.moviesid INNER JOIN package on book.package_id = package.package_id INNER JOIN users on book.userid = users.userid");
	if(mysqli_num_rows($res)>0) {
	?>
	<div class="table">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Booking Date</th>
				<th>Booking For</th>
				<th>Movies Name</th>
				<th>Ticket Package</th>
				<th>Seats</th>
                <th>User Name</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $i=1; while($row = mysqli_fetch_array($res)){ extract($row);	?>
				<tr >
					<td><?=$i?> . </td>
					<td><?=$booking_date?></td>
					<td><?=$booking_for?></td>
                    <td><?=$movies_name?></td>
					<td><?=ucwords(strtolower($package_name))?></td>
                    <td><?=$seats?></td>
					<td><?=$name?></td>
					
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
	</div>
	<?php  } else { ?>
	<h2 class="text-center">No movies Yet</h2>
<?php  } ?>
