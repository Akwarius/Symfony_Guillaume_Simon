<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/grade')) {
            // grade
            if ($pathinfo === '/grade') {
                return array (  '_controller' => 'AppBundle\\Controller\\GradeController::indexAction',  '_route' => 'grade',);
            }

            // grade_create
            if ($pathinfo === '/grade/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\GradeController::createAction',  '_route' => 'grade_create',);
            }

            // grade_edit
            if (preg_match('#^/grade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_edit')), array (  '_controller' => 'AppBundle\\Controller\\GradeController::updateAction',));
            }

        }

        // api_grade
        if ($pathinfo === '/api/grade') {
            return array (  '_controller' => 'AppBundle\\Controller\\GradeController::apiIndexAction',  '_route' => 'api_grade',);
        }

        if (0 === strpos($pathinfo, '/lesson')) {
            // lesson
            if ($pathinfo === '/lesson') {
                return array (  '_controller' => 'AppBundle\\Controller\\LessonController::indexAction',  '_route' => 'lesson',);
            }

            // lesson_create
            if ($pathinfo === '/lesson/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\LessonController::createAction',  '_route' => 'lesson_create',);
            }

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_route
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }

        }

        // admin
        if ($pathinfo === '/admin/abc') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::adminAction',  '_route' => 'admin',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
