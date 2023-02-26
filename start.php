<?php

namespace php\start;
spl_autoload_register();

use oop\project\first\First;
use oop\project\second\Second;
//use php\first\First as cloneFirst;

//require_once ('first.php');
require_once ('second.php');



$first = new First();
$second = new Second();

$first->sayNumber('one');
$second->sayNumber('two');