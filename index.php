<?php
/**
 * @Author: satyr
 * @Date:   2015-01-21 21:11:36
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-01-25 19:15:01
 */

include_once 'frontend.class.php';

?>
<html>
<head>
	<meta charset="UTF-8">
	<?php
		//3 variables, the shorthand name, the path (or 'CND') and the version (if needed). All set in frontend.config.php
		Frontend::load('FontAwesome', '/font-awesome-4.3.0');
		Frontend::load('jQuery', '/includes', '1.11.2');
		Frontend::load('Bootstrap', 'CDN', '3.3.2');
		Frontend::load('bxSlider', '/includes');
	?>

	<title>Frontend.class</title>
</head>
<body>
	I have included a few libraries so you can get your head around how it all works.<br>
	All you really need is frontend.class.php and frontend.config.php<br>
	Include the class on the file that processes your &lt;head&gt;<br>
	The rest should make sense from the comments.
</body>
</html>