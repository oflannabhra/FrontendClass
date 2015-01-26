<?php
/**
 * @Author: satyr
 * @Date:   2015-01-21 21:12:21
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-01-25 19:07:23
 */

class frontend{

	public static function load($name, $path = null, $version = null){
		include 'frontend.config.php';
		//Roll through the config arrays to grab the one we need
		foreach ($config as $key => $value) {
			if ($value[0] == $name) {
				//Check if we are grabbing the cdn.
				if ($path == 'CDN') {
					//If so, replace the path with the cdn path set in config
					if($value[1][1] != '') {
						$path = $value[1][1];
					}else{
						//Oh snap, this lib has no CDN
						echo $name." has no CDN Link.";
					}
				}
				//CDN or not we need the stuff that will be rendered on the page
				$include = $value[1][0];

				//if there is a {version} tag in the path and the version is not set, spit error and stop
				if (strpos($path,'{version}') !== false && ($version == null)) {
					echo "The path for " . $name . " requres the version number.";
					exit;

				// if there is a {path} tag in the include and the path is not set, spit error and stop
				}elseif (strpos($include,'{path}') !== false && ($path == null)){
					echo "The include for " . $name . " requres a valid path.";
					exit;

				//Have to check the include for {version}
				//Because some libraries put the version in the filename *cough* jQuery *cough*
				}elseif (strpos($include,'{version}') !== false && ($version == null)){
					echo "The include for " . $name . " needs a valid version";
					exit;

				//if all is clear, we need to replace those tags fom the config with the input
				}else{
					$path = str_replace('{version}', $version, $path);
					$include = str_replace('{version}', $version, $include);
					$include = str_replace('{path}', $path, $include);
				}
			}
		}
		//All is well, give em the rendered include.
		//The \r\n is to get the proper line break after the include is rendered.
		echo $include."\r\n";
	}
}
























