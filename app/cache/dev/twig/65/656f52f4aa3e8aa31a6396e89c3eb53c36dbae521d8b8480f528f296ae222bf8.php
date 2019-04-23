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

/* ThemeAplicativoBundle:Default:top.html.twig */
class __TwigTemplate_0d3332eceb2e1e14e7d823e6d35a2238ac922b82ea96113aa42fb32a31151b0a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'image_top' => [$this, 'block_image_top'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:top.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"twelvecol\">
        <div class=\"contents n5\">            
            <h2 class=\"titulo_aplicativo\">";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["encabezado_titulo"]) || array_key_exists("encabezado_titulo", $context))) ? (_twig_default_filter((isset($context["encabezado_titulo"]) ? $context["encabezado_titulo"] : $this->getContext($context, "encabezado_titulo")), "Titulo de la aplicación")) : ("Titulo de la aplicación")), "html", null, true);
        echo "</h2>
            <p class=\"organismo\">";
        // line 5
        echo twig_escape_filter($this->env, (((isset($context["encabezado_nombre_dependencia"]) || array_key_exists("encabezado_nombre_dependencia", $context))) ? (_twig_default_filter((isset($context["encabezado_nombre_dependencia"]) ? $context["encabezado_nombre_dependencia"] : $this->getContext($context, "encabezado_nombre_dependencia")), "Nombre de dependencia")) : ("Nombre de dependencia")), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (((isset($context["encabezado_nombre_organismo"]) || array_key_exists("encabezado_nombre_organismo", $context))) ? (_twig_default_filter((isset($context["encabezado_nombre_organismo"]) ? $context["encabezado_nombre_organismo"] : $this->getContext($context, "encabezado_nombre_organismo")), "Nombre de organismo")) : ("Nombre de organismo")), "html", null, true);
        echo "</p>
            ";
        // line 6
        if ( !twig_test_empty((isset($context["encabezado_imagen_top_url"]) ? $context["encabezado_imagen_top_url"] : $this->getContext($context, "encabezado_imagen_top_url")))) {
            echo "            
                ";
            // line 7
            $this->displayBlock('image_top', $context, $blocks);
            // line 10
            echo "                
            ";
        }
        // line 12
        echo "        </div>
    </div>
</div>
<div id=\"toolbars\">
    <ul class=\"ui-widget ui-helper-clearfix\" id=\"icons\">
        ";
        // line 17
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []))) {
            // line 18
            echo "            <li style=\"color:white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path_logout"]) ? $context["path_logout"] : $this->getContext($context, "path_logout")));
            echo "\" title=\"Salir del sistema...\">Salir</a></li>
        ";
        }
        // line 20
        echo "        <li id=\"ver_ayuda\" style=\"color:white\" title=\"Clic para ver ayuda\">
    </ul>
    <div class=\"clear\"></div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_image_top($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_top"));

        echo "                                               
                    <div style=\"background-image:url('";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["encabezado_imagen_top_url"]) || array_key_exists("encabezado_imagen_top_url", $context))) ? (_twig_default_filter((isset($context["encabezado_imagen_top_url"]) ? $context["encabezado_imagen_top_url"] : $this->getContext($context, "encabezado_imagen_top_url")), "")) : ("")), "html", null, true);
        echo "'); background-size: 100% auto;background-repeat: no-repeat\" class=\"cover\">                        
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 8,  86 => 7,  76 => 20,  68 => 18,  66 => 17,  59 => 12,  55 => 10,  53 => 7,  49 => 6,  43 => 5,  39 => 4,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"twelvecol\">
        <div class=\"contents n5\">            
            <h2 class=\"titulo_aplicativo\">{{ encabezado_titulo | default('Titulo de la aplicación') }}</h2>
            <p class=\"organismo\">{{ encabezado_nombre_dependencia | default('Nombre de dependencia') }}. {{ encabezado_nombre_organismo | default('Nombre de organismo') }}</p>
            {% if encabezado_imagen_top_url is not empty %}            
                {% block image_top %}                                               
                    <div style=\"background-image:url('{{ encabezado_imagen_top_url | default('') }}'); background-size: 100% auto;background-repeat: no-repeat\" class=\"cover\">                        
                    </div>
                {% endblock %}                
            {% endif %}
        </div>
    </div>
</div>
<div id=\"toolbars\">
    <ul class=\"ui-widget ui-helper-clearfix\" id=\"icons\">
        {% if app.user is not null %}
            <li style=\"color:white\">{{app.user.username}} | <a href=\"{{ path(path_logout) }}\" title=\"Salir del sistema...\">Salir</a></li>
        {% endif %}
        <li id=\"ver_ayuda\" style=\"color:white\" title=\"Clic para ver ayuda\">
    </ul>
    <div class=\"clear\"></div>
</div>", "ThemeAplicativoBundle:Default:top.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/top.html.twig");
    }
}
