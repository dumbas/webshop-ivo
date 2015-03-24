<?php
class ChatController extends CmsController {
    public function index() {

        $uc = new UsersCollection();
        $user = $uc->get($_SESSION['user_id']);

        $this->loadView('cms/chat', array(
            'username' => $user->getUsername()
        ));
    }

    public function sendmsg() {
        $mc = new MessagesCollection($_SESSION['user_id']);
        $msg = new MessageEntity();
        $msg->setMessage(strip_tags(trim($_POST['msg'])));

        $mc->save($msg);
    }

    public function loadrecent() {
        $mc = new MessagesCollection($_SESSION['user_id']);
        $messages = $mc->load_recent(20);
        echo json_encode($messages);
    }

    public function loadunread() {
        $mc = new MessagesCollection($_SESSION['user_id']);
        echo $mc->get_unread_count();
    }
}