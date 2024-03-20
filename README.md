# php-diy
diy 各种 php 框架的功能

### Facade

diy ThinkPHP 的 Facade，使用方法

定义 Test (名字随意) 类继承 Facade
```php
<?php

namespace ljguo\facade;

use ljguo\core\Facade;
// 继承 Facade 类
class Test extends Facade {

    // 实现抽象方法 getFacadeClass()
    public static function getFacadeClass(): string
    {
        return 'ljguo\test\Test';
    } 
    
}
```
定义 Test (名字随意) 类
```php
<?php

namespace ljguo\test;

class Test {
    public function index() {
        echo 'hello ljguo' . PHP_EOL;
    }

    public function hello($name) {
        echo 'hello ' . $name . PHP_EOL;
    }
}
```

使用
```php
<?php

use ljguo\facade\Test;

Test::index();

Test::hello(name: 'aaa');
```