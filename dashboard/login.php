<?php
include("../globalconfig.php");
include("mysql_conn.php");

if(isset($_SESSION['loggedInPNS'])){
	header("Location: index.php");
} 
if(isset($_GET['text'])){ $text = $_GET['text']; }
else{
	$text = "untuk masuk ke dashboard MataLayan";
}
if(isset($_POST['inputName']) && isset($_POST['inputPassword'])){
	$pnsraw = getAllPNS();
	//var_dump($pnsraw);
	while($row = mysqli_fetch_assoc($pnsraw)) {
		if($_POST['inputName'] == $row["username"] && $_POST['inputPassword'] == $row["password"]){
			$_SESSION['loggedInPNS'] = $row["idPNS"];
			//header($root_url."/dashboard/index.php");
			header("Location: index.php");
			die();
		}
	}
	
	//header($root_url."/dashboard/login.php?text='Can not login, wrong username/password'");
    header("Location: login.php?text='Can not login, wrong username/password'");
    exit;
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
</head>
<body style="background: url('images/bg/bg.png') center center fixed;" class="loginpage">
    <div class="page-form">
        <div class="panel panel-blue">
            <div class="panel-body pan">
                <form action="login.php" method="post" class="form-horizontal">
                <div class="form-body pal">
                    <div class="col-md-12 text-center">
                        <!--<h1 style="font-size: 48px;">
                            Login MataLayan</h1>
                        <br />-->
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <img src="images/avatar/profile-pic.png" class="img-responsive" style="margin-top: -35px;" />
                        </div>
                        <div class="col-md-9 text-center">
                            <h1>
                                Harap login</h1>
                            <br />
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-md-3 control-label">
                            Username:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" name="inputName" type="text" placeholder="" class="form-control" value="arisu" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-md-3 control-label">
                            Password:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-lock"></i>
                                <input id="inputPassword" name="inputPassword" type="password" placeholder="" class="form-control" value="arisu" /></div>
                        </div>
                    </div>
                    <div class="form-group mbn">
                        <div class="col-lg-12" align="right">
                            <div class="form-group mbn">
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                                <div class="col-lg-9">
                                    <a href="../index.php" class="btn btn-default">Ke beranda</a>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-default">
                                        Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
	
	<div class="floatingbar">
		Ini adalah halamn login untuk bisa masuk ke bagian dashboard MataLayan. Anda bisa login sebagai PNS pelayan publik untuk menginput data layanan yang dilakukannya dan juga dapat melihat skor pelayanan, feedback warga dan juga beberapa statistik terkait performa pelayanannya. <b>Untuk login, Anda bisa menggunakan kombinasi username "asep" dan password "asep". User lain yang bisa digunakan untuk pengujian adalah username "arisu" dan password "arisu".</b>
		<a class="closebutton" title="close this" href="#">Tutup</a>
	</div>
</body>
</html>
<?php } ?>
