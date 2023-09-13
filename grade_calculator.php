<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
        }
    </style>
</head>
<body>
    <div class="grade_calculation">
        <h2>Grade Calculator</h2>
        <form action="" method="POST">
            <input type="number" name="myresult" placeholder="Enter your result">
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     $bangla = $_POST["bangla"];
            //     $english = $_POST["english"];
            //     $math = $_POST["math"];
            //     $total = $bangla + $english + $math;
            //     $average = $total / 3;
            //     echo "Total: $total";
            //     echo "<br>";
            //     echo "Average: $average";
            
            
            // }

            
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $myResult = $_POST["myresult"];
                if($myResult >= 80 && $myResult <= 100){
                    echo "You have passed the exam, grade A ";
                }
                elseif($myResult >= 70 && $myResult <= 79){
                    echo "You have passed the exam, grade B ";
                }
                elseif($myResult >= 60 && $myResult <= 79){
                    echo "You have passed the exam, grade C ";
                }
                elseif($myResult >= 50 && $myResult <= 59){
                    echo "You have passed the exam, grade D ";
                }
                elseif($myResult >= 40 && $myResult <= 49){
                    echo "You have passed the exam, grade E ";
                }
                else{
                    echo "You have failed the exam, grade F.";
                }

            }
            
        
            
            
            ?>
        </div>
    </div>
</body>
</html>