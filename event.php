<?php
include("sqlcon.php");
include("header.php")
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>

 
<div class="content">

<div class="content-mid">
				<div class="container">
				<div class="content-mid-top">
					<h3> Events</h3>
				<p>It is important to carry out a good follow-up marketing of alumni events. With over 100 worldwide events a year, you have a wealth of alumni networking opportunities.</p>

				</div>
				<div class="news">
				<?php 
				$rs = mysqli_query($con, "select * from tblalumnimeet where status='Active' and event_date >= CURDATE() order by eventid DESC");
				if(mysqli_num_rows($rs) > 0)
				{
				while($rowd = mysqli_fetch_array($rs))
				{
					$event_date = $rowd['event_date'];
					$parts = explode("-",$event_date);
					$day = $parts[2];
					$dateobj = DateTime::createFromFormat('!m',$parts[1]);
					$month = $dateobj->format('F');
				/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
					<div class=" new-more animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<!--<div class="col-md-2 new-1">
							<a href="single.html"><img src="images/ev.jpg" class="img-responsive" alt=""></a>
						</div>-->
						<div class="col-md-2 six">
							<h4><?php echo $day; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?><span><?php echo $month; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?></span></h4>
						
						</div>
						<div class="col-md-5 new-2">
						 <h3><?php echo $rowd['event_name']; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?></h3>
							<p><?php echo $rowd['description']; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?></p>
						</div>
						<div class="col-md-3 new-3">
							<a class="more1 hvr-sweep-to-bottom" href="event_info.php?eventid=<?php echo $rowd[0]; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php 
				}
				}
				else
				{
						echo "<h3 align='center'>No Upcoming Events</h3>";
				}
				/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
				
				</div>
			</div>
			</div>
		</div>	
 <?php
include("footer.php");
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>