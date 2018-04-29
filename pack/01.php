<?php

$bin = pack("S", 65535);
$ray = unpack("S", $bin);
echo "UNSIGNED SHORT VAL = ", $ray[1], "\n";

$bin = pack("S", 65536);
$ray = unpack("S", $bin);
echo "OVERFLOW USHORT VAL = ", $ray[1], "\n";

$bin = pack("V", 65536);
$ray = unpack("V", $bin);
echo "SAME AS ABOVE BUT WITH ULONG VAL = ", $ray[1], "\n";
