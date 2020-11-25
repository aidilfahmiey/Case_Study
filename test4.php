<?php 
$udate = array('2020-11-20' => '0',
'2020-12-19' => '1',
'2021-01-06' => '2',
'2020-12-01' => '3');

foreach ($udate as $dateBooked => $afterInput){
    echo $dateBooked.' '.$afterInput.'<br />';
}

foreach ($udate as $dateBooked => $afterInput){
    if ($dateBooked === $input){
        echo "<p>The event on $input has fully been booked.</p>";
    } else {
    echo "<p>There is no event booked on $input .</p>";
    }

}
  