CREATE TABLE public.user (
	id SERIAL PRIMARY KEY NOT NULL,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL,
	calling VARCHAR(100)
)

CREATE TABLE public.hymns (
	id SERIAL PRIMARY KEY NOT NULL,
	hymn_number INT NOT	NULL,
	hymn_name VARCHAR(100) NOT NULL
)

CREATE TABLE public.agenda (
	id SERIAL PRIMARY KEY NOT NULL,
	user_id INT NOT	NULL,
	speakers TEXT NOT NULL,
	opening_hymn TEXT NOT NULL,
	announcements TEXT NOT NULL,
	directing_leader VARCHAR(150) NOT NULL,
	presiding_leader VARCHAR(150) NOT NULL,
	opening_prayer VARCHAR(150) NOT NULL,
	closing_prayer VARCHAR(150) NOT NULL,
	agenda_date DATE NOT NULL,
	sacrament_hymn VARCHAR(150),
	special_hymn VARCHAR(150),
	closing_hymn VARCHAR(150),
	ward_business VARCHAR(150),
)

