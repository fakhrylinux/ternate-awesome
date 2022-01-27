<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Repository;

use Fakhry\Informatika\Karyawan\TernateAwesome\Model\Post;
use PDO;

class PostRepository
{
    public array $post = array();
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Post $post): void
    {
        $sql = "INSERT INTO post(title, image, caption) VALUES (?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $post->getTitle(),
            $post->getImage(),
            $post->getCaption()
        ]);
    }

    function remove(int $number): bool
    {
        $sql = "SELECT id from post WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        if ($statement->fetch()) {
            $sql = "DELETE FROM post WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            return true;
        } else {
            return false;
        }
    }

    function findAll()
    {
        $sql = "SELECT id, title, image, caption FROM post";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        foreach ($statement as $row) {
            $post = new Post();
            $post->setId($row['id']);
            $post->setTitle($row['title']);
            $post->setImage($row['image']);
            $post->setCaption($row['caption']);

            $result[] = $post;
        }

        return $result;
    }

    function findById(int $id)
    {
        $sql = "SELECT id, title, image, caption FROM post WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);

        if ($row = $statement->fetch()) {
            $postArr = [
                'id' => $row['id'],
                'title' => $row['title'],
                'image' => $row['image'],
                'caption' => $row['caption'],
            ];
            return $postArr;
        } else {
            return null;
        }
    }

    function update(Post $post, string $id)
    {
        $sql = "UPDATE post SET title = ?, image = ?, caption = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $post->getTitle(),
            $post->getImage(),
            $post->getCaption(),
            $id
        ]);
    }
}