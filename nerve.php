<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTBPS</title>
</head>

<body>
	<?php 
		class Nerve {
			private static $app = 0;
			
			function __construct() {
				self::$app++;
			}
			public static function getApp() {
				return self::app;
			}	
		}
	?>
</body>
</html>