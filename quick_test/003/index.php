<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php in ra trình duyệt hiện tại là gì ?</h1>

<?php
function getCurURL()
{
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL = "http://";
    } else {
        $pageURL = 'http://';
    }
    if (isset($_SERVER["SEVER_PORT"]) && $_SERVER["SEVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SEVER_NAME"] . ":" . $_SERVER["SEVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SEVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
echo getCurURL();
?>
</body>
</html>