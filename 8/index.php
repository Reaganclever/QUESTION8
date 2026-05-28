<?php
$xml = simplexml_load_file("images.xml");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Studio</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="overlay"></div>

    <div class="container">
        <h1>Creative Photography Studio</h1>
        <p class="subtitle">
            Hover over an image to transform the entire website background.
        </p>

        <div class="gallery">

            <?php
            foreach($xml->image as $img)
            {
            ?>
                <div class="card">
                    <img 
                        src="<?php echo $img->path; ?>" 
                        alt="<?php echo $img->title; ?>"
                        data-bg="<?php echo $img->path; ?>"
                    >

                    <div class="info">
                        <h2><?php echo $img->title; ?></h2>
                        <p><?php echo $img->description; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>