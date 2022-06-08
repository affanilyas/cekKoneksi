<?php

for($i=0; $i <= 4; $i++) {
    $response = null;
    system("ping -c 1 192.168.10.20", $response);
    if($response == 0){
        continue;
    } else {
        
    }
}
?>