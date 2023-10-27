<?php

/*8. Remove a specific number of your choice from the array and display the updated array.*/

$numbers=array(1,2,3,4,5,6,7,8,9);

unset($numbers[2]);
echo"<br/>";
echo"After deleting the 2 index<br/>";
print_r ($numbers);
?>
