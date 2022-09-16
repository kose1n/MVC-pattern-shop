<?php
class CtrllProfile
{
    public function actionIndex()
    {
        $id_user = User::checkLoggedId();
        $user = User::getUserById($id_user);
        $result = false;
        if (isset($_POST['submit'])) {
            $img_url = $_FILES['ava']['name'];
            $tmp_name_img = $_FILES['ava']['tmp_name'];
            $errors = false;

            if ($errors == false)
            {
                if ($img_url == null)
                {
                    $img_url = '/template/avatars/defava.jpg';
                }
                else $result = News::editUserCabinetImg($id_user, $img_url, $tmp_name_img);
/*                print_r($result);*/
                require_once(ROOT . '/pages/user/profile.php');
                return true;
            }
        }
        require_once(ROOT . '/pages/user/profile.php');
        return true;
    }

}