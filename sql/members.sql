CREATE TABLE members(
	ID INT(11) NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(32) NOT NULL,
	last_name VARCHAR(32) NOT NULL,
	member_type ENUM('Student','Staff') NOT NULL,
	email VARCHAR(255) NOT NULL,
	signup_date DATE NOT NULL,
	payment_date DATE,
	payment_status ENUM('First_Semester','Second_Semester','Both','None') NOT NULL,
	photo_allowed BOOLEAN NOT NULL,
	email_allowed BOOLEAN NOT NULL,
	primary key (ID)
);
