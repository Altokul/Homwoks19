
/*
namespace controllers;

class AuthController
{
    use Validator;
    public function register()
    {
        view('register');
    }

    public function registerProcess()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirm'],
        ]);

        //todo insert new user to DB
        try {
            $connector = Connect::getInstance();
            $stmt = $connector->prepare('INSERT INTO users (name, email, password, age) VALUES (:name, :email, :password, :age)');
            $result = $stmt->execute([
                'name' => Request::get('name'),
                'email' => Request::get('email'),
                'password' => password_hash(Request::get('password'), PASSWORD_BCRYPT),
                'age' => Request::get('age', 'int'),
            ]);

            if (true === $result) {
                Session::set('success', 'You are registered successfully. Go login!');
                Response::redirect('/login');
            } else {
                echo 'Error';
                exit;
            }

        } catch (PDOException $e) {
            echo "Sorry, server error<br>";
            echo $e->getMessage();
            exit;
        }
    }

    public function login()
    {
        view('login');
    }

    public function auth()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = Request::get('email');
        $password = Request::get('password');

        try {
            $connector = Connect::getInstance();
            $stmt = $connector->prepare('SELECT `id`, `email`, `password` FROM `users` WHERE `email` = :email AND `deleted_at` IS NULL LIMIT 1');
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if ($user && password_verify($password, $user->password)) {
                $token = md5(time() . '_' . $user->email);
                $connector->exec("INSERT INTO `user_token` (`user_id`, `token`) VALUES ({$user->id}, '$token')");

                setcookie('token-auth', $token, time() + 60 * 60 * 24);

                Response::redirect('/');
            } else {
                Session::set('error', 'Email or password is invalid.');
                Response::redirect(Request::getReferer());
            }

        } catch (PDOException $e) {
            echo "Sorry, server error<br>";
            echo $e->getMessage();
            exit;
        }

    }

    public function logout()
    {
        Auth::protect();

        setcookie('token-auth', '', time() - 3600);
        session_destroy();


        try {
            $userId = Auth::getUser()->id;
            $connector = Connect::getInstance();
            $connector->query("DELETE FROM `user_token` WHERE `user_id` = $userId");

            Response::redirect('/');
        } catch (PDOException $e) {
            echo "Sorry, server error<br>";
            echo $e->getMessage();
            exit;
        }
    }

}

*/