<?php
function ganti_style($tulisan, $kelas)
{
    $style = 'font-size:28px;font-family:arial;color:#1A0547;font-style:italic;font-weight:bold;';
    return "<span class= '$kelas' style='$style'>$tulisan</span>";
}

$tulisan = "Hello World! Here I come!";
$kelas   = "ganti-style";
echo ganti_style($tulisan, $kelas);
