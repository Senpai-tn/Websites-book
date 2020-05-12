<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\User;
use App\Entity\Website;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/owner",name="owner")
     */
    public function Owner(Request $r)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_VENDEUR'))) {
        $m = $this->getDoctrine()->getManager();
        $u=$this->container->get('security.token_storage')->getToken()->getUser();
        $websites = $m->getRepository(Website::class)->findBy(["idUser"=>$u->getId()]);
        return $this->render('user/owner/index.html.twig',['websites'=>$websites]);
        }
        else 
        return $this->render('403.html.twig');
    }


    /**
     * @Route("/users",name="users")
     */
    public function Users()
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
            $m = $this->getDoctrine()->getManager();
            $users = $m->getRepository(User::class)->findAll();
            $new = $m->getRepository(Website::class)->findBy(["state" => 2, "deletedAt" => null]);
            return $this->render("admin\list_users.html.twig", ["users" => $users, "new" => $new]);
        }
        else
            return $this->render('403.html.twig');
    }


    /**
     * @Route("/promote/{id}",name="promote")
     */
    public function promoteUserAction($id)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {

        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $user->addRole('ROLE_ADMIN');
        $m->persist($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
        }
        else
            return $this->render('403.html.twig');
    }

    /**
     * @Route("/dispromote/{id}",name="dispromote")
     */
    public function dispromoteUserAction($id)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {

        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $user->removeRole('ROLE_ADMIN');
        $m->persist($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
        }
        else
            return $this->render('403.html.twig');
    }


    /**
     * @Route("/user/delete/{id}",name="delete_user")
     */
    public function deleteUser($id)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $m->remove($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
        }
        else
            return $this->render('403.html.twig');
    }










}
