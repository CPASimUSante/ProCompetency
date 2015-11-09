<?php

namespace CPASimUSante\ProCompetencyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class ProCompetencyController extends Controller
{
    /**
     * @EXT\Route("/index", name="cpasimusante_procompetency_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
