CREATE TABLE event_posters (
	event_id INT(11) NOT NULL UNIQUE,
	poster_id INT(11) NOT NULL,
	primary key (event_id, poster_id),
	foreign key (event_id) references events(ID),
	foreign key (poster_id) references posters(ID)
);
