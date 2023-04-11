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

    <div class="container d-flex justify-content-center align-items-center">
        <div class="w-50">
            <form action="./src/controllers/userController.php" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-2">
                    <label for="fullName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="fullName">
                </div>
                <div class="mb-2">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" name="birthDate">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-2">
                    <label for="userImage" class="form-label">User Image</label>
                    <input type="file" class="form-control" name="userImage">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="my-2">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-success" value="upload">Register</button>
            </form>
        </div>
    </div>
    <?php
    // Include the footer file
    include './src/views/includes/footer.php';
    ?>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>