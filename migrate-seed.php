<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 04/01/2018
 * Time: 23:10
 */

exec(__DIR__ . '/vendor/bin/phinx rollback -t=0');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run');