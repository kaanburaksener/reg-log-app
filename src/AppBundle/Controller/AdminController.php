<?php
/**
 * Created by PhpStorm.
 * User: kaanburaksener
 * Date: 14/10/16
 * Time: 17:20
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render(':admin:index.html.twig');
    }
}