<?php
/**
 * Created by PhpStorm.
 * User: volodymyrmaslechkin
 * Date: 6/27/18
 * Time: 10:39
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller {
    public function number()
    {
        $number = rand(1, 1000);

        return new Response('<html><body> Numer: '. $number . '</body></html>');
    }

    /**
     * @Route("/test/numberannotation")
     *
     * @return Response
     */
    public function numberannotation()
    {
        return new Response('<html><body>s' . rand(1, 100) . '</body></html>');
    }

    /**s
     * @return Response
     */
    public function numbertwig()
    {
        return $this->render('test/number.html.twig', [
            'number' => rand(1, 1000)
        ]);
    }
}