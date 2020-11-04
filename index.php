<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>

	<h1>Create Read Update Delete</h1>
	<left>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
			<th>OPSI</th>
		</tr>
		<?php 
        include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
				<td>
					<a class="buttonadd" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a class="buttondelete" href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
    </table></left>
    <right>
    <h3 style="margin-top:0px;">Tambah data produk</h3>
	<form method="post" action="actionadd.php">
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
            <tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form><br></right>
</body>
</html>
