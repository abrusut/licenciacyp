<?php

/* ThemeAplicativoBundle:Componentes:tabla.html.twig */
class __TwigTemplate_a782e9d78a45dab8a32238f70f5d8215264267a42eccdb001b5feaad030aaf97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tabla' => array($this, 'block_tabla'),
            'TituloTabla' => array($this, 'block_TituloTabla'),
            'headerTabla' => array($this, 'block_headerTabla'),
            'cuerpoTabla' => array($this, 'block_cuerpoTabla'),
            'paginacion' => array($this, 'block_paginacion'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('tabla', $context, $blocks);
    }

    public function block_tabla($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"row\">
\t<div class=\"twelvecol table-responsive\">
\t\t<table class=\"table table-condensed table-hover table-striped table-bordered\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <thead>
                        <tr>
\t\t\t\t<th colspan=\"20\" scope=\"col\">";
        // line 7
        $this->displayBlock('TituloTabla', $context, $blocks);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
                            ";
        // line 10
        $this->displayBlock('headerTabla', $context, $blocks);
        // line 16
        echo "\t\t\t</tr>
                    </thead>
                    <tbody>
\t\t\t";
        // line 19
        $this->displayBlock('cuerpoTabla', $context, $blocks);
        // line 52
        echo "                    </tbody>    
\t\t</table>
\t\t";
        // line 54
        $this->displayBlock('paginacion', $context, $blocks);
        // line 55
        echo "
\t</div>
</div>

";
    }

    // line 7
    public function block_TituloTabla($context, array $blocks = array())
    {
        echo "Titulo de tabla ";
    }

    // line 10
    public function block_headerTabla($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t\t<td class=\"columns-dest\">Moneda</td>
\t\t\t\t<td class=\"columns-dest\">Monto</td>
\t\t\t\t<td class=\"columns-dest\">Obs</td>
\t\t\t\t<td class=\"columns-dest\"></td> 
                            ";
    }

    // line 19
    public function block_cuerpoTabla($context, array $blocks = array())
    {
        // line 20
        echo "                            <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                            <button title=\"Previsualizar\" class=\"opciones\">P</button>
                                            <button title=\"Editar\" class=\"opciones\">E</button>
                                            <button title=\"Borrar\" class=\"opciones\">B</button>
                                    </td>
                            </tr>
                            <tr>

                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                            <button title=\"Previsualizar\" class=\"opciones\">P</button>
                                            <button title=\"Editar\" class=\"opciones\">E</button>
                                            <button title=\"Borrar\" class=\"opciones\">B</button>
                                    </td>
                            </tr>
                            <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                            <button title=\"Previsualizar\" class=\"opciones\">P</button>
                                            <button title=\"Editar\" class=\"opciones\">E</button>
                                            <button title=\"Borrar\" class=\"opciones\">B</button>
                                    </td>
                            </tr>
\t\t\t";
    }

    // line 54
    public function block_paginacion($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Componentes:tabla.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  86 => 20,  83 => 19,  75 => 11,  72 => 10,  66 => 7,  58 => 55,  56 => 54,  52 => 52,  50 => 19,  45 => 16,  43 => 10,  37 => 7,  30 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ThemeAplicativoBundle:Componentes:tabla.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Componentes/tabla.html.twig");
    }
}
