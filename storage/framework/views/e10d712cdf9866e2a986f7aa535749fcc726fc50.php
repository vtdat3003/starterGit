<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
   box-sizing: border-box;
}
html, body
{
  height: 100%;
  margin: 0;
  padding: 0;
}
html { height:100%; }
body { position:absolute; top:0; bottom:0; right:0; left:0; }
.myImage {
    width: 33.3%;
    float: left;
    padding: 15px;
}

.myForm {
    width: 33.3%;
    float: left;
    padding: 15px;   
}
form{
    margin:20% 0 33.3% 0;
    padding: 5vw 0 5vw 0;
    text-align: center;
    border: 1px solid black;
}
input[type=text], input[type=password], input[type=number]{
    width: 50%;
    padding: 12px 10px;
    margin: 1% 0;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 15px;
    align:center;
}
input[type=text]:hover, input[type=password]:hover ,input[type=number]:hover{
    border: 2px solid red;
}
button{
    margin: 1% 0;
    width: 50%;
    display: inline-block; 
    height: 30px;
}
button.btn-f{
    background-color: #3B5998;
    color: #FFFFFF;
}
button.btn-f:hover{
    background-color: #8B9DC3;
    color: #FFFFFF;
}
button.btn-g{
    background-color: #FF4500;
}
button.btn-g:hover{
    background-color: #ff7c4d;
}
input[type=submit] {
    margin: 1% 0;
    width: 50%;
    display: inline-block; 
    height: 30px;
    background-color: #32CD32;
}
input[type=submit]:hover {
    background-color: #6fdc6f;
}
h3{
    text-align:center;
}
</style>
</head>
<body>
<div class="myImage">
</div>

      
<div class="myForm">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="post_create" method="post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <h3>Welcome </h3>
    <input type="text" name="title" id="title" placeholder="Title"></input><br>
    Body:<br>
    <textarea id="body" name="body" rows="7" cols="35" >
    </textarea><br>
    <input type="date" name="publish_at" id="publish_at" placeholder="Publish date"></input><br>
    <input type="number" name="cost" id="cost" placeholder="Cost"></input><br>
    Reason for that cost:<br>
    <textarea id="reason" name="reason" rows="7" cols="35" >
    </textarea><br>
    <input type="submit" value="Create"><br>
</form>

</div>
</body>
</html>