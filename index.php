<?php 
//error_reporting(-1);
//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
 




for($i = 1000; $i < 9999; $i++){
    $value = $i;
    $numf = 0; 
    $nums = 0; 
    $counter = 0;
    $counterup = 0; 
    while($value != 0){
        $nums = $numf;    
        $numf = round((($value / 10 )- (floor($value / 10)) )*10);  
        $value = floor($value / 10);  
        if($numf < $nums){   
            $counterup++;     
        }
    }   
    if($counterup == 3){           
        echo ($i."<br>");
    }
}

echo ("<br>==============<br>");
for($i = 1000; $i < 9000; $i++){
    $value = $i;
    $numf = 0; 
    $nums = 0; 
    $counter = 0;
    $counterup = 0; 
    //echo($i." i <br>"); 
    while($value != 0){
        $nums = $numf;    
        $numf = round((($value / 10 )- (floor($value / 10)) )*10); 
        //echo($numf." - sumf<br>"); 
        //echo($nums." - sums<br>"); 
        
        $value = floor($value / 10);  
        if(intval($nums) < intval($numf)){   
            $counterup++;     
            //echo($counterup." c++<br>"); 
        }
    }   
    if($counterup == 4){           
       echo ($i."<br>");
    }
}
    
  


