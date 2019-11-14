CREATE TABLE events(
	ID INT(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	event_datetime datetime NOT NULL,
	description varchar(512) NOT NULL,
	location varchar(128) NOT NULL,
	may_change boolean NOT NULL,
	cost decimal(4,2) NOT NULL,
	primary key (ID)
);

insert into events (name, event_datetime, description, location, may_change, cost) values ("Christmas Barbecue", "2019-12-25 11:00:00", "A fictional CTS christmas barbecue", "V Block courtyard", false, 0);
insert into events (name, event_datetime, description, location, may_change, cost) values ("Barbecue", "2019-12-27 12:00:00", "Another fictional CTS barbecue", "V Block courtyard", false, 0);
insert into events (name, event_datetime, description, location, may_change, cost) values ("Barbecue", "2019-11-20 13:00:00", "Another fictional CTS barbecue", "V Block courtyard", false, 0);
insert into events (name, event_datetime, description, location, may_change, cost) values ("Barbecue", "2019-11-25 14:00:00", "Another fictional CTS barbecue", "V Block courtyard", false, 0);

