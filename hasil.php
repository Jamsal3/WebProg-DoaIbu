<?php
$textAlign = isset($_COOKIE['textAlign']) ? $_COOKIE['textAlign'] : '';
$fontFamily = isset($_COOKIE['fontFamily']) ? $_COOKIE['fontFamily'] : '';
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : '';

$hasilCookie = "";
$hasilCookie = "p {\n";
if ($textAlign) {
    $hasilCookie .= "\ttext-align: ".$textAlign.";\n";
}
if ($fontFamily) {
    $hasilCookie .= "\tfont-family: ".$fontFamily.";\n";
}
if ($color) {
    $hasilCookie .= "\tcolor: ".$color.";\n";
}
$hasilCookie .= "}";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil.php</title>
    <style>
        <?php echo $hasilCookie ?>

        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>

<body>
    <h2>Halaman Hasil</h2>

    <label>Setting yang tersedia:</label>
    <textarea readonly><?php echo $hasilCookie; ?></textarea>


    <br><br>
    <a href="setting.php">Ganti Setting</a>
    <h5>Contoh Paragraf :</h5>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula nisi elementum, tempus ex vitae,
        condimentum nibh. Nam hendrerit, ipsum vel cursus hendrerit, ligula ex rutrum est, ac interdum arcu nunc nec
        ipsum.Doneccondimentum, nisi vel pharetra blandit, nibh turpis semper dolor, non rhoncus purus sapien ut velit.
        Aliquam tristique elit nec est tincidunt, quis porttitor est lacinia. Donec ullamcorper consectetur metus, vitae
        auctor
        quam aliquet consequat. Donec hendrerit quis eros id suscipit. Aenean dignissim ullamcorper mi, sit amet
        fermentum enim porttitor quis. Etiam ut sagittis ligula. Proin eu enim eros. Orci varius natoque penatibus et
        magnis dis parturient montes, nascetur ridiculus mus. Integer pretium vulputate lectus eget tincidunt.
        Suspendisse imperdiet nunc dignissim turpis rutrum, in aliquam tortor scelerisque. Nam nec tincidunt leo. Mauris
        sollicitudin semper auctor. Vestibulum et malesuada nulla.
    </p>
</body>

</html>