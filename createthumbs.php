<?php
function make_thumb($src, $dest, $desired_width) {

    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

function make_thumb2($src, $dest2, $desired_width2) {

    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width2 / $width));

    /* create a new, "virtual" image */
    $virtual_image2 = imagecreatetruecolor($desired_width2, $desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image2, $source_image, 0, 0, 0, 0, $desired_width2, $desired_height, $width, $height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image2, $dest2);
}

$src="images/1A.jpg";
$dest="thumb/1A_200.jpg";
$desired_width="200";
$desired_width2="400";
$dest2="thumb/1A_400.jpg";
make_thumb($src, $dest, $desired_width);
make_thumb2($src, $dest2, $desired_width2);
?>