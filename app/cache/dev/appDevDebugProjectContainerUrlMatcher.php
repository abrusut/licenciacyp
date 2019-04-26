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

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

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

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if ('/_configurator' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__configurator_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }
                not__configurator_home:

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ('/_configurator/final' === $pathinfo) {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // path_home
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_path_home;
            } else {
                return $this->redirect($rawPathinfo.'/', 'path_home');
            }

            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\LicenciaController::addAction',  '_route' => 'path_home',);
        }
        not_path_home:

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

            // login_check
            if ('/loginCheck' === $pathinfo) {
                return array('_route' => 'login_check');
            }

        }

        // change_password
        if ('/Security/ChangePassword' === $pathinfo) {
            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'change_password',);
        }

        if (0 === strpos($pathinfo, '/tecnico')) {
            // tecnico_list
            if ('/tecnico/list' === $pathinfo) {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::listAction',  '_route' => 'tecnico_list',);
            }

            // tecnico_add
            if ('/tecnico/add' === $pathinfo) {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::addAction',  '_route' => 'tecnico_add',);
            }

            // tecnico_view
            if (0 === strpos($pathinfo, '/tecnico/view') && preg_match('#^/tecnico/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_view')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::viewAction',));
            }

            // tecnico_delete
            if (0 === strpos($pathinfo, '/tecnico/delete') && preg_match('#^/tecnico/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_delete')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::deleteAction',));
            }

            // tecnico_edit
            if (0 === strpos($pathinfo, '/tecnico/edit') && preg_match('#^/tecnico/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_edit')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::editAction',));
            }

            // reset_pass_tecnico
            if (0 === strpos($pathinfo, '/tecnico/ResetPassTecnico') && preg_match('#^/tecnico/ResetPassTecnico/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_reset_pass_tecnico;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'reset_pass_tecnico');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_pass_tecnico')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::resetPassTecnicoAction',));
            }
            not_reset_pass_tecnico:

        }

        // add_administrador
        if ('/administrador/add' === $pathinfo) {
            return array (  '_controller' => 'MProdLicenciaCyPBundle:Administrador:addAdministrador',  '_route' => 'add_administrador',);
        }

        // persona_add
        if ('/persona/add' === $pathinfo) {
            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\PersonaController::addAction',  '_route' => 'persona_add',);
        }

        // regenerar_boleta_pago
        if (0 === strpos($pathinfo, '/licencia/_regenerarboletapago/licencia') && preg_match('#^/licencia/_regenerarboletapago/licencia/(?P<licenciaId>[^/]++)/(?P<readOnly>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'regenerar_boleta_pago')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\LicenciaController::regenerarBoletaPagoYCodigoBarraAction',));
        }

        // persona_findBy
        if (0 === strpos($pathinfo, '/persona/findBy') && preg_match('#^/persona/findBy/(?P<tipoDocumento>[^/]++)/(?P<numeroDocumento>[^/]++)/(?P<sexo>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_findBy')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\PersonaController::findByAction',));
        }

        if (0 === strpos($pathinfo, '/boletaPago/imprimir')) {
            // boleta_pago_imprimir_html
            if (0 === strpos($pathinfo, '/boletaPago/imprimirhtml') && preg_match('#^/boletaPago/imprimirhtml/(?P<licenciaId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boleta_pago_imprimir_html')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\BoletaPagoController::imprimirHtmlAction',));
            }

            // boleta_pago_imprimir
            if (preg_match('#^/boletaPago/imprimir/(?P<licenciaId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boleta_pago_imprimir')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\BoletaPagoController::imprimirAction',));
            }

        }

        // licencia_generada_detalle
        if (0 === strpos($pathinfo, '/licencia') && preg_match('#^/licencia/(?P<licenciaId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_generada_detalle')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\LicenciaController::verLicenciaAction',));
        }

        if (0 === strpos($pathinfo, '/provincia/find')) {
            // provincia_findBy
            if (0 === strpos($pathinfo, '/provincia/findBy') && preg_match('#^/provincia/findBy/(?P<provinciaId>[^/]++)/(?P<provinciaNombre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_findBy')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\ProvinciaController::findByAction',));
            }

            // provincia_findTiposLicenciaForProvincia
            if ('/provincia/findTiposLicenciaForProvincia' === $pathinfo) {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\ProvinciaController::findTiposLicenciaForProvinciaAction',  '_route' => 'provincia_findTiposLicenciaForProvincia',);
            }

        }

        if (0 === strpos($pathinfo, '/theme-demo')) {
            // theme_aplicativo_homepage
            if ('/theme-demo' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_theme_aplicativo_homepage;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'theme_aplicativo_homepage');
                }

                return array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'theme_aplicativo_homepage',);
            }
            not_theme_aplicativo_homepage:

            // theme_aplicativo_component
            if (preg_match('#^/theme\\-demo/(?P<component>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'theme_aplicativo_component')), array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::componentAction',));
            }

        }

        // theme_aplicativo_empty_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_theme_aplicativo_empty_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'theme_aplicativo_empty_homepage');
            }

            return array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'theme_aplicativo_empty_homepage',);
        }
        not_theme_aplicativo_empty_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
