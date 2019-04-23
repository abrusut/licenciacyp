<?php

/* MProdLicenciaCyPBundle:Persona:add.html.twig */
class __TwigTemplate_c094c165f215e014ffad385dc14f0458c939b2fb663302b2455bf8122b05226f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Persona:add.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MProdLicenciaCyPBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 10
        echo "
    <div class=\"row form\">

        <h3>Datos Personales</h3>
        <div class=\"row\">
            <div class=\"fourcol\">
                <div class=\"ui-widget\">
                    <div style=\"margin-top: 20px; margin-bottom: 20px; padding: 10px;\" class=\"ui-state-highlight ui-corner-all\">
                        <p>
                            <span style=\"float: left; margin-right: .3em;\" class=\"ui-icon ui-icon-info\"> </span> <strong>

                                Ayuda General: <br>
                            </strong>

                            <br>
                            El Técnico es la persona que se encarga de resolver los reportes que le fueron asignados.

                        </p>
                    </div>
                </div>
            </div>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <form action='' method='POST'>
                <div class=\"eightcol last\">
                    <div class=\"ui-widget\">
                        <div style=\"padding: 10px;\">
                            <div id=\"accordion\">
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                                <h3>Datos del Técnico</h3>
                                <div>
                                    <p> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'row');
        echo "</p>
                                    <p> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array()), 'row');
        echo "</p>
                                    <p> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telefono", array()), 'row');
        echo "</p>
                                    <p> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "</p>
                                </div>

                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                            </div>
                            <input type='submit' value='Guardar'>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

";
    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $context["breadoption"] = array("Inicio" => "path_home", "Lista de técnicos" => "persona_add", "Completar datos personales" => "#");
        // line 8
        echo "        ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Persona:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 8,  115 => 7,  112 => 6,  104 => 54,  93 => 46,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  69 => 37,  60 => 31,  37 => 10,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Persona:add.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Persona/add.html.twig");
    }
}
