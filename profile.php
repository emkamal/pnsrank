<?php include("header.php"); ?>
<?php $area = "profile";
include("menu.php"); ?>
	<section id="profile">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img class="img-responsive" src="images/portfolio/recent/kamal.jpg" alt="">
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
					<div class="feature-wrap">
						<h2>Mustafa Kamal</h2>
						<h3>Area tugas: Administrasi kependudukan</h3>
						<h3>Wilayah tugas: Sidoarja, Kalimantan Barat Daya</h3>
						<h3>Motto:</h3>
						<blockquote>
							"Jadikan hidup bermanfaat buat orang lain"
						</blockquote>
						<br/><br/>
						<h2>Lencana penghargaan</h2>
						<div class="col-md-2 col-sm-6 wow"><a href="#"><img class="img-responsive" src="images/services/services1.png"></a></div>
						<div class="col-md-2 col-sm-6 wow"><a href="#"><img class="img-responsive" src="images/services/services2.png"></a></div>
						<div class="col-md-2 col-sm-6 wow"><a href="#"><img class="img-responsive" src="images/services/services3.png"></a></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms">
					<div class="feature-wrap">
						<h2>Skor Pelayanan</h2>
						<div class="scorebox"><span class="score">78</span>
						<span class="maxscore">dari 100</span></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br/>
	<br/>

	<?php $floatingText = "Ini adalah halaman profil PNS pelayan publik. Nantinya diharapkan semua PNS pelayan publik di Indonesia bisa ditampilkan datanya disini. Disertai dengan skor pelayanannya yang merupakan hasil kalkulasi dari rating yang diberikan oleh warga yang dilayaninya. Halaman ini juga berisi badge-badge penghargaan yang didapatkan oleh PNS tersebut melalui sistem gamifikasi MataLayan. <a href='dashboard/login.php'>Klik disini untuk login ke dashboard MataLayan!</a>"; ?>
    <?php include("footer.php"); ?>