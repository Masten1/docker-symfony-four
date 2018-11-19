<?php

namespace App\Controller;

use App\Services\ShopProduct;
use App\Services\StaticExample as StaticExample;
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
    public function index(ShopProduct $product)
    {
        echo $product->producerFirstName;
        echo "<br>";

        StaticExample::sayZero();
        echo "<br>";

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WelcomeController.php',
        ]);
    }
}
