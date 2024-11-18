<!DOCTYPE html>
<html lang="en">
<!-- Styling header  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
    <style>
        html {
            height: 100%;
            background-color: black;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100%;
            color: white;
            font-family: Arial, sans-serif;
            background-image: url("C:/Users/Tomy/Pictures/Wallpapers/Money.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        /* Styling for the header */
        header {
            color: white;
            padding: 10px 20px;
            font-size: 24px;
            text-align: left;
        }
        /* Button styling */
        .button {
            background-color: green;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
        /* text box */
        .text-box {
            background-color: black;
            padding: 20px;
            margin: 20px;
        }
        /* Box containment for buttons */
        .button-containment {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 100%;
        }
        .vertical-framing {
            background-color: green;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 40px;
            cursor: pointer;
            border-radius: 5px;
            width: 80%;
            transition: background-color 0.3s;
        }
        .vertical-framing:hover {
            background-color: #367B37;
        }
    </style>
</head>

<body>
<!-- Nanobots cloaking controller -->

<!-- Reason for project -->
<header>Project details</header>
<div class="text-box">
    The reason for the project is to assist you in making better money related choices. The only way to protect yourself from scammers is to understand money just like them.
</div>

<header>Features availible</header>
<!-- Routing links as buttons -->
<div class="button-containment">
    <!-- Detailed list of features -->
    <!-- Saving calculator routinig -->
    <button class="vertical-framing">
        Savings calculator
    </button>
    <!-- Tax calculations routing -->
    <button class="vertical-framing">
        Tax calculations
    </button>
    <!-- Compound interest routing -->
    <button class="vertical-framing">
        Compound interest
    </button>
    <!-- Down payment calculations routing -->
    <button class="vertical-framing">
        Down payments calculatons
    </button>
</div>

</body>

</html>
