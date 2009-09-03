<?php
include "./lzw.inc.php";

$data = "";
$compressed = lzw_compress($data);
var_dump($data === lzw_decompress($compressed));
