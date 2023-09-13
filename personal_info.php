<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal_information</title>
    <style>
        p{
            font-size: 20px;
            font-weight: bold;
            color: #000;
            display: inline-block;
        }
        h2{
            font-size: 40px;
            font-weight: 900;
            color: #000;
        }
        .personal_information {
            max-width: 800px;
            margin: auto;
            width: 100%;
            padding: 25px;
        }
    </style>
</head>
<body>

        <div class="personal_information">
            <h2>Personal information</h2>
                <?php 

                    $name = "Juwel";
                    $age = 24;
                    $location = "Dinajpur";
                    $description = "hi there, I am $name and I am $age years old and I live in $location. I love to learn php from Ostad.";
                    echo " <p>Name:</p> " . $name . "<br>";
                    echo "<p>Age:</p> " . $age . "<br>";
                    echo "<p>Location:</p> " . $location . "<br>";
                    echo "<p>Description:</p> " . $description;

                ?>
        </div>
    
</body>
</html>