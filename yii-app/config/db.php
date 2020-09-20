<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mariadb;dbname=db_office',
    'username' => 'root',
    'password' => 'docker',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];