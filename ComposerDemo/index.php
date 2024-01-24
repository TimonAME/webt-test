<?php
namespace Htlw3r\ComposerDemo;

require 'vendor/autoload.php';

use Htlw3r\ComposerDemo\Model\TShirt;

$myShirt = new TShirt("red", "L", "cotton");
var_dump($myShirt);