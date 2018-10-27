<html>

<head>
	<title>James Heiss</title>
	<link rel="stylesheet" href="resources/main.css">
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="resources/slider.js"></script>
	<script type="text/javascript" src="resources/jquery.sticky.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){	
			$("#slider").easySlider({
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			$("#slider2").easySlider({ 
				nextId: "slider2next",
				prevId: "slider2prev"
			});
			$("#slider3").easySlider({ 
				nextId: "slider3next",
				prevId: "slider3prev"
			});
		});	
	</script>
	  <script>
    $(window).load(function(){
      $("").sticky({ topSpacing: 110 });
    });
  </script>
	<script>

	</script>
	<script>
		$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
	<div id="header">
		<div id="header-inner">
			<a href="."><h1>James W. Heiss</h1></a>
			
			<a href="http://www.jamesheiss.com/publications.php" class="button">Publications</a>
			<a href="http://www.jamesheiss.com/research.php" class="button">Research</a>
			<a href="http://www.jamesheiss.com/" class="button">Home</a>
			
		</div>
	</div>