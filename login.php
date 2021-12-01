<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="file/css/style.css">
    <title>Akashic Record</title>
</head>
<body>
    <?php
    if(isset($GET['message'])){
        if($GET['message'] == "failed"){
            echo "<script>alert('Gagal login!');</script>";
        }
    }
    ?>
    <div class="login">
        <h1>Login</h1>
        <form action="arlogin.php" method="post">
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Log in.</button>
        </form>
    </div>
</body>
</html>
