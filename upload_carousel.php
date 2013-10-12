<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = './sliderImages/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
chmod($_FILES['userfile']['tmp_name'], 0644);

echo "<img src='" . $_FILES['userfile']['tmp_name'] . "'>";

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>
