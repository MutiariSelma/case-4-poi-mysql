CREATE TABLE place (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(120),
    description TEXT,
    lat DOUBLE,
    lng DOUBLE,
    ctgry VARCHAR(120),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);