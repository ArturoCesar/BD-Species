CREATE TABLE `ANIMAL` (
`id_animal` int NOT NULL PRIMARY KEY,
`Kingdom` varchar(15) NOT NULL,
`Subspecies1` varchar(20),
`Class1` varchar(15) NOT NULL,
`Phylium` varchar(10) NOT NULL,
`id_genus` int,
`id_Autor` int
);


CREATE TABLE `GENUS` (
`id_genus` int NOT NULL PRIMARY KEY,
`Genus1` varchar(20),
`id_specie` int
);

CREATE TABLE `SPECIE` (
`id_specie` int NOT NULL PRIMARY KEY,
`Species1` varchar(20),
`id_cientificname` int
);


CREATE TABLE `CIENTIFIC_NAME` (
`id_cientificname` int NOT NULL PRIMARY KEY,
`Scientific_name` varchar(30) NOT NULL,
`id_order` int
);


CREATE TABLE `ORDER1` (
`id_order` int NOT NULL PRIMARY KEY,
`Order1` varchar(20) NOT NULL,
`id_family` int
);


CREATE TABLE `FAMILY` (
`id_family` int NOT NULL PRIMARY KEY,
`Family1` varchar(15) NOT NULL
);



CREATE TABLE `AUTOR` (
`id_Autor` INT NOT NULL PRIMARY KEY,
`Autor` varchar(30),
`Rank1` varchar(15) NOT NULL,
`Listing` varchar(10) NOT NULL,
`Party` varchar(10),
`Listed_under` varchar(30),
`Full_note` varchar(50),
`#_Full_note` varchar(50),
`id_animal` INT
);

CREATE TABLE `LOCALIZACION` (
`All_DistributionFullNames` varchar(50),
`All_DistributionISOCodes` varchar(50),
`Introduced_Distribution` varchar(50),
`Introduced()_Distribution` varchar(50),
`Extinct_Distribution` varchar(50),
`Extinct()_Distribution` varchar(50),
`Distribution_Uncertain` varchar(50)
);

---------UNICA TABLA------------------
CREATE TABLE `TODO` (
	`id_animal` int NOT NULL PRIMARY KEY,
	`kingdom` varchar(15) NOT NULL,
	`phylum` varchar(15) NOT NULL,
	`class1` varchar(15) NOT NULL,
	`order1` varchar(15) NOT NULL,
	`family` varchar(15) NOT NULL,
	`genus` varchar(15) NOT NULL,
	`species` varchar(15) NOT NULL,
	`subspecies1` varchar(20),
	`scientific_name` varchar(30) NOT NULL,
	`Autor` varchar(30), 
	`Rank1` varchar(15),
	`Listing` varchar(10),
	`Party` varchar(10),
	`Listed_under` varchar(30),
	`Full_note` varchar(50),
	`#_Full_note` varchar(50),
	`All_DistributionFullNames` varchar(50),
	`All_DistributionISOCodes` varchar(50),
	`NativeDistributionFullNames` varchar(50), 
	`Introduced_Distribution` varchar(50),
	`IntroducedX_Distribution` varchar(50),
	`Reintroduced_Distribution` varchar(50), 
	`Extinct_Distribution` varchar(50),
	`ExtinctX_Distribution` varchar(50),
	`Distribution_Uncertain` varchar(50)
);







----------LLAVES FORANEAS---------------

ALTER TABLE ANIMAL 
ADD FOREIGN KEY (id_genus) REFERENCES GENUS (id_genus)

ALTER TABLE `GENUS` 
ADD FOREIGN KEY (`id_specie` ) REFERENCES `SPECIE` (`id_specie`)

ALTER TABLE `SPECIE` 
ADD FOREIGN KEY (`id_cientificname` ) REFERENCES `CIENTIFIC_NAME` (`id_cientificname`)

ALTER TABLE `CIENTIFIC_NAME` 
ADD FOREIGN KEY (`id_order` ) REFERENCES `ORDER1` (`id_order` )

ALTER TABLE `ORDER1` 
ADD FOREIGN KEY (`id_family` ) REFERENCES `FAMILY` (`id_family` )

ALTER TABLE `AUTOR` 
ADD FOREIGN KEY (`id_animal` ) REFERENCES `ANIMAL` (`id_animal` )

ALTER TABLE `LOCALIZACION` 
ADD FOREIGN KEY (`id_Autor` ) REFERENCES `AUTOR` (`id_Autor` )


------LOAD DATA------------
LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/ANIMAL TABLE.csv' INTO TABLE ANIMAL 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/GENUS TABLE.csv' INTO TABLE GENUS 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/SPECIE TABLE.csv' INTO TABLE SPECIE 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/CIENTIFIC_NAME.csv' INTO TABLE CIENTIFIC_NAME 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/ORDER TABLE.csv' INTO TABLE ORDER1 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/ANIMAL TABLES/FAMILY TABLE.csv' INTO TABLE FAMILY 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/AUTOR TALBES/AUTOR TABLES.csv' INTO TABLE AUTOR 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

LOAD DATA INFILE 'C:/xampp/htdocs/BD-Species-master/Base de Datos/TABLES/LOCALIZACION TABLES/LOCALIZACION TABLES.csv' INTO TABLE LOCALIZACION 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS;

































