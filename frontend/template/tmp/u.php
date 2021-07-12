
<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title> <?= $title ?> </title>
<link href="frontend/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="frontend/public/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="frontend/public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Bienvenue aux ateliers de formation organiser par allo! training" />
<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="frontend/public/js/move-top.html"></script>
	<script type="text/javascript" src="frontend/public/js/easing.html"></script>
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
		</script>
<!--Calender-->
		<link rel="stylesheet" href="frontend/public/css/clndr.css" type="text/css" />
		<script src="frontend/public/js/underscore-min.js"></script>
		<script src= "frontend/public/js/moment-2.2.1.js"></script>
		<script src="frontend/public/js/clndr.js"></script>
		<script src="frontend/public/js/site.js"></script>
  <!--End Calender-->
	</head>
	<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<style>
    .cont{
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
	body{
		background:url('frontend/public/img/cameroun_-_port_de_douala_fau_1788727612_dit-conteneurs_800xyyy-800x480.jpg');
		background-attachment:fixed;
		background-size:cover;
	}
</style>
<body>

	<!--top-header-->
	<div class="top-header">
				 <!--top-nav-->
					<div class="col-md-8 top-nav">
					  <span class="menu"> <img src="fontend/public/img/logo.jpg" alt=""></span>
						<ul class="res">
							<li><a href="?action=user_panel" class="<?= $active1 ?>"><i class="glyphicon glyphicon-home"> </i> Accueil</a></li>
							<li><a class="<?= $active2 ?>" href="?action=exportation"><i class="glyphicon glyphicon-hand-up"> </i>Exportation</a></li>
							<li><a class="<?= $active3 ?>" href="?action=importation"><i class="glyphicon glyphicon-hand-down"> </i>Importation</a></li>
							<li><a class="<?= $active4 ?>" href="?action=statistique"><i class="glyphicon glyphicon-book"> </i>statistique</a></li>
							
						</ul>
			<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
				   </div>
				    <div class="col-md-4 serch1">
					<a class=" btn btn-success <?= $active5 ?>" href="?action=definir"><i class="glyphicon glyphicon-time"> </i> Definir</a>
							
                        <a href="?action=logout" class="btn btn-danger btn-sm">deconnexion</a>
			     </div>
				 <div class="clearfix"> </div>
				<!--top-nav-->
		 </div>
		  <!--top-header-->
		  <!---728x90--->


  <div class="container">
	  <center>
			<div class="cont">
			
				<?= $content ?>
			</div>
	  </center>
  </div>
  <br><br><br><br><br><br>
	</body>
	

</html>

