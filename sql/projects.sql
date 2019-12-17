CREATE TABLE IF NOT EXISTS projects(
	ID INT(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	description varchar(512) NOT NULL,
	primary_contact_name varchar(128) NOT NULL,
	primary_contact_email varchar(255) NOT NULL,
	general_email varchar(255) NOT NULL,
	project_link varchar(255),
	details_link varchar(255),
	primary key (ID)
);

insert into projects (name, description, primary_contact_name, primary_contact_email, general_email, project_link) values ("CTS Website","Development/Maintenance of the CTS website that you are currently using", "Ryan Carins","ryan.carins@riscy.biz","utas.cts@gmail.com","https://github.com/utas-cts/cts-website");
