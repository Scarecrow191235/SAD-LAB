<?php
include("sqlcon.php");
session_start();
error_reporting(0);
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
<?php
include("header.php");
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
<div class="content">
<div class="gallery">
	<div class="container">
		<h2>Gallery</h2>

				<!--script-->
				<div class="port-grid">
				<!---->
				<!-- get images from  -->
				
				<div class="galley-1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class='row'>
				<?php
				$c = 1;
				$qry = mysqli_query($con, "select * from tblgallery inner join tblalumnimeet on tblgallery.eventid=tblalumnimeet.eventid");
				while($row = mysqli_fetch_array($qry))
				{
				 
					/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
					<div class="col-md-4 galley-2">
						<a class="b-link-stripe b-animate-go" href="<?php echo $row["photo"]; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>" rel="prettyPhoto[gallery1]" title="<?php echo $row["event_name"]; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>">
						<img src="<?php echo $row["photo"]; ?>" class="img-responsive" style='height: 260px;width: 100%;' />
							<span class="zoom-icon"> </span>
						</a>						
					</div>	
					<?php
					if($c % 3 == 0)
					{
						echo "</div>";
						echo "<div class='row'>";
					}
					$c++;
				}
				/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
					<div class="clearfix"></div>
					</div>					
				</div>	
				
							
				
				<!---->
					
</div>
<!-- //Gallery -->

</div>
 		<!--//content-slide-->
</div>
	
		</div>
		
		 <?php
include("footer.php");
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>