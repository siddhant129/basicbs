<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>


<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4">Create a User</h2>
        <br>

        <div class="container">
		<div class="card p-5 bg-light"><section id="form">
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
							<img src="img/user3.jpg" class="mx-auto d-block rounded-circle" width="50%" alt="">
								<form action="add.php" method="post" name="form1">
									<div class="form-group">
										<label for="input 1">Name</label>
										<input type="text" class="form-control" name='name' placeholder="Enter Your Name">
									</div>
									<div class="form-group">
										<label for="input 2">Email</label>
										<input type="text" class="form-control" name='email' placeholder="Enter Your Email">
									</div>
									<div class="form-group">
										<label for="input 3">Balance</label>
										<input type="text" class="form-control" name='balance' placeholder="Enter Your Balance">
									</div>
									<input class="btn btn-primary" type="submit" name="Submit" value="CREATE">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>