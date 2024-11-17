<?php

namespace App\Repository;

use App\Entity\Comment;
use Core\Database;

class CommentRepository extends Database {

    private $instance;

    public function __construct() {
        $this->instance = self::getInstance();
    }

    /**
     * Insertion commentaire en base de donnees
     */
    public function add(Comment $comment): Comment {

        $query = $this->instance->prepare("
            INSERT INTO comments (content, comment_date, status, user_id, vinyl_id)
            VALUES (:content, :comment_date, :status, :user_id, :vinyl_id)
            ");

            $query->bindValue(':content', $comment->getContent());
            $query->bindValue(':comment_date', $comment->getCommentDate()->format('Y-m-d H:i:s'));
            $query->bindValue(':status', $comment->getStatus());
            $query->bindValue(':user_id', $_SESSION['user']->getId());
            $query->bindValue(':vinyl_id', $comment->getVinyleId()); 
            $query->execute();

            // Recupere l'ID nouvellement créé
            $id = $this->instance->lastInsertId();

            // Ajoute l'ID à mon objet
            $comment->setId($id);

            // Retourne notre objet muni d'un ID
            return $comment;
    }

    /**
     * Selectionne les commentaires pour un vinyle
     */
    public function findComments(int $id): array
    {
        $objectsComments = [];
        $query = $this->instance->prepare("SELECT 
 
        comments.id, comments.content, comments.comment_date, comments.status,
        users.username as username,
        vinyls.id as vinylid
        
        FROM `comments`
        
        INNER JOIN vinyls
        ON comments.vinyl_id = vinyls.id
        
        INNER JOIN users
        ON comments.user_id = users.id
        WHERE vinyls.id = :id
        ORDER BY comments.comment_date DESC");
        $query->bindValue(':id', $id);
        $query->execute();

        $comments = $query->fetchAll();

        foreach ($comments as $comment) {
            $item = new Comment();
            $item->setId($comment->id);
            $item->setContent($comment->content);
            $item->setCommentDate($comment->comment_date);
            $item->setStatus($comment->status);
            $item->setUserName($comment->username);
            $item->setVinyleId($comment->vinylid);
            $objectsComments[] = $item;
        }

        return $objectsComments;
    }

    /**
     * Selectionne tous les commentaires
     */
    public function findAllComments(): array
    {
        $objectsComments = [];
        $query = $this->instance->query("SELECT 
        comments.id, comments.comment_date, comments.status,
        users.username as username,
        vinyls.name as vinylname
        
        FROM `comments`
        
        INNER JOIN users
        ON comments.user_id = users.id
        
        INNER JOIN vinyls
        ON comments.vinyl_id = vinyls.id
        
        ORDER BY username ASC");
        
        $comments = $query->fetchAll();

        foreach ($comments as $comment) {
            $item = new Comment();
            $item->setId($comment->id);
            $item->setCommentDate($comment->comment_date);
            $item->setStatus($comment->status);
            $item->setUserName($comment->username);
            $item->setVinyleId($comment->vinylname);
            $objectsComments[] = $item;
        }

        return $objectsComments;
    }

    /**
     * Selectionne un commentaire
     */
    public function findOneComment(int $id): Comment|bool {

        $objectComment = false;

        $query = $this->instance->prepare("SELECT 
        comments.id, comments.content, comments.comment_date, comments.status,
        users.username as username,
        users.email as useremail,
        vinyls.name as vinylname
        
        FROM `comments`
        
        INNER JOIN users
        ON comments.user_id = users.id
        
        INNER JOIN vinyls
        ON comments.vinyl_id = vinyls.id
         
        WHERE comments.id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
 
        $comment = $query->fetch();

        if ($comment) {
            $objectComment = new comment();
            $objectComment->setId($comment->id);
            $objectComment->setContent($comment->content);
            $objectComment->setCommentDate($comment->comment_date);
            $objectComment->setStatus($comment->status);
            $objectComment->setUserName($comment->username);
            $objectComment->setUserEmail($comment->useremail);
            $objectComment->setVinyleId($comment->vinylname);

        }

        return $objectComment;
    }

    /**
     * Supprime un commentaire en base de données
     */
    public function delete(Comment $comment): Comment
    {
        $query = $this->instance->prepare("DELETE FROM comments WHERE id = :id");
        $query->bindValue(':id', $comment->getId());
        $query->execute();

        return $comment;
    }


    /**
     * Edition commentaire en base de données
     */
    public function edit(Comment $comment): Comment
    {
        $query = $this->instance->prepare("
            UPDATE comments SET status = :status
            WHERE id = :id
        ");

        $query->bindValue(':status', $comment->getStatus());
        $query->bindValue(':id', $comment->getId());
        $query->execute();

        // Retourne notre objet
        return $comment;
    }

}