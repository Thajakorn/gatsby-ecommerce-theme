-- MySQL schema for booking system

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    role ENUM('user','admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE resources (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('room','car','zoom') NOT NULL,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resource_id INT NOT NULL,
    user_id INT NOT NULL,
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    status ENUM('pending','approved','cancelled') DEFAULT 'pending',
    details TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (resource_id) REFERENCES resources(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

