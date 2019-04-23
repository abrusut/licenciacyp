<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'path_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginCheck',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\SecurityController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Security/ChangePassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnico_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tecnico/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnico_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tecnico/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnico_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tecnico/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnico_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tecnico/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnico_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tecnico/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reset_pass_tecnico' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\TecnicoController::resetPassTecnicoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tecnico/ResetPassTecnico',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_administrador' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProdLicenciaCyPBundle:Administrador:addAdministrador',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administrador/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'persona_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MProd\\LicenciaCyPBundle\\Controller\\PersonaController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/persona/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'theme_aplicativo_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/theme-demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'theme_aplicativo_component' => array (  0 =>   array (    0 => 'component',  ),  1 =>   array (    '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::componentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'component',    ),    1 =>     array (      0 => 'text',      1 => '/theme-demo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'theme_aplicativo_empty_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'STG\\DEIM\\Themes\\Bundles\\AplicativoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
