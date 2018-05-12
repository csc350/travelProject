/*
If travel_location is already created make sure to do the command: drop table travel_location

Make this database*/

CREATE TABLE travel_location
(
   	travel_location_id int NOT NULL AUTO_INCREMENT, 
	title text,
    coordinate_latitude float NOT NULL, 
	coordinate_longitude float NOT NULL
);

//Then go to insertexampledatasetfirst.txt to copy into mysql
//Then go to phpsqlajax_dbinfo and change the variables into your login credentials