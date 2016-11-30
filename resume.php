<!DOCTYPE html>
<html lang="en">
<?php include './scripts/ResumeCV.php';
	  include './scripts/Application.php';
		$Resume = new ResumeCV();
		$Application = new Application();
	?>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $Application->getTitle(); ?></title>

	<link rel="stylesheet" type="text/css" href="resume.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
		
			$("#btnProfileIcon").click(function() {
				$("#btnProfile").toggle('slide','left',500);
				//$("#para_intro").toggle('slide','down',500);
			});
		});
	</script>	
  </head>
  <body class="dark">
    
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container half">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php $Resume->getFullName(); ?></a>
			</div>
 			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
	<div class="container half">						
		<div  class="row">				
			<div style="display:inline;float:left;">
			<button id="btnProfileIcon" class="prime" type="button">
				<span class="glyphicon glyphicon-user"></span>
			</button>
			</div>
			<div class="col-md-8 stormy">
				<label style="min-height:48px;">.</label><button type="button" id="btnProfile" class="primewide" style="display:none;margin-left:-16px;">PROFILE</button>				
				<div>					
					<label class="intro text-uppercase"><?php $Resume->getFullName(); ?></label><br/>
					<label style="color:#fff;">Software Development Professional</label>
					<div style="margin-left:50px;">
						<p id="para_intro" style="display:none;color:#fff;"><?php $Resume->getSummary(); ?></p>
					</div>
				</div>				
			</div>			
			<div style="display:inline;">
			<button class="prime" type="button">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</button>
			</div>
		</div>
	</div>
  </body>
</html>

