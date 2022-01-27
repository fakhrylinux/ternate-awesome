<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Controller;

use Fakhry\Informatika\Karyawan\TernateAwesome\App\View;
use Fakhry\Informatika\Karyawan\TernateAwesome\Config\Database;
use Fakhry\Informatika\Karyawan\TernateAwesome\Repository\PostRepository;
use Fakhry\Informatika\Karyawan\TernateAwesome\Service\PostService;

class HomeController
{
    private PostService $postService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $postRepository = new PostRepository($connection);
        $this->postService = new PostService($postRepository);
    }

    public function index()
    {
        $retrievePost = $this->postService->retrievePost();
        if ($retrievePost != null) {
            foreach ($retrievePost as $post) {
                $posts[] = [
                    'id' => $post->getId(),
                    'title' => $post->getTitle(),
                    'image' => $post->getImage(),
                    'caption' => $post->getCaption()
                ];
            }
        } else {
            $posts[] = "";
        }

        View::render('index', $posts);
    }

    public function add()
    {
        View::render('add');
    }

    public function postAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $file_name = $_FILES['image_upload']['name'];
            $file_tmp_name = $_FILES['image_upload']['tmp_name'];
            $file_error = $_FILES['image_upload']['error'];

            try {
                move_uploaded_file($file_tmp_name, getcwd() . '../../public/upload/' . $file_name);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
        echo $file_error;
        echo $file_tmp_name;
        echo $file_name;
        $title = $_POST['title'];
        $caption = $_POST['caption'];
        $image = $file_name;

        $this->postService->addPost($title, $image, $caption);
        View::redirect('/');
    }

    public function delete()
    {
        $id = (int)$_POST['id'];
        $this->postService->removePost($id);
        View::redirect('/');
    }

    public function edit(string $id)
    {

        $postArr = $this->postService->retrievePostById((int)$id);
        View::render('edit', $postArr);
    }

    public function postEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $file_name = $_FILES['image_upload']['name'];
            $file_tmp_name = $_FILES['image_upload']['tmp_name'];
            $file_error = $_FILES['image_upload']['error'];

            try {
                move_uploaded_file($file_tmp_name, getcwd() . '../../public/upload/' . $file_name);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }

        $title = $_POST['title'];
        $caption = $_POST['caption'];
        $image = $file_name;

        $this->postService->updatePost($title, $image, $caption, $_POST['id']);
        View::redirect('/');
    }
}