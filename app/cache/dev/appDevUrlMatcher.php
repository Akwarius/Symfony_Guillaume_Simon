<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/assetic/adminlte_')) {
            if (0 === strpos($pathinfo, '/assetic/adminlte_js')) {
                // _assetic_adminlte_js
                if ($pathinfo === '/assetic/adminlte_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'adminlte_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_adminlte_js',);
                }

                // _assetic_adminlte_js_0
                if ($pathinfo === '/assetic/adminlte_js_app_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'adminlte_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_adminlte_js_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/adminlte_css')) {
                // _assetic_adminlte_css
                if ($pathinfo === '/assetic/adminlte_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'adminlte_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_adminlte_css',);
                }

                // _assetic_adminlte_css_0
                if ($pathinfo === '/assetic/adminlte_css_AdminLTE.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'adminlte_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_adminlte_css_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/dc4742d')) {
            // _assetic_dc4742d
            if ($pathinfo === '/css/dc4742d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc4742d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_dc4742d',);
            }

            // _assetic_dc4742d_0
            if ($pathinfo === '/css/dc4742d_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc4742d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_dc4742d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/4d1d496')) {
            // _assetic_4d1d496
            if ($pathinfo === '/js/4d1d496.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d1d496',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4d1d496',);
            }

            // _assetic_4d1d496_0
            if ($pathinfo === '/js/4d1d496_part_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4d1d496',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4d1d496_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

            // lesson_edit
            if (preg_match('#^/lesson/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesson_edit')), array (  '_controller' => 'AppBundle\\Controller\\LessonController::updateAction',));
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
