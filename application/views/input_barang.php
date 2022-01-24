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
	<?php echo form_open('barang/input_simpan'); ?>
	<table class="ms-2 mt-2">
		<tr>
			<td>KODE BARANG</td>
			<td><?php echo form_input('kode_barang', '', ['placeholder' => 'Kode Barang']); ?></td>
		</tr>
		<tr>
			<td>NAMA BARANG</td>
			<td><?php echo form_input('nama_barang', '', ['placeholder' => 'Nama Barang']); ?></td>
		</tr>
		<tr>
			<td>HARGA BARANG</td>
			<td><?php echo form_input('harga', '', ['placeholder' => 'Harga Barang']); ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo form_submit('SUBMIT', 'SIMPAN DATA', array('class' => 'btn btn-primary')); ?>
				<?php echo anchor('', 'Kembali', array('class' => 'btn btn-secondary')); ?>
			</td>
		</tr>
	</table>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
