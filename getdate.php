<?php
//计算本月的第一秒和最后一秒
date_default_timezone_set("Asia/Shanghai");
function getMonth() {                                                                                                                                                                                                         
        $m = date('m',time());                                                                                      
        $y = date('Y',time());                                                                                      
        if($m < 12) {                                                                                               
            $m2 = $m + 1;                                                                                           
            $y2 = $y;                                                                                               
        } else {                                                                                                    
            $m2 = 1;                                                                                                
            $y2 = $y + 1;                                                                                           
        }                                                                                                           
        if($m2 < 10) $m2 = '0'.$m2;                                                                                 
        $res = array();                                                                                             
        $res['start'] = strtotime("$y-$m-01");                                                                      
        $res['end'] = strtotime("$y2-$m2-01") - 1;                                                                  
        return $res;                                                                                                
}                        
var_dump(getMonth());
