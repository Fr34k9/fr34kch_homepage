<html>
	<head>
		<title>Fr34k.ch</title>
		<link rel="stylesheet" type="text/css" href="home/index.css">
		<script src="https://code.jquery.com/jquery-latest.js"></script> 
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script> 
		<script src="home/t.min.js"></script> 
	</head>
	<body style='overflow: hidden;'>
		<div id='page1' style='position: absolute; left: 0px; top: 0px;'>
				<?php
				/*<div onClick="window.location='http://fr34k.ch:32400'" style='background-color: #DDD; width: 250px; position: relative; top: 50px; margin-left: auto; margin-right: auto; padding: 15px; font-size: 60px; border-style: solid; border-width: 2px; border-color: #DDD;'>
					<img src='home/img/icons/icon_plex.png' height=60px> Plex
				</div>*/
				?>
			<div id='container1'>
				<div id='frontPage' style='position: relative; opacity: 0.3; font-size: 190px;' onMouseOver="this.style.opacity = '0.8';" onMouseOut="this.style.opacity = '0.3';">Fr34k<span>.</span>ch</div>
				<div id='work' style='position: relative; font-size: 20px; margin-top: -30px;'>Local... Work in progress.... See u.</div>
			</div>
		</div>
		<div id='page2' style='position: absolute; left: 0px; top: 0px; background-color: transparent;'>
			<div id='container2'>
			</div>
		</div>
		<script>
			var windowWidth = $(document).width();
			var windowHeight = $(document).height();
			$('#page1').height(windowHeight);
			$('#page1').width(windowWidth);
			$('#page2').height(windowHeight);
			$('#page2').width(windowWidth);
			$('#page2').css( { left: windowWidth, top: 0 } ) 
			
			document.getElementById('container1').style.left = ($('#page1').width() / 2 - ($('#container1').width()/2)) + 'px';
			document.getElementById('container1').style.top = ($('#page1').height() / 2 - ($('#container1').height()/2)) + 'px';
			console.log($('#container1').height());
			firstStep = 0;
			
			var x = 0; $(document).keydown(function(event){
				if(firstStep == 0){
					if ( event.which == 223 ) x = 1;
				} else {
					if ( event.which != 67 && event.which != 68 && event.which != 69 && event.which != 73) c = 0;
					if ( event.which == 67 ) c = 1;
					if ( event.which == 69 && c == 1 ) c = 2;
					if ( event.which == 68 && c == 2 ) c = 3;
					if ( event.which == 73 && c == 3 ){
						$('#page1').animate({
							left: "-=" + windowWidth
						});
						$('#page2').animate({
							left: "-=" + windowWidth
						});
						
						$.ajax({
							type: 'POST',
							url: 'projects.php',
							data: '',
							success:
							function(result){
								$('#container2').html(result);
							}
						});
					}
				}
			});
			
			$(document).keyup(function(event){ x = 0; });
			
			$('#frontPage').click(function(){
				if(x == 1) firstStep = 1;
			});
			
			$('#frontPage').t({speed:100,speed_vary:true,mistype:2,blink:true});
			$('#work').t({speed:100,delay: 3, speed_vary:false,mistype:false,blink:false});
		</script>
	</body>
</html>
