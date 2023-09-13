<!DOCTYPE html>
<html>
<head>
    <title>Background Color Customization</title>
</head>
<body>
    <?php
    // Check if the background color cookie is set
    if (isset($_COOKIE["bgcolor"])) {
        $bgcolor = $_COOKIE["bgcolor"];
    } else {
        // Default background color if the cookie is not set
        $bgcolor = "#ffffff"; // White
    }
    ?>

    <div style="background-color: <?php echo $bgcolor; ?>">
        <h1>Website with Customizable Background Color</h1>
        <p>Choose your preferred background color:</p>
        <form method="post">
            <input type="color" name="bgcolor" id="bgcolor" value="<?php echo $bgcolor; ?>">
            <input type="submit" name="submit" value="Set Background Color">
        </form>
    </div>

    <?php
    // Process the form submission
    if (isset($_POST["submit"])) {
        $selectedColor = $_POST["bgcolor"];
        setcookie("bgcolor", $selectedColor, time() + 60, "/");
        header("Location: " . $_SERVER['PHP_SELF']); 
    }
    ?>
</body>
</html>

