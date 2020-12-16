<?php

class AdminController extends Controller
{
    public function actionIndex()
    {
        if ($_COOKIE['hash'] == '6bf564f784a96d7401aab70a4b2e0083'){
            $posts = Post::readAllPosts();

            $this->view->render(
                'admin/index',
                ['posts' => $posts], 'admin'
            );
        }else
            {
                $this->view->render('admin/login', [],'login');
        }
    }
    public function actionAuthorization(){

        $user = $_POST['login'];

// page login

        if (isset($_POST['submit'])) {

            $data = Post::searchAdmin($user);

            if ($data[0]['user_password'] == $_POST['password']) {
                setcookie("hash", '6bf564f784a96d7401aab70a4b2e0083', time()+60*60*24*30, "/", null, null, true);
            header('Location: /admin/index');
            }
            else
            {
                print "error with login or password";
            }
        }
    }
    public function actionUpdateTask()
    {
 Post::findOnePost($_POST['id']);

        $post = Post::findOnePost($_POST['id']);
        $this->view->render(
            'admin/update',
            ['post' => $post],'update'
        );
    }
    public function actionUpdate(){
        Post::updateTask($_POST);
        header('Location: /admin');
    }
    public function actionDelete(){
        Post::deleteTask($_POST);
        header('Location: /admin');
    }
    public function actionLogout(){
        unset($_COOKIE['hash']);
        setcookie('hash', null, -1, '/');
        header('Location: /blog/');
    }
}