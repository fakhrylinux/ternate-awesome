<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Service;

use Fakhry\Informatika\Karyawan\TernateAwesome\Model\Post;
use Fakhry\Informatika\Karyawan\TernateAwesome\Repository\PostRepository;

class PostService
{

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function retrievePost()
    {
        return $this->postRepository->findAll();
    }

    function retrievePostById($id)
    {
        $postArr = $this->postRepository->findById($id);
        return $postArr;
    }

    function addPost(string $title, string $image, string $caption): void
    {
        $post = new Post($title, $image, $caption);
        $this->postRepository->save($post);
    }

    function removePost(int $number)
    {
        $this->postRepository->remove($number);
    }

    function updatePost(string $title, string $image, string $caption, string $id)
    {
        $post = new Post($title, $image, $caption);
        $this->postRepository->update($post, $id);
    }
}