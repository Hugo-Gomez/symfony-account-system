<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/account')) {
            // account_index
            if ('/account' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_account_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'account_index');
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\AccountController::indexAction',  '_route' => 'account_index',);
            }
            not_account_index:

            // account_new
            if ('/account/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_account_new;
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\AccountController::newAction',  '_route' => 'account_new',);
            }
            not_account_new:

            // assign_beneficiary
            if (preg_match('#^/account/(?P<id>[^/]++)/assign/beneficiary$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_assign_beneficiary;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'assign_beneficiary')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::assginBeneficiary',));
            }
            not_assign_beneficiary:

            // transaction_beneficiary
            if (preg_match('#^/account/(?P<id>[^/]++)/transaction/beneficiary$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_beneficiary;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_beneficiary')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::transactionBeneficiary',));
            }
            not_transaction_beneficiary:

            // account_show
            if (preg_match('#^/account/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_account_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_show')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::showAction',));
            }
            not_account_show:

            // account_edit
            if (preg_match('#^/account/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_account_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_edit')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::editAction',));
            }
            not_account_edit:

            // account_delete
            if (preg_match('#^/account/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_account_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_delete')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::deleteAction',));
            }
            not_account_delete:

        }

        elseif (0 === strpos($pathinfo, '/transaction')) {
            // transaction_index
            if ('/transaction' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transaction_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transaction_index');
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::indexAction',  '_route' => 'transaction_index',);
            }
            not_transaction_index:

            // transaction_new
            if ('/transaction/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_new;
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::newAction',  '_route' => 'transaction_new',);
            }
            not_transaction_new:

            // transaction_show
            if (preg_match('#^/transaction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transaction_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_show')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::showAction',));
            }
            not_transaction_show:

            // transaction_edit
            if (preg_match('#^/transaction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_edit')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::editAction',));
            }
            not_transaction_edit:

            // transaction_delete
            if (preg_match('#^/transaction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_transaction_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_delete')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::deleteAction',));
            }
            not_transaction_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/css')) {
            // _assetic_bootstrap_css
            if ('/css/bootstrap.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            // _assetic_bootstrap_css_0
            if ('/css/bootstrap_bootstrap_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
            }

            // _assetic_fddb9b6
            if ('/css/fddb9b6.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ('/css/fddb9b6_part_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/js')) {
            // _assetic_bootstrap_js
            if ('/js/bootstrap.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
            }

            // _assetic_bootstrap_js_0
            if ('/js/bootstrap_bootstrap_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
            }

            // _assetic_215113c
            if ('/js/215113c.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '215113c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_215113c',);
            }

            // _assetic_215113c_0
            if ('/js/215113c_part_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '215113c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_215113c_0',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
