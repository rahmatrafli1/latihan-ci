<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title><?php echo $judul; ?></title>
</head>

<body>
	<?php echo anchor('barang/input', 'INPUT DATA BARANG', array('class' => 'btn btn-success mt-3 ms-3')); ?>
	<hr>

	<table class="table">
		<tr>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>HARGA</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php
		foreach ($barang as $b) {
			echo "<tr>
				<td>$b->kode_barang</td>
				<td>$b->nama_barang</td>
				<td>$b->harga</td>
				<td>" . anchor('barang/edit/' . $b->kode_barang, 'EDIT', array('class' => 'btn btn-warning')) . "</td>
				<td>" . anchor('barang/delete/' . $b->kode_barang, 'HAPUS', array('onclick' => "return ConfirmDialog();", 'class' => 'btn btn-danger')) . "</td>
			</tr>";
		}
		?>
	</table>

	<script>
		function ConfirmDialog() {
			var x = confirm("Are you sure to delete record?")
			if (x) {
				return true;
			} else {
				return false;
			}
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
