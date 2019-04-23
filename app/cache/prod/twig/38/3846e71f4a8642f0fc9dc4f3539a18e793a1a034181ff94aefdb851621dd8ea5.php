<?php

/* ThemeAplicativoBundle:Default:css.html.twig */
class __TwigTemplate_f8a426bf15d28354bdcfb111b84d4648e969f1a3685cd5259f6c58c69a320f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/bootstrap/bootstrap-3.0.2-dist/tables-bootstrap/css/bootstrap.min.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/menu/menu.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/pagination/html5-pagination.css\" type=\"text/css\" />

<!-- incluir estos nuevos estilos -->
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/fonts.css\" type=\"text/css\" > 
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/styles-1.0.2.css\" type=\"text/css\" > 

";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:css.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ThemeAplicativoBundle:Default:css.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/css.html.twig");
    }
}
