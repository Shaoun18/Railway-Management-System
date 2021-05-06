create database Railway_Reservation;

create table Train(                                   --2
Train_id int not null,
Train_name varchar(25) not null,
Train_type varchar(25)not null,
Source_stn varchar(25),
Destination_stn varchar(25),
Source_id varchar(25),
primary key(Train_id),
foreign key(Source_id) references Station(Station_id) on update cascade on delete cascade,
)

create table Station(                                 --1
Station_id varchar(25) not null,
Station_name varchar(25),
Available_days varchar(25),
primary key(Station_id),
)

create table Train_class(                             --3
Train_id int not null,
Fare_class int not null,
Seat_class int not null,
Fare_class2 int not null,
Seat_class2 int not null,
Fare_class3 int not null,
Seat_class3 int not null,
primary key(Train_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)

create table Days_available(                          --4
Train_id int not null,
Available_days varchar(25),
primary key(Train_id),
foreign key(Train_id) references Train_class(Train_id) on update cascade on delete cascade
)


create table Passenger(                              --5
Passenger_no varchar(25)not null,
Passenger_name varchar(25)not null,
Seat_number int not null,
Age int not null,
Gender varchar(10)not null,
Train_id int not null,
primary key(Passenger_no,Seat_number),
foreign key(Train_id) references Days_available(Train_id) on update cascade on delete cascade
)


create table Passenger_tricket(                      --6
Passenger_no varchar(25)not null,
Source_id varchar(25),
Destination_stn varchar(25),
Class_type varchar(15)not null,
Reservation_status varchar(15)not null,
Train_id int not null,
primary key(Passenger_no),
foreign key(Train_id) references Days_available(Train_id) on update cascade on delete cascade
)


create table  User_Account(                        --7
Email_id varchar(25)not null,
Password varchar(36)not null,
First_Name varchar(25)not null,
Last_Name varchar(25)not null,
Gender varchar(10)not null,
Age int not null,
Phone_Number varchar(18)not null,
City varchar(25)not null,
State varchar(25)not null,
Security_Question varchar(50)not null,
Security_Question_Answere varchar(25)not null,
primary key(Email_id)
)

drop table User_Account

create table Admin(                            --8
User_id varchar(25)not null,
Password varchar(36)not null,
Train_id int not null,
primary key(User_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)


create table Train_Route(                      --9
Train_id int not null,
Stop_number int not null,
Station_id varchar(25) not null,
Arrival_time text not null,
Departure_time text not null,
Source_distance int not null,
primary key(Train_id,Stop_number,Station_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)

drop table Train_Route

create table Train_Route_Has_Station(          --10
Train_id int not null,
Station_id varchar(25) not null,
Stop_number int not null,
primary key(Train_id,Station_id),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)



create table Train_Status(                   --11
Train_id int not null,
Available_Date varchar(25)not null,
Booked_seat3 int null,
Waiting_seat3 int null,
Available_seat3 int null,
primary key(Train_id,Available_Date),
foreign key(Train_id) references Train(Train_id) on update cascade on delete cascade
)


create table Reservation(                      --12
Train_id int not null,
Available_Date varchar(25)not null,
Email_id varchar(25)not null,
Passenger_no varchar(25)not null,
Reservation_Date text not null,
Reservation_Status varchar(25),
primary key(Train_id,Available_Date,Email_id,Passenger_no),
foreign key(Train_id,Available_Date) references Train_Status(Train_id,Available_Date) on update cascade on delete cascade,
foreign key(Email_id) references User_Account(Email_id) on update cascade on delete cascade
)

drop table Station


---- stop the table ------ 

create table Station_Distance(



);

create table Payment_Method(



);