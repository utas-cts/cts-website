CREATE TABLE posters (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	filename VARCHAR(44) NOT NULL,
	event_date DATE NOT NULL,
	event_type VARCHAR(64) NOT NULL,
	primary key (ID)
);
