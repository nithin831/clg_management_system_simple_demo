<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
		$query = "delete from teachers where t_id = '$_POST[t_id]'";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "principle_dashboard.php";
	}
	else
	{
		window.location.href = "principle_dashboard.php";
	}
</script>
