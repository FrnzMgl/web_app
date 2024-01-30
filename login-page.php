<?php
$servername = "localhost";
$username = "root";
$password = "franz";
$dbname = "web_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$query = 'SELECT * FROM account';
            
           
            $result = mysqli_query($conn, $query);
            $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
             $count = 0;
            foreach ($events as $event):
            ?>
            <tr>
                <th scope="row"><?php $count++; echo $count; ?></th>
                <td><?php echo $event['id']; ?></td>
                <td><?php echo $event['username']; ?></td>
                <td><?php echo $event['password']; ?></td>
                <td><?php echo $event['profile_name']; ?></td>
                <td><?php echo $event['cover_photo']; ?></td>
                
            </tr>
            <?php endforeach; ?>
    
    
        <div class="container-login">
            <h1>Log In</h1>
            
            <h2>Username</h2>
            <div class="transparent-textbox">
                <input type="text" >
              
            </div>
        
            <div class="transparent-textbox">
                <input type="password" >
              
            </div>

    </div>
</body>
</html>