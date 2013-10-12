<?php
function php4_scandir($dir, $sort = 0)
{
  if (PHP_VERSION >= '5') return scandir($dir, $sort);
  $dirmap = array();
  if(!is_dir($dir)) {
    trigger_error("lib::scandir($dir): failed to open dir: Invalid argument", E_USER_WARNING);
    return false;
  }
  $dir = opendir($dir);
  while (false !== ($file = readdir($dir)))
    $dirmap[] = $file;
  closedir($dir);
  ($sort == 1) ? rsort($dirmap) : sort($dirmap);
  return $dirmap;
}
?> 
