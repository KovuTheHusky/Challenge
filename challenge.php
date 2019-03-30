<?php foreach (array(10, 2, 8, 16) as $base) {
	for ($to = ($temp = ($from = (isset($_GET['arg']) ? (int)$_GET['arg'] : (int)$_SERVER['argv'][1])) % $base) > 9 ? chr($temp + 87) : $temp; $from > $base - 1; $to = (($temp = ($from = (int)($from / $base)) % $base) > 9 ? chr($temp + 87) : $temp) . $to);
	echo isset($_GET['arg']) ? "{$to}<br />" : "{$to}\r\n";
} ?>