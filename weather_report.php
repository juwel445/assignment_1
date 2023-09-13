<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather Calculator</title>
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
    </style>
</head>
<body>
    <div class="grade_calculation">
        <h2>weather Report</h2>
        <p>Note: under 20 is freezing, 20-29 is cool, 30-40 is warm</p>
        <form action="" method="POST">
            <input type="number" name="weather" placeholder="Enter your number">
            <button type="submit">submit</button>
        </form>
        <div id="result">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $myWeather = $_POST["weather"];
                if($myWeather >= 30){
                    echo "It's warm";
                }
                elseif($myWeather >= 20 && $myWeather <= 29){
                    echo "It's cool";
                }
                elseif($myWeather < 20){
                    echo "It's freezing";
                }

            }
            
        
            
            
            ?>
        </div>
    </div>
</body>
</html>