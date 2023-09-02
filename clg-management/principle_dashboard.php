<!DOCTYPE html>
<html>
<head>
	<title>Principle Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			margin-top: 20px;
		}
		#right_side{
			
			margin-top: 15px;
			width: 100%;
			background-color: whitesmoke;
			position: fixed;
			
			color: red;
			border: solid 1px black;
		}
		#top_span{
			margin-top:29px;
			color:white;
			
			width: 60%;
			left: 20%;
			position: fixed;
		}
		
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		#btn{
			background-color:#f44d4d;
			border-radius:10px;
			padding:5px;
			
		}
		#as{
			color:white;
		}
		#in{
			background-color:#13e4ec;
			cursor: pointer;
			border-radius:5px;
			padding:10px;
			margin:10px;
		}
		#in:hover{
			background-color: #8a8bea;

		}

	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center>College Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="btn"><a id ="as"href="logout.php">Logout</a></button>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- Please check the information given, before submitting .</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="in" type="submit" name="search_teacher" value="Search teacher">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			
				
			
				
						<input id="in" type="submit" name="edit_teacher" value="Edit teacher">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			
				
			
				
						<input id="in" type="submit" name="add_new_teacher" value="Add New Teacher">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			
				
			
				
						<input id="in" type="submit" name="delete_teacher" value="Delete Teacher">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			
				
			
				
						<input id="in" type="submit" name="show teacher" value="Show Teacher">
					
				
			
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_teacher']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter SSN:</b>&nbsp;&nbsp; <input type="text" name="t_id">
					<input type="submit" name="search_by_t_id_for_search" value="Search">
					</form><br><br>
					<h4><b><u>teacher's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_t_id_for_search']))
				{
					$query = "select * from teachers where t_id = '$_POST[t_id]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>SSN:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['t_id']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>course:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['courses']?>" disabled>
								</td>
							</tr>
							
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr>
							
						</table>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_teacher']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter SSN:</b>&nbsp;&nbsp; <input type="text" name="t_id">
				<input type="submit" name="search_by_t_id_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Teacher's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_t_id_for_edit']))
			{
				$query = "select * from teachers where t_id = '$_POST[t_id]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="principle_edit_teacher.php" method="post">
						<table>
						<tr>
							<td>
								<b>SSN:</b>
							</td> 
							<td>
								<input type="text" name="t_id" value="<?php echo $row['t_id']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="courses" value="<?php echo $row['courses']?>">
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_teacher']))
			{
				?>
				<center>
				<form action="delete_teacher.php" method="post">
				&nbsp;&nbsp;<b>Enter SSN:</b>&nbsp;&nbsp; <input type="text" name="t_id">
				<input type="submit" name="search_by_t_id_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_teacher'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_teacher.php" method="post">
						<table>
						<tr>
							<td>
								<b>SSN:</b>
							</td> 
							<td>
								<input type="text" name="t_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="courses" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Teachers"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>SSN</b></td>
								<td id="td"><b>NAME</b></td>
								<td id="td"><b>MOBILE</b></td>
								<td id="td"><b>COURSES</b></td>
								<td id="td"><b>EMAIL</b></td>
								<td id="td"><b>PASSWORD</b></td>
								
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
								
								<td id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['password']?></td>
								
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>