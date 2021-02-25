<?php

namespace App\Controller;

use Endroid\QrCode\QrCode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QrCodeController extends AbstractController
{
    /**
     * @Route("/qr/code", name="qr_code")
     */
    public function index(): Response
    {
        $qrCode = new QrCode('Life is too short to be generating QR codes');
        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();

        return $this->render('qr_code/index.html.twig', [
            'controller_name' => 'QrCodeController',
        ]);
    }
}
