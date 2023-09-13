<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Calculator</title>
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
        <h2>Math Calculator</h2>
        <form action="" method="POST">
            <input type="number" name="number1" placeholder="Enter your number">
            <input type="number" name="number2" placeholder="Enter your result">
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["number1"];
                $num2 = $_POST["number2"];
                $operation = $_POST["operation"];

                
                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;
                    case "subtract" :
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;
                    case "multiply" :
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;
                    case "divide" :
                        if($num2 != 0){
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        }
                        else{
                            echo " invalid input.";
                        }
                        break;
                    default:
                        echo "Put a right number.";
                }

            }
            
        
            
            
            ?>

        </div>
    </div>
</body>
</html>