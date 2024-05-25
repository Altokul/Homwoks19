CREATE TABLE IF NOT EXISTS users
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    age TINYINT UNSIGNED DEFAULT NULL,
    gender ENUM('male', 'female') DEFAULT NULL,
    account_status ENUM('active', 'blocked') DEFAULT 'active',
    password CHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS posts
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB;


INSERT INTO users (username, email, age, password, gender)
VALUES ('Eva', 'user1@example.com', 32, '123password', 'female'),
       ('Adam', 'user2@example.com', 29, '456password', 'male'),
       ('Bob', 'user3@example.com', 35, '789password', 'male');


INSERT INTO posts (user_id, content)
VALUES (1, 'SQL is a user-friendly language used to create, implement, modify, and structure a database'),
       (2, 'I really enjoyed learning SQL as it''s something I''ve never needed to use before.'),
       (1, 'January 2022');



SELECT * FROM users;

SELECT * FROM posts WHERE user_id = 2;

INSERT INTO users (username, email, age, password, gender)
VALUES ('Charlie', 'charlie@example.com', 28, 'password123', 'male');


UPDATE users
SET age = 36
WHERE username = 'Bob';


DELETE FROM users
WHERE username = 'Charlie';

DELETE FROM users
WHERE deleted_at;

UPDATE users SET  deleted_at = CURRENT_TIMESTAMP WHERE id = 3;

SELECT COUNT('id') FROM users WHERE age > 31;


SELECT users.username, posts.content
FROM users
         JOIN posts ON users.id = posts.user_id;


DELETE FROM posts
WHERE id = 3;


UPDATE posts
SET content = ' Home or Pro version 21H2 or higher, or Enterprise or Education version 21H2 or higher.'
WHERE id = 3;


INSERT INTO posts (user_id, content)
VALUES (2, 'We recommend Home or Pro 22H2 (build 19045) or higher, or Enterprise or Education 22H2 (build 19045) or higher.');


SELECT username, password
FROM users
WHERE id IN (1, 3);


SELECT username, password
FROM users
WHERE username IN ('Eva', 'Adam');

SELECT * FROM users WHERE deleted_at IS NULL;

SELECT * FROM users WHERE deleted_at IS NOT NULL;

UPDATE users
SET email = 'blocked'
WHERE email LIKE '%.ru';


DELETE FROM users
WHERE account_status = 'blocked';