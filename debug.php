<?php
/**
 * debug 
 * used to dump vars passed to this function
 * 
 * @access public
 * @return void
 */
function debug(){
    $numargs=func_num_args();
    $arg_list=func_get_args();
    for($i=0;$i<$numargs;$i++){
        echo "The $i var is : ".$arg_list[$i],PHP_EOL;
    }
    echo "Current file: ",__FILE__,PHP_EOL;
}

/**
 * debug_test 
 * test debug function if ready
 * @access public
 * @return void
 */
function debug_test(){
    $var1 = 10;
    $var2 = 20;
    debug($var1,$var2);
    $var1+=5;
    debug($var1,$var2);
}
?>
