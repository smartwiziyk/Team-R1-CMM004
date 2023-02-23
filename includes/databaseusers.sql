CREATE TABLE Users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFullName varchar(128) NOT NULL,
    usersHomeAddress varchar(128) NOT NULL,
    usersPhone varchar(20) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersPasswd varchar(128) NOT NULL,
    usersType varchar (10) NOT NULL,
    usersUid int (10) NOT NULL
    );

  CREATE TABLE TeamReps (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFullName varchar(128) NOT NULL,
    usersType varchar (10) NOT NULL,
    usersUid int (10) NOT NULL
    );
  
  CREATE TABLE Tutors (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFullName varchar(128) NOT NULL,
    usersType varchar (10) NOT NULL,
    usersUid int (10) NOT NULL
    );



    CREATE TABLE TutorAvailability (
    usersUid int (10) NOT NULL PRIMARY KEY AUTO_INCREMENT NOT NULL,
    availableDate date (128) NOT NULL,
    availableTime datetime (128) NOT NULL,
    usersType varchar (10) NOT NULL
    );

    CREATE TABLE StudentBooking (
    usersUid int (10) NOT NULL PRIMARY KEY AUTO_INCREMENT NOT NULL,
    BookedDate date (128) NOT NULL,
    BookedTime datetime (128) NOT NULL,
    MeetingVenue varchar (128) NOT NULL,
    usersType varchar (10) NOT NULL
    );