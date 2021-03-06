<!DOCTYPE html>
<html lang="en">
<?php include './scripts/ResumeDataContext.php'; 
	  include './scripts/ResumeCV.php';
	  include './scripts/Application.php';
	  include './scripts/EmploymentInfo.php';
	  include './scripts/EmploymentInfoView.php';	  
		$Resume = new ResumeCV();
		$Application = new Application();
	?>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $Application->getTitle(); ?></title>

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
				$("#btnProfile").toggle('fast', function() {
					
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

			$(".resume").click(function(){
					$("#btnResumeDark").css({'display':'none'});				
					$("#btnResume").toggle('fast', function() {
						if(!$("#btnResume").is(":visible")){
								$("#btnResumeDark").css({'display':'inline'});
							}					
						});

					if($("#btnResumeDownSpan").hasClass("glyphicon-chevron-down")){
						$("#btnResumeDownSpan").toggleClass("glyphicon-chevron-down", false);
						$("#btnResumeDownSpan").toggleClass("glyphicon-chevron-up", true);
						$("#divPicIntro").css({"margin-top":"16px"});
					}else{
						$("#btnResumeDownSpan").toggleClass("glyphicon-chevron-down", true);
						$("#btnResumeDownSpan").toggleClass("glyphicon-chevron-up", false);					
					}
					$("#divEmployment").slideToggle();
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
		<section id="profileSection">
			<div class="col-md-8 col-md-offset-2 stormy">
					<button id="btnProfileIcon" class="prime profile" style="margin-left:-64px;" type="button">
						<span class="glyphicon glyphicon-user double" style="min-width:36px;"></span><span id="btnProfile" class="intro" style="margin-left:24px;margin-right:24px;display:none;">PROFILE</span>
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
							<img src="./images/IMG_3188.JPG" alt="Profile Image" width="85" style="border:1px solid #acacac;">
						</div>
						<div style="display:table-cell;vertical-align:top;color:#fff;padding-left:32px;">
							<span class="intro"><?php echo $Resume->getFullName(); ?></span><br/>
							<span class="subblue"><?php echo $Resume->getTitle(); ?></span>
						</div>
						<div style="display:table-cell;vertical-align:top;">
							<table style="margin-left:32px;">
								<tr>
									<td class="infoTextLabel">Location:</td>
									<td class="infoText"><?php echo $Resume->getLocation(); ?></td>
								</tr>
								<tr>
									<td class="infoTextLabel">Phone:</td>
									<td class="infoText"><?php echo $Resume->getPhone(); ?></td>
								</tr>
								<tr>
									<td class="infoTextLabel">Email:</td>
									<td class="infoText"><a class="subblue" href="mailto:<?php $Resume->getEmail(); ?>"><?php echo $Resume->getEmail(); ?></a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div style="display:table;">
					<div style="display:table-row;">
						<div style="width:100%;">
							<div id="para_intro" style="margin-left:50px;display:none;margin-bottom:24px;padding-right:50px;">
								<p class="paraText"><?php echo $Resume->getSummary(); ?></p>
							</div>
						</div>
					</div>
				</div>												
			</div>			
			<!--<div style="display:inline;">
				<button class="prime" type="button">
					<span class="glyphicon glyphicon-pencil double" aria-hidden="true"></span>
				</button>
			</div>		-->
		</section><!--profileSection-->	
		<section id="resumeSection">
		<div style="display:inline;height:48px;width:48px;background-color:green;">.</div>	
			<div class="col-md-8 col-md-offset-2 stormy stormy-top-line">
				<button id="btnResumeIcon" class="prime resume" style="margin-left:-64px;" type="button">
					<span class="glyphicon glyphicon-list double" style="min-width:36px;"></span>
					<button id="btnResumeDark" class="nonprime intro intro-dark" style="padding-left:16px;padding-right:16px;vertical-align:middle;text-align:center;margin-top:-1px;padding-right:24px;">EMPLOYMENT</button>
					<button id="btnResume" class="prime intro" style="display:none;padding-left:20px;padding-right:16px;vertical-align:middle;text-align:center;margin-top:-1px;margin-left:-4px;padding-right:28px;">EMPLOYMENT</button>
				</button>														
				<div style="float:right;margin-top:8px;">
					<button type="button" id="btnResumeDown" class="navarrow resume">
						<span id="btnResumeDownSpan" class="glyphicon glyphicon-chevron-down"></span>
					</button>
				</div>
				<div id="divEmployment" class="info" style="margin-left:50px;display:none;margin-bottom:24px;padding-right:50px;margin-top:24px">					
					<?php							
						$var = $Resume->getEmployment();
						if(is_null($var) || empty($var))
							echo '<p>No Employment History</p>';
						
						foreach($var as $empInfo)
						{
							$empView = new EmploymentInfoView();
							$empView->employmentInfo = $empInfo;
							if(is_null($empView))
								echo 'Null EmpView';
							
							echo $empView->getHTML();
							
						}
					?>
				</div>																			
			</div>							
		</section><!--resumeSection-->
	</div>	
  </body>
</html>

