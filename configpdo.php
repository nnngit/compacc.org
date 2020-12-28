<?php
date_default_timezone_set("Asia/Calcutta");

		try {
			$conn = new PDO("mysql:host=localhost;dbname=compacc.org","root");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDException $err)
			{
			echo "Connection failed: " . $err->getMessage();
			}
//define('TARGETPATH','att/');