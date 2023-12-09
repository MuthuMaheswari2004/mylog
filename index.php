<html>
    <head>
        <title>Login</title>
        <style>
            h1{
                font-size: 30px;
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                text-align: center;
            }
            .fpage{
                margin:200px;
                border: 1px solid black;
                padding:40px;
                margin-right:500px;
                margin-left:500px;
            }
        </style>
    </head>
    <body>
        <h1>Login Page</h1>
        <hr>
         <div class="fpage">
            <form action="" method="post">
                <label>Email</label>
                <input  type="text" name="email" placeholder="enter name">
                <br>
                <br>
                <label>Password</label>
                <input  type="password" name="password" placeholder="enter password">
                <br>
                <br>
                <input type="submit" name="submit" value="Login">
            </form>
         </div>
    </body>
</html>

<?php
$con=mysqli_connect("localhost","root","","loginn");
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email!=""&&$password!=""){
        $sql="insert into log values('$email','$password')";
        if($con->query($sql)){
           echo'<script>alert("Data stored")</script>';
        }else{
            echo'<script>alert("Data not stored")</script>';
        }
    }else{
    echo'<script>alert("Fill all rows")</script>';
}
}
?>
