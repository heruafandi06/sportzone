<?php sleep(1); ?>
<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ ?>
<?php include "koneksi.php"; ?>
<?php
if(isset($_GET['id'])){
$a= "SELECT id_jadwal, tim1, tim2, tanggal, waktu, liga FROM jadwal WHERE id_jadwal = '$_GET[id]'";
$b= mysql_query($a);
list($idedit, $tim1edit, $tim2edit, $tanggaledit, $waktuedit, $ligaedit) = mysql_fetch_row($b);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal - Sport Zone</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="index.php">Sport Zone</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li><a href="berita.php">Berita</a></li>
							<li><a href="klasmen.php">Klasmen</a></li>
							<li><a href="jadwal.php">Jadwal</a></li>
						  </ul>
						  <form method="POST" action="jadwal.php" class="navbar-form navbar-right" role="search">
							<div class="form-group">
							  <input type="text" name="cari" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Search</button>
						  </form>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<?php if(isset($_GET['id'])){ ?> <?php }else{ ?>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
			  Tambah Data+
			</button><br><br>
			<?php } ?>

			<!-- Modal -->
			<div class="<?php if(isset($_GET['id'])){ ?> <?php }else{ ?> modal fade <?php } ?>" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<a href="jadwal.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
					<h4 class="modal-title" id="myModalLabel"><?php if(isset($_GET['id'])){ ?> Edit Data <?php }else{ ?> Tambah Data <?php } ?></h4>
				  </div>
				  <div class="modal-body">
					<form method="POST" action="jadwal_proses.php" class="form-inline">
					<?php
					if(isset($_GET['id'])){
					echo "<input type='hidden' name='aksi' value='Update'>";
					}else{
					echo "<input type='hidden' name='aksi' value='Tambah'>";
					}
					?>
				  <div class="form-group">
					  ID Jadwal <br><input type="text" name="id" class="form-control" id="inputJadwal" placeholder="ID Jadwal" value="<?php if(isset($_GET['id'])){ echo $idedit; } ?>" required><br>
					  Tim 1 <br><input type="text" name="tim1" class="form-control" id="inputTim1" placeholder="Tim 1" value="<?php if(isset($_GET['id'])){ echo $tim1edit; } ?>" required><br>
					  Tim 2 <br><input type="text" name="tim2" class="form-control" id="inputTim2" placeholder="Tim 2" value="<?php if(isset($_GET['id'])){ echo $tim2edit; } ?>" required><br>
					  Tanggal <br><input type="text" name="tanggal" class="form-control" id="inputTanggal" placeholder="Tahun-Bulan-Tanggal" value="<?php if(isset($_GET['id'])){ echo $tanggaledit; } ?>" required><br>
					  Waktu <br><input type="text" name="waktu" class="form-control" id="inputWaktu" placeholder="Jam:Menit:Detik" value="<?php if(isset($_GET['id'])){ echo $waktuedit; } ?>" required><br>
					  Liga <br><input type="text" name="liga" class="form-control" id="inputLiga" placeholder="Liga" value="<?php if(isset($_GET['id'])){ echo $ligaedit; } ?>" required>
				  </div><br><br>
				  <div class="modal-footer">
					<a href="jadwal.php"><button type="reset" class="btn btn-default">Reset</button></a>
					<button type="submit" class="btn btn-primary"><?php if(isset($_GET['id'])){ ?> Update <?php }else{ ?> Simpan <?php } ?></button>
				  </div>
				</form>
				  </div>
				</div>
			  </div>
			</div>
				<?php
				//pagging
				//1. cari banyak total data
				$total = mysql_query("SELECT * FROM jadwal");
				$total_data = mysql_num_rows($total);

				//2. tentukan banyak data yg diinginkan tampil
				$hal = 10;

				//3. cari jumlah banyak halaman
				$jum_hal = ceil($total_data/$hal);

				if(isset($_GET['awal'])) $awal = $_GET['awal'];
				else $awal = 0;
				?>
				<div class="table-responsive">
				  <table class="table table-bordered">
					<tr class="active">
						<th style="text-align:center;">ID Jadwal</th>
						<th style="text-align:center;">Tim 1</th>
						<th style="text-align:center;">Tim 2</th>
						<th style="text-align:center;">Tanggal</th>
						<th style="text-align:center;">Waktu</th>
						<th style="text-align:center;">Liga</th>
						<th colspan="2" style="text-align:center;">Aksi</th>
					</tr>
					<?php
						if(isset($_POST['cari'])) $kata = $_POST['cari'];
						else $kata = "";
						//4. batasi query dg Limit
						$str = "SELECT id_jadwal, tim1, tim2, tanggal, waktu, liga FROM jadwal WHERE tim1 LIKE '%$kata%' OR tim2 LIKE '%$kata%' LIMIT $awal, $hal ";
						$query = mysql_query ($str) or die (mysql_error());
						$jumlah = mysql_num_rows($query);
						if($jumlah == '0'){
						echo "<tr><td colspan='11' align='center'>Data kosong</td></tr>";
						} else {
						while(list($id, $tim1, $tim2, $tanggal, $waktu, $liga) = mysql_fetch_row($query)) {
					?>
					<tr style="text-align:center;">
						<td><?php echo $id; ?></td>
						<td><?php echo $tim1; ?></td>
						<td><?php echo $tim2; ?></td>
						<td><?php echo $tanggal; ?></td>
						<td><?php echo $waktu; ?></td>
						<td><?php echo $liga; ?></td>
						<td><a href="jadwal.php?id=<?php echo $id; ?>"><button class="btn btn-success">Edit</button></a></td>
						<td><a href="#" onclick="javascript: if (confirm('Yakin dihapus?')){
						window.location.href='jadwal_proses.php?aksi=Hapus&id=<?php echo $id ?>';}"><button class="btn btn-danger">Hapus</button></a></td>
					</tr>
					<?php
					}
					}
					?>
				  </table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<nav>
				  <ul class="pagination">
					<li>
						<?php if($awal != 0){ echo "<a href='jadwal.php?awal=".($awal-$hal)."' aria-label='Previous'>
							<span aria-hidden='true'>&laquo;</span>
							</a>";
							}
						?>
					</li>
					<li>
						<?php for($i=0; $i <  $jum_hal; $i++){
							$x = $i * $hal;
							if($awal == $x){ echo "<span aria-hidden='true' class='disabled' style='color:black;'>".($i+1)."</span>"; }else{ echo" <a href='jadwal.php?awal=$x'>
							".($i+1)."
							</a>";
							}
							}
						?>
					</li>
					<li>
						<?php if($awal != $x){ echo "<a href='jadwal.php?awal=".($awal+$hal)."' aria-label='Next'>
							<span aria-hidden='true'>&raquo;</span>
							</a>";
							}
						?>
					</li>
				</ul>
				</nav>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
}else{
header("location:login.php");
}
?>