<?php
/**
 * @Author: satyr
 * @Date:   2015-01-24 20:34:45
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-01-25 19:09:31
 */
//I used nested php arrays as they process faster than decoding json
//The weird tabs in the include sections (the first in each array) is so they render correctly tabbed on the page.


$config = array (

	array (
		//First Var is the shorhand name to be used up front
		'Bootstrap', array (

			//Actual HTML to be rendered on the page. Replace {path} with the root path to the library and {version} with the version number
			'	<link rel="stylesheet" href="{path}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{path}/css/bootstrap-theme.min.css">
	<script src="{path}/js/bootstrap.min.js"></script>',

			//Path to the root of the CDN library. These likely wont change much.
			'https://maxcdn.bootstrapcdn.com/bootstrap/{version}'
		)
	),

	array (
		'jQuery', array (

			//Actual HTML to be rendered on the page. Replace {path} with the root path to the library and {version} with the version number
			'	<script src="{path}/jquery-{version}.min.js"></script>',

			//Path to the root of the CDN library. These likely wont change much.
			'https://code.jquery.com'
		)
	),

	array (
		'FontAwesome', array (

			//Actual HTML to be rendered on the page. Replace {path} with the root path to the library and {version} with the version number
			'<link rel="stylesheet" href="{path}/css/font-awesome.min.css">',

			//Path to the root of the CDN library. These likely wont change much.
			'https://maxcdn.bootstrapcdn.com/font-awesome/{version}'
		)
	),

	array (
		'bxSlider', array (

			//Actual HTML to be rendered on the page. Replace {path} with the root path to the library and {version} with the version number
			'	<script src="{path}/jquery.bxslider.min.js"></script>
	<link href="{path}/jquery.bxslider.css" rel="stylesheet" />',

			//We leave the CDN link blank as there is no CDN for bxSlider
			''
		)
	)
);







