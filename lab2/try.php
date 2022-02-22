<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
if(file_exists("log.txt")){
    $imported_content= file_get_contents("log.txt");
    $userData= explode("\n", $imported_content);

    }
session_start();
$counter = isset($_SESSION['counter']) ? $_SESSION['counter'] : 0;
$counter++;
$_SESSION['counter'] = $counter;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Users Data</title>
    <style>
        h1{
            text-align: center;
        }
        hr{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
    </style>
</head>
<body>
    <h1>User Data </h1>
    <h1> <?php echo $counter; ?> </h1>
<?php
  
        foreach ($userData as $usr) {
           if (empty($usr)) break;
            $data= explode(",", $usr);
            echo "Name:$data[0]<br>";
            echo "Email: $data[1]<br>";
            echo "IP Address: $data[2]<br>";
            echo "Date: $data[3]<br>";
            echo "<hr>";
        }
    
?>
</body>
</html>