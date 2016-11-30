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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	  
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
		
			$(".profile").click(function() {
				$("#btnProfile").toggle('slow', function() {
					
					if(!$("#btnProfile").is(":visible")){
						$("#divPicIntro").css({"margin-top":"-16px"});	
					}
				});
				$("#para_intro").slideToggle();
				if($("#btnProfileDownSpan").hasClass("glyphicon-chevron-down")){
					$("#btnProfileDownSpan").toggleClass("glyphicon-chevron-down", false);
					$("#btnProfileDownSpan").toggleClass("glyphicon-chevron-up", true);
					$("#divPicIntro").css({"margin-top":"16px"});
				}else{
					$("#btnProfileDownSpan").toggleClass("glyphicon-chevron-down", true);
					$("#btnProfileDownSpan").toggleClass("glyphicon-chevron-up", false);					
				}
				
			});
		});
	</script>	
  </head>
  <body class="dark">
    
	<!--<nav class="navbar navbar-inverse navbar-fixed-top">
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
		</nav>-->
	<div class="container">						
		<div>
			<div style="display:inline;float:left;">
				
			</div>
			<div class="col-md-8 col-md-offset-2 stormy">
					<button id="btnProfileIcon" class="prime profile" style="margin-left:-64px;" type="button">
						<span class="glyphicon glyphicon-user" style="min-width:36px;"></span><span id="btnProfile" style="margin-left:48px;margin-right:24px;display:none;">PROFILE</span>
					</button>					
					<!--<button type="button" id="btnProfile" class="primewide profile" style="display:none;margin-left:-2px;">PROFILE</button>-->
				<div style="float:right;margin-top:8px;">
					<button type="button" id="btnProfileDown" class="navarrow profile">
						<span id="btnProfileDownSpan" class="glyphicon glyphicon-chevron-down"></span>
					</button>
				</div>								
				<div id="divPicIntro" style="display:table;margin-top:-16px;margin-bottom:32px;">
					<div style="display:table-row;">
						<div style="display:table-cell;">
							<img src="./images/IMG_3188.JPG" alt="Profile Image" width="85">
						</div>
						<div style="display:table-cell;vertical-align:top;color:#fff;padding-left:32px;">
							<span class="intro"><?php $Resume->getFullName(); ?></span><br/>
							<span class="subblue"><?php $Resume->getTitle(); ?></span>
						</div>
						<div style="display:table-cell;vertical-align:top;">
							<table style="margin-left:32px;">
								<tr>
									<td class="infoTextLabel">Location:</td>
									<td class="infoText"><?php $Resume->getLocation(); ?></td>
								</tr>
								<tr>
									<td class="infoTextLabel">Phone:</td>
									<td class="infoText"><?php $Resume->getPhone(); ?></td>
								</tr>
								<tr>
									<td class="infoTextLabel">Email:</td>
									<td class="infoText"><a class="subblue" href="mailto:<?php $Resume->getEmail(); ?>"><?php $Resume->getEmail(); ?></a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div style="display:table;">
					<div style="display:table-row;">
						<div style="width:100%;">
							<div id="para_intro" style="margin-left:50px;display:none;margin-bottom:24px;padding-right:50px;">
								<p class="paraText"><?php $Resume->getSummary(); ?></p>
							</div>
						</div>
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

