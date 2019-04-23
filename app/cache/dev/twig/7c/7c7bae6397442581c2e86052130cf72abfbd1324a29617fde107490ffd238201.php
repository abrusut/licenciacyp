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

/* ThemeAplicativoBundle:Default:base.html.twig */
class __TwigTemplate_2b27871cb50e0de02c9140872fe0c0ae4ddc3183857aa8cec11a772b7fa6f144 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'javascriptsIncludes' => [$this, 'block_javascriptsIncludes'],
            'javascripts' => [$this, 'block_javascripts'],
            'jquery' => [$this, 'block_jquery'],
            'top' => [$this, 'block_top'],
            'barraHerramientas' => [$this, 'block_barraHerramientas'],
            'menu' => [$this, 'block_menu'],
            'submenus' => [$this, 'block_submenus'],
            'cuerpo' => [$this, 'block_cuerpo'],
            'footer' => [$this, 'block_footer'],
            'javascriptsIncludesCustom' => [$this, 'block_javascriptsIncludesCustom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["encabezado_titulo"]) ? $context["encabezado_titulo"] : $this->getContext($context, "encabezado_titulo")), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"copyright\" content=\"&copy;\" />
        <meta name=\"robot\" content=\"all\" />
        
        <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">

        ";
        // line 16
        $this->loadTemplate("ThemeAplicativoBundle:Default:css-base.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 16)->display($context);
        echo " 
        ";
        // line 17
        $this->loadTemplate("ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 17)->display($context);
        echo " 
        ";
        // line 18
        $this->loadTemplate("ThemeAplicativoBundle:Default:css.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 18)->display($context);
        echo " 
        ";
        // line 19
        $this->loadTemplate("ThemeAplicativoBundle:Default:ie.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 19)->display($context);
        echo " 
        ";
        // line 20
        $this->displayBlock('styles', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('javascriptsIncludes', $context, $blocks);
        // line 26
        echo " 

        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo " 

        ";
        // line 31
        $this->displayBlock('jquery', $context, $blocks);
        // line 33
        echo "

    </head>

    <body id=\"top\">

        <div role=\"navigation\" class=\"navbar navbar-sf navbar-fixed-top\">
            <div class=\"container row-top\">
                <div class=\"navbar-header\">
                    <a href=\"//www.santafe.gob.ar\" class=\"navbar-brand\"><img alt=\"Gobierno de Santa Fe\" src=\"//www.santafe.gob.ar/assets/standard/images/gob-santafe.png\"></a>                    
                </div>
            </div>
        </div>        

        <div class=\"container\">

            <div class=\"row top-padding\">  

                ";
        // line 51
        $this->displayBlock('top', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        $this->displayBlock('barraHerramientas', $context, $blocks);
        // line 57
        echo "
                <div id='cssmenu'>
                    <ul>
                        ";
        // line 60
        $this->displayBlock('menu', $context, $blocks);
        // line 83
        echo "                    </ul>
                </div>

                ";
        // line 86
        echo " 

                ";
        // line 88
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 90
        echo " 


                ";
        // line 93
        $this->loadTemplate("ThemeAplicativoBundle:Default:modales.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 93)->display($context);
        // line 94
        echo "
            </div>

            ";
        // line 97
        $this->displayBlock('footer', $context, $blocks);
        // line 100
        echo "
        </div>

        <div id=\"myProgressBar\" style=\"visibility: hidden;\"></div>
        ";
        // line 104
        $this->displayBlock('javascriptsIncludesCustom', $context, $blocks);
        // line 107
        echo "    </body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_styles($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 21
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_javascriptsIncludes($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsIncludes"));

        echo " 
            ";
        // line 25
        $this->loadTemplate("ThemeAplicativoBundle:Default:jquery.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 25)->display($context);
        echo " \t   
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_jquery($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 32
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_top($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top"));

        // line 52
        echo "                    ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:top.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 52)->display($context);
        // line 53
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_barraHerramientas($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barraHerramientas"));

        echo "                
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        echo " 
                            ";
        // line 61
        $this->displayBlock('submenus', $context, $blocks);
        // line 82
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_submenus($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submenus"));

        // line 62
        echo "                                <li class=''><a href='index.html'><span>Home</span></a></li>
                                <li class='has-sub'><a href='#'><span>Products</span></a>
                                    <ul>
                                        <li class='has-sub'><a href='#'><span>Product 1</span></a>
                                            <ul>
                                                <li><a href='#'><span>Sub Item</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                            </ul>
                                        </li>
                                        <li class='has-sub'><a href='#'><span>Product 2</span></a>
                                            <ul>
                                                <li><a href='#'><span>Sub Item</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='#'><span>About</span></a></li>
                                <li class='last'><a href='#'><span>Contact</span></a></li>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        echo " 

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_footer($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 98
        echo "                ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:footer.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 98)->display($context);
        echo " 
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_javascriptsIncludesCustom($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascriptsIncludesCustom"));

        // line 105
        echo "            ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:javascript-standard-gobierno.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 105)->display($context);
        echo " 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 105,  341 => 104,  331 => 98,  325 => 97,  311 => 88,  285 => 62,  279 => 61,  272 => 82,  270 => 61,  262 => 60,  249 => 55,  242 => 53,  239 => 52,  233 => 51,  226 => 32,  220 => 31,  207 => 28,  198 => 25,  190 => 24,  182 => 21,  176 => 20,  166 => 107,  164 => 104,  158 => 100,  156 => 97,  151 => 94,  149 => 93,  144 => 90,  142 => 88,  138 => 86,  133 => 83,  131 => 60,  126 => 57,  124 => 55,  121 => 54,  119 => 51,  99 => 33,  97 => 31,  93 => 29,  91 => 28,  87 => 26,  85 => 24,  82 => 23,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  49 => 4,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{{ encabezado_titulo }}</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"copyright\" content=\"&copy;\" />
        <meta name=\"robot\" content=\"all\" />
        
        <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">

        {% include 'ThemeAplicativoBundle:Default:css-base.html.twig' %} 
        {% include 'ThemeAplicativoBundle:Default:css-jquery-ui-theme.html.twig'%} 
        {% include 'ThemeAplicativoBundle:Default:css.html.twig' %} 
        {% include 'ThemeAplicativoBundle:Default:ie.html.twig' %} 
        {% block styles %}

        {% endblock %}

        {% block javascriptsIncludes %} 
            {% include 'ThemeAplicativoBundle:Default:jquery.html.twig' %} \t   
        {% endblock %} 

        {% block javascripts %} 
        {% endblock %} 

        {% block jquery %}
        {% endblock %}


    </head>

    <body id=\"top\">

        <div role=\"navigation\" class=\"navbar navbar-sf navbar-fixed-top\">
            <div class=\"container row-top\">
                <div class=\"navbar-header\">
                    <a href=\"//www.santafe.gob.ar\" class=\"navbar-brand\"><img alt=\"Gobierno de Santa Fe\" src=\"//www.santafe.gob.ar/assets/standard/images/gob-santafe.png\"></a>                    
                </div>
            </div>
        </div>        

        <div class=\"container\">

            <div class=\"row top-padding\">  

                {% block top %}
                    {% include 'ThemeAplicativoBundle:Default:top.html.twig' %}
                {% endblock %}

                {% block barraHerramientas %}                
                {% endblock %}

                <div id='cssmenu'>
                    <ul>
                        {% block menu %} 
                            {% block submenus %}
                                <li class=''><a href='index.html'><span>Home</span></a></li>
                                <li class='has-sub'><a href='#'><span>Products</span></a>
                                    <ul>
                                        <li class='has-sub'><a href='#'><span>Product 1</span></a>
                                            <ul>
                                                <li><a href='#'><span>Sub Item</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                            </ul>
                                        </li>
                                        <li class='has-sub'><a href='#'><span>Product 2</span></a>
                                            <ul>
                                                <li><a href='#'><span>Sub Item</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Item</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='#'><span>About</span></a></li>
                                <li class='last'><a href='#'><span>Contact</span></a></li>
                                {% endblock %}
                            {% endblock %}
                    </ul>
                </div>

                {# ruta de navegacion #} 

                {% block cuerpo %} 

                {% endblock %} 


                {% include 'ThemeAplicativoBundle:Default:modales.html.twig' %}

            </div>

            {% block footer %}
                {% include 'ThemeAplicativoBundle:Default:footer.html.twig' %} 
            {% endblock %}

        </div>

        <div id=\"myProgressBar\" style=\"visibility: hidden;\"></div>
        {% block javascriptsIncludesCustom %}
            {% include 'ThemeAplicativoBundle:Default:javascript-standard-gobierno.html.twig' %} 
        {% endblock %}
    </body>
</html>

", "ThemeAplicativoBundle:Default:base.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/base.html.twig");
    }
}
