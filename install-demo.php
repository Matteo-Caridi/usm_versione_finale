<?php
require './__autoload.php';

use sarassoroberto\usm\config\local\AppConfig;
use sarassoroberto\usm\model\DB;

$conn = DB::serverConnectionWithoutDatabase();
$dbname = AppConfig::DB_NAME;

$sql = "DROP DATABASE IF EXISTS $dbname;
        CREATE database IF NOT EXISTS $dbname; 
        use $dbname;

        CREATE table if not exists User (
            userId int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            firstName varchar(255) NOT NULL,
            lastName varchar(255)  NOT NULL,
            email varchar(255) NOT NULL UNIQUE,
            birthday DATE,
            password VARCHAR(255) NOT NULL
        )";

$conn->exec($sql);

$sqlToInsertUserQuery = "INSERT INTO User (userId, firstName, lastName, email, birthday, password) VALUES (1, 'Adamo', 'ROSSI', 'adam.ros@email.com', '2002-06-12', md5('argine'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (2, 'Mario', 'FERRARI', 'mario.fer@email.com', '2001-06-12',md5('pettorale'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (3, 'Luigi', 'RUSSO', 'luigi.rus@email.com', '2007-08-06',md5('geppetto99'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (4, 'Achille', 'BIANCHI', 'achille.b@email.com', '2006-03-14',md5('noncredo'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (5, 'Adriano', 'ROMANO', 'adriano.rom@email.com', '2005-01-16',md5('libellule'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (6, 'Gianni', 'ROSSI', 'gianni.rrr@email.com', '2005-04-22',md5('moira11'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (7, 'Giuliano', 'FERRARI', 'giuliano.ferrari@email.com', '2007-07-16',md5('202029'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (8, 'Giusto', 'RUSSO', 'giusto.brusso@email.com', '2001-03-28',md5('leveline222'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (9, 'Livio', 'BIANCHI', 'livio.blu@email.com', '2003-01-19',md5('gelatialcioccolato'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (10, 'Paolo', 'ROMANO', 'paolo.genovese@email.com', '2001-09-28',md5('casaechiesa'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (11, 'Onorato', 'ROSSI', 'onorato.pop@email.com', '2005-06-29',md5('juveperdente'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (12, 'Silvio', 'FERRARI', 'silvio.brullo@email.com', '2005-04-11',md5('notteinbianco'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (13, 'Tancredi', 'RUSSO', 'tancredi.gerry@email.com', '2000-07-30',md5('localealbuio'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (14, 'Valter', 'BIANCHI', 'valter.veltroni@email.com', '2000-06-10',md5('lecolicherenali'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (15, 'Zeno', 'ROMANO', 'zeno.cozeno@email.com', '2001-07-21',md5('cretinoinpolvere'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (16, 'Adamo', 'ROSSI', 'adamo.eva@email.com', '2007-07-18',md5('asdasdasdasd'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (17, 'Mario', 'FERRARI', 'mario.stambeccho@email.com', '2000-08-15',md5('beluscia'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (18, 'Luigi', 'RUSSO', 'luigi.glusso@email.com', '2003-10-15',md5('lololol'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (19, 'Achille', 'BIANCHI', 'achille.bleah@email.com', '2000-05-08',md5('gianniepinotto'));
                            INSERT INTO User (userId, firstName, lastName, email, birthday,password) VALUES (20, 'Adriano', 'ROMANO', 'adriano.puzzola@email.com', '2007-04-23',md5('nonlosopiù'));";


$conn->exec($sqlToInsertUserQuery);
