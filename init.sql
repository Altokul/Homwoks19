CREATE TABLE IF NOT EXISTS users
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    username
    VARCHAR
(
    50
) NOT NULL,
    email VARCHAR
(
    255
) UNIQUE NOT NULL,
    age TINYINT UNSIGNED DEFAULT NULL,
    gender ENUM
(
    'male',
    'female'
) DEFAULT NULL,
    password CHAR
(
    255
) NOT NULL,
    phone_numbers CHAR
(
    255
) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS posts
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    user_id
    INT,
    content
    TEXT,
    created_at
    TIMESTAMP
    DEFAULT
    CURRENT_TIMESTAMP,
    FOREIGN
    KEY
(
    user_id
) REFERENCES users
(
    id
) ON DELETE CASCADE,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS pizza_lovers
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    name
    VARCHAR
(
    50
) NOT NULL,
    email VARCHAR
(
    255
) UNIQUE NOT NULL,
    favorite_pizza VARCHAR
(
    100
) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;

INSERT INTO pizza_lovers (name, email, favorite_pizza)
VALUES ('Nikolai', 'nikolai98@gmail.com', 'Margherita');
INSERT INTO pizza_lovers (name, email, favorite_pizza)
VALUES ('Elisa', 'elisa27@gmail.com', 'Pepperoni');
INSERT INTO pizza_lovers (name, email, favorite_pizza)
VALUES ('Vio', 'tehlologi@gmail.com', 'Hawaiian');