<?php

class BlogController extends Controller
{
    public function actionIndex()
    {

        $posts = Post::readAllPosts();

        $this->view->render(
            'blog/index',
            ['posts' => $posts]
        );
    }
    public function actionPost($id = 0)
    {
        $post = Post::findOnePost((int) $id);
        $this->view->render('blog/post', ['post' => $post]);
    }
    public function actionCreate(){

$validator = true;

        if ($validator == true){
            Post::createTask($_POST);
            header('Location: /blog');
        }else{
            $this->view->render(
                '/',
                ['statusCreateTask' => false]
            );
            echo 'Вы ввели не коректные данные ';
        }

    }
}