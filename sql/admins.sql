CREATE TABLE IF NOT EXISTS admins(
	ID int(11) NOT NULL AUTO_INCREMENT,
	username varchar(32) NOT NULL,
	hashed_password varchar(256) NOT NULL,
	primary key(ID)
);
