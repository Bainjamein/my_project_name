<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PostController extends AbstractController {
    
    #[Route('/posts', name:'posts')]
    public function listPosts(EntityManagerInterface $em)
    {
        $posts = $em->getRepository(Post::class)->findAll();
        
    
        $response = $this->render('post/posts.html.twig', [
            'posts' => $posts
                            ]);
        
        return $response;
    }

    #[Route('/posts/{id}/delete', name:'delete')]
    public function removePost(EntityManagerInterface $em, int $id )
    {
        $posts = $em->getRepository(Post::class)->findAll();
        $post = $em->getRepository(Post::class)->find($id);  

        $em->remove($post);
        $em->flush();
    
        $response = $this->render('post/posts.html.twig', [
            'posts' => $posts
                            ]);
        
        return $response;
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

    #[Route('/posts/new', name:'createPost')]
    public function createPost(EntityManagerInterface $em)
    {
        $post = new Post();
        $post->setTitle('Un super titre');
        $post->setContent('Un super contenu');
        // On indique que l'objet est à "persister" = enregistrer en base
        $em->persist($post);
        // Exécution des requêtes (INSERT, UPDATE, DELETE...)
        $em->flush();

        $response = $this->render('post/createpost.html.twig', [
            'post' => $post
                            ]);
        
        return $response;
    }

    #[Route('/posts/{id}', name:'getPost')]
    public function getPost(EntityManagerInterface $em, int $id )
    {

        $post = $em->getRepository(Post::class)->find($id);  
    
        $response = $this->render('post/post.html.twig', [
            'post' => $post
                            ]);
        
        return $response;
    }
}