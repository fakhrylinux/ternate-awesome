<?php

namespace Ary\TernateAwesome\Service;

use Ary\TernateAwesome\Model\Post;
use Ary\TernateAwesome\Repository\PostRepository;

class PostService
{

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function retrievePost(): array
    {
        return $this->postRepository->findAll();
    }

    function retrievePostById($id)
    {
        $postArr = $this->postRepository->findById($id);
//        $postArr = [
//            'title' => $post->getTitle(),
//            'image' => $post->getImage(),
//            'caption' => $post->getCaption(),
//        ];
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