<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $judul; ?></title>
</head>

<body>
	<?php echo anchor('barang/input', 'INPUT DATA BARANG'); ?>
	<hr>

	<table border="1">
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
				<td>" . anchor('barang/edit/' . $b->kode_barang, 'EDIT') . "</td>
				<td>" . anchor('barang/delete/' . $b->kode_barang, 'HAPUS', array('onclick' => "return ConfirmDialog();")) . "</td>
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

</body>

</html>
