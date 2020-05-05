<?php

namespace App\Controller;

use App\Entity\Category;

use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    /**
     * @Route("/category/add",name="")
     */
    public function Add(Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        if(!($this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            return $this->render("403.html.twig");
        }
        $c = new Category();
        $form = $this->createForm(CategoryType::class,$c);

        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $m->persist($c);
            $m->flush();
            return $this->redirect($this->generateUrl("admin"));
        }

        return $this->render("Categories/add.html.twig",["form"=>$form->createView()]);


    }

    /**
     * @Route("/categorydelete/{id}",name="delete_category")
     */
    public function delete($id)
    {
        $m = $this->getDoctrine()->getManager();
        $c = $m->getRepository(Category::class)->find($id);
        $m->remove($c);
        $m->flush();
        return $this->redirect($this->generateUrl("admin"));
    }


}
