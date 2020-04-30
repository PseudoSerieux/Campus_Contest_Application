<?php

namespace App\Controller;

use App\Entity\Contact as ContactEntity;
use App\Form\Contact as ContactForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="ContactGet", methods={"GET"})
     */
    public function ContactGet()
    {
        $contact = new ContactEntity();

        $form = $this->createForm(ContactForm::class, $contact);

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact", name="ContactPost", methods={"POST"})
     */
    public function ContactPost()
    {
        $post = $_POST;

        $em = $this->getDoctrine()->getManager();

        $contact = new ContactEntity();
        $contact->setDateCreated(new DateTime('now'));
        $contact->setFirstname($post['contact']['firstname']);
        $contact->setLastname($post['contact']['lastname']);
        $contact->setEmail($post['contact']['email']);
        $contact->setMessage($post['contact']['message']);

        if (!empty($post['contact']['phone'])) {
            $contact->setPhone($post['contact']['phone']);
        }

        $em->persist($contact);
        $em->flush();

        return $this->render('contact/thanksMessage.html.twig', [
            'contact' => [
                'firstname' => $contact->getFirstname(),
                'lastname' => $contact->getLastname(),
                'email' => $contact->getEmail()
            ]
        ]);
    }
}
