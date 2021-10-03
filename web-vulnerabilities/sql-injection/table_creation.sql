DELETE TABLE IF EXISTS Users;
CREATE TABLE Users (
    id int NOT NULL AUTO_INCREMENT,
    user varchar(255) NOT NULL,
    pass varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO Users (user, pass) VALUES ('admin', 'root');
INSERT INTO Users (user, pass) VALUES ('asd', '1234');