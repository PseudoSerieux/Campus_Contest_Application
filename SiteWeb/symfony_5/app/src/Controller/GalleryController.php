<?php

namespace App\Controller;

use App\Entity\Gallery as GalleryEntity;
use App\Form\Gallery as GalleryForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery/add", name="galleryAdGETd", methods={"GET"})
     */
    public function galleryGET()
    {
        $gallery = new GalleryEntity();

        $form = $this->createForm(GalleryForm::class, $gallery);

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/gallery/add", name="galleryAdd", methods={"POST"})
     */
    public function galleryAdd()
    {
        $em = $this->getDoctrine()->getManager();

        $allowed = ['png','jpg', 'jpeg'];

        $uplaodDirIsExists = file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads');
        if (!$uplaodDirIsExists) {
            mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads', 0777, true);
            chmod($_SERVER['DOCUMENT_ROOT'].'/uploads', 0777);
        }

        $file = null;

//        dd($_FILES['gallery']);

        if ($_FILES['gallery']['error']['name_image'] !== 4) {

            $file = $_FILES['gallery']['name']['name_image'];
            $file_extension = pathinfo($_FILES['gallery']['name']['name_image'], PATHINFO_EXTENSION);

            if (!in_array(strtolower($file_extension), $allowed)) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'le fichier n\'a pas la bonne extension',
                ]);
            }

            if ($_FILES['gallery']['error']['name_image'] !== 0) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Une erreur est survenue',
                ]);
            }

            $uplaodDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_FILES['gallery']['name']['name_image'];
            $upload = move_uploaded_file($_FILES['gallery']['tmp_name']['name_image'], $uplaodDir);

            $gallery =  new GalleryEntity();
            $gallery->setNameImage($file);
            $em->persist($gallery);
            $em->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'le fichier a bien été upload'
            ]);
        }

        return new JsonResponse([
            'success' => false,
            'data' => "Une erreur est survenue",
        ]);
    }
}
