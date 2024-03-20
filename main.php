<?php

require './ljguo/core/Facade.php';
require './ljguo/facade/Test.php';
require './ljguo/test/Test.php';

use ljguo\facade\Test;

Test::index();

Test::hello(name: 'aaa');