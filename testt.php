<?php 
// PHP program to carry out multidimensional array search 
  
  
// Multidimensional array 
$userdata = array( 
    array( 
        'ufname' => 'Aidil', 
        'ulname' => 'Fahmiey', 
        'uemail' => 'aidil@gmail.com',
        'upnum' => '0194194420', 
        'udate' => '2020-11-20', 
        'uic' => 991004095159,
        'ustime' => '08:00', 
        'uetime' => '15:00', 
        'upax' => 100
    ), 
    array( 
        'ufname' => 'Sabrina', 
        'ulname' => 'Fasha', 
        'uemail' => 'sabrina24@gmail.com',
        'upnum' => '0163069986', 
        'udate' => '2020-12-19', 
        'uic' => 990225055658,
        'ustime' => '11:00', 
        'uetime' => '17:00', 
        'upax' => 250
    ), 
    array( 
        'ufname' => 'Khairul', 
        'ulname' => 'Nazreen', 
        'uemail' => 'nazreenx99@gmail.com',
        'upnum' => '01115437789', 
        'udate' => '2021-01-06', 
        'uic' => 960915037865,
        'ustime' => '11:00', 
        'uetime' => '17:00', 
        'upax' => 80
    ) ,
    array( 
        'ufname' => 'Aiman', 
        'ulname' => 'Hakim', 
        'uemail' => 'aiman_hkm@gmail.com',
        'upnum' => '0195489421', 
        'udate' => '2020-12-01', 
        'uic' => 890606093182,
        'ustime' => '08:30', 
        'uetime' => '13:30', 
        'upax' => 400
    ) 
); 


$id = array_search('2021-01-06', array_column($userdata, 'udate')); 
echo $id; 

if ($input === $id){
    echo "<p>The event on $input has fully been booked.</p>";
} else {
echo "<p>There is no event booked on $input .</p>";
}
  
?> 