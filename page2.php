<!DOCTYPE html>
<html>
<head>
    <title>Form - Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <form method="POST" action="success.php">
        <label for="location">Location:</label>
        <input type="text" name="location" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="university">University:</label>
        <input type="text" name="university" required><br><br>

        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
