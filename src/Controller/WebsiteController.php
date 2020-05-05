<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Serie;
use App\Entity\User;
use App\Entity\Website;
use App\Form\SerieType;
use App\Form\WebsiteType;
use PhpParser\Node\Expr\Array_;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    /**
     * Creates a new ActionItem entity.
     *
     * @Route("/search", name="ajax_search")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $requestString = $request->get('q');

        $entities =  $em->getRepository(Website::class)->findEntitiesByString($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Not found";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getName();
        }

        return $realEntities;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $m = $this->getDoctrine()->getManager();
        $websites = $m->getRepository(Website::class)->findBy(['deletedAt'=>null,'state'=>1]);
        $categories = $m->getRepository(Category::class)->findAll();
        $i = array();
        $a = array();
        foreach ($websites as $w)
        {
            $i[$w->getId()] = $w->getLogo();
            $a[$w->getId()] = $w->getURL();
        }
        return $this->render('Websites/index.html.twig', [
            "websites"=>$websites,"categories"=>$categories,"logo"=>$i,'url'=>$a
        ]);
    }

    /**
     * @Route("/website/{id}",name="show")
     */
    public function Show($id,Request $r)
    {
        $m = $this->getDoctrine()->getManager();
        $website = $m->getRepository(Website::class)->find($id);
        $website->setNbVisites($website->getNbVisites()+1);
        $m->persist($website);
        $m->flush();
        return $this->render("websites/show.html.twig",["website"=>$website]);
    }

    /**
     * @Route("/category/{id}",name="category")
     */
    public function SearchByCategory($id)
    {
        $m = $this->getDoctrine()->getManager();
        if ($id != 5)
        $websites = $m->getRepository(Website::class)->findBy(['category'=>$id,'deletedAt'=>null,'state'=>1]);
        else
            $websites = $m->getRepository(Website::class)->findBy(['deletedAt'=>null,'state'=>1]);

        $all = $m->getRepository(Website::class)->findAll();
        $categories = $m->getRepository(Category::class)->findAll();
        $i = array();
        $a = array();
        foreach ($all as $w)
        {
            $i[$w->getId()] = $w->getLogo();
            $a[$w->getId()] = $w->getURL();
        }
        return $this->render('Websites/index.html.twig', [
            "websites"=>$websites,"categories"=>$categories,"logo"=>$i,'url'=>$a
        ]);

    }

    /**
     * @Route("/admin",name="admin")
     */
    public function Admin()
    {
        if(!($this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            return $this->render("403.html.twig");
        }
        $m = $this->getDoctrine()->getManager();
        $websites   = $m->getRepository(Website::class)->findAll();
        $categories = $m->getRepository(Category::class)->findAll();

       $nbrvisites = array();
        foreach ($websites as $key => $value )
        {
            if(array_key_exists($value->getCategory()->getId(),$nbrvisites)  )
            $nbrvisites[$value->getCategory()->getId()]  +=  $m->getRepository(Website::class)->find($value->getId())->getNbVisites();
            else
                $nbrvisites[$value->getCategory()->getId()]  =  $m->getRepository(Website::class)->find($value->getId())->getNbVisites();

        }
        $new   = $m->getRepository(Website::class)->findBy(["state"=>2]);
        $mounths[0] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-01-'.date("Y")), new \DateTime('31-01-'.date("Y")));
        $mounths[1] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-02-'.date("Y")), new \DateTime('29-02-'.date("Y")));
        $mounths[2] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-03-'.date("Y")), new \DateTime('31-03-'.date("Y")));
        $mounths[3] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-04-'.date("Y")), new \DateTime('30-04-'.date("Y")));
        $mounths[4] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-05-'.date("Y")), new \DateTime('31-05-'.date("Y")));
        $mounths[5] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-06-'.date("Y")), new \DateTime('30-06-'.date("Y")));
        $mounths[6] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-07-'.date("Y")), new \DateTime('31-07-'.date("Y")));
        $mounths[7] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-08-'.date("Y")), new \DateTime('31-08-'.date("Y")));
        $mounths[8] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-09-'.date("Y")), new \DateTime('30-09-'.date("Y")));
        $mounths[9] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-10-'.date("Y")), new \DateTime('31-10-'.date("Y")));
        $mounths[10] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-11-'.date("Y")), new \DateTime('30-11-'.date("Y")));
        $mounths[11] = $this->getDoctrine()
            ->getRepository(Website::class)
            ->getDays(new \DateTime('01-12-'.date("Y")), new \DateTime('31-12-'.date("Y")));

        return $this->render("admin/index.html.twig",["websites"=>$websites,"categories"=>$categories,
            "new"=>$new,"mounths"=>$mounths,"nbrvisites"=>$nbrvisites]);
    }

    /**
     * @Route("/deleted",name="deleted")
     */
    public function Deleted()
    {
        if(!($this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            return $this->render("403.html.twig");
        }
        $m = $this->getDoctrine()->getManager();
        $websites   = $m->getRepository(Website::class)->FindDeleted();
        $new   = $m->getRepository(Website::class)->findBy(["state"=>2]);

        return $this->render("admin/deleted.html.twig",["websites"=>$websites,"new"=>$new]);
    }

    /**
     * @Route("/add",name="add_website")
     */
    public function Add(Request $r)
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_VENDEUR'))) {
            $m = $this->getDoctrine()->getManager();
            $w = new Website();
            $form = $this->createForm(WebsiteType::class, $w);
            $form->handleRequest($r);

            if ($form->isSubmitted() && $form->isValid()) {
                $brochureFile = $form['logo']->getData();
                if ($brochureFile) {
                    $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
                    // Move the file to the directory where brochures are stored
                    try {
                        $brochureFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );

                        $w->setLogo($newFilename);
                        $c = $m->getRepository(Category::class)->find($r->request->get("website")["category"]);
                        $w->setCategory($c);
                        $u = $this->container->get('security.token_storage')->getToken()->getUser();
                        $w->setIdUser($u);
                        $w->setNbVisites(0);
                        $w->setState(2);
                        $w->setCreatedAt( new \DateTime());
                        $m->persist($w);
                        $m->flush();

                        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
                            return $this->redirect($this->generateUrl("admin"));
                        } elseif (($this->container->get('security.authorization_checker')->isGranted('ROLE_VENDEUR')))
                            return $this->redirect($this->generateUrl("owner"));
                    } catch (FileException $e) {
                        return $this->render('404.html.twig');
                    }
                }
            }


            return $this->render('Websites/add.html.twig', [
                'form' => $form->createView()
            ]);
        }
        else
            return $this->render('403.html.twig');
    }

    /**
     * @Route("/list",name="list_websites")
     */
    public function List()
    {
        if (($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
            $m = $this->getDoctrine()->getManager();
            $websites = $m->getRepository(Website::class)->findEntitiesByString("");
            $new = $m->getRepository(Website::class)->findBy(["state" => 2]);
            $categories = $m->getRepository(Category::class)->findAll();
            return $this->render("admin/listWebsites.html.twig", ["new" => $new, "websites" => $websites, 'categories' => $categories]);
        }
        else
            return $this->render('403.html.twig');
    }

    /**
     * @Route("/websitedelete/{id}",name="delete_website")
     */
    public function Delete($id,\Swift_Mailer $mailer)
    {
        $m = $this->getDoctrine()->getManager();
        $w = $m->getRepository(Website::class)->find($id);
        $w->setDeletedAt(new \DateTime());
        $m->persist($w);
        $m->flush();
        if (!($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) {
            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('khaledsahli36@gmail.com')
                ->setTo('khaledsahli36@gmail.com')
                ->setBody(
                    $id . " deleted "
                )
                /*->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'emails/registration.html.twig',
                        ['name' => $name]
                    ),
                    'text/html'
                )*/

                /*->addPart(
                    $this->renderView(
                    // templates/emails/registration.txt.twig
                        'emails/registration.txt.twig',
                        ['name' => $name]
                    ),
                    'text/plain'
                )*/
            ;

            $mailer->send($message);
        }
        return $this->redirect($this->generateUrl("owner"));
    }

    /**
     * @Route("/accept/{id}",name="accept")
     */
    public function Accept($id)
    {
        if(!($this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            return $this->render("403.html.twig");
        }
        $m = $this->getDoctrine()->getManager();
        $w = $m->getRepository(Website::class)->find($id);
        $w->setState(1);
        $m->persist($w);
        $m->flush();
        return $this->redirect($this->generateUrl("list_websites"));

    }

    /**
     * @Route("/refuse/{id}",name="refuse")
     */
    public function Refuse($id)
    {
        if(!($this->container->get( 'security.authorization_checker' )->isGranted( 'ROLE_ADMIN' )))
        {
            return $this->render("403.html.twig");
        }
        $m = $this->getDoctrine()->getManager();
        $w = $m->getRepository(Website::class)->find($id);
        $w->setState(0);
        $m->persist($w);
        $m->flush();
        return $this->redirect($this->generateUrl("list_websites"));
    }

}
