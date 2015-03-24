<?php
class LoginController extends Controller {
    public function index() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $uc = new UsersCollection();
            if ($uc->is_valid($_POST['username'], $_POST['password'])) {
                $_SESSION['user_id'] = $uc->get_by_username($_POST['username'])->getId();
                
                header('Location: index.php?c=index');
            }

        }

        $this->loadView('cms/login');
    }
}