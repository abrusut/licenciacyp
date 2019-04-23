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

/* MProdLicenciaCyPBundle:Licencia:add.html.twig */
class __TwigTemplate_9a40ee95c2a4e1247fdac45b35955f39f28bd0e34894ddad83e632986e4afa04 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Licencia:add.html.twig", 1);
        $this->blocks = [
            'cuerpo' => [$this, 'block_cuerpo'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "MProdLicenciaCyPBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MProdLicenciaCyPBundle:Licencia:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "<div class=\"loading\">Loading&#8230;</div>
     ";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "licenciaForm_message"], "method")) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "licenciaForm_message"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
            ";
            // line 12
            if ((isset($context["urlBoletaPago"]) || array_key_exists("urlBoletaPago", $context))) {
                // line 13
                echo "                <input type='button' value='Imprimir Boleta Pago' 
                    onclick=\"imprimirBoletaPago('";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago")), "html", null, true);
                echo "')\">
            ";
            }
            // line 16
            echo "        </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "licenciaForm_message_error"], "method")) {
            // line 20
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "licenciaForm_message_error"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 22
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 31
        echo "
    <div class=\"row form\">        
            <h3>Datos de la licencia</h3>
            <div class=\"row\">
                <div class=\"fourcol\">
                    <div class=\"ui-widget\">
                        <div style=\"margin-top: 20px; margin-bottom: 20px; padding: 10px;\" class=\"ui-state-highlight ui-corner-all\">
                            <p>
                                <span style=\"float: left; margin-right: .3em;\" class=\"ui-icon ui-icon-info\"> </span> <strong>

                                    Ayuda General: <br>
                                </strong>

                                <br>
                            Al generar la licencia usted es responsable de conocer la normativa que regula la actividad en la provincia de Santa Fe.

                            </p>
                        </div>
                    </div>
                </div>               
                    ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "                                                                
                       <div class=\"eightcol last\">                            
                            <div id=\"accordion\">                            
                                <h3>Terminos y condiciones</h3>   
                                <div id=\"divTerminosYCondiciones\">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <input type='button' value='Aceptar Terminos' onclick=\"step2()\">
                                </div>    
                                
                                <h3>Complete sus Datos</h3>   
                                <div id=\"divBusquedaPersona\">
                                    Contenido
                                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "tipoDocumento", []), 'row');
        echo "
                                     ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "numeroDocumento", []), 'row');
        echo "
                                     ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "sexo", []), 'row');
        echo "
                                     <input type='button' value='Buscar' onclick=\"buscarPersona()\">
                                </div>

                                 <h3>Datos de la licencia</h3>
                                 <div id=\"divFormularioLicencia\">  
                                                         
                                    <div class=\"ui-widget\">                                
                                        <div style=\"padding: 10px;\">                                        
                                                                                   
                                                    <div>
                                                    </div>
                                            ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "provincia", []), 'row');
        echo "
                                            <div id=\"localidad\">
                                                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "localidad", []), 'row');
        echo "
                                            </div>
                                            <div id=\"localidadOtraProvincia\">
                                                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "persona", []), "localidadOtraProvincia", []), 'row');
        echo "
                                            </div>
                                            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "                                            
                                            <input type='submit' value='Guardar'>
                                        </div>
                                    </div>
                                  </div>
                            </div>     
                        </div>                                                   
                               
        ";
        // line 94
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 28
        echo "        ";
        $context["breadoption"] = ["Inicio" => "path_home", "Nueva Licencia" => "#"];
        // line 29
        echo "        ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  
    <script language = \"javascript\"  src = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/licencia.js"), "html", null, true);
        echo "\">          
    </script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Licencia:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 101,  246 => 99,  240 => 98,  230 => 29,  227 => 28,  221 => 27,  210 => 94,  199 => 86,  194 => 84,  188 => 81,  183 => 79,  168 => 67,  164 => 66,  160 => 65,  143 => 51,  121 => 31,  119 => 27,  116 => 26,  112 => 24,  103 => 22,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  87 => 16,  82 => 14,  79 => 13,  77 => 12,  74 => 11,  65 => 9,  61 => 8,  58 => 7,  56 => 6,  53 => 5,  47 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MProdLicenciaCyPBundle:Page:index.html.twig\" %}


{% block cuerpo %}
<div class=\"loading\">Loading&#8230;</div>
     {% if app.session.flashBag.has('licenciaForm_message') %}
        <div class=\"alert alert-success\">
            {% for msg in app.session.flashBag.get('licenciaForm_message') %}
                {{ msg }}
            {% endfor %}

            {% if urlBoletaPago is defined%}
                <input type='button' value='Imprimir Boleta Pago' 
                    onclick=\"imprimirBoletaPago('{{urlBoletaPago}}')\">
            {% endif %}
        </div>
    {% endif %}

    {% if app.session.flashBag.has('licenciaForm_message_error') %}
        <div class=\"alert alert-danger\">
            {% for msg in app.session.flashBag.get('licenciaForm_message_error') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}

    {% block  breadcrumb %}
        {% set breadoption = { 'Inicio': 'path_home', 'Nueva Licencia': '#'} %}
        {{parent()}}
    {% endblock%}

    <div class=\"row form\">        
            <h3>Datos de la licencia</h3>
            <div class=\"row\">
                <div class=\"fourcol\">
                    <div class=\"ui-widget\">
                        <div style=\"margin-top: 20px; margin-bottom: 20px; padding: 10px;\" class=\"ui-state-highlight ui-corner-all\">
                            <p>
                                <span style=\"float: left; margin-right: .3em;\" class=\"ui-icon ui-icon-info\"> </span> <strong>

                                    Ayuda General: <br>
                                </strong>

                                <br>
                            Al generar la licencia usted es responsable de conocer la normativa que regula la actividad en la provincia de Santa Fe.

                            </p>
                        </div>
                    </div>
                </div>               
                    {{ form_start(form) }}                                                                
                       <div class=\"eightcol last\">                            
                            <div id=\"accordion\">                            
                                <h3>Terminos y condiciones</h3>   
                                <div id=\"divTerminosYCondiciones\">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <input type='button' value='Aceptar Terminos' onclick=\"step2()\">
                                </div>    
                                
                                <h3>Complete sus Datos</h3>   
                                <div id=\"divBusquedaPersona\">
                                    Contenido
                                    {{ form_row(form.persona.tipoDocumento) }}
                                     {{ form_row(form.persona.numeroDocumento) }}
                                     {{ form_row(form.persona.sexo) }}
                                     <input type='button' value='Buscar' onclick=\"buscarPersona()\">
                                </div>

                                 <h3>Datos de la licencia</h3>
                                 <div id=\"divFormularioLicencia\">  
                                                         
                                    <div class=\"ui-widget\">                                
                                        <div style=\"padding: 10px;\">                                        
                                                                                   
                                                    <div>
                                                    </div>
                                            {{ form_row(form.persona.provincia) }}
                                            <div id=\"localidad\">
                                                {{ form_row(form.persona.localidad) }}
                                            </div>
                                            <div id=\"localidadOtraProvincia\">
                                                {{ form_row(form.persona.localidadOtraProvincia) }}
                                            </div>
                                            {{form_rest(form)}}                                            
                                            <input type='submit' value='Guardar'>
                                        </div>
                                    </div>
                                  </div>
                            </div>     
                        </div>                                                   
                               
        {{ form_end(form) }}
    </div>

{% endblock %}
{% block javascripts %}
    {{parent()}}
  
    <script language = \"javascript\"  src = \"{{ asset('js/licencia.js') }}\">          
    </script> 

{% endblock %}      ", "MProdLicenciaCyPBundle:Licencia:add.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Licencia/add.html.twig");
    }
}
