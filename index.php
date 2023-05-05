<?php
$a = array(1,2,3);
$b = array(2,3,4);
$c = array(3,4,5);
$result = array();
$result2 = array();
foreach($a as $av){
    // print_r($av);exit;
    foreach($b as $bv){
        // echo $av;
        if(trim($av) == trim($bv)){
            // echo $av;
        $result[] = $av;
        }
    }
}
foreach($b as $bv){
    foreach($c as $cv){
        if($bv == $cv){
        $result[] = $bv;
        }
    }
}
foreach($c as $cv){
    foreach($a as $av){
        if($cv == $av){
        $result[] = $cv;
        }
    }
}



// print_r($result);

foreach($a as $av){
    if(!in_array($av,$result)){
        $result2[] = $av;
    }
}
foreach($b as $bv){
    if(!in_array($bv,$result)){
        $result2[] = $bv;
    }
}
foreach($c as $cv){
    if(!in_array($cv,$result)){
        $result2[] = $cv;
    }
}

print_r($result2);
