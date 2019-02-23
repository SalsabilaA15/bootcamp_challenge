<div class="container">
	<h1>Person</h1>
	

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Region</th>
				<th scope="col">Address</th>
				<th scope="col">Income</th>
				<th scope="col">Created_At</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($result as $key => $r) {?>
				<tr>
					<th scope="row"><?php echo $i ++; ?></th>
					<td><?php echo $r['name'] ?></td>
					<td><?php echo $r['name'] ?></td>
					<td><?php echo $r['address'] ?></td>
					<td><?php echo $r['income'] ?></td>
					<td><?php echo $r['created_at'] ?></td>
					
				</tr>

			<?php } ?>



		</tbody>
	</table>
	
</div>