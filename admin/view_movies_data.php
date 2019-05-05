<?php require_once"db/session.php"; require_once"db/db_config.php";	 ?>
<?php
	$res = select("SELECT * FROM movies");
	if(mysqli_num_rows($res)>0) {
	?>
	<div class="table">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Movies Name</th>
				<th>Movies Image</th>
				<th>Movies Label</th>
				<th>Movies Year</th>
				<th>Movies Rating</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; while($row = mysqli_fetch_array($res)){ extract($row);	?>
				<tr >
					<td><?=$i?> . </td>
					<td><?=$movies_name?></td>
					<td><img src="../movies/<?=$movies_image?>" width="100"></td>
					<td><?=$movies_label?></td>
					<td><?=$movies_year?></td>
					<td><?=$movies_rating?></td>
					<td><button class="btn btn-primary del_movies" data-movies_id="<?=$moviesid?>" ><i class="fa fa-cut" style="color:#fff;"></i> Delete</button></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
	</div>
	<?php  } else { ?>
	<h2 class="text-center">No movies Yet</h2>
<?php  } ?>
