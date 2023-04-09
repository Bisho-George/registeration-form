<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/assets/style.css">
</head>
<body>
    <?php
    // Include the header file
    include './src/views/includes/header.php';
    ?>
    <!-- Page content goes here -->

    <form action="./src/controllers/userController.php" method="post" >
		<label for="full_name">Full Name:</label>
		<input type="text" id="full_name" name="full_name" required><br><br>
		
		<label for="user_name">User Name:</label>
		<input type="text" id="user_name" name="user_name" required><br><br>
		
		<label for="birthdate">Birthdate:</label>
		<input type="date" id="birthdate" name="birthdate" required><br><br>
		
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required><br><br>
		
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea><br><br>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		
		<label for="user_image">User Image:</label>
		<input type="file" id="user_image" name="user_image" accept="image/*" ><br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		
		<input type="submit" value="Register">
    <?php
    // Include the footer file
    include './src/views/includes/footer.php';
    ?>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


