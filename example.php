<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 上午10:25
 */

require_once __DIR__ . '/Binlog.php';
require_once __DIR__ . '/Conf.php';
require_once __DIR__ . '/Util.php';

$binlog = new \BinlogToSql\Binlog();
$binlog->start();

