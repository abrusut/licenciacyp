<?php

/* ThemeAplicativoBundle:Default:ie.html.twig */
class __TwigTemplate_cfb8feb3115b288f189f02b09b7965e9364651454aa809db4d8be422c7f38c05 extends Twig_Template
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
        echo "<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]>        
    <link rel = \"stylesheet\" type = \"text/css\" href =\"//www.santafe.gob.ar/assets/standard/css/ie.css\" />
    <script src=\"//www.santafe.gob.ar/assets/standard/js/html5shiv.js\"></script>
    <script src=\"//www.santafe.gob.ar/assets/standard/js/respond.min.js\"></script>
<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:ie.html.twig";
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
        return new Twig_Source("", "ThemeAplicativoBundle:Default:ie.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/ie.html.twig");
    }
}
