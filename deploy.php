<?php

	$comandos = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
		'git submodule sync',
		'git submodule update',
		'git submodule status',
	);

	$output = '';
	foreach($comandos as $comando){
		$tmp = shell_exec($comando);
		$output .= htmlentities(trim($tmp)) . "\n";
	}
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>DESPLIEGUE AUTOMÁTICO</title>
</head>
<body>
<?php echo $output; ?>
</body>
</html>
