<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student List</title>
  <style>
    body { font-family: Arial; margin: 40px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
    th { background-color: #f4f4f4; }
    a { text-decoration: none; color: blue; }
    .btn { padding: 5px 10px; border: 1px solid #333; background: #eee; }
  </style>
</head>
<body>
  <h2>📋 Student List</h2>
  <a href="add.php" class="btn">+ Add Student</a><br><br>
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
    </tr>
    <?php
      $result = $conn->query("SELECT * FROM students ORDER BY id DESC");
      while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>" class="btn" onclick="return confirm('Delete?')">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>