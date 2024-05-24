<?php

require_once 'config.php';
require_once 'Connect.php';


try {

    $pdo = Connect::getInstance();


    $stmt = $pdo->prepare("
        INSERT INTO users (username, email, age, password, gender)
        VALUES 
            ('Eva', 'user1@example.com', 32, '123password', 'female'),
            ('Adam', 'user2@example.com', 29, '456password', 'male'),
            ('Bob', 'user3@example.com', 35, '789password', 'male')
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        INSERT INTO posts (user_id, content)
        VALUES 
            (1, 'SQL is a user-friendly language used to create, implement, modify, and structure a database'),
            (2, 'I really enjoyed learning SQL as it''s something I''ve never needed to use before.'),
            (1, 'January 2022')
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($users);


    $stmt = $pdo->prepare("
        SELECT * FROM posts
        WHERE user_id = 2
    ");
    $stmt->execute();
    $user2Posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($user2Posts);


    $stmt = $pdo->prepare("
        INSERT INTO users (username, email, age, password, gender)
        VALUES ('Charlie', 'charlie@example.com', 28, 'password123', 'male')
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        UPDATE users
        SET age = 36
        WHERE username = 'Bob'
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        DELETE FROM users
        WHERE username = 'Charlie'
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        UPDATE users
        SET deleted_at = CURRENT_TIMESTAMP
        WHERE id = 3
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        SELECT COUNT(id) AS count
        FROM users
        WHERE age > 31
    ");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //echo "Количество пользователей старше 31 года: " . $result['count'];


    $stmt = $pdo->prepare("
        SELECT users.username, posts.content
        FROM users
        JOIN posts ON users.id = posts.user_id
    ");
    $stmt->execute();
    $userPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r($userPosts);


    $stmt = $pdo->prepare("
        DELETE FROM posts
        WHERE id = 3
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        UPDATE posts
        SET content = ' Home or Pro version 21H2 or higher, or Enterprise or Education version 21H2 or higher.'
        WHERE id = 3
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        INSERT INTO posts (user_id, content)
        VALUES (2, 'We recommend Home or Pro 22H2 (build 19045) or higher, or Enterprise or Education 22H2 (build 19045) or higher.')
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        SELECT username, password
        FROM users
        WHERE id IN (1, 3)
    ");
    $stmt->execute();
    $userPasswords = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //  print_r($userPasswords);


    $stmt = $pdo->prepare("
        SELECT username, password
        FROM users
        WHERE username IN ('Eva', 'Adam')
    ");
    $stmt->execute();
    $userEvaAdamPasswords = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r($userEvaAdamPasswords);


    $stmt = $pdo->prepare("
        DELETE FROM users
        WHERE account_status = 'blocked'
    ");
    $stmt->execute();

} catch (PDOException $e) {
}

/*
try {

    $pdo = Connect::getInstance();


    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($users);


    $stmt = $pdo->prepare("
        SELECT users.username, posts.content
        FROM posts
        JOIN users ON posts.user_id = users.id
    ");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($posts);


    $stmt = $pdo->prepare("
        INSERT INTO users (username, email, age, gender, password)
        VALUES ('John', 'john@example.com', 25, 'male', 'password123')
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        UPDATE users
        SET age = 30
        WHERE username = 'John'
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("
        DELETE FROM users
        WHERE username = 'John'
    ");
    $stmt->execute();


    $stmt = $pdo->prepare("SELECT * FROM pizza_lovers");
    $stmt->execute();
    $pizzaLovers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($pizzaLovers);


    $stmt = $pdo->prepare("
        INSERT INTO pizza_lovers (name, email, favorite_pizza)
        VALUES ('Alice', 'alice@example.com', 'Margherita')
    ");
    $stmt->execute();



} catch (PDOException $e) { }
/*
/*
try {
    $database = Connect::getInstance();


    $stmt = $database->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($users);
    echo "</pre>";


    $stmt = $database->prepare("INSERT INTO users (username, email, age, password, gender) VALUES (:username, :email, :age, :password, :gender)");
    $stmt->execute([
        ':username' => 'JohnDoe',
        ':email' => 'john@example.com',
        ':age' => 28,
        ':password' => password_hash('password123', PASSWORD_DEFAULT),
        ':gender' => 'male'
    ]);


    $stmt = $database->prepare("UPDATE users SET email = :email WHERE username = :username");
    $stmt->execute([
        ':email' => 'john.doe@example.com',
        ':username' => 'JohnDoe'
    ]);


    $stmt = $database->prepare("DELETE FROM users WHERE username = :username");
    $stmt->execute([
        ':username' => 'JohnDoe'
    ]);




} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


try {
    $database = Connect::getInstance();




    $stmt = $database->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /*
    echo "<pre>";
    print_r($users);
    echo "</pre>";
*/
/*
    $stmt = $database->prepare("INSERT INTO users (username, email, age, password, gender) VALUES (:username, :email, :age, :password, :gender)");
    $stmt->execute([
        ':username' => 'JohnDoe',
        ':email' => 'john@example.com',
        ':age' => 28,
        ':password' => password_hash('password123', PASSWORD_DEFAULT),
        ':gender' => 'male'
    ]);


    $stmt = $database->prepare("UPDATE users SET email = :email WHERE username = :username");
    $stmt->execute([
        ':email' => 'john.doe@example.com',
        ':username' => 'JohnDoe'
    ]);


    $stmt = $database->prepare("DELETE FROM users WHERE username = :username");
    $stmt->execute([
        ':username' => 'JohnDoe'
    ]);


    $stmt = $database->prepare("
        CREATE TABLE IF NOT EXISTS new_table (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ");
    $stmt->execute();


    $stmt = $database->prepare("INSERT INTO new_table (name, description) VALUES (:name, :description)");
    $stmt->execute([
        ':name' => 'SampleName',
        ':description' => 'This is a sample description.'
    ]);


    $stmt = $database->prepare("SELECT * FROM new_table");
    $stmt->execute();
    $newTableData = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*
    echo "<pre>";
    print_r($newTableData);
    echo "</pre>";
*/

//} catch (PDOException $e) {}


