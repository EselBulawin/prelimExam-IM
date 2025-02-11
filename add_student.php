<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    
    $sql = "INSERT INTO students (name, email, department) VALUES ('$name', '$email', '$department')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>

<div class="container">
    <h2>Add New Student</h2>
    <form method="POST" action="add_student.php">
        <div class="form-group">
        <label for="name">First Name: </label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email"  id="email" placeholder="Enter you email" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" placeholder="Enter Department" required>
        </div>
        <div class="form-group1">
            <input type="submit" value="Add Student">
        </div>
    </form>
</div>

</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label{
            font-weight:bold;
        }
        .form-group {
            margin: 15px 0;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
        }
        .form-group input {
            width: 97%;
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group1 input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }
        .form-group1 input[type="submit"] {
            background-color: green;
            color: white;
            cursor: pointer;
            border: none;
        }
        .form-group1 input[type="submit"]:hover {
            background-color: green;
        }
    </style>