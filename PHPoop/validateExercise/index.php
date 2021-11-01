<?php
    require('userValidator.php');
    if(isset($_POST['submit'])){
        //validate entries
        //added $_POST to retrieve data from html
        $validation = new UserValidator($_POST);

        //echo $error['username'] down there
        $error = $validation->validateForm();

        //save data to db
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
</head>
<body>
    <div class="new-user">  
        <h2>Create new user</h2>

        <form action="index.php" method="POST">
                <label for="username">Username
                    <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
                    <div class="error">
                    <?php echo $error['username'] ?? '' ?>
                    </div>
                </label>

                <label for="email">Email
                    <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                    <div class="error">
                    <?php echo $error['email'] ?? '' ?>
                    </div>
                </label>

                <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>