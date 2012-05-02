<?php

namespace Dev\SkillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevSkillsBundle:Article:index.html.twig', array('Dev' => 'Dev-Skills'));
    }
}
