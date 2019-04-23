<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ThemeAplicativoBundle:Default:ie.html.twig */
class __TwigTemplate_c3d7ec76d92040bd410710d2ffa3a6519790bcb69580b4c08a8a26d533163813 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:ie.html.twig"));

        // line 1
        echo "<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]>        
    <link rel = \"stylesheet\" type = \"text/css\" href =\"//www.santafe.gob.ar/assets/standard/css/ie.css\" />
    <script src=\"//www.santafe.gob.ar/assets/standard/js/html5shiv.js\"></script>
    <script src=\"//www.santafe.gob.ar/assets/standard/js/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:ie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]>        
    <link rel = \"stylesheet\" type = \"text/css\" href =\"//www.santafe.gob.ar/assets/standard/css/ie.css\" />
    <script src=\"//www.santafe.gob.ar/assets/standard/js/html5shiv.js\"></script>
    <script src=\"//www.santafe.gob.ar/assets/standard/js/respond.min.js\"></script>
<![endif]-->
", "ThemeAplicativoBundle:Default:ie.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/ie.html.twig");
    }
}
