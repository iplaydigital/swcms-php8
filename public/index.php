<?php


include_once("../include/class.TemplatePower.inc.php");
$tpl = new TemplatePower("../template/_tp_main.html");
$tpl->prepare();


 $tpl->newBlock("Main1");
 $tpl->printToScreen();
?>