<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperature convert</title>
    <style>
        .grade_calculation {
            max-width: 500px;
            width: 100%;
            margin: auto;
            background: #bdbdbd;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }
        .grade_calculation form input {
            display: block;
            width: 90%;
            margin: auto;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid gray;
            color: #000;
        }
        .grade_calculation form button {
            color: ;
            background: #0d6efd;
            color: #fff;
            border: 1px solid #0d6efd;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
            box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
            margin-bottom: 10px;
        }
        .grade_calculation form select {
            text-align: center;
            display: block;
            width: 90%;
            margin: auto;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="grade_calculation">
        <h2>temperature converter</h2>
        <form action="" method="POST">
            <input type="number" name="temperature" placeholder="Enter your number">
            <select name="options" id="">
                <option value="calciues">Celsius to Fahrenheit</option>
                <option value="fahrenheit">Fahrenheit to celsius</option>
            </select>
            <button type="submit">submit</button>
        </form>
        <div id="result">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $myTemperature = $_POST["temperature"];
                $myOption = $_POST["options"];
                if($myOption == "calciues"){
                    echo "Fahrenheit:" . $myTemperature * 9/5 + 32;
                }
                elseif($myOption == "fahrenheit"){
                    echo "celsius:". ($myTemperature - 32) * 5/9;
                }

            }
            
        
            
            
            ?>
        </div>
    </div>
</body>
</html>