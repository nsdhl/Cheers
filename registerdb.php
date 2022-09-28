<?php
include './includes/dbconn.php';

if (isset($_POST['username']) && $_POST['password']) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $age = $_POST['age'];

}
$sql = "INSERT INTO users(fullname,email,address,phone,username,password,age)
    VALUES ('$fname','$email','$address','$phone','$username','$password','$age')";

// $sql1 = "INSERT INTO users(username,password) VALUES ('$username','$password')";
if ($mysqli->query($sql) > 0) {
    // if ($mysqli->query($sql1) > 0) {
    echo "<script>alert('User Registered Successfully');
    window.location.href='login.php'</script>";
} else {
    echo "<script>alert('Error while registering');
    </script>";
}
