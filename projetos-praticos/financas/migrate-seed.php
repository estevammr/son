<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 07/06/2017
 * Time: 22:55
 */

exec(__DIR__ . '/vendor/bin/phinx rollback -t=0');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s UsersSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s CategoryCostsSeeder');