<!-- posting data-->
<?php

if (isset($_POST['micromax'])){
	include('db_connect.php');
	
	$msale = $_POST['msale'];
	$myear = $_POST['myear'];
	$micromax_insert = "INSERT INTO micromax (m_sale, review, year) VALUES ($msale, '', $myear)";
	
	
	
	if(!mysqli_query($dbcon, $micromax_insert)){
		die ("Error submitting into db!!");
		}else{
			echo "Success!!";
		}
	
	
}
?>
<?php if(isset($_POST['samsung'])){
	include('db_connect.php');
	
	$ssale = $_POST['ssale'];
	$syear = $_POST['syear'];
	$samsung_insert = "INSERT INTO samsung (samsung_sale, review, year) VALUES ($ssale, '', $syear)";
	
	if(!mysqli_query($dbcon, $samsung_insert)){
		die ("Error submitting into db!!");
		}else{
			echo "Success!!";
		}
}?>
<?php if(isset($_POST['gionee'])){
	include('db_connect.php');
	
	$gsale = $_POST['gsale'];
	$gyear = $_POST['gyear'];
	$samsung_insert = "INSERT INTO gionee (sale, review, year) VALUES ($gsale, '', $gyear)";
	
	if(!mysqli_query($dbcon, $samsung_insert)){
		die ("Error submitting into db!!");
		}else{
			echo "Success!!";
		}
}?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sales Report | PHP BarGraph</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">
	
	<!--importing google font pacifico-->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
	<!--importing google font poiret one-->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<script>
	function openGraph(){
		window.open("bargraph.php");
	}
	</script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 style="color:#ecf0f1;font-size:32px; padding-left:420px; padding-right:420px;font-family: 'Pacifico', cursive;">Sales Report</h2>
            </div>
          
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

       

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="text-align:center;font-family: 'Poiret One', cursive;"><strong>Mobile Brands</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/10724104_566582420172891_232330895_n.jpg?ig_cache_key=MTIwMTc0MDM5NTE1ODAzNzIxNw%3D%3D.2" alt="" style="height=200px; width:200px;">
                <h3>Vivo
                    <!--<small>Job Title</small>-->
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://www.phoneprices.in/wp-content/uploads/2014/10/oppo-smartphone-logo.jpg" alt="" style="height:200px; width:200px;">
                <h3>Oppo
                   
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://androidspin.com/wp-content/uploads/2012/10/MIUIEs-Logo.png" alt="" style="height:200px; width:200px;">
                <h3>MI
                    
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://www.brycomm.com/wp-content/uploads/2011/08/Samsung-Logo.png" alt="" style="height:200px; width:200px;">
                <h3>Samsung
                   
                </h3>
				 <form  method="post" >
					<input type="hidden" name="samsung" value="true"/>
					<input type="number" name="syear" placeholder="Year"/><br>
					<input type="number" name="ssale" placeholder="Sale"/><br>
					<input type="submit" value="submit">
				</form>
				</div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://techniblogic.com/wp-content/uploads/2016/06/Gionee-company-logo.jpg" alt="">
                <h3>Gionee
                    
                </h3>
                <form  method="post" >
					<input type="hidden" name="gionee" value="true"/>
					<input type="number" name="gyear" placeholder="Year"/><br>
					<input type="number" name="gsale" placeholder="Sale"/><br>
					<input type="submit" value="submit">
				</form>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://fitnhit.com/wp-content/uploads/2015/08/Micromax-plans-to-build-its-own-OS-across-Platforms-says-report.jpg" alt="" style="height:200px; width:200px;">
                <h3>Micromax
                    
                </h3>
                <form  method="post" >
					<input type="hidden" name="micromax" value="true"/>
					<input type="number" name="myear" placeholder="Year"/><br>
					<input type="number" name="msale" placeholder="Sale"/><br>
					<input type="submit" value="submit">
				</form>
            </div>
        </div>

        <hr>
				<div style="text-align:center; ">
					<button onclick="openGraph()" type="button" class="btn btn-primary btn-md">View BarGraph</button>
				</div>
				
        <!-- Footer -->
        <footer>
            <div class="row">
				
                <div class="col-lg-12">
                    <h4 style="text-align:center;color:#2c2c2c;"><span style="font-family: 'Poiret One', cursive;"><strong>Copyright &copy; Sales Report 2016</strong></span></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>