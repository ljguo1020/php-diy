<?php

namespace ljguo\facade;

use ljguo\core\Facade;

class Test extends Facade {

    public static function getFacadeClass(): string
    {
        return 'ljguo\test\Test';
    } 
    
}