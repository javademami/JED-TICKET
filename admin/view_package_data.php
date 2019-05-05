<?php require_once"db/session.php"; require_once"db/db_config.php";	 ?>
<?php
	$res = select("SELECT * FROM package");
	if(mysqli_num_rows($res)>0) {
	?>
	<div class="table">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Ticket Package Name</th>
				<th>Ticket Package Limit</th>
				<th>Ticket Package Price</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; while($row = mysqli_fetch_array($res)){ extract($row);	?>
				<tr >
					<td><?=$i?> . </td>
					<td><?=strtoupper($package_name)?></td>
					<td><?=$package_limit?></td>
					<td><?=$package_rate,""?> $</td>
					<?php if($status==1){ ?>
					<td><button class="btn btn-success del_package" data-package_id="<?=$package_id?>" data-status="0"> Active</button></td>
					<?php } else { ?>
					<td><button class="btn btn-warning del_package" data-package_id="<?=$package_id?>" data-status="1"> Deactive</button></td>
					<?php } ?>
					
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
	</div>
	<?php  } else { ?>
	<h2 class="text-center">No package Yet</h2>
<?php  } ?>
