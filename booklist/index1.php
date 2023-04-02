<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Book List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		table td, table th, h1{
			text-align: center;
			padding: 20px;
			border border-radius: 5px;
		}
		table tr:nth-child(even){
			background-color:#f2f2f2;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header"><h1>Employee Records</h1></div>
			<table>
			<thead>
				<th>
					ID
				</th>
				<th>
					Employee Name
				</th>
				<th>
					Age
				</th>
				<th>
					Address
				</th>	
			</thead>
			<tbody>
				<?php
				include('connection.php');
				$sql = "select * from employee";
				$resultSet = mysqli_query($conn,$sql);
				while($data = mysqli_fetch_array($resultSet)){
					?>
					<tr>
						<td><?php echo $data['id']?></td>
						<td><?php echo $data['EmployeeName']?></td>
						<td><?php echo $data['Age']?></td>
						<td><?php echo $data['Address']?></td>
						<td><a href="view.php?id=<?php echo $data['id'] ?> "class="btn btn-outline-info">Info</a>
							<td><a href="delete.php?id=<?php echo $data['id'] ?> "class="btn btn-outline-danger">Delete</a>
								<td><a href="update.php?id=<?php echo $data['id'] ?> "class="btn btn-outline-primary">Update</a>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</td>
					</div>
				</div>
			</div>
		</div>	
	</div>

</body>
</html>