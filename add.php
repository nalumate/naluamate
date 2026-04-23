<?php include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("INSERT INTO students (name,email,phone) VALUES ('$name','$email','$phone')");
    header("Location: list.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
  <h2>Add Student</h2>
  <form method="POST">
    Name:  <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email"><br><br>
    Phone: <input type="text" name="phone"><br><br>
    <input type="submit" value="Save">
    <a href="list.php">Cancel</a>
  </form>
</body>
</html>