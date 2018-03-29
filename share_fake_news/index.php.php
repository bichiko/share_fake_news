<?php 
	if( isset($_GET['title'])){
		$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
		// $GET = htmlspecialchars($GET);	
		$text = vsprintf(
			'
			<!DOCTYPE html>
			<html>
			<head>
				<title>%s</title>
				
				<!-- For Facebook -->
				<meta property="og:title" content="%s" />
				<meta property="og:type" content="article" />
				<meta property="og:image" content="%s" />
				<meta property="og:url" content="%s" />
				<meta property="og:description" content="%s" />
			</head>
			<body>
				
			</body>
			</html>
			' 
			, array(
					htmlspecialchars($GET['title']),
					htmlspecialchars($GET['title']),
					htmlspecialchars($GET['image']),
					htmlspecialchars($GET['url']),
					htmlspecialchars($GET['description'])
				) );
		die($text);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
</head>
<body>
	<form action="">
		<input type="text" name="title" placeholder="title">
		<input type="text" name="image" placeholder="image url">
		<input type="text" name="url" placeholder="redirect url">
		<input type="text" name="description" placeholder="description">
		<input type="submit">
	</form>
</body>
</html>