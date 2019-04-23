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

/* MProdLicenciaCyPBundle:Page:base.html.twig */
class __TwigTemplate_b37eb171c38375d9622792accd05d8057815214e493209eba5dae9ff8d57e76d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ThemeAplicativoBundle:Default:base.html.twig", "MProdLicenciaCyPBundle:Page:base.html.twig", 1);
        $this->blocks = [
            'javascriptsIncludes' => [$this, 'block_javascriptsIncludes'],
            'javascripts' => [$this, 'block_javascripts'],
            'styles' => [$this, 'block_styles'],
            'menu' => [$this, 'block_menu'],
            'submenus' => [$this, 'block_submenus'],
            'cuerpo' => [$this, 'block_cuerpo'],
            'nuevoybarradebusquedas' => [$this, 'block_nuevoybarradebusquedas'],
            'bloqueMensaje' => [$this, 'block_bloqueMensaje'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "ThemeAplicativoBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MProdLicenciaCyPBundle:Page:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascriptsIncludes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsIncludes"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascriptsIncludes", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script language = \"javascript\"  src = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/utils.js"), "html", null, true);
        echo "\">          
    </script> 
     <script>
        \$(document).ready(function () {
            \$.ajaxSetup({         
                    beforeSend: function() {
                        \$('.loading').show();
                    },
                    complete: function(){
                       \$('.loading').hide();
                    },
                    success: function() {}
                });
            \$('.js-datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });

            \$(function () {
                \$(\"#accordion\").accordion({
                    heightStyle: \"content\",
                    collapsible: true
                });
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_styles($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 39
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\"  type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "    ";
        $this->displayBlock('submenus', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_submenus($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submenus"));

        // line 44
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 49
        echo "
<div class=\"loader\"></div>
    ";
        // line 51
        $this->displayBlock('nuevoybarradebusquedas', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('bloqueMensaje', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_nuevoybarradebusquedas($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nuevoybarradebusquedas"));

        // line 52
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_bloqueMensaje($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bloqueMensaje"));

        // line 55
        echo "        ";
        // line 56
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => (isset($context["mensaje_reporte"]) ? $context["mensaje_reporte"] : $this->getContext($context, "mensaje_reporte"))], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "            <div class=\"alert alert-success\">
                ";
            // line 58
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Page:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 61,  208 => 58,  205 => 57,  200 => 56,  198 => 55,  192 => 54,  185 => 52,  179 => 51,  172 => 54,  169 => 53,  167 => 51,  163 => 49,  157 => 48,  149 => 44,  136 => 43,  130 => 42,  120 => 39,  114 => 38,  80 => 10,  75 => 9,  69 => 8,  58 => 4,  52 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'ThemeAplicativoBundle:Default:base.html.twig' %}

{% block javascriptsIncludes %}
    {{parent()}}

{% endblock %}

{% block javascripts %}
    {{parent()}}
      <script language = \"javascript\"  src = \"{{ asset('js/utils.js') }}\">          
    </script> 
     <script>
        \$(document).ready(function () {
            \$.ajaxSetup({         
                    beforeSend: function() {
                        \$('.loading').show();
                    },
                    complete: function(){
                       \$('.loading').hide();
                    },
                    success: function() {}
                });
            \$('.js-datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });

            \$(function () {
                \$(\"#accordion\").accordion({
                    heightStyle: \"content\",
                    collapsible: true
                });
            });

        });
    </script>
{% endblock %}

{% block styles %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/estilos.css') }}\"  type=\"text/css\" />
{% endblock %}

{% block menu %}
    {% block submenus %}

    {% endblock %}
{% endblock %}

{% block cuerpo %}

<div class=\"loader\"></div>
    {% block nuevoybarradebusquedas %}
    {% endblock %}

    {% block bloqueMensaje %}
        {# Esto es para el mensaje flash. #}
        {% for flash_message in app.session.flashBag.get(mensaje_reporte) %}
            <div class=\"alert alert-success\">
                {{ flash_message }}
            </div>
        {% endfor %}
    {% endblock %}
{% endblock %}

", "MProdLicenciaCyPBundle:Page:base.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Page/base.html.twig");
    }
}
