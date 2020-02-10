CREATE TABLE email_confirmation(
	ID INT(11) AUTO_INCREMENT NOT NULL,
	membership INT(11) NOT NULL,
	signup_key VARCHAR(24) NOT NULL UNIQUE,
	primary key (ID),
	foreign key (membership) references memberships(ID)
);
