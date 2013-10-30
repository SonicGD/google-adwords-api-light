<?php
/**
 *
 * PHP version 5
 *
 * Created by PhpStorm.
 * User: Георгий
 * Date: 30.10.13
 * Time: 17:21
 */

function parseFile($path, $baseClassName, $dummy)
{
    $code = file_get_contents($path);

    //$pattern = '/if \(\!class_exists\(\"([a-zA-Z]+)\", FALSE\)\) \{(.*)\}\}/um';
    $pattern = '/if \(!class_exists\("([a-zA-Z]+)", FALSE\)\) {\s(.*?)\s}}/ms';
    preg_match_all($pattern, $code, $matches);
    $count = count($matches[0]);
    if ($count > 0) {
        for ($i = 0; $i < $count; $i++) {
            $className = $matches[1][$i];

            $classCode = $matches[2][$i] . "}";
            if ($className == $baseClassName) {
                $code = str_ireplace($matches[0][$i], $classCode, $code);
                $result = str_ireplace("%use%", 'use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;', $dummy);
            } else {
                $result = str_ireplace("%use%", "", $dummy);
            }
            file_put_contents(
                "Google/Api/Ads/AdWords/v201306/classes/" . $className . ".php",
                str_ireplace("%code%", $classCode, $result)
            );
            $code = str_ireplace($matches[0][$i], "", $code);
        }
    }
    file_put_contents($path, preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $code));
    unlink($path);
}

$dummy = file_get_contents("Dummy.php.txt");

$handle = opendir('Google/Api/Ads/AdWords/v201306/');
$files = readdir($handle);
while (false !== ($entry = readdir($handle))) {
    if (strpos($entry, "Service.php")) {
        $path = "Google/Api/Ads/AdWords/v201306/" . $entry;
        parseFile($path, str_ireplace(".php", "", $entry), $dummy);
    }
}

//parseFile("src/Google/Api/Ads/AdWords/v201306/AdExtensionOverrideService.php", "AdExtensionOverrideService", $dummy);
