<?php

/* ThemeAplicativoBundle:Default:css-base.html.twig */
class __TwigTemplate_4a8c3cbafc88b08a3b2b94be8b00a155d8535fe4f0e5e7b363b66c72a981f329 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/normalize.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/1140.css\" type=\"text/css\" />
";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:css-base.html.twig";
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
        return new Twig_Source("", "ThemeAplicativoBundle:Default:css-base.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/css-base.html.twig");
    }
}
