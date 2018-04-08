<?php
/**
 * Created by PhpStorm.
 * User: ttt
 * Date: 2018/3/9
 * Time: 16:10
 */

require '../vendor/autoload.php';

use GitWrapper\GitWrapper;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use \GitWrapper\GitWorkingCopy;

$wrapper  = new GitWrapper();

//$wrapper->streamOutput();

$log = new Logger('git');
$log->pushHandler(new StreamHandler('git.log', Logger::DEBUG));
$listener = new \GitWrapper\Event\GitLoggerListener($log);
$wrapper->addLoggerListener($listener);

//$wrapper->cloneRepository('https://github.com/heropoo/img-lib', './tmp/img-lib');

$workingCopy = new GitWorkingCopy($wrapper, './tmp/img-lib');

//chdir('./img-lib');
touch('./tmp/img-lib/test.txt');

//echo $workingCopy->config('--list');
echo $workingCopy->status();




