<div class="container">
	<h1>Person</h1>
	
	<form method="post" action="<?php echo BASE ?>/person/add">
		<select name="region" class="form-control">
				<?php foreach ($result2 as $key => $res) {?>
					<option value="<?php echo $res['id'] ?>"><?php echo $res['name']; ?></option>
				<?php } ?>
				
			</select>
		<div class="input-group">
			<input class="form-control" type="text" name="name" placeholder="tambah person">
			
		</div>
		<div class="input-group">
			<input class="form-control" type="text" name="address" placeholder="Address">
			
		</div>
		<div class="input-group">
			<input class="form-control" type="number" name="income" placeholder="income">
			
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>

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