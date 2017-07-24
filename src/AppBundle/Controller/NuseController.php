<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Like as Like;


class NuseController extends Controller
{
    ////////////////////////////////////////////////////////////////////////////
    // Nuse datatable

    private function _datatable()
    {
        $datatable = $this->get('datatable');
        return $datatable
                        ->setEntity("AppBundle\Entity\Like", "l")
                        ->setFields(
                                array(
                                    "Theme"     => 'l.name',
                                    "_identifier_"  => 'l.id')
                        )
                        ->setHasAction(true);
    }

    public function nuseAction()
    {
        $article = $this->getDoctrine()->getRepository('AppBundle:Article')->find(1);

        $this->_datatable();
        return $this->render('default/page.html.twig', array(
            'article' => $article->getContent(),
        ));
    }

    public function likegridAction()
    {
        return $this->_datatable()->execute();
    }

    public function likeeditAction()
    {
        return $this->redirectToRoute('nuse');
    }

    public function likedeleteAction(Request $req)
    {
        $id = $req->get('id');

        $em = $this->getDoctrine()->getManager();
        $like = $em->getRepository('AppBundle:Like')->find($id);
        $em->remove($like);
        $em->flush();

        //return new Response();
        return $this->redirectToRoute('nuse');
    }


    public function addlikeAction(Request $req)
    {
        $name = $req->get('name');

        $like = new Like($name);
        $em = $this->getDoctrine()->getManager();
        $em->persist($like);
        $em->flush();

        $this->redirectToRoute('nuse');

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set ('Content-Type', 'application/json');
        $response->setContent(json_encode($like));
        //return $response;
        return $this->redirectToRoute('nuse');
    }


    public function goAction(Request $req)
    {
        // Creer la ligne de commande
        $command = 'python getWiki.py ';
        $command .= $req->get('time');

        // On recupere toute les preferences
        $em = $this->getDoctrine()->getManager();
        $likes = $em->getRepository('AppBundle:Like')->findAll();
        foreach($likes as $like)
        {
            $command .= ' ';
            $command .= $like->getName();
        }


        $process = new Process($command);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $article = $this->getDoctrine()->getRepository('AppBundle:Article')->find(1);
        $article->setContent($process->getOutput());

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('likegrid');
        //return new RedirectRespons($process->getOutput());
    }
}
