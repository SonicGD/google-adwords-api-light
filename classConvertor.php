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
    $use = [];
    if ($count > 0) {
        for ($i = 0; $i < $count; $i++) {
            $className = $matches[1][$i];
            if ($className == $baseClassName) {
                continue;
            }
            $classCode = $matches[2][$i] . "}";

            file_put_contents(
                "src/Google/Api/Ads/AdWords/v201306/common/" . $className . ".php",
                str_ireplace("%code%", $classCode, $dummy)
            );
            $use[] = $className;
            $code = str_ireplace($matches[0][$i], "", $code);
        }
    }
    foreach ($use as $className) {
        $code = str_ireplace(
            '/** Required classes. **/',
            '/** Required classes. **/\nuse AdWords\v201306\common\\' . $className . ';',
            $code
        );
    }
    file_put_contents($path, $code);
}

$dummy = file_get_contents("src/Google/Api/Ads/AdWords/v201306/common/Dummy.php");

parseFile("src/Google/Api/Ads/AdWords/v201306/AdExtensionOverrideService.php", "AdExtensionOverrideService", $dummy);
