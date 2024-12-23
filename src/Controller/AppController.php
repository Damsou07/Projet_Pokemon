<?php

namespace App\Controller;

use App\Entity\Type;
use App\Form\EnterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/app', name: 'app_')]
class AppController extends AbstractController
{
    #[Route('/', name: 'mainPage')]
    public function EnterType(Request $request, EntityManagerInterface $manager): Response 
    {
        // get type
        $form = $this->createForm(EnterType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $nameType1 = $data['nameType1'];
            $nameType2 = $data['nameType2'];

            $initType = $manager->getRepository(Type::class)->findOneBy(['nameType'=> $nameType1]);

            $secondType = null;
            if ($nameType2) {
                $secondType = $manager->getRepository(Type::class)->findOneBy(['nameType'=> $nameType2]);
                if (! $secondType) {
                    return $this->renderErrorResponse($form);
                }
            }

            if (! $initType) {
                return $this->renderErrorResponse($form);
            }

            return $this->render('app/mainPage.html.twig', [
                'form' => $form->createView(),
                'show_inclusion' => true,
                'initType' => $initType,
                'secondType' => $secondType,
                'userInputInvalid' => false,
            ]);
        }

        return $this->render('app/mainPage.html.twig', [
            'form' => $form->createView(),
            'show_inclusion' => false,
            'userInputInvalid' => false,

        ]);
    }

    private function renderErrorResponse($form): Response
    {
        return $this->render('app/mainPage.html.twig', [
            'form' => $form->createView(),
            'userInputInvalid' => true,
            'show_inclusion' => false,
        ]);
    }

}
