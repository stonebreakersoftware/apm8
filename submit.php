<?php
$name = $_POST['name'];
$options = $_POST['options'];

$data = array($name, $options);
$file = fopen('data.csv', 'a');

fputcsv($file, $data);
fclose($file);

echo "Thank you for your submission!";
?>
