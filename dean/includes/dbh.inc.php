<?php $serverName="localhost"; $dBUsername="root"; $dBPassword=""; $dBName="u854794003_desproj"; $conn=mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }