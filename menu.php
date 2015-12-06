<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                    <a class="navbar-brand" href="index.php"><img src="images/logo-matalayan.png" /></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						
                        <li class=""><a href="index.php">Beranda</a></li>
                        <li class=""><a href="index.php#pnsteladan">Teladan</a></li>
                        <li class=""><a href="index.php#lencana">Lencana</a></li>
                        <li class=""><a href="index.php#statistik">Statistik</a></li>
                        <li class=""><a href="index.php#peta">Peta</a></li>
                        <li class=""><a href="dashboard/login.html">Login</a></li>                      
                    </ul>
					<!--
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
					-->
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->
	<?php if($area != "menu"){?>
	<div class="pagebar">
		<div class="container">
			Portal area <?php echo $area; ?>
			<?php if($area != "nasional"){ ?> <a class="tonational" href="beranda.php">Beranda nasional &raquo;</a> <?php } ?>
			<select id="areaSelector" onchange="this.options[this.selectedIndex].value && (window.location = '<?php echo $root_url; ?>/index.php?area='+this.options[this.selectedIndex].value);">
			<option value="">Pilih area lain...</option>
			<option value="jabar">Jawa Barat</option>
			<option value="bandung">- Bandung</option>
			<option value="cisaat">-- Cisaat</option>
			<option value="cibiru">-- Cibiru</option>
			<option value="sukabumi">- Sukabumi</option>
			<option value="Sukabumiselatan">-- Sukabumi Selatan</option>
			<option value="Sukabumiutara">-- Sukabumi Utara</option>
			<option value="jatim">Jawa Timur</option>
			<option value="surabaya">- Surabaya</option>
			<option value="surabayatimur">-- Surabaya Timur</option>
			<option value="surabayabarat">-- Surabaya Barat</option>
			<option value="sidoarjo">- Sidoarjo</option>
			<option value="sidoarjoutara">-- Sidoarjo Utara</option>
			<option value="sidoarjotenggara">-- Sidoarjo Tenggara</option>
			<option value="sidoarjoutara">-- Sidoarjo Utara</option>
		</select>
		</div>
		</div>
	<?php } else{ ?>
		<div class="pagebar">
		<div class="container">
			Profil PNS Pelayan Publik
		</select>
		</div>
		</div>
	<?php } ?>