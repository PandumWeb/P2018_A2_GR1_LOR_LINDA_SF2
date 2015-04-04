<?php


namespace AppBundle\Controller;

use AppBundle\Entity\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class TagController extends Controller
{
    /**
     * @route("/article",name="article")
     */
    public function articleAction()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ArticleRepository $repo */
        $repo = $em->getRepository('AppBundle:Article');

        $tags = $repo->findApi();
        //var_dump($id);die;
        return $this->render('AppBundle:Article:index.html.twig',[
            'article' => $article,
        ]);
    }
}