<?php
$r = 28;
$t = 40;
$phi = 22/7;
function VolumeKerucut ($r,$t,$phi) {
    return (1/3*($phi*$r*$r*$t));
}
echo "Volume Kerucut tersebut adalah = " .VolumeKerucut($r,$t,$phi). "cm";
?>