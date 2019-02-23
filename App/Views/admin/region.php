<div class="container">
	<h1>Region</h1>
	<form method="post" action="<?php echo BASE ?>/region/add">
		<div class="input-group">
			<input type="form-control" name="region" placeholder="tambah region">
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
	</form>
	<table class="table">
			<thead class="thead-dark">
				<tr>
					<td>No</td>
					<td>Name</td>
					<td>Created At</td>
					<td>Action</td>
				</tr>
			
			</thead>
			<?php $i = 1; ?>
			<?php foreach ($result as $key => $r) {?>
				<tr>
					<th scope="row"><?php echo $i ++; ?></th>
					<td><?php echo $r['name'] ?></td>
					<td><?php echo $r['created_at'] ?></td>
					<td><a href="<?php echo BASE ?>/region/delete/<?php echo $r['id'] ?>">Hapus</a>|</td>
				</tr>
			<?php } ?>
		
	</table>
</div>