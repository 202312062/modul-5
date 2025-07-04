<!DOCTYPE html>
<html>
<body>

    <form method="get" action="latihansuperglobals.php">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "Halo, " . $name;
    }
    ?>
</body>
</html>