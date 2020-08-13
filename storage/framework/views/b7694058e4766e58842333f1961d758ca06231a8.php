<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
@import  "resources/assets/css/formCSS.css"
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/formCSS.css')); ?>" />

</head>
<body>

<div class="myImage">
<img src="/Users/qwerty/lar-53/lar-53/public/images/landscape.jpeg">
</div>

      
<div class="myForm">
<form action="user/login" method="post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <h3>Welcome </h3>
    <input type="text" id="username" name="username" placeholder="Username" required><br>
    <input type="password" id="pass" name="pass" placeholder="Password" required><br>
    <input type="number" id="age" name="age" placeholder="Age" required><br>
    <input type="radio" id="admin" name="role" value="admin">
    <label for="admin">Admin</label><br>
    <input type="radio" id="client" name="role" value="client">
    <label for="client">Client</label><br>
    Profile pic:<input type="file" id="profilePic" name="profilePic"></input>
    <input type="submit" value="Register"><br>
    <button class="btn-f">Sign in with Facebook</button>
    <button class="btn-g">Sign in with Google</button>
</form>

</div>
</body>
</html>