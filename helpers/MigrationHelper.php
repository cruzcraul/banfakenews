<?php

namespace app\helpers;

use RuntimeException;

class MigrationHelper
{
    /**
     * @param string $driverName
     *
     * @return null|string
     */
    public static function resolveTableOptions($driverName)
    {
        switch ($driverName) {
            case 'mysql':
                return 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            case 'pgsql':
            case 'dblib':
            case 'mssql':
            case 'sqlsrv':
                return null;
            default:
                throw new RuntimeException('Your database is not supported!');
        }
    }
}
