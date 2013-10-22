<?php

namespace Acme\DemoBundle\Controller;

use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\AcmeDemoBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Entity as Entity;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Form\AddUser;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->get('doctrine')->getManager();
        $users = $em->getRepository('AcmeDemoBundle:User')->findAll();
        //$em->findAll();
        
        return array(
            'users' => $users
        );
    }

    /**
     * @Route("/view/{id}", name="_demo_view")
     * @Template()
     */
    public function viewAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException(
                    'No user found for id '.$id
            );
        }
        
        return array('user' => $user);
    }
    
    /**
     * @Route("/add", name="_demo_add")
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
                
                return new RedirectResponse($this->generateUrl('_demo'));
            } else {
                $this->get('session')->getFlashBag()->set('notice', 'Errors occured');
            }
        }
        return array(
            'form' => $form->createView()
        );
    }
    
    /**
     * @Route("/edit/{id}", name="_demo_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
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
                
                return new RedirectResponse($this->generateUrl('_demo'));
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
     * @Route("/delete/{id}", name="_demo_delete")
     * @Template()
     */
    public function deleteAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        $em->remove($user);
        $em->flush();
        return new RedirectResponse($this->generateUrl('_demo'));
        
    }
    
    
}
