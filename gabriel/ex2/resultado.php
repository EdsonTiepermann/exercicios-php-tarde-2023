
<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2)/2;

echo "Média: $media";

switch ($media) {
    case 6:
        echo "na média";
        break;
}

?>
