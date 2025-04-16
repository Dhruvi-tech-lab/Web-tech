<!DOCTYPE html>
<html>
<head>
    <title>Form Result</title>
</head>
<body>

<h2>Submitted Student Data</h2>

<?php 
echo "Name : " . $_POST["name"] . "<br>";
echo "Email : " . $_POST["email"] . "<br>";
echo "Semester : " . $_POST["sem"] . "<br>";
echo "Gender : " . $_POST["gender"] . "<br>";
echo "Mobile : " . $_POST["mobile"] . "<br>";
echo "Enrollment Number : " . $_POST["ennum"] . "<br>";
?>

</body>
</html>
