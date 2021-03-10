<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <div class="item1">test</div>
            <div class="item2">test</div>
            <div class="item3">test</div>
            <div class="item4">test</div>
            <div class="item5">test</div>
            <div class="item6">test</div>
            <div class="item7">test</div>
            <div class="item8">test</div>
            <div class="item9">
                Plex Item<br>
			
			    Active Users: <?php echo plex_getCurrentStreamingUsers(); ?>
			</div>
        </div>
    </body>
</html>

<?php
    function plex_getCurrentStreamingUsers(){
        $plexUrl = 'http://192.168.1.200:32400';
        $plexToken = 'X-Plex-Token=nXHeq7DgzAya9yDQMrn5';

        $url = $plexUrl.'/status/sessions?'.$plexToken;
        $xml = simplexml_load_file($url);

        return sizeof($xml->Video);
    }
?>