CREATE Database SpikeysDataBase; 

CREATE TABLE Customers
(
	ControlNumber INT PRIMARY KEY auto_increment,
	Username VARCHAR(30) NOT NULL,
	Password VARCHAR(30) NOT NULL,
	Firstname VARCHAR(30),
	Lastname VARCHAR(30),
	PlateNumber INT,
	TypeofCar VARCHAR(30)
)
