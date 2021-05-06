select * from Station
insert into Station(Station_id,Station_name,Available_days)
values
('101','Dhaka','Sunday'),
('102','Sylhet','Saturday'),
('103','Comilla','Monday'),
('104','Bogora','Friday'),
('105','Laksham','Wednesday'),
('106','Rajshahi','Tuesday');


select * from Train
insert into Train(Train_id,Train_name,Train_type,Source_stn,Destination_stn,Source_id)
values
('102','Parabot','Interroot','Dhaka','sylhet','102'),
('101','Udohon','Interroot','chittagonj','sylhet','101'),
('105','kalni','Interroot','Dhaka','chittagonj','105'),
('103','upobon','Interroot','Dhaka','Bogora','103'),
('104','sagorika','Interroot','Dhaka','Rajshahi','104');


select * from Train_class
insert into Train_class(Train_id,Fare_class,Seat_class,Fare_class2,Seat_class2,Fare_class3,Seat_class3)
values
('101','11','101','20','201','30','301'),
('105','11','101','20','210','60','305'),
('104','11','101','20','221','50','309'),
('102','11','101','20','231','55','303');



select * from Days_available
insert into Days_available(Train_id,Available_days)
values
('101','Sunday'),
('102','Tuesday');


select * from Passenger
insert into Passenger(Passenger_no,Passenger_name,Seat_number,Age,Gender,Train_id)
values
('101','shaoun','11','20','Male','101'),
('104','Mim','11','20','FeMale','101'),
('106','Sabir','11','20','Male','101');


select * from Passenger_tricket
insert into Passenger_tricket(Passenger_no,Source_id,Destination_stn,Class_type,Reservation_status,Train_id)
values
('101','102','sylhet','A/C','Confirm','101'),
('105','104','Dhaka','A/C','Cancel','101'),
('106','103','sylhet','A/C','Verify','102');


select * from User_Account
insert into User_Account(Email_id,Password,First_Name,Last_Name,Gender,Age,Phone_Number,City,State,Security_Question,Security_Question_Answere)
values
('shaounshill18@gmail.com','12345','shaoun','shill','Male','20','01680134030','sylhet','BD','What is your name?','shaoun'),
('Mim1@gmail.com','12345','Mim','Hazan','FeMale','18','01880134020','Dhaka','BD','What is your name?','Mim'),
('sabir8@gmail.com','12345','sabir','sorkar','Male','22','01780134010','Laksham','BD','What is your name?','sabir');


select * from Admin
insert into Admin(User_id,Password,Train_id)
values
('shaoun11','12345','101'),
('mim1','12345','102'),
('sabir8','12345','105');


select * from Train_Route
insert into Train_Route(Train_id,Stop_number,Station_id,Arrival_time,Departure_time,Source_distance)
values
('102','20','1001','11.30 am','6.00 pm','200'),
('105','18','1005','9.30 am','8.00 pm','500'),
('101','22','1005','10.00 am','11.00 pm','400');


select * from Train_Route_Has_Station
insert into Train_Route_Has_Station(Train_id,Station_id,Stop_number)
values
('101','1005','22'),
('102','1001','20'),
('105','1005','18');


select * from Train_Status
insert into Train_Status(Train_id,Available_Date,Booked_seat3,Waiting_seat3,Available_seat3)
values
('101','12/10/2009','10','201','40'),
('102','02/08/2019','15','205','50'),
('105','11/09/2013','20','209','45');


select * from Reservation
insert into Reservation(Train_id,Available_Date,Email_id,Passenger_no,Reservation_Date,Reservation_Status)
values
('101','12/10/2009','shaounshill18@gmail.com','101','10/10/2009','Confirm'),
('102','02/08/2019','Mim1@gmail.com','102','25/07/2019','cancel'),
('105','11/09/2013','sabir8@gmail.com','105','05/09/2013','Verify');


