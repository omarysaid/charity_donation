<?php
session_start();
include("../connections/connection.php");

$nameError = $descriptionError = ''; 
$name = $description = ''; 

if (isset($_POST['update_data'])) {
    $role_id = $_GET['role_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    
    if (empty($name)) {
        $nameError = "Name is required";
    }

    if (empty($description)) {
        $descriptionError = "Description is required";
    }

   
    if (empty($nameError) && empty($descriptionError)) {
        $update_role = "UPDATE role SET name='$name', description='$description' 
        WHERE role_id = '$role_id'";

        if (mysqli_query($connect, $update_role)) {
           
            $roleStatus = "Role updated successfully";
        } else {
         
            $roleStatus = "Error occurred while updating role";
        }
    }
} else {
    // Fetch existing name and description from the database
    $select_role = "SELECT * FROM role WHERE role_id = '" . $_GET['role_id'] . "'";
    $result = mysqli_query($connect, $select_role);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $description = $row['description'];
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Charity System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./themes/css/style.css" rel="stylesheet">

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a class="brand-logo">
                CHARITY DONATION
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">

                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Sidebar start here
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow" href="../Admin/dashboard.php" aria-expanded="false"><i class="icon icon-home"></i><span class="nav-text">DASHBOARD</span></a>

                    </li>


                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">ROLES</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../role/allRoles.php">View_All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">DONORS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../donors/allDoners.php">View_All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">CAMPS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="../camp/allcamps.php">View_All</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!--**********************************
            Content body start here
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="alert <?php echo isset($roleStatus) && strpos($roleStatus, 'successfully') !== false ? 'alert-primary' : ''; ?>" id="successMessage" style="width:1100px; margin-left:50px; color:white">
                                <?php echo isset($roleStatus) ? $roleStatus : ''; ?>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" onsubmit="return validateForm()">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" style="color: #001F3F;">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" id="name" class="form-control" style="height: 50px;" value="<?php echo $name ?>">
                                                <div id="nameError" class="error"><?php echo $nameError ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" style="color: #001F3F;">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" id="description" class="form-control" style="height: 100px;"><?php echo $description ?></textarea>

                                                <div id="descriptionError" class="error"><?php echo $descriptionError ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" name="update_data" class="btn btn" style=" background-color:#001F3F;">
                                                    Update</button>
                                                <span><a href="./allRoles.php"><button type="button" class="btn btn-danger">Cancel</button></a></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Required vendors -->
    <script src="./themes/vendor/global/global.min.js"></script>
    <script src="./themes/js/quixnav-init.js"></script>
    <script src="./themes/js/custom.min.js"></script>
    <script>
        function validateForm() {
            var name = document.getElementById('name').value.trim();
            var description = document.getElementById('description').value.trim();
            var nameError = document.getElementById('nameError');
            var descriptionError = document.getElementById('descriptionError');
            var isValid = true;

            // Validate name
            if (name === "") {
                nameError.textContent = "Name is required";
                isValid = false;
            } else {
                nameError.textContent = ""; // Clear previous error message
            }

            // Validate description
            if (description === "") {
                descriptionError.textContent = "Description is required";
                isValid = false;
            } else {
                descriptionError.textContent = ""; // Clear previous error message
            }

            return isValid;
        }
    </script>

    <!-- JavaScript to hide the success message after 2 seconds -->
    <script>
        // Function to hide the success message after 2 seconds
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none'; // Hide the message
            }
        }, 2000);
    </script>


</body>

</html>