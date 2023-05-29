<?php
require "config.php";

// Start the session and check for an active session
session_start();
if (empty($_SESSION["email"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit;
}

// Retrieve user information from the database
$email = $_SESSION["email"];
$sql = "SELECT * FROM member WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 30px;
        }

        .card {
            width: 300px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            height: 100vh;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #000;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .sidebar ul li a:hover {
            color: #333;
        }

        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }

        header nav ul li a:hover {
            color: #ccc;
        }

    </style>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-icon" type="submit">Search</button>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <ul>
                        <li><a href="profile.php">User Info</a></li>
                        <li><a href="borrowed_books.php">Borrowed Books</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <h5 class="card-title">User Information</h5>
                    <p class="card-text"><strong>Name:</strong> <?php echo $user['name']; ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo $user['email']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
