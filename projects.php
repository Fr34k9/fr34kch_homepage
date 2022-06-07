<?php
	// ProjFolder, Icon-Name, Title, Hint, 
	$projArr[] = ['projects/music', 'music', 'MP3 Musikportal', ''];
	$projArr[] = ['projects/sms-send', 'sms', 'SMS-Send', ''];
	$projArr[] = ['projects/imgUpload', 'imgupload', 'Image Upload', ''];
	$projArr[] = ['projects/ftpExplorer', 'ftp', 'FTP Explorer', ''];
	$projArr[] = ['projects/drinking/smokefire', 'playingcards', 'Playingcards', 'Mobile Only!'];
	$projArr[] = ['projects/drinking/trinkspiel', 'drink', 'Trinkspiel', 'Mobile Only!'];
	
	for($i=0; $i < sizeof($projArr); $i++){
		echo "<div class='oneProject' id='".$i."' onClick=\"openUrl('". $projArr[$i][0] ."');\">";
			echo "<img src='home/img/icons/icon_".$projArr[$i][1].".png' id='".$i."_icon' class='icon'>";
			echo "<div class='text' id='".$i."_text'>".$projArr[$i][2]."</div>";
			if(isset($projArr[$i][3]) && $projArr[$i][3] != ''){
				echo "<div class='hint' id='".$i."_hint'>".$projArr[$i][3]."</div>";
			}
		echo "</div>";
	}
?>

<!--

<div class="oneProject" id="0">
	<div class="front">
		<img src="home/img/icons/icon_music.png" id="0_icon" class="icon" style="opacity: 0.6;">
	</div>
	<div class="back">
		<img src="home/img/icons/icon_music.png" id="0_icon" class="icon">
		<div class="text" id="0_text" style="display: none;">MP3 Musikportal</div>
	</div>
</div>

-->

<script>
	document.getElementById('container2').style.top = ($('#page2').height() / 2 - (800/2)) + 'px';
			
	$('.oneProject').hover(function(){
		id = this.id;
		$('#'+id+'_text').toggle();
	});
	
	function openUrl(url){
		$('#page2').animate({
			left: "-=" + windowWidth
		}, function(){
			location.href = url;
		});
	}
	
	$('.oneProject').mouseover(function(){
		$('#'+id+'_icon').css('opacity', '1');
	});
	
	$('.oneProject').mouseout(function(){
		$('#'+id+'_icon').css('opacity', '0.6');
	});
</script>

			
			
<div class='oneProject' style='background-color: transparent; border:0px; border-radius: 0px; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;'>
	<div class='oneProject' style='height: 90px; width: 90px; margin: 10px; border-radius: 20px;'><a href='http://fr34k.ch:32400'><img src='home/img/icons/icon_plex.png' class='icon'></a></div>
	<div class='oneProject' style='height: 90px; width: 90px; margin: 10px; border-radius: 20px;'><a href='http://fr34k.ch:8181'><img src='home/img/icons/icon_plexpy.png' class='icon'></div>
	<div class='oneProject' style='height: 90px; width: 90px; margin: 10px; border-radius: 20px;'><a href='http://fr34k.ch:10000'><img src='home/img/icons/icon_webmin.png' class='icon'></div>
</div>