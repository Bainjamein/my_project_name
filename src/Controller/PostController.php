<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PostController extends AbstractController {


    
    #[Route('/post1')]
    public function listPosts(EntityManagerInterface $em)
    {
        $posts = $em->getRepository(Post::class)->findAll();
        
        return new Response();
    }

    #[Route('/post2')]
    public function getPost42(EntityManagerInterface $em)
    {
        // Sélection générique
        $posts = $em->getRepository(Post::class)->findBy(['id' => 42]);
        $post = $em->getRepository(Post::class)->findOneBy(['id' => 42]);
        // Sélection par ID
        $post = $em->getRepository(Post::class)->find(42);
        // Sélection "magique" find[One]By<Attribut>($value) :
        $posts = $em->getRepository(Post::class)->findById(42);
        $post = $em->getRepository(Post::class)->findOneById(42);
        // ...
    }

    #[Route('/post3')]
    public function createPost(EntityManagerInterface $em)
    {
        $post = new Post();
        $post->setTitle('Un super titre');
        $post->setContent('Un super contenu');
        $post->setDate(new DateTime());
        // On indique que l'objet est à "persister" = enregistrer en base
        $em->persist($post);
        // Exécution des requêtes (INSERT, UPDATE, DELETE...)
        $em->flush();
    }
}