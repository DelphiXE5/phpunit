--TEST--
phpunit --help
--ARGS--
--no-configuration --help
--FILE--
<?php declare(strict_types=1);
require_once __DIR__ . '/../../bootstrap.php';

$help = new PHPUnit\TextUI\Help(80, true);

print $help->generate();
--EXPECTF_EXTERNAL--
../_files/output-cli-help-color.txt
