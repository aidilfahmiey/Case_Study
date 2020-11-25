<?php 
// PHP program to carry out multidimensional array search 
  
  
// Multidimensional array 
$gfg_array = array( 
    array( 
        'score'   => '100', 
        'name'    => 'Sam', 
        'subject' => 'Data Structures'
    ), 
    array( 
        'score'   => '50', 
        'name'    => 'Tanya', 
        'subject' => 'Advanced Algorithms'
    ), 
    array( 
        'score'   => '75', 
        'name'    => 'Jack', 
        'subject' => 'Distributed Computing'
    ) 
); 
  
$id = array_search('Sam', array_column($gfg_array, 'name')); 
echo $id; 
  
?> 

<font face"arial" size="2" color="#000000">
    <form class="search" method="post" action="SearchResult.php">
        <table align="center">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" size="30"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" value="Submit">
                <td align="center"><input type="reset" value="Clear">
            </tr>
        </table>
        </form>
    </font>

    $name = $_POST['name'];

    
        <input type="text" placeholder="Search date format : yyyy-mm-dd" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>

        array_search("red",$a) 