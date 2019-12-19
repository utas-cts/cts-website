CREATE TABLE members(
	ID INT(11) NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(32) NOT NULL,
	last_name VARCHAR(32) NOT NULL,
	member_type ENUM('Student','Staff') NOT NULL,
	email VARCHAR(255) NOT NULL,
	signup_date DATE NOT NULL,
	payment_date DATE,
	semester_1 BOOLEAN NOT NULL DEFAULT 0,
	semester_2 BOOLEAN NOT NULL DEFAULT 0,
	photo_allowed BOOLEAN NOT NULL,
	email_allowed BOOLEAN NOT NULL,
	primary key (ID)
);
