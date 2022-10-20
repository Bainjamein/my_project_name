<?php

namespace App\Controller;

use App\Form\PostType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController {

    #[Route('/helloworld', name: 'helloworld')]
    public function helloworld(){
        return $this->render(   'hello/hello.html.twig', [
            'id' => "wolrd",
                            ]);

    }

    #[Route('hello/{id}', name: 'hello1')]
    public function hello1(string $id){
        return $this->render(   'hello/hello.html.twig', [
            'id' => $id,
                            ]);

    }

    #[Route('hello', name: 'hello2')]
	public function hello2(Request $request){
        return $this->render(   'hello/hello.html.twig', [
            'id' => $request->query->get('name'),
                            ]);
    }

    #[Route('/new', name: 'formulaire')]
    public function formulaire()
    {
	    // Création formulaire
	    $form = $this->createForm(PostType::class);
	    // Affichage
        return $this->render(   'post/new.html.twig', [
                                'form' => $form->createView(),
                            ]);
}
}