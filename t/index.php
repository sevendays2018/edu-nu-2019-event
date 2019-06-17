<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<? 

$code = 'b1a6f0b085d099ebe0b1689157357d08';
$name = 'Ken';
echo "Hi";
if (md5($name) == $code) {
    echo "Congratulations!";
}

?>
</body>
</html>
