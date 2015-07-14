<?php

if ($filesCharSet != "utf-8")
{
$allVars = get_defined_vars();
foreach($allVars as $k=>$v)
if (eregi("^lang_.*$",$k)) $$k = iconv("utf-8",$filesCharSet,$v);
}


?>
