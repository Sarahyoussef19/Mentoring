<!-- URL paramater to display what is shown in the url id -->

<?php
echo $_GET['id'];
var_dump($_GET)
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$userId = $_GET['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'mentoring');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$query = "SELECT * FROM user WHERE id=$userId"; // WHERE user_id = " . $user_id;
echo $query;
$result = mysqli_query($conn, $query);
//$row   = mysqli_fetch_row($result);
$userInfos = $result->fetch_assoc();
// echo '<pre>';
// var_dump ($userInfos);

$conn->close();
?>

<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercise A</title>
</head>

<body>
    <div class="container">
        <h1>Exercise A</h1>
        <div class="card">
            <div class="card-body">
                <?php
                if ($userInfos == null) {
                ?>
                    sorry no user found
                <?php
                } else {
                ?>
                    Id: <?php echo $userInfos['id'] ?> <br>
                    Forename: <?php echo $userInfos['forename'] ?><br>
                    Lastname: <?php echo $userInfos['lastname'] ?><br>
                    Age: <?php echo $userInfos['age'] ?> <br>
                    Adress: <?php echo $userInfos['adress'] ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>