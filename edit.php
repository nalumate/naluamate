<?php include 'db.php';
$id  = $_GET['id'];
$row = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("UPDATE students SET name='$name',email='$email',phone='$phone' WHERE id=$id");
    header("Location: list.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
  <h2>Edit Student</h2>
  <form method="POST">
    Name:  <input type="text" name="name"  value="<?= $row['name'] ?>"><br><br>
    Email: <input type="text" name="email" value="<?= $row['email'] ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"><br><br>
    <input type="submit" value="Update">
    <a href="list.php">Cancel</a>
  </form>
</body>
</html>