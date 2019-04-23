<?php

/* ThemeAplicativoBundle:Default:modales.html.twig */
class __TwigTemplate_974844a424dd5b5ffeac01cfb61b4ec32b04f8452ae139e51db4c75ce30c8bfb extends Twig_Template
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
        echo "<div class=\"content_dialog\" id=\"dialog-message-info\" title=\"Ayuda\"></div>

<style>
#dialog-message-info,.submenu {
\tdisplay: none;
}
</style>";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:modales.html.twig";
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
        return new Twig_Source("", "ThemeAplicativoBundle:Default:modales.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/modales.html.twig");
    }
}
