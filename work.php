<?php  include('workserver.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$taskname = $n['taskname'];
			$startdate = $n['startdate'];
			$enddate = $n['enddate'];
			$progress = $n['progress'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WORK Details</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
<h3>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>TaskName</th>
			<th>StartDate</th>
			<th>EndDate</th>
			<th>Progress</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['taskname']; ?></td>
			<td><?php echo $row['startdate']; ?></td>
			<td><?php echo $row['enddate']; ?></td>
			<td><?php echo $row['progress']; ?></td>
			<td>
				<a href="work.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="workserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</h3>
<div class="register">
		<h1>Work Details</h1>
	</div>
<form method="post" action="workserver.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>"><h2>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>TaskName</label>
			<input type="text" name="taskname" value="<?php echo $taskname; ?>">
		</div>
		<div class="input-group">
			<label>StartDate</label>
			<input type="date" name="startdate" value="<?php echo $startdate; ?>">
		</div>
		<div class="input-group">
			<label>EndDate</label>
			<input type="date" name="enddate" value="<?php echo $enddate; ?>">
		</div>
		<div class="input-group">
			<label>Progress</label>
			<input type="text" name="progress" value="<?php echo $progress; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</h2>
	</form>
</body>
</html>