CREATE TABLE users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFullName varchar(128) NOT NULL,
    usersUid varchar (128) NOT NULL,
    usersHomeAddress varchar(128) NOT NULL,
    usersPhone varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersPasswd varchar(128) NOT NULL
    );