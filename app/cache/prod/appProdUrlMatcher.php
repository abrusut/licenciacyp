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

        // path_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'path_home');
            }

            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login_check
            if ($pathinfo === '/loginCheck') {
                return array('_route' => 'login_check');
            }

        }

        // change_password
        if ($pathinfo === '/Security/ChangePassword') {
            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'change_password',);
        }

        if (0 === strpos($pathinfo, '/tecnico')) {
            // tecnico_list
            if ($pathinfo === '/tecnico/list') {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::listAction',  '_route' => 'tecnico_list',);
            }

            // tecnico_add
            if ($pathinfo === '/tecnico/add') {
                return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::addAction',  '_route' => 'tecnico_add',);
            }

            // tecnico_view
            if (0 === strpos($pathinfo, '/tecnico/view') && preg_match('#^/tecnico/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_view')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::viewAction',));
            }

            // tecnico_delete
            if (0 === strpos($pathinfo, '/tecnico/delete') && preg_match('#^/tecnico/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_delete')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::deleteAction',));
            }

            // tecnico_edit
            if (0 === strpos($pathinfo, '/tecnico/edit') && preg_match('#^/tecnico/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnico_edit')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::editAction',));
            }

            // reset_pass_tecnico
            if (0 === strpos($pathinfo, '/tecnico/ResetPassTecnico') && preg_match('#^/tecnico/ResetPassTecnico/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reset_pass_tecnico');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_pass_tecnico')), array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::resetPassTecnicoAction',));
            }

        }

        // add_administrador
        if ($pathinfo === '/administrador/add') {
            return array (  '_controller' => 'MProdLicenciaCyPBundle:Administrador:addAdministrador',  '_route' => 'add_administrador',);
        }

        // persona_add
        if ($pathinfo === '/persona/add') {
            return array (  '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\PersonaController::addAction',  '_route' => 'persona_add',);
        }

        if (0 === strpos($pathinfo, '/theme-demo')) {
            // theme_aplicativo_homepage
            if (rtrim($pathinfo, '/') === '/theme-demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'theme_aplicativo_homepage');
                }

                return array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'theme_aplicativo_homepage',);
            }

            // theme_aplicativo_component
            if (preg_match('#^/theme\\-demo/(?P<component>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'theme_aplicativo_component')), array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::componentAction',));
            }

        }

        // theme_aplicativo_empty_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'theme_aplicativo_empty_homepage');
            }

            return array (  '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'theme_aplicativo_empty_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
