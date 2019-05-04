<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Berita - Sport Zone</title>

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
    <!--container-->
	<div class="container-fluid">
		<!--header-->
		<div class="row">
			  <div class="col-md-12" style="height:80px;background:black;">
			  <header>
			  <center><a href="index.php" style="font-size:35px;">-SportZone-</a><br>
			  <font color="white" size="3">The Biggest Site Of Football</font></center>
			  </header>
			  </div>
		</div>
		<!--end header-->
		<!--nav-->
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
						  <a class="navbar-brand" href="../index.php">Sport Zone</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li><a href="../berita-indonesia/">Berita Indonesia</a></li>
							<li><a href="../berita-internasional/">Berita Internasional</a></li>
							<li><a href="../klasmen/">Klasmen</a></li>
							<li><a href="../jadwal/">Jadwal</a></li>
						  </ul>
						  <form method="POST" action="../cari/" class="navbar-form navbar-right" role="search">
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
		<!--end nav-->
		<!--konten-->
		
		<!--end konten-->
		<!--kiri--->
		<div class="row">
		  <div class="col-md-12" style="background:white;height:200px auto;">
			<div class="row">
				<div class="col-md-3" style="height:700px auto;">
					<div class="page-header">
					<h3>BERITA TERHANGAT</h3>
					</div>
					<?php
					
					$query = mysql_query("SELECT * FROM berita ORDER BY rand() LIMIT 10");
					while($row = mysql_fetch_array($query)){
					?>
						<div class="media">
						  <div class="media-left">
							<a href="../detail/?id=<?php echo $row['id_berita']; ?>">
							  <img class="media-object" src="../images/berita/<?php echo $row['id_berita']; ?>.jpg" width="100px" height="50px" alt="...">
							</a>
						  </div>
						  <div class="media-body">
							<h4 class="media-heading"><a href="../detail/?id=<?php echo $row['id_berita']; ?>"><?php echo $row['judul']; ?></a></h4>
						  </div>
						</div><hr>
					<?php
					}
					?>
				</div>
				<div class="col-md-6" style="height:700px auto;">
				<div class="page-header">
				<?php
					$id=$_GET['id'];
					$query = mysql_query("SELECT * FROM berita WHERE id_berita='$id'");
					while($row = mysql_fetch_array($query)){
					//pisahkan tanggal
						$array1=explode("-",$row['tanggal']);
						$tahun=$array1[0];
						$bulan=$array1[1];
						$sisa1=$array1[2];
						$array2=explode(" ",$sisa1);
						$tanggal=$array2[0];
						//ubah nama bulan menjadi bahasa indonesia
						switch($bulan)
						{
						case"01";
						$bulan="Jan";
						break;
						case"02";
						$bulan="Feb";
						break;
						case"03";
						$bulan="Mar";
						break;
						case"04";
						$bulan="Apr";
						break;
						case"05";
						$bulan="Mei";
						break;
						case"06";
						$bulan="Jun";
						break;
						case"07";
						$bulan="Jul";
						break;
						case"08";
						$bulan="Agus";
						break;
						case"09";
						$bulan="Sep";
						break;
						case"10";
						$bulan="Okt";
						break;
						case"11";
						$bulan="Nov";
						break;
						case"12";
						$bulan="Des";
						break;
						}
						$hari = date('l');
						$hari1 = array(
							'Sunday' => 'Minggu',
							'Monday' => 'Senin',
							'Tuesday' => 'Selasa',
							'Wednesday' => 'Rabu',
							'Thursday' => 'Kamis',
							'Friday' => 'Jumat',
							'Saturday' => 'Sabtu',
						);
				?>
				<h3 class="text-uppercase"><?php echo $row['judul']; ?></h3>
				</div><font color="white" style="background:black;">Diposkan pada <?php echo $hari1[$hari]; ?>, <?php echo $tanggal; ?> <?php echo $bulan; ?> <?php echo $tahun; ?></font>
				<div class="media">
						<div class="media-center">
							
							  <img class="media-object" src="../images/berita/<?php echo $row['id_berita']; ?>.jpg" width="100%" alt="..."><br>
							
						</div>
					<div class="media-body">					
					<p><div style="text-align:justify;"><?php echo $row['isi']; ?></div></p>
					</div><br>
					<?php
					}
				?>
				</div>
				</div>
				<div class="col-md-3" style="height:700px auto;">
					<div class="page-header">
					<h3>SIDEBAR</h3>
					</div>
				</div>
			</div>
		  </div>
		</div>
		<!--end kiri-->
		<!--footer-->
		<div class="row">
			  <div class="col-md-12" style="height:30px;background:black;color:white;">
				<center><footer>&copy; 2016 - Sport Zone - All Right Reserved.</footer></center>
			  </div>
		</div>
		<!--end footer-->
	</div>
	<!--end container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>