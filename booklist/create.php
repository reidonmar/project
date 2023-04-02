<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Add Employee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header"><h1>Add Employee</h1></div>
					<div class="card-body">

						<form action="process.php" method="post" class="form-horizontal">
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Employee Name</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="EmployeeName" id="EmployeeName" placeholder="Enter your Employee Name" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="age" class="cols-sm-2 control-label">Age</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="Age" id="Age" placeholder="Enter your Age" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="gender" class="cols-sm-2 control-label">Select Gender</label><br>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="gender" class="">
										<option value="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Undeclared">Undeclared</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="cols-sm-2 control-label">Address</label><br>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="Address" id="Address" placeholder="Type your address" />
									</div>
								</div>
							</div>
							<div class="form-group ">
								<input type="submit" name="createemp" value="Add Employee" class="btn btn-primary btn-lg btn-block login-button">
							</div>
						</form>
					</div>
				</div>

			</div>	
		</div>
	</div>

</body>
</html>