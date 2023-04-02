<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Employee Record</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header"><h1>Update Record</h1></div>
					<div class="card-body">
						<form action="process.php" method = "post">
							<?php
							$id= $_GET['id'];
							if($id){
								include('connection.php');
								$sql = "select * from employee where id = '$id'";
								$resultSet = mysqli_query($conn,$sql);
								$row = mysqli_fetch_array($resultSet);

								?>
	
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Employee Name</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" name="EmployeeName" placeholder="Enter Employee Name:" value="<?php echo $row['EmployeeName'] ?>">
									</div>
								</div>
							</div>
		
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Age</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="number" name="Age" placeholder="Enter Age:" value="<?php echo $row['Age'] ?>">
									</div>
								</div>
							</div>
		
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Gender</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<select name="gender" class="">
											<option value="">Select Gender</option>
											<option value="Male" <?php if($row["Gender"] == "Male") {echo "selected";}?> >Male</option>
											<option value="Female"  <?php if($row["Gender"] == "Female") {echo "selected";}?> >Female</option>
											<option value="Undeclared"  <?php if($row["Gender"] == "Undeclared") {echo "selected";}?> >Undeclared</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Address</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<input type="hidden" name ="id" value="<?php echo $row['id'] ?>">
									<div class="form-element my-4">
										<textarea name="Address" placeholder="Enter your Address:" >
											<?php echo $row['Address'] ?>
										</textarea>
									</div>
								</div>
							</div>

									<div class="form-element my-4">
										<input type="submit" name="updateemp" value="Update Employee" class="btn btn-outline-primary">
									</div>
								</form>
								<?php
							}else{
								echo "Employee does not exist";
							}
							?>
						</form>	
					</div>
					</div>	
				</div>		
			</div>			
		</div>				
	</div>					

</body>
</html>