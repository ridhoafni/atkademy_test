<?php 

    function betweenDays($dateBegin, $dateEnd){
        for ($i=$dateBegin; $i<=$dateEnd; $i+=86400) {  
            echo date("Y-m-d", $i).', ';  
        }  
    }

    $dateBegin  = "2019-05-25";
    $dateBegin  = strtotime($dateBegin);
    $dateEnd    = "2019-05-30";
    $dateEnd    = strtotime($dateEnd);

    print betweenDays($dateBegin, $dateEnd);

?>