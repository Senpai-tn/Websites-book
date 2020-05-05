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
        $m = $this->getDoctrine()->getManager();
        $u=$this->container->get('security.token_storage')->getToken()->getUser();
        $websites = $m->getRepository(Website::class)->findBy(["idUser"=>$u->getId()]);


        return $this->render('user/owner/index.html.twig',['websites'=>$websites]);
    }


    /**
     * @Route("/users",name="users")
     */
    public function Users()
    {
        $m = $this->getDoctrine()->getManager();
        $users = $m->getRepository(User::class)->findAll();
        $new   = $m->getRepository(Website::class)->findBy(["state"=>2]);
        return $this->render("admin\list_users.html.twig",["users"=>$users,"new"=>$new]);
    }


    /**
     * @Route("/promote/{id}",name="promote")
     */
    public function promoteUserAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $user->addRole('ROLE_ADMIN');
        $m->persist($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
    }

    /**
     * @Route("/dispromote/{id}",name="dispromote")
     */
    public function dispromoteUserAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $user->removeRole('ROLE_ADMIN');
        $m->persist($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
    }


    /**
     * @Route("/user/delete/{id}",name="delete_user")
     */
    public function deleteUser($id)
    {
        $m = $this->getDoctrine()->getManager();
        $user = $m->getRepository(User::class)->find($id);
        $m->remove($user);
        $m->flush();
        return $this->redirect($this->generateUrl("users"));
    }










}
