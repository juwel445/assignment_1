<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODD | Even Calculator</title>
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
        <h2>even and odd Calculator</h2>
        <form action="" method="POST">
            <input type="number" name="myNumber" placeholder="Enter your result">
            <button type="submit">Submit</button>
        </form>
        <div id="result">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $myNumber = $_POST["myNumber"];
                
                    if($myNumber % 2 == 0){
                        echo "This is an even number";
                    }
                    elseif($myNumber % 2 != 0){
                        echo "This is an odd number";
                    }
            
        
                }
            
            ?>
        </div>
    </div>
</body>
</html>