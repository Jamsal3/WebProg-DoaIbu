<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('textAlign', $_POST['textAlign'], time() + (86400 * 30), "/");
    setcookie('fontFamily', $_POST['fontFamily'], time() + (86400 * 30), "/");
    setcookie('color', $_POST['color'], time() + (86400 * 30), "/");

    header("Location: index.php");
    exit;
}

$textAlign = isset($_COOKIE['textAlign']) ? $_COOKIE['textAlign'] : '';
$fontFamily = isset($_COOKIE['fontFamily']) ? $_COOKIE['fontFamily'] : '';
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : '#000000';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting.php</title>
</head>

<body>
    <h1>halaman Setting</h1>
    <br><br>
    <form action="setting.php" Method="POST">
        <label>Text Alignment : </label>
        <select name="textAlign" id="textAlign" required>
            <option value="" <?php echo (isset($textAlign) && $textAlign == "center") ? 'selected' : ''; ?>>--Pilih Text
                Align--
            </option>
            <option value="center" <?php echo (isset($textAlign) && $textAlign == "center") ? 'selected' : ''; ?>>center
            </option>
            <option value="left" <?php echo (isset($textAlign) && $textAlign == "left") ? 'selected' : ''; ?>>left
            </option>
            <option value="right" <?php echo (isset($textAlign) && $textAlign == "right") ? 'selected' : ''; ?>>right
            </option>
            <option value="justify" <?php echo (isset($textAlign) && $textAlign == "justify") ? 'selected' : ''; ?>>
                justify</option>
        </select>
        <br><br>
        <label>Font-Family : </label>
        <select name="fontFamily" id="fontFamily" required>
            <option value="" <?php echo (isset($fontFamily) && $fontFamily == "") ? 'selected' : ''; ?>>--Pilih Font
                Family--</option>
            <option value="Arial" <?php echo (isset($fontFamily) && $fontFamily == "Arial") ? 'selected' : ''; ?>>Arial
            </option>
            <option value="Tahoma" <?php echo (isset($fontFamily) && $fontFamily == "Tahoma") ? 'selected' : ''; ?>>Tahoma
            </option>
            <option value="Calibri" <?php echo (isset($fontFamily) && $fontFamily == "Calibri") ? 'selected' : ''; ?>>
                Calibri
            </option>
        </select>
        <br><br>
        <label>Color : </label>
        <input type="color" name="color" value="<?php echo $color ?>">
        <br><br>
        <button type="submit">simpan</button>
    </form>

</body>

</html>