<?php
include("sqlcon.php");
include("header.php")
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
<?php
$rs = mysqli_query($con, "Select * from tblalumnimeet where eventid=".$_GET['eventid']);
	$row = mysqli_fetch_array($rs);
	$event_name = $row['event_name'];
	$loc = $row['loc'];
	$event_date = $row['event_date'];
	$event_time = $row['event_time'];
	$description = $row['description'];
 /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>
<div class="container">
	<div class="page">
  <h3 align='center'>Event Information</h3>
   </div>
</div>
<div class="bs-example" data-example-id="simple-horizontal-form" style='margin-left:60px;min-height:450px;'>
    <form class="form-horizontal" >
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" value="<?php echo $loc; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>" readonly>
        </div>
      </div> 
	     <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Event Date</label>
        <div class="col-sm-6">
          <input type="date" class="form-control" value="<?php echo $event_date; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>" readonly>
        </div>
      </div>
	     <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Time</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" value="<?php echo $event_time ; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>" readonly>
        </div>
      </div>
	    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-6">
          <textarea  class="form-control"  readonly><?php echo $description; /* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?></textarea>
        </div>
      </div> 
    </form>
  </div>	
 
</div>
</div>

<?php
include("footer.php");
/* DEVELOPED BY WWW.STUDENTPROJECTS.LIVE */  ?>

