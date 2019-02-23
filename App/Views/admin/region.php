<div class="container">
	<h1>Region</h1>
	<form>
		<div class="input-group">
			<input type="form-control" name="region" placeholder="tambah region">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
	</form>
	<table class="table">
			<thead class="thead-dark">
				<tr><td>No</td><td>Name</td><td>Created At</td></tr>
			
			</thead>
			<?php $i = 1; ?>
			<?php foreach ($result as $key => $r) {?>
				<tr>
					<th scope="row"><?php echo $i ++; ?></th>
					<td><?php echo $r['name'] ?></td>
					<td><?php echo $r['created_at'] ?></td>
				</tr>

			<?php } ?>
		
	</table>
</div>