<?php


namespace AppBundle\Controller;

use AppBundle\Entity\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class apiController
 * @package AppBundle\Controller
 *
 * @Route("/api")
 */
class ApiCategoryController extends Controller
{
    /**
     * @route("/category/{id}",name="api_category", defaults={"id"=null}, requirements={"id"="\d+"})
     */
    public function categoryAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ArticleRepository $repo */
        $repo = $em->getRepository('AppBundle:Category');

        $categories = $repo->findApi();
        //var_dump($id);die;
        return new JsonResponse($categories);
    }
}