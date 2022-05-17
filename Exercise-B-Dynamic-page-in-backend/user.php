<?php
$userInfos = [
    'id' => 1,
    'forename' => 'sarah',
    'lastname' => 'Youssef',
    'age' => 32,
    'adress' => 'Entença,95'
    // etc
];
// $@% syntax error
// echo php_ini_loaded_file();
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercise A</title>
</head>

<body>
    <div class="container">
        <h1>Exercise A</h1>
        <div class="card">
            <div class="card-body">
                Id: <?php echo $userInfos['id'] ?><br>
                Forename: <?php echo $userInfos['forename'] ?><br>
                Lastname: <?php echo $userInfos['lastname'] ?><br>
                Age: <?php echo $userInfos['age'] ?> <br>
                Adress: <?php echo $userInfos['adress'] ?>
            </div>
        </div>
    </div>

</body>

</html>