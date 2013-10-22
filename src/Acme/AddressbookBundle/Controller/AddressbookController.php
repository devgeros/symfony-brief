<?php

namespace Acme\AddressbookBundle\Controller;

use Acme\AddressbookBundle\Entity\User;
use Acme\AddressbookBundle\AcmeAddressBookBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\AddressbookBundle\Entity;
use Acme\AddressbookBundle\Form\AddUser;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AddressbookController extends Controller
{
    /**
     * @Route("/", name="_addressbook")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->get('doctrine')->getManager();
        $users = $em->getRepository('AcmeAddressbookBundle:User')->findAll();
        
        return array(
            'users' => $users
        );
    }

    /**
     * @Route("/view/{id}", name="_addressbook_view")
     * @Template()
     */
    public function viewAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeAddressbookBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        return array('user' => $user);
    }

    /**
     * @Route("/add", name="_addressbook_add")
     * @Template()
     */
    public function addAction()
    {
        $user = new User();

        $form = $this->get('form.factory')->create(new AddUser(), $user);
        $request = $this->get('request');
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->get('doctrine')->getManager();
                $em->persist($user);
                $em->flush();

                $this->get('session')->getFlashBag()->set('notice', 'You have successfully added '.$user->getFirstName().' '.$user->getLastName().' to the database!');

                return new RedirectResponse($this->generateUrl('_addressbook'));
            } else {
                $this->get('session')->getFlashBag()->set('notice', 'Errors occured');
            }
        }
        return array(
                'form' => $form->createView()
        );
    }

    /**
     * @Route("/edit/{id}", name="_addressbook_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeAddressbookBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        $form = $this->get('form.factory')->create(new AddUser(), $user);

        $request = $this->get('request');
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->get('doctrine')->getManager();
                $em->persist($user);
                $em->flush();

                $this->get('session')->getFlashBag()->set('notice', 'You have successfully updated '.$user->getFirstName().' '.$user->getLastName().' !');

                return new RedirectResponse($this->generateUrl('_addressbook'));
            } else {
                $this->get('session')->getFlashBag()->set('notice', 'Errors occured');
            }
        }

        return array(
            'user' => $user,
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/delete/{id}", name="_addressbook_delete")
     * @Template()
     */
    public function deleteAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeAddressbookBundle:User')->find($id);

        $em->remove($user);
        $em->flush();
        return new RedirectResponse($this->generateUrl('_addressbook'));
    }
    
}
