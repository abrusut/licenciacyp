<?php

/* ThemeAplicativoBundle:Default:top.html.twig */
class __TwigTemplate_1df045b20521d7c3873f2ae025d951b46a39ec853d65a19fce12741f1e049c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image_top' => array($this, 'block_image_top'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"twelvecol\">
        <div class=\"contents n5\">            
            <h2 class=\"titulo_aplicativo\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("encabezado_titulo", $context)) ? (_twig_default_filter((isset($context["encabezado_titulo"]) ? $context["encabezado_titulo"] : null), "Titulo de la aplicación")) : ("Titulo de la aplicación")), "html", null, true);
        echo "</h2>
            <p class=\"organismo\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("encabezado_nombre_dependencia", $context)) ? (_twig_default_filter((isset($context["encabezado_nombre_dependencia"]) ? $context["encabezado_nombre_dependencia"] : null), "Nombre de dependencia")) : ("Nombre de dependencia")), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, ((array_key_exists("encabezado_nombre_organismo", $context)) ? (_twig_default_filter((isset($context["encabezado_nombre_organismo"]) ? $context["encabezado_nombre_organismo"] : null), "Nombre de organismo")) : ("Nombre de organismo")), "html", null, true);
        echo "</p>
            ";
        // line 6
        if ( !twig_test_empty((isset($context["encabezado_imagen_top_url"]) ? $context["encabezado_imagen_top_url"] : null))) {
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
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 18
            echo "            <li style=\"color:white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["path_logout"]) ? $context["path_logout"] : null));
            echo "\" title=\"Salir del sistema...\">Salir</a></li>
        ";
        }
        // line 20
        echo "        <li id=\"ver_ayuda\" style=\"color:white\" title=\"Clic para ver ayuda\">
    </ul>
    <div class=\"clear\"></div>
</div>";
    }

    // line 7
    public function block_image_top($context, array $blocks = array())
    {
        echo "                                               
                    <div style=\"background-image:url('";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("encabezado_imagen_top_url", $context)) ? (_twig_default_filter((isset($context["encabezado_imagen_top_url"]) ? $context["encabezado_imagen_top_url"] : null), "")) : ("")), "html", null, true);
        echo "'); background-size: 100% auto;background-repeat: no-repeat\" class=\"cover\">                        
                    </div>
                ";
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
        return array (  74 => 8,  69 => 7,  62 => 20,  54 => 18,  52 => 17,  45 => 12,  41 => 10,  39 => 7,  35 => 6,  29 => 5,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ThemeAplicativoBundle:Default:top.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/top.html.twig");
    }
}
