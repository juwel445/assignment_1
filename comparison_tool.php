<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison convert</title>
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
        <h2>ternary Operator</h2>
        <form action="" method="POST">
            <input type="number" name="number1" placeholder="Enter your number">
            <input type="number" name="number2" placeholder="Enter your number">
            <button type="submit">submit</button>
        </form>
        <div id="result">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                // ternary  operator
                $bigNumber = $number1 > $number2 ? "The number $number1 is greater than $number2" : ($number1 < $number2 ? "The number $number1 is less than $number2" : "The number $number1 is equal to $number2");
                echo $bigNumber;

            }
            
        
            
            
            ?>
        </div>
    </div>
</body>
</html>