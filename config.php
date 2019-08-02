<?php

return [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "dbname" => "petstagramdb",
        "user" => "root",
        "password" => "",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
];
