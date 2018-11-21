<?php

namespace App\Controller;

use App\Entity\Article;
use App\Services\ShopProduct;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome")
     *
     * @param ShopProduct $shopProduct
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(ShopProduct $shopProduct)
    {
        //var_dump($shopProduct->storeIdentityObject($shopProduct));
        dump(Article::create());



        die();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WelcomeController.php',
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return "1";
    }
}
