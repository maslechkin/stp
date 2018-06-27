<?php
/**
 * Created by PhpStorm.
 * User: volodymyrmaslechkin
 * Date: 6/27/18
 * Time: 10:39
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
    public function number()
    {
        $number = rand(1, 1000);

        return new Response('<html><body> Numer: '. $number . '</body></html>');
    }

    /**
     * @Route("/test/randnumber")
     * 
     * @return Response
     */
    public function randnumber()
    {
        return new Response('<html><body>' . rand(1, 100) . '</body></html>');
    }
}