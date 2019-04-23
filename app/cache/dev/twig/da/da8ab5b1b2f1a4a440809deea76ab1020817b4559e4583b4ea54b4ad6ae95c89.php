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

/* ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig */
class __TwigTemplate_b97a084d3a660e04ecd3dd7694e79b90f3a32efa6017bc69b15e4b261acd7e07 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/css/gobierno/jquery-ui-1.10.3.custom.css\" type=\"text/css\" />

";
        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/css/gobierno/jquery-ui-1.10.3.custom.css\" type=\"text/css\" />

{#% block stylesheets %} {% stylesheets filter=\"cssrewrite\" 'bundles/themeaplicativo/css/jquery-ui-1.10.3.custom.css' %} <link rel=\"stylesheet\" href=\"{{ asset_url }}\" /> {% endstylesheets %} {% endblock %#}

", "ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/css-jquery-ui-theme.html.twig");
    }
}
