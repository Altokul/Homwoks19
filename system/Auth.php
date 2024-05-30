
/*
namespace system;

class Auth
{
    private static object $user;
    public static function protect()
    {
        $token = $_COOKIE['token-auth'] ?? false;
        if (!$token) {
            Response::redirect('/login');
        }

        $connector = Connect::getInstance();
        $stmt = $connector->prepare('SELECT * FROM `user_token` WHERE `token` = :token');
        $stmt->execute(['token' => $token]);
        $tokenObject = $stmt->fetch(PDO::FETCH_OBJ);
        if (!$tokenObject) {
            Response::redirect('/login');
        }

        $stmt = $connector->prepare('SELECT * FROM `users` WHERE `id` = :id AND `deleted_at` IS NULL LIMIT 1');
        $stmt->execute(['id' => $tokenObject->user_id]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if (!$user) {
            Response::redirect('/login');
        }

        Auth::setUser($user);
    }

    /**
     * @param object $user

     */
    public static function setUser(object $user): void
    {
        self::$user = $user;
    }

    /**
     * @return object
     */
    public static function getUser(): object
    {
        return self::$user;
    }

}
