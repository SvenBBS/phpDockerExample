<html>
<body>
<?php

    function charToNumber($dest)
    {
        if ($dest)
            return ord(strtolower($dest));
        else
            return -14;
    }
	
	function stringToNumber($name)
	{
		$array = str_split($name);
		$result = 0;
		foreach ($array as $char) {
			 $result = $result + charToNumber($char);
		}
		return $result;
	}
?>


Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>

Your code is: <?php echo stringToNumber($_GET["name"]); ?>

</body>
</html>