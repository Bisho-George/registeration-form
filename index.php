<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registeration Form</title>
    <!--<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
            <form id="registration-form" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="mb-2">
                    <label for="fullName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="fullName" id="fullName">
                </div>
                <div class="mb-2">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" name="birthDate" id="birthDate">
                    <button class="btn btn-dark" type="button" onclick="getActor(birthDate.value)">Get Actor Names</button>
                    <div>
                        <h4>Actor Names: </h4>
                        <ul id="actor-names"></ul>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div>
                <div class="mb-2 img">
                    <label for="userImage" class="form-label">User Image</label>
                    <input type="file" class="form-control" name="userImage" id="userImage">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="my-2">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                </div>
                <button type="submit" name="submit" class="btn btn-success" value="submit">Register</button>
            </form>
        </div>
    </div>
    <!-- <?php
            // Include the footer file
            include './src/views/includes/footer.php';
            ?> -->
    <script>

    </script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./src/models/API_Ops.js"></script>
    <script src="./script.js">
        // document.getElementById('registration-form').addEventListener('submit', function(e) {
        //     e.preventDefault();

        //     var xhr = new XMLHttpRequest();
        //     // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        //     var formData = new FormData(document.getElementById('registration-form'));

        //     xhr.onload = function() {
        //         if (xhr.status === 200) {
        //             console.log(xhr.responseText);
        //             console.log(formData);

        //             var response = JSON.parse(xhr.responseText);

        //             // var response = JSON.parse(xhr.responseText);
        //             // server-side validation was successful, submit the form

        //             document.getElementById('registration-form').submit;
        //             let imgMsg = response.imgMsg;
        //             let formMsg = response.formMsg;
        //             let p = document.createElement("p");
        //             let text = document.createTextNode(imgMsg);
        //             var imglabel = document.querySelector("img");
        //             imglabel.appendChild();


        //             // display an error message to the user
        //             alert(formMsg);
        //         } else {
        //             // display an error message to the user
        //             alert('An error occurred while validating the form');
        //         }
        //     };
        //     xhr.open('POST', './src/controllers/userController.php', true);

        //     xhr.send(formData);
        // });
    </script>


</body>

</html>