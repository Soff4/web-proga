<?php
    $service = isset($_GET['service']) ? $_GET['service'] : 1;

    $width = 200;
    $height = 200;

    $image = imagecreatetruecolor($width, $height);
    $bgColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $bgColor);

    $centerX = $width / 2;
    $centerY = $height / 2;
    $radius = 80;

    switch ($service) {
        case 1:
            $circleColor = imagecolorallocate($image, 255, 0, 0); // Красный цвет
            $mouthColor = imagecolorallocate($image, 0, 0, 0); // Черный цвет
            $mouthStartAngle = 210;
            $mouthEndAngle = 320;
            break;
        case 2:
            $circleColor = imagecolorallocate($image, 255, 165, 0); // Оранжевый цвет
            $mouthColor = imagecolorallocate($image, 0, 0, 0); // Черный цвет
            $mouthStartAngle = 60;
            $mouthEndAngle = 120;
            break;
        case 3:
            $circleColor = imagecolorallocate($image, 255, 255, 0); // Желтый цвет
            $mouthColor = imagecolorallocate($image, 0, 0, 0); // Черный цвет
            $mouthStartAngle = 40;
            $mouthEndAngle = 140;
            break;
        case 4:
            $circleColor = imagecolorallocate($image, 0, 128, 0); // Зеленый цвет
            $mouthColor = imagecolorallocate($image, 0, 0, 0); // Черный цвет
            $mouthStartAngle = 20;
            $mouthEndAngle = 160;
            break;
        default:
            $circleColor = imagecolorallocate($image, 0, 0, 0); // Черный цвет
            $mouthColor = $bgColor; // Без улыбки
            $mouthStartAngle = 0;
            $mouthEndAngle = 0;
    }

    imageellipse($image, $centerX, $centerY, $radius * 2, $radius * 2, $circleColor);
    imagearc($image, $centerX, $centerY, $radius, $radius * 0.6, $mouthStartAngle, $mouthEndAngle, $mouthColor);

    header('Content-Type: image/png');
    imagepng($image);
    imagedestroy($image);
?>

