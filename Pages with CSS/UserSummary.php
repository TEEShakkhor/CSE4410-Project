<?php
include 'dbinfo.php'; 
?>  

<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];

// clearing the variables and starting fresh
unset($_SESSION['isbn']);
unset($_SESSION['copyid']);	
?> 

<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 10px auto;
            width: 250px;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
<h1>User Summary</h1>

<form action="SearchBooks.php" method="post">
<input type="submit" value="Search Books"/>
</form>

<form action="TrackBookLocation.php" method="post">
<input type="submit" value="Track Book Location"/>
</form>

<form action="BookCheckout.php" method="post">
<input type="submit" value="Checkout Book"/>
</form>

<form action="FutureHoldRequestforaBook.php" method="post">
<input type="submit" value="Future Hold Request"/>
</form>

<form action="RequestExtensionOnaBook.php" method="post">
<input type="submit" value="Extension Request"/>
</form>

<form action="ReturnBook.php" method="post">
<input type="submit" value="Return Book"/>
</form>

<form action="Login.php" method="post">
<input type="submit" value="Close"/>
</form>

</body>
</html>

<!--
<html>


<body>
    <h1>User Summary</h1>

    <form action="SearchBooks.php" method="post">
        <div class="button-group">
            <input type="submit" value="Search Books"/>
        </div>
    </form>

    <form action="TrackBookLocation.php" method="post">
        <div class="button-group">
            <input type="submit" value="Track Book Location"/>
        </div>
    </form>

    <form action="BookCheckout.php" method="post">
        <div class="button-group">
            <input type="submit" value="Checkout Book"/>
        </div>
    </form>

    <form action="FutureHoldRequestforaBook.php" method="post">
        <div class="button-group">
            <input type="submit" value="Future Hold Request"/>
        </div>
    </form>

    <form action="RequestExtensionOnaBook.php" method="post">
        <div class="button-group">
            <input type="submit" value="Extension Request"/>
        </div>
    </form>

    <form action="ReturnBook.php" method="post">
        <div class="button-group">
            <input type="submit" value="Return Book"/>
        </div>
    </form>

    <div class="close-button">
        <a href="Login.php">Close</a>
    </div>
</body>
</html>
-->