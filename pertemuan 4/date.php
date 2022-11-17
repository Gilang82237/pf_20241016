<?php
echo date("l, d-m-y");

// detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo date("l d M Y", time ()-60*60*24*100);

// mktime
// membuat sendiri detik 1 januari 1970 sampai waktu yang diinginkan
echo mktime (0,0,0,20,11,2001);
echo date("l d M Y", mktime(0,0,0,20,11,2001));

//strtotime
$date = strtotime("20 Nov 2001");
echo date("l d M Y", strtotime(" 20 Nov 2001"));