<!-- notification message -->
<?php if (isset($_SESSION['success'])){ ?>
  	<div class="pull-alert">
		<div class="alert alert-success pull-right" >
	  		<button type="button" class="btn btn-default btn-circle btn-xl-alert btn-lateral btn-float-alert"><i class="fa fa-bell"></i></button>
	  			<hr class="hr-alert">
     				<p style='color:#28a745;'>Success</p><?php echo $_SESSION['success']; unset($_SESSION['success']);}?>
    	</div>
	</div> 

<?php if (isset($_SESSION['error'])){ ?>
 	<div class="pull-alert">
		<div class="alert alert-error pull-right" >
	  		<button type="button" class="btn btn-default btn-circle btn-xl-alert btn-lateral btn-float-alert"><i class="fa fa-bell"></i></button>
	  			<hr class="hr-alert">
     				<p style='color:#FF0000;'>Error</p><?php echo $_SESSION['error']; unset($_SESSION['error']);}?>
    	</div>
	</div> 

<?php if (isset($_SESSION['info'])){ ?>
 	<div class="pull-alert">
		<div class="alert alert-info pull-right" >
	  		<button type="button" class="btn btn-default btn-circle btn-xl-alert btn-lateral btn-float-alert"><i class="fa fa-bell"></i></button>
	  			<hr class="hr-alert">
     				<p style='color:#E5A218;'>Info</p><?php echo $_SESSION['info']; unset($_SESSION['info']);}?>
    	</div>
	</div> 