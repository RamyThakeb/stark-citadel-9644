<!DOCTYPE html>
<html>
  <head>
    <title>Youmax 2.0 - complete Youtube channel on your website - customize anything you want - Jquery plugin</title>

	<!--<script src="./jquery.min.js"></script>-->
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	

	<script type="text/javascript">
	
	var youTubeChannelURL = "http://www.youtube.com/user/Ramythakeb";
	
	//optional parameters-----------------------------------------------
	var youTubePlaylistURL = "http://www.youtube.com/playlist?list=FLbRejFIs6o_VOqzrowMHpRw";
	var youmaxDefaultTab = "featured";
	var youmaxColumns = 3;	
	var youmaxWidgetWidth = 900;
	//var youmaxWidgetHeight = 1000;
	var showFeaturedVideoOnLoad = false;
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

	
<script src="./javascript/youmax.min.js"></script>

  </body>
</html>



