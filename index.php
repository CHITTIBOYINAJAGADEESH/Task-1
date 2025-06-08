<?php
$title = "Welcome to Our Amazing Service!";
$subtitle = "We provide top-notch solutions to help you grow your business and achieve your goals. Let's get started!";
$buttonText = "Start Now";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stunning Animated Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: white;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-out;
        }

        h1 {
            font-size: 3.5em;
            font-weight: 700;
            margin-bottom: 20px;
            animation: slideInTop 1.5s ease-out;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: slideInBottom 2s ease-out;
        }

        .button {
            font-size: 1.2em;
            background-color: #fff;
            color: #2575fc;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.3s ease;
            animation: pulse 2s infinite;
        }

        .button:hover {
            background-color: #2575fc;
            color: #fff;
            transform: translateY(-5px);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideInTop {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInBottom {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Dynamic Content -->
        <h1><?php echo $title; ?></h1>
        <p><?php echo $subtitle; ?></p>
        <a href="#" class="button"><?php echo $buttonText; ?></a>
    </div>
</body>

</html>
