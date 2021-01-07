<?php
include_once("../include/class.TemplatePower.inc.php");
 
$tpl = new TemplatePower("../teamplate/_tp_main.html");
$tpl->prepare();
 
if($name != "" && $loop != ""){
 for($i=0;$i<$loop;$i++){
  $tpl->newBlock("SAVE");
  $tpl->assign("name",$name);
 }
 
}else{
 $tpl->newBlock("FORM");
} 
 
$tpl->printToScreen();
?>