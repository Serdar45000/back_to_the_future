<?php
$presentTime = new DateTime();
$destinationTime = new DateTime('2001-09-11 9:27:00');

echo "<br> Nowday : ".  $presentTime->format('M d Y A h i');
echo "<br> Destination : " . $destinationTime->format('M d Y A h i');

$interval = $presentTime->diff($destinationTime);
$intervalDate= $interval->format('%y years %m months %d days %h hours %m minutes');
echo "<br><br>There's a difference of ". $intervalDate . " ! <br>" ;