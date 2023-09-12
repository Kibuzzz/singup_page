<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Document</title>
</head>

<body>
    <h3>Signup form</h3>
    <form action="includes/signup.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>Submit</button>
    </form>
    <h3>Change user data</h3>
    <form action="includes/update.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="new_username" placeholder="New Username">
        <button>Change</button>
    </form>

    <h3>Delete user</h3>
    <form action="includes/delete.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form>
</body>

</html>