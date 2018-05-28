<?php
	include("includes/functions.php");

	$q = $_GET['q'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <style type="text/css">
    	
    	.search{
    		width:100%;
    		height:55px;
    		color:#FFF;
    		background:rgba(00,00,00,0.5);
    		border:0;
    		border-top:1px solid rgba(00,00,00,0.9);
    		outline:0;
    		padding:0;
    		padding-left:11.3%;
    		padding-right:11.3%;
    		::placeholder{colo:#fff;}
    	}

    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css?version=1" type="text/css">
    <link rel="stylesheet" href="css/custom.css?version=2" type="text/css">

    <title>NIDesigning - Search and Results</title>
  </head>
  <body style="background:#34495e; color:#ccc;">
	<nav style="background:rgba(00,00,00,0.5); color:#CCC; margin-bottom:0;" aria-label="breadcrumb" id="breadcrumb">
		<div class="container">
		  <ol style="margin:0; padding-left:0;" class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">NIDesigning</a></li>
		    <li class="breadcrumb-item"><a href="/work.html">Projects</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Search and results</li>
		  </ol>
		</div>
	</nav>
	<div style="margin-bottom:2%;" class="searchbar">
		<form method="GET">
			<input type="text" class="search" id="searchbar" name="q" placeholder="Enter a search term and press enter.. ">
		</form>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Search Results</h3>
				<hr />
				<p>
					<?php
						results();
					?>	
				</p>
			</div>
			<div class="col-md-4">
				<h3>Example Search Terms</h3>
				<hr />
				<p>
					Some example terms include:

					<ul>
						<li>Hello World</li>
						<li>Mark Zuckerberg</li>
						<li>Northern Ireland</li>
						<li>Northern Scotland</li>
						<li>Northern America</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.min.js?version=1" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js?version=2" type="text/javascript"></script>
  </body>
</html>
