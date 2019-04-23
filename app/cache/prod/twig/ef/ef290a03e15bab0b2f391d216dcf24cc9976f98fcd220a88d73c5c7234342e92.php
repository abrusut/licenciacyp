<?php

/* MProdLicenciaCyPBundle:Page:home.html.twig */
class __TwigTemplate_e97abea7157f94cf4cfcb6119f9dd578a036b86263feb99821ca0a48776d86ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Page:home.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'bloqueMensaje' => array($this, 'block_bloqueMensaje'),
            'botonArriba' => array($this, 'block_botonArriba'),
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
    public function block_styles($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 16
        echo "

    ";
        // line 18
        $this->displayBlock('bloqueMensaje', $context, $blocks);
        // line 22
        echo "

    ";
        // line 32
        echo "
        ";
        // line 34
        echo "    <div class=\"row\">
        <div class=\"twelvecol\">
            <div class=\"ui-widget\">
                <div style=\"margin-top: 20px; margin-bottom: 20px; padding: 10px;\" class=\"ui-state-highlight ui-corner-all\">
                    <p>
                        <span style=\"float: left; margin-right: .3em;\" class=\"ui-icon ui-icon-info\"> </span> <strong>

                            Ayuda General: <br>
                        </strong>
                        Colocar algun comentario de ayuda al usuario.
                    </p>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 51
        $this->displayBlock('botonArriba', $context, $blocks);
        // line 54
        echo "
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $context["breadoption"] = array("Inicio" => "path_home", "Generar Licencias" => "#");
        // line 14
        echo "        ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    ";
    }

    // line 18
    public function block_bloqueMensaje($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $context["mensaje_reporte"] = "home_mensaje";
        // line 20
        echo "        ";
        $this->displayParentBlock("bloqueMensaje", $context, $blocks);
        echo "
    ";
    }

    // line 51
    public function block_botonArriba($context, array $blocks = array())
    {
        // line 52
        echo "        ";
        $this->displayParentBlock("botonArriba", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  115 => 51,  108 => 20,  105 => 19,  102 => 18,  95 => 14,  92 => 13,  89 => 12,  84 => 54,  82 => 51,  63 => 34,  60 => 32,  56 => 22,  54 => 18,  50 => 16,  48 => 12,  45 => 11,  42 => 10,  35 => 5,  32 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Page:home.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Page/home.html.twig");
    }
}
