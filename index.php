<!DOCTYPE html>
<html>
  <head>
    <title>Youmax 2.0 - complete Youtube channel on your website - customize anything you want - Jquery plugin</title>

	<!--<script src="./jquery.min.js"></script>-->
	<script src="javascript/jquery-1.7.1.min.js"></script>
	

	<script type="text/javascript">
	
	var youTubeChannelURL = "https://www.youtube.com/user/MoezMasoudOfficial";
	
	//optional parameters-----------------------------------------------
	var youTubePlaylistURL = "https://www.youtube.com/playlist?list=PL08uEgAEpTIrX3DQiTz5WWtjibI6k3G5x";
	var youmaxDefaultTab = "featured";
	var youmaxColumns = 3;	
	var youmaxWidgetWidth = 900;
	//var youmaxWidgetHeight = 1000;
	var showFeaturedVideoOnLoad = true;
	var showVideoInLightbox = false;

	
	function goClicked() {
		$('#youmax').empty().append(' loading ...');
		youTubeChannelURL=$('#youTubeChannelUrl').val();
		youTubePlaylistURL=$('#youTubePlaylistUrl').val();
		youmaxFeaturedPlaylistId = null;
		prepareYoumax();
	}

	</script>

	
	<style>

      body {
        font-family: Calibri;
        font-size: 14px;
		text-align:center;
      }
	  
	  #youmax{width:100% !important;}
	  
		
	</style>

	</head>
  <body>
	
		
		
<div id="youmax"></div>

	
<script src="javascript/youmax.min.js"></script>

  </body>
</html>



