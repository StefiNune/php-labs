<?php
// Динамический контент: простой вывод Hello, World! с текущим временем
$current_time = date('H:i:s');
$current_date = date('d.m.Y');
$hello_message = "Hello, World! Текущее время: " . $current_time;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Hello, World!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #f0f0f0;
            position: relative;
        }
        .logo {
            position: absolute;
            left: 20px;
        }
        .logo img {
            height: 50px;
        }
        .header h1 {
            text-align: center;
        }
        /* Main */
        .main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .dynamic-content {
            padding: 40px;
            border: 2px solid #333;
            border-radius: 10px;
            background: #f9f9f9;
            text-align: center;
        }
        .dynamic-content p {
            font-size: 24px;
        }
        /* Footer */
        .footer {
            text-align: center;
            padding: 15px;
            background: #f0f0f0;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="лого.png" alt="Логотип МосПолитеха">
    </div>
    <h1>Hello, World!</h1>
</header>

<main class="main">
    <div class="dynamic-content">
        <p><?php echo $hello_message; ?></p>
    </div>
</main>

<footer class="footer">
    задание для самостоятельной работы
</footer>

</body>
</html>