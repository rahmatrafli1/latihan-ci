<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $judul; ?></title>
</head>

<body>
	<?php echo form_open('barang/edit_simpan'); ?>
	<?php echo form_hidden('id', $this->uri->segment(3)); ?>
	<table>
		<tr>
			<td>KODE BARANG</td>
			<td><?php echo form_input('kode_barang', $product['kode_barang'], ['placeholder' => 'Kode Barang']); ?></td>
		</tr>
		<tr>
			<td>NAMA BARANG</td>
			<td><?php echo form_input('nama_barang', $product['nama_barang'], ['placeholder' => 'Nama Barang']); ?></td>
		</tr>
		<tr>
			<td>HARGA BARANG</td>
			<td><?php echo form_input('harga', $product['harga'], ['placeholder' => 'Harga Barang']); ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo form_submit('SUBMIT', 'EDIT DATA'); ?>
				<?php echo anchor('', 'Kembali'); ?>
			</td>
		</tr>
	</table>
</body>

</html>
