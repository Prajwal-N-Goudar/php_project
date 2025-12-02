<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f7ff;
            padding: 40px;
        }
        .result-box {
            width: 480px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #1a237e;
        }
        .info {
            font-size: 18px;
            margin-bottom: 12px;
        }
        span {
            font-weight: bold;
            color: #333;
        }
    </style>

</head>
<body>

<div class="result-box">
    <h2>Application Submitted Successfully ✔</h2>

    <p class="info">Full Name: <span><?php echo $name; ?></span></p>
    <p class="info">Email: <span><?php echo $email; ?></span></p>
    <p class="info">Phone: <span><?php echo $phone; ?></span></p>
    <p class="info">Selected Course: <span><?php echo $course; ?></span></p>
</div>

</body>
</html>
