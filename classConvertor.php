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
    echo "Process ".$path."\n";
    $require = [];
    $code = file_get_contents($path);
    //$pattern = '/if \(\!class_exists\(\"([a-zA-Z]+)\", FALSE\)\) \{(.*)\}\}/um';
    $pattern = '/if \(!class_exists\("([a-zA-Z_]+)", false\)\) {\s(.*?\s*}\s*})\s*}/ms';

    preg_match_all($pattern, $code, $matches);
    var_dump($matches);
    $count = count($matches[0]);
    if ($count > 0) {
        for ($i = 0; $i < $count; $i++) {
            $className = $matches[1][$i];
            echo "Found ".$className."\n";
            $classCode = $matches[2][$i];

            if ($className == $baseClassName) {
                echo "It's a base class\n";
                $result = str_ireplace(
                    "%require%",
                    "require_once('".$className.".require.php');".PHP_EOL,
                    $dummy
                );
            } else {
                echo "It's a required class\n";
                $result = str_ireplace("%require%", "", $dummy);
                $require[] = $className;
            }
            echo "Write class file for ".$className."\n";
            $newPath = "Google/Api/Ads/AdWords/v201502/classes/".$className.".php";
            file_put_contents(
                $newPath,
                str_ireplace("%code%", $classCode, $result)
            );

            //$code = str_ireplace($mecho "Right new class " . $className . "\n";atches[0][$i], "", $code);
        }
    }
    $requireCode = "";
    foreach ($require as $className) {
        echo "Add require ".$className."\n";
        $requireCode .= "require_once('".$className.".php');".PHP_EOL;
    }
    echo "Write required file for ".$baseClassName."\n";
    file_put_contents(
        "Google/Api/Ads/AdWords/v201502/classes/".$baseClassName.".require.php",
        "<?php".PHP_EOL.$requireCode
    );
    //unlink($path);
}

$dummy = file_get_contents("Dummy.php.txt");

$handle = opendir('Google/Api/Ads/AdWords/v201502/');
$files = readdir($handle);
while (false !== ($entry = readdir($handle))) {
    if (strpos($entry, "Service.php")) {
        $path = "Google/Api/Ads/AdWords/v201502/".$entry;
        parseFile($path, str_ireplace(".php", "", $entry), $dummy);
    }
}
