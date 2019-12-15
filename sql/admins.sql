CREATE TABLE IF NOT EXISTS admins(
	username varchar(32) NOT NULL,
	hashed_password varchar(256) NOT NULL,
	primary key(username)
);
