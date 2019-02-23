<div class="container">
	<h1>selamat datang</h1>
	<form method="post" action="<?php echo BASE ?>/person/index">
		<div class="row">
			<div class="col-md-6">
				<select name="region" class="form-control">
					<?php foreach ($result2 as $key => $res) {?>
						<option value="<?php echo $res['id'] ?>"><?php echo $res['name']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Cari Berdasarkan daerah</button>
					<button class="btn btn-primary outlined">Tampilan Semua</button>
				</div>

			</div>
		</div>
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
				<th scope="col">Action</th>
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
					<td><a href="<?php echo BASE ?>/person/delete/<?php echo $r['id'] ?>">Delete</a></td>
					
				</tr>

			<?php } ?>



		</tbody>
	</table>
</div>