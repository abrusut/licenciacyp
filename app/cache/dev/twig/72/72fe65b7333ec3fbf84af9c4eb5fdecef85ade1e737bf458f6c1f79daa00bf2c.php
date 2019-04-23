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

/* ThemeAplicativoBundle:Default:css.html.twig */
class __TwigTemplate_9297728b40802b95e717eab7ba316d0aba5b680cf124f974fd53109ded401bef extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:css.html.twig"));

        // line 1
        echo "

<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/bootstrap/bootstrap-3.0.2-dist/tables-bootstrap/css/bootstrap.min.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/menu/menu.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/pagination/html5-pagination.css\" type=\"text/css\" />

<!-- incluir estos nuevos estilos -->
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/fonts.css\" type=\"text/css\" > 
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/styles-1.0.2.css\" type=\"text/css\" > 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:css.html.twig";
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
        return new Source("

<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/bootstrap/bootstrap-3.0.2-dist/tables-bootstrap/css/bootstrap.min.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/menu/menu.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/pagination/html5-pagination.css\" type=\"text/css\" />

<!-- incluir estos nuevos estilos -->
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/fonts.css\" type=\"text/css\" > 
 <link rel=\"stylesheet\" href=\"//www.santafe.gob.ar/assets/standard/css/styles-1.0.2.css\" type=\"text/css\" > 

{#% block stylesheets %} {% stylesheets filter=\"cssrewrite\" 'bundles/themeaplicativo/css/normalize.css' 'bundles/themeaplicativo/css/1140.css' 'bundles/themeaplicativo/css/styles.css' 'bundles/themeaplicativo/css/tablas_bootstrap/css/bootstrap.css'
'bundles/themeaplicativo/css/pagination/html5_pagination.css' %} <link rel=\"stylesheet\" href=\"{{ asset_url }}\" /> {% endstylesheets %} {% endblock %#}
", "ThemeAplicativoBundle:Default:css.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/css.html.twig");
    }
}
