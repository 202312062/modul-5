<!DOCTYPE html>
<html>
<body>
    <form method="post" action="superglobals.php">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        echo "Halo, " . $name;
    }
    ?>
</body>
</html>