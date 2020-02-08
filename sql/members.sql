CREATE TABLE members(
	ID INT(11) AUTO_INCREMENT NOT NULL,
	student_id  INT(11),
	first_name VARCHAR(32) NOT NULL,
	last_name VARCHAR(32) NOT NULL,
	member_type ENUM('Student','Other') NOT NULL,
	primary key (ID)
);
