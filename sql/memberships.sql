CREATE TABLE memberships(
	ID INT(11) AUTO_INCREMENT NOT NULL,
	member INT(11) NOT NULL,
	email VARCHAR(255) NOT NULL,
	signup_date DATE NOT NULL,
	payment_date DATE,
	semester_1 BOOLEAN NOT NULL DEFAULT 0,
	semester_2 BOOLEAN NOT NULL DEFAULT 0,
	photo_allowed BOOLEAN NOT NULL,
	email_allowed BOOLEAN NOT NULL,
	primary key (ID),
	foreign key (member) references members(ID),
);
