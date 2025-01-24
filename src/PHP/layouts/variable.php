<?php
//$baseUrl_Path = "";
//$baseUrl = "https://b0.moonrehber.com" . $baseUrl_Path;
//$baseUrl = "http://0.0.0.0:4000" . $baseUrl_Path;

$baseUrl_Path = "/wiki";
$baseUrl = "https://moonrp.com" . $baseUrl_Path;
$DefaultOGImage = "/assets/image/og-image.png";
//================================================================
function randomBSColor($index = null)
{
    $colors = ['text-primary-emphasis', 'text-success-emphasis', 'text-danger-emphasis', 'text-warning-emphasis', 'text-info-emphasis', 'text-secondary'];
    if ($index !== null && $index >= 0 && $index < count($colors)) {
        return $colors[$index];
    }
    return $colors[array_rand($colors)];
}

//================================================================

include("darkrp.variable.php");
include("fivem.variable.php");
include("ttt.variable.php");

$darkrp_ip1 = "steam://connect/$darkrp_ip";
$ttt_ip1 = "steam://connect/$ttt_ip";
$fivem_ip1 = "steam://connect/$fivem_ip";

//================================================================

?>