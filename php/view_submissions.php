<?php include("connection.php"); 
$conn = new mysqli("localhost", "root", "", "fitco_db");

if ($conn->connect_error) {
    die("Connection failed");
}

$result = $conn->query("SELECT * FROM fitco");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Submissions</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="submission">

<h2>Submitted Submissions</h2>
<div class="table_container">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Phone']; ?></td>
    </tr>
    <?php } ?>

</table>
</div>
<br>
<a href="../contact.php">Back to Form</a>
</div>
</body>
</html>
