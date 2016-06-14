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

        if (0 === strpos($pathinfo, '/css/e997b03')) {
            // _assetic_e997b03
            if ($pathinfo === '/css/e997b03.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e997b03',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e997b03',);
            }

            if (0 === strpos($pathinfo, '/css/e997b03_part_1_')) {
                if (0 === strpos($pathinfo, '/css/e997b03_part_1_b')) {
                    // _assetic_e997b03_0
                    if ($pathinfo === '/css/e997b03_part_1_base_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e997b03',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e997b03_0',);
                    }

                    // _assetic_e997b03_1
                    if ($pathinfo === '/css/e997b03_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e997b03',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e997b03_1',);
                    }

                }

                // _assetic_e997b03_2
                if ($pathinfo === '/css/e997b03_part_1_home_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e997b03',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e997b03_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/8b2924b')) {
            // _assetic_8b2924b
            if ($pathinfo === '/js/8b2924b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2924b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8b2924b',);
            }

            if (0 === strpos($pathinfo, '/js/8b2924b_part_1_')) {
                // _assetic_8b2924b_0
                if ($pathinfo === '/js/8b2924b_part_1_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2924b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8b2924b_0',);
                }

                if (0 === strpos($pathinfo, '/js/8b2924b_part_1_jquery')) {
                    // _assetic_8b2924b_1
                    if ($pathinfo === '/js/8b2924b_part_1_jquery-2.1.1.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2924b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8b2924b_1',);
                    }

                    // _assetic_8b2924b_2
                    if ($pathinfo === '/js/8b2924b_part_1_jquery.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8b2924b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8b2924b_2',);
                    }

                }

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

            return array (  '_controller' => 'BabyAdvisorBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }

        // favoris
        if ($pathinfo === '/favoris') {
            return array (  '_controller' => 'BabyAdvisorBundle\\Controller\\FavorisController::indexAction',  '_route' => 'favoris',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'BabyAdvisorBundle\\Controller\\ProfilController::indexAction',  '_route' => 'profil',);
        }

        // membres
        if ($pathinfo === '/membres') {
            return array (  '_controller' => 'BabyAdvisorBundle\\Controller\\MembresController::indexAction',  '_route' => 'membres',);
        }

        // admin_suppresion
        if ($pathinfo === '/adminSuppresion') {
            return array (  '_controller' => 'BabyAdvisorBundle\\Controller\\AdminController::confirmationAction',  '_route' => 'admin_suppresion',);
        }

        // inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'ConnexionBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ConnexionBundle\\Controller\\ConnexionController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
