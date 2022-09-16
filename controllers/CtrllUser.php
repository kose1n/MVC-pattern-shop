<?php
class CtrllUser
{
    public function actionRegister()
    {
        $name = false;
        $email = false;
        $password = false;
        $ava = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $ava = false;
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Некорректное имя, имя не должно быть короче двух символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Некорректный email';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Некорректный пароль, пароль не должен быть короче 6-ти символов';
            }
            if ($errors == false) {
                $result = User::register($name, $email, $password, $ava);
            }

        }
        require_once(ROOT . '/pages/user/register.php');
        return true;
    }
    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Некорректный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Некорректный пароль, пароль не должен быть короче 6-ти символов';
            }

            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа';
            } else {
                User::auth($userId);
                header("Location: /user/profile");
            }
        }
        require_once(ROOT . '/pages/user/login.php');

        return true;
    }
    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }

}
