<?php
//////////////////////////////////
/* Config  Stuff */
//////////////////////////////////
define("DATABASE_SERVER",	isset($_ENV["DATABASE1_HOST"]) ? $_ENV["DATABASE1_HOST"]	: 'localhost');
define("DATABASE_PORT",		isset($_ENV["DATABASE1_PORT"]) ? $_ENV["DATABASE1_PORT"]	: 3306);
define("DATABASE_USER",		isset($_ENV["DATABASE1_USER"]) ? $_ENV["DATABASE1_USER"]    : 'root');
define("DATABASE_PASS",		isset($_ENV["DATABASE1_PASS"]) ? $_ENV["DATABASE1_PASS"]	: 'root');
define("DATABASE_NAME",		isset($_ENV["DATABASE1_NAME"]) ? $_ENV["DATABASE1_NAME"]	: 'blackAndRed');
define("CRYPT_SALT", 'X6jmeZffSv473eu8GhdV');