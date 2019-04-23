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

/* MProdLicenciaCyPBundle:Page:index.html.twig */
class __TwigTemplate_7704854eb167e5210ec04d30b4a4c6fe0211f5a1cba2994babb14ada049b61e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:base.html.twig", "MProdLicenciaCyPBundle:Page:index.html.twig", 1);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'menu' => [$this, 'block_menu'],
            'submenus' => [$this, 'block_submenus'],
            'cuerpo' => [$this, 'block_cuerpo'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'nuevoybarradebusquedas' => [$this, 'block_nuevoybarradebusquedas'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "MProdLicenciaCyPBundle:Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MProdLicenciaCyPBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    ";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {

            \$('.js-datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "    ";
        $this->displayBlock('submenus', $context, $blocks);
        // line 54
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_submenus($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submenus"));

        // line 18
        echo "        <li class=''>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\">
                <span>Generar Licencia</span>
            </a>
        </li>

        ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 25
            echo "
        ";
        }
        // line 27
        echo "        ";
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECNICO"))) {
            // line 28
            echo "            <li>

            </li>
        ";
        }
        // line 32
        echo "        ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tecnico_list");
            echo "\">
                    <span>Tecnicos</span>
                </a>
            </li>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "            <li class=''>
                <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                    <span>Entrar</span>
                </a>
            </li>
        ";
        }
        // line 47
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 48
            echo "            <li class=\"icons\">

            </li>
        ";
        }
        // line 52
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 59
        echo "
    ";
        // line 60
        if (( !(isset($context["breadoption"]) || array_key_exists("breadoption", $context)) || (null === (isset($context["breadoption"]) ? $context["breadoption"] : $this->getContext($context, "breadoption"))))) {
            // line 61
            echo "        ";
            $context["breadoption"] = ["Inicio" => "home_page"];
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('nuevoybarradebusquedas', $context, $blocks);
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 65
        echo "        <div class=\"row\">
            <div class=\"twelvecol ruta-name\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadoption"]) ? $context["breadoption"] : $this->getContext($context, "breadoption")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "last", [])) {
                // line 68
                echo "                    <div style=\"float: left;\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</div>
                ";
            } else {
                // line 70
                echo "                    <div style=\"float: left;\">
                        <a href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($context["value"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a>
                    </div>
                    <span style=\"float: left;\" class=\"ui-icon ui-icon-arrow-1-e\"> </span> 
                ";
            }
            // line 75
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_nuevoybarradebusquedas($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nuevoybarradebusquedas"));

        // line 81
        echo "    <fieldset>
        <div class=\"row\">
            <div class=\"fourcol\"></div>
            ";
        // line 84
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECNICO") && ((isset($context["addEntidadPath"]) ? $context["addEntidadPath"] : $this->getContext($context, "addEntidadPath")) == "add_administrador"))) {
            // line 85
            echo "                <div class=\"eightcol last \">
                    <form action=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["addEntidadPath"]) ? $context["addEntidadPath"] : $this->getContext($context, "addEntidadPath")));
            echo "\" >
                        <input class=\"button\" type=\"submit\" title=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["addButtonTitle"]) ? $context["addButtonTitle"] : $this->getContext($context, "addButtonTitle")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["addButtonValue"]) ? $context["addButtonValue"] : $this->getContext($context, "addButtonValue")), "html", null, true);
            echo "\" >
                    </form>
                </div>
            ";
        }
        // line 91
        echo "        </div>
    </fieldset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 91,  297 => 87,  293 => 86,  290 => 85,  288 => 84,  283 => 81,  277 => 80,  268 => 76,  254 => 75,  245 => 71,  242 => 70,  236 => 68,  217 => 67,  213 => 65,  207 => 64,  199 => 94,  197 => 80,  194 => 79,  192 => 64,  189 => 63,  186 => 62,  183 => 61,  181 => 60,  178 => 59,  172 => 58,  164 => 52,  158 => 48,  155 => 47,  147 => 42,  144 => 41,  142 => 40,  139 => 39,  131 => 34,  128 => 33,  125 => 32,  119 => 28,  116 => 27,  112 => 25,  110 => 24,  102 => 19,  99 => 18,  93 => 17,  85 => 54,  82 => 17,  76 => 16,  58 => 4,  50 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'MProdLicenciaCyPBundle:Page:base.html.twig' %}

{% block javascripts %} 
    {{parent()}}
    <script>
        \$(document).ready(function () {

            \$('.js-datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });

        });
    </script>
{% endblock %} 

{% block menu %}
    {% block submenus %}
        <li class=''>
            <a href=\"{{ path('path_home') }}\">
                <span>Generar Licencia</span>
            </a>
        </li>

        {% if  is_granted('ROLE_SUPER_ADMIN')  %}

        {% endif %}
        {% if  is_granted('ROLE_ADMIN') or  is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_TECNICO')%}
            <li>

            </li>
        {% endif %}
        {% if  is_granted('ROLE_ADMIN') or  is_granted('ROLE_SUPER_ADMIN') %}
            <li>
                <a href=\"{{path('tecnico_list')}}\">
                    <span>Tecnicos</span>
                </a>
            </li>
        {% endif %}

        {% if  not is_granted('IS_AUTHENTICATED_FULLY')  %}
            <li class=''>
                <a href=\"{{ path('login') }}\">
                    <span>Entrar</span>
                </a>
            </li>
        {% endif %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li class=\"icons\">

            </li>
        {% endif %}

    {% endblock %}

{% endblock %}


{% block cuerpo %}

    {% if breadoption is not defined or breadoption is null %}
        {% set breadoption = { 'Inicio': 'home_page'} %}
    {% endif %}

    {% block breadcrumb %}
        <div class=\"row\">
            <div class=\"twelvecol ruta-name\">
                {% for key, value in breadoption %} {% if loop.last %}
                    <div style=\"float: left;\">{{ key }}</div>
                {% else %}
                    <div style=\"float: left;\">
                        <a href=\"{{ path( value )}}\">{{ key }}</a>
                    </div>
                    <span style=\"float: left;\" class=\"ui-icon ui-icon-arrow-1-e\"> </span> 
                {% endif %}
                {% endfor %}
            </div>
        </div>
    {% endblock %}

{% block nuevoybarradebusquedas %}
    <fieldset>
        <div class=\"row\">
            <div class=\"fourcol\"></div>
            {% if not (is_granted('ROLE_TECNICO') and addEntidadPath=='add_administrador') %}
                <div class=\"eightcol last \">
                    <form action=\"{{path(addEntidadPath)}}\" >
                        <input class=\"button\" type=\"submit\" title=\"{{addButtonTitle}}\" value=\"{{addButtonValue}}\" >
                    </form>
                </div>
            {% endif %}
        </div>
    </fieldset>
{% endblock %}

{% endblock %}
", "MProdLicenciaCyPBundle:Page:index.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Page/index.html.twig");
    }
}
