<?php
session_start();
if(isset($_SESSION['usrnam']))
{
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
				<div class="controls">
					<nav class="links">
						<ul>
							<li><a href="#" class="ico1">Messages <span class="num">26</span></a></li>
							<li><a href="#" class="ico2">Alerts <span class="num">5</span></a></li>
							<li><a href="#" class="ico3">Documents <span class="num">3</span></a></li>
						</ul>
					</nav>
					<div class="profile-box">
						<span class="profile">
							<a href="#" class="section">
								<img class="image" src="images/img1.png" alt="image description" width="26" height="26" />
								<span class="text-box">
                                    <?php
            $disp=$_SESSION['usrnam'];
          echo strtoupper("Welcome <br><b>$disp</b>");
           // echo "<script>function store(){ localStorage.setItem('Book',$disp);}</script>";
             ?>
									
								</span>
							</a>
							<a href="/IOT_2/logoutadmin.php" class="opener">opener</a>
						</span>
						<a href="logoutadmin.php" class="btn-on">On</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-2" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-3" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-4" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-6" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-7" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-8" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</div>
		<aside id="sidebar">
			<strong class="logo"><a href="#">lg</a></strong>
			<ul class="tabset buttons">
				<li class="active">
					<a href="#tab-1" class="ico1"><span>Dashboard</span><em></em></a>
					<span class="tooltip"><span>Dashboard</span></span>
				</li>
				<li>
					<a href="#tab-2" class="ico2"><span>Gallery</span><em></em></a>
					<span class="tooltip"><span>Gallery</span></span>
				</li>
				<li>
					<a href="#tab-3" class="ico3"><span>Pages</span><em></em></a>
					<span class="tooltip"><span>Pages</span></span>
				</li>
				<li>
					<a href="#tab-4" class="ico4"><span>Widgets</span><em></em></a>
					<span class="tooltip"><span>Widgets</span></span>
				</li>
				<li>
					<a href="#tab-5" class="ico5"><span>Archive</span><em></em></a>
					<span class="tooltip"><span>Archive</span></span>
				</li>
				<li>
					<a href="#tab-6" class="ico6">
						<span>Comments</span><em></em>
					</a>
					<span class="num">11</span>
					<span class="tooltip"><span>Comments</span></span>
				</li>
				<li>
					<a href="#tab-7" class="ico7"><span>Plug-in</span><em></em></a>
					<span class="tooltip"><span>Plug-in</span></span>
				</li>
				<li>
					<a href="#tab-8" class="ico8"><span>Settings</span><em></em></a>
					<span class="tooltip"><span>Settings</span></span>
				</li>
			</ul>
			<span class="shadow"></span>
		</aside>
	</div>
</body>
</html>
<?php
    }
else{
    header("Location:/IOT_2/Administratorlogin.php");
}
    ?>