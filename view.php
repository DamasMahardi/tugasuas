<?php
error_reporting(E_ALL);
include('admin/koneksi.php');
//$title = 'Data Barang';
$id =$_GET['id'];
$sql = "SELECT * FROM barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val){

	if ($var==$val) return 'selected="selected"';
	return false;
}
include('header.php');
//include('nav.php');

 ?>
 <div class="content_b">
 	<div class="main">
 		<table>

       <tr>
         <th>Gambar</th>
         <th>Nama Barang</th>
          <th>Harga Jual</th>


       </tr>
       <tr>

       	<td><?php echo "<img src=\"{$data['gambar']}\" />"; ?></td>
          <td><?php echo $data['nama_barang']; ?></td>

           <td class="right"><?php echo number_format($data['harga_jual'],2,',','.'); ?></td>
           


       </tr>

		</table>
		<hr/>
		<div class="daftar">
			<h3>Silakan Order</h3>
			<hr> <br/>
			<p>
				Nama   : Damas Mahardi <br>
				No Telp : 082126994964 <br>
				No Rekening (cimb niaga) ; 898789 998 797 7988 <br>
				a/n Damas Mahardi <br>
			</p>
		</div>

 	</div>

 </div>
 <?php include_once('admin/footer.php') ?>
