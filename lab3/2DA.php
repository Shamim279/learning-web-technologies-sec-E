<?php
$i=10;


$A=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
];


//print("Array All Elements:<br>");

for($i=0;$i<3;$i++)  //row
{
    for($j=0;$j<4;$j++)  //col
    {

        print($A[$i][$j]);
     }
   
    print("<br>");

}

  


?>