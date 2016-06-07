<?php

namespace MongoUnitTest;

/**
 * Description of ClassTest
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class SomeClass {
    
    /**
     * @assert (0) == 5
     * @assert (5) == 10
     * 
     * @param type $number
     * @return type
     */
    public function add5($number){
        return $number + 5;
    }
    
    /**
     * @assert (5) == 10
     * @assert (2) == 4
     * 
     */
    public function times2($number){
        return $number * 2;
    }
}
