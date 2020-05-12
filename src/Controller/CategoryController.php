<?php

namespace App\Controller;

use App\Entity\Category;

use App\Entity\Website;
use App\Form\CategoryType;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    /**
     * @Route("/listcategories",name="listCategories")
     */
    public function list()
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
            $m = $this->getDoctrine()->getManager();
            $new = $m->getRepository(Website::class)->findBy(["state" => 2,"deletedAt"=>null]);
            $categories = $m->getRepository(Category::class)->findAll();
            return $this->render("admin/listCategories.html.twig", ["new" => $new,"categories"=>$categories ]);
        }
        else
            return $this->render('403.html.twig');
    }

    /**
     * @Route("/category/add",name="addCategory")
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
        $new   = $m->getRepository(Website::class)->findBy(["state"=>2,"deletedAt"=>null]);
        $form->handleRequest($r);
        if($form->isSubmitted())
        {
            $m->persist($c);
            $m->flush();
            return $this->redirect($this->generateUrl("listCategories"));
        }

        return $this->render("Categories/add.html.twig",["form"=>$form->createView(),"new"=>$new]);


    }

    /**
     * @Route("/categorydelete/{id}",name="delete_category")
     */
    public function delete($id)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
        $m = $this->getDoctrine()->getManager();
        $c = $m->getRepository(Category::class)->find($id);
        $m->remove($c);
        $m->flush();
        return $this->redirect($this->generateUrl("listCategories"));
        }
        else
            return $this->render('403.html.twig');
    }


}
