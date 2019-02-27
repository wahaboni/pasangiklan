<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>PasangIklan - Daring Jual Beli Barang Harga Nego</title>
</head>
<body bgcolor="f7f7ff">
	<div class="bagian">
		<?php include 'header.php'; ?>
	</div>
	<div class="bagian">
		<div class="content">
			<div class="bagian">
				<div class="col-11 pencarian">
						<form method="get" accept-charset="utf-8">
							<i class="fa fa-search"></i> <label>Cari Semua Iklan di PasangIklan</label>
							<input type="text" name="cari" placeholder="Jual Tanah,Mobil Bekas..." class="col-6">
							<button type="submit"><i class="fa fa-search"></i> Cari  !</button>
						</form>
					
				</div>
			</div>
			<div class="col-12 pernyataan">
				<p>Cari dan Temukan Beragam Iklan Aktif dengan Cepat dan Lengkap dengan Beragam Kategori iklan yang meliputi Properti, Elektronik, Fashion, Peralatan, Perabotan Rumah, Tanah, Bangunan bahkan Jasa. 
				</p>
				<p>Bertemu dengan Pengiklan dan Transaksi di Tempat, Bertransaksi tanpa melihar Produk nya langsung, untuk Menghindari Beragam Penipuan.</p>
			</div>
		</div>
	</div> 
	<!-- Akhir Pencarian Atas -->

	<div class="bagian"> <!-- Daftar Iklan -->
		<div class="col-11 daftariklan">
		<!-- DAFTAR IKLAN -->
			<div id="isiiklan">
				<img src="img/tanah.jpg" class="col-1" align="left">
				<label class="judul">Dijual Tanah Seluas 5 hektar Daerah Gading Serpong, COD</label><br>
				<label class="tgl"><i>31 Oktober 2018 - Kota Tangerang</i></label>
				<br>
				<label class="desk">Tempat mudah diakses dari Jalan Utama dan TOL, gambar membangun karena dekat dari tempat dan Toko Kelontongan,
				Sumber Air. Nego Sampai Deal. BU untuk Membuka usaha. Surat-surat lengkap</label><br>
				<label class="harga">Rp. 35.000.000 ,-</label>
				<a href="pesan.php"><button class="col-2 btnpesan">Pesan</button></a>
				<a href="rincian.php"><button class="col-2 btnrincian">Rincian</button></a>
			</div>
			<?php
			include ('koneksi.php');
			echo $konek;


			?>
		

				<!-- Selanjutnya -->
			<div id="lanjut" class="col-2">
				<button>Selanjutnya >></button>
			</div>
		</div> 
	</div><!-- Akhir Daftar Iklan -->
	<div class="bagian">
		<div class="col-11 footer">
			<p><b>PasangIklan</b> - Adalah daring Untuk Memasang Iklan secara Terbuka dan Umum. Cari dan Temukan Beragam Iklan Aktif 
				dengan Cepat dan Lengkap dengan Beragam Kategori iklan yang meliputi Properti, Elektronik, Fashion, Peralatan, 
				Perabotan Rumah, Tanah, Bangunan bahkan Jasa. Bertemu dengan Pengiklan dan Transaksi di Tempat, Hindari 
			bertransaksi tanpa melihat Produk nya langsung, untuk Menghindari Beragam Penipuan.</p>
			
			<div id="kategori" class="col-3">
				<label><b>Jelajahi Kategori</b></label>
				<ul>
					<li><a href="#" title="Properti">Properti</a></li>
					<li><a href="#" title="Elektronik">Elektronik</a></li>
					<li><a href="#" title="Fashion">Fashion</a></li>
					<li><a href="#" title="Peralatan">Peralatan</a></li>
					<li><a href="#" title="Perabotan Rumah">Perabotan Rumah</a></li>
					<li><a href="#" title="Tanah & Bangunan">Tanah & Bangunan</a></li>
					<li><a href="#" title="Lowongan & Jasa">Lowongan & Jasa</a></li>
				</ul>
			</div>
			<div id="social" class="col-5">
				<label><b>Ikuti Kami</b></label>
				
			</div>
			<div id="pengaturan" class="col-3">
				<label><b>Pengaturan Akun</b></label>
				<ul>
					<li><a href="#" title="Iklanku">Iklanku</a></li>
					<li><a href="#" title="Pesan">Pesan</a></li>
					<li><a href="#" title="Ubah Kata Sandi">Ubah Kata Sandi</a></li>
					<li><a href="#" title="Ubah Profil">Ubah Profil</a></li>
					<li><a href="#" title="Keluar Akun">Keluar Akun</a></li>
				</ul>
			</div>
		</div>
	</div>
	

</body>
</html>