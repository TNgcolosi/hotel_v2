CREATE DATABASE hotel_bookings;

USE hotel_bookings;

CREATE TABLE Users (
    id INT (6) NOT NULL PRIMARY KEY auto_increment,
    first_name VARCHAR (50) NOT NULL,
    last_name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Bookings (
    id INT (6) NOT NULL PRIMARY KEY auto_increment, 
    user_id INT (6) NOT NULL,
    hotel_name VARCHAR (255) NOT NULL,
    days_booked INT (15) NOT NULL,
    total_price INT (20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,


    FOREIGN KEY (user_id) REFERENCES users(id)

);
