CREATE TABLE public.user(
id SERIAL NOT NULL PRIMARY KEY,
username VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(100) NOT NULL,
display_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.speaker(
id SERIAL NOT NULL PRIMARY KEY,
name VARCHAR(100) NOT NULL,
subject TEXT
);

CREATE TABLE public.stake(
id SERIAL NOT NULL PRIMARY KEY,
name VARCHAR(150) NOT NULL
);

CREATE TABLE public.ward(
id SERIAL NOT NULL PRIMARY KEY,
stake_id INT NOT NULL REFERENCES public.stake(id),
ward_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.user_ward(
id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES public.user(id),
ward_id INT NOT NULL REFERENCES public.ward(id)
);

CREATE TABLE public.calling(
id SERIAL NOT NULL PRIMARY KEY,
calling_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.user_calling(
id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES public.user(id),
calling_id INT NOT NULL REFERENCES public.calling(id)
);

CREATE TABLE public.hymn(
id SERIAL NOT NULL PRIMARY KEY,
hymn_name VARCHAR(200) NOT NULL
);

CREATE TABLE public.agenda(
id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES public.user(id),
directing_leader VARCHAR(150) NOT NULL,
presiding_leader VARCHAR(150) NOT NULL,
announcements TEXT NOT NULL,
opening_prayer VARCHAR(150) NOT NULL,
hymns TEXT NOT NULL,
speakers TEXT NOT NULL,
closing_prayer VARCHAR(150) NOT NULL,
agenda_date DATE NOT NULL
);