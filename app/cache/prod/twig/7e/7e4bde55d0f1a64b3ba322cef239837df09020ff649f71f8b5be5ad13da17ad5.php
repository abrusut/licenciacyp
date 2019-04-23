<?php

/* MProdLicenciaCyPBundle:Tecnico:list.html.twig */
class __TwigTemplate_47895912dc1cca31f2809cb38a2d39fad0af64409063aa717c224cfe6f1dabf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Tecnico:list.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'bloqueMensaje' => array($this, 'block_bloqueMensaje'),
            'nuevoybarradebusquedas' => array($this, 'block_nuevoybarradebusquedas'),
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
        // line 25
        $this->displayBlock('nuevoybarradebusquedas', $context, $blocks);
        // line 31
        echo "
    ";
        // line 33
        echo "    <div class=\"row\">
        <div class=\"twelvecol\">
            <div class=\"ui-widget\">
                <div style=\"margin-top: 20px; margin-bottom: 20px; padding: 10px;\" class=\"ui-state-highlight ui-corner-all\">
                    <p>
                        <span style=\"float: left; margin-right: .3em;\" class=\"ui-icon ui-icon-info\"> </span> <strong>

                            Ayuda General: <br>
                        </strong>
                        BC Blanquear Contaraseña se utiliza para resetear los password cuando alguien se olvida o pierde su contraseña.
                    </p>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 50
        echo "    <fieldset>
        <div class=\"twelvecol\">
            ";
        // line 52
        $this->loadTemplate("MProdLicenciaCyPBundle:Tecnico:list.html.twig", "MProdLicenciaCyPBundle:Tecnico:list.html.twig", 52, "1648495425")->display($context);
        // line 118
        echo "




        </div>
    </fieldset>

    ";
        // line 126
        $this->displayBlock('botonArriba', $context, $blocks);
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $context["breadoption"] = array("Inicio" => "path_home", "Lista de técnicos" => "#");
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
        $context["mensaje_reporte"] = "tecnico_list_mensaje";
        // line 20
        echo "        ";
        $this->displayParentBlock("bloqueMensaje", $context, $blocks);
        echo "
    ";
    }

    // line 25
    public function block_nuevoybarradebusquedas($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $context["addEntidadPath"] = "tecnico_add";
        // line 27
        echo "        ";
        $context["addButtonValue"] = "Nuevo Técnico";
        // line 28
        echo "        ";
        $context["addButtonTitle"] = ("Crear " . (isset($context["addButtonValue"]) ? $context["addButtonValue"] : null));
        // line 29
        echo "        ";
        $this->displayParentBlock("nuevoybarradebusquedas", $context, $blocks);
        echo "
    ";
    }

    // line 126
    public function block_botonArriba($context, array $blocks = array())
    {
        // line 127
        echo "        ";
        $this->displayParentBlock("botonArriba", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Tecnico:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 127,  150 => 126,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  124 => 20,  121 => 19,  118 => 18,  111 => 14,  108 => 13,  105 => 12,  101 => 126,  91 => 118,  89 => 52,  85 => 50,  67 => 33,  64 => 31,  62 => 25,  57 => 22,  55 => 18,  51 => 16,  49 => 12,  46 => 11,  43 => 10,  36 => 5,  33 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Tecnico:list.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Tecnico/list.html.twig");
    }
}


/* MProdLicenciaCyPBundle:Tecnico:list.html.twig */
class __TwigTemplate_47895912dc1cca31f2809cb38a2d39fad0af64409063aa717c224cfe6f1dabf0_1648495425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 52
        $this->parent = $this->loadTemplate("ThemeAplicativoBundle:Componentes:tabla.html.twig", "MProdLicenciaCyPBundle:Tecnico:list.html.twig", 52);
        $this->blocks = array(
            'TituloTabla' => array($this, 'block_TituloTabla'),
            'headerTabla' => array($this, 'block_headerTabla'),
            'cuerpoTabla' => array($this, 'block_cuerpoTabla'),
            'paginacion' => array($this, 'block_paginacion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThemeAplicativoBundle:Componentes:tabla.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 54
    public function block_TituloTabla($context, array $blocks = array())
    {
        echo "Lista de Técnicos";
    }

    // line 56
    public function block_headerTabla($context, array $blocks = array())
    {
        // line 57
        echo "
                    <td class=\"columns-dest\">";
        // line 58
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Identificador", "A.id");
        echo "</td>
                    <td class=\"columns-dest\">";
        // line 59
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Nombre", "A.nombre");
        echo "</td>
                    <td class=\"columns-dest\">";
        // line 60
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Apellido", "A.apellido");
        echo "</td>

                    <td class=\"columns-dest\">Teléfono Fijo</td>
                    <td class=\"columns-dest\">email</td>
                    <td class=\"columns-dest\">Acciones Básicas</td>
                    <td class=\"columns-dest\">Acciones de cuenta</td>


                ";
    }

    // line 71
    public function block_cuerpoTabla($context, array $blocks = array())
    {
        // line 72
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
            // line 73
            echo "                        <div class=\"container\">
                            <tr>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["A"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            if ($this->getAttribute($context["A"], "isActive", array())) {
                // line 77
                echo "                                        <span class=\"label label-success\">Act</span>
                                    ";
            } else {
                // line 79
                echo "                                        <span class=\"label label-danger\">Inact</span>
                                    ";
            }
            // line 81
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["A"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["A"], "apellido", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["A"], "telefono", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["A"], "email", array()), "html", null, true);
            echo "</td>
                               
                                <td>
                                    <button title=\"Ver\" class=\"opciones\" onclick=\"location.href = '";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tecnico_view", array("id" => $this->getAttribute($context["A"], "id", array()))), "html", null, true);
            echo "';\">V</button>
                                <button title=\"Editar\" class=\"opciones\" onclick=\"location.href = '";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tecnico_edit", array("id" => $this->getAttribute($context["A"], "id", array()))), "html", null, true);
            echo "';\">E</button>
                                
                                </td>
                            
                                <td>
                                    <button title=\"Blanquear Contraseña\" class=\"opciones\"
                                            onclick=\"location.href = '";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reset_pass_tecnico", array("id" => $this->getAttribute($context["A"], "id", array()))), "html", null, true);
            echo "';\">BC</button>
                                </td>
                        
                            </tr>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "


                ";
    }

    // line 104
    public function block_paginacion($context, array $blocks = array())
    {
        // line 105
        echo "                    <div class=\"count\">
                        <div class=\"alert alert-info\">Total: ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "</div>
                    </div>

                    <div class=\"paginacion\">

                        ";
        // line 111
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                    </div>


                ";
    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Tecnico:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 111,  333 => 106,  330 => 105,  327 => 104,  320 => 100,  308 => 94,  299 => 88,  295 => 87,  289 => 84,  285 => 83,  281 => 82,  276 => 81,  272 => 79,  268 => 77,  266 => 76,  262 => 75,  258 => 73,  253 => 72,  250 => 71,  237 => 60,  233 => 59,  229 => 58,  226 => 57,  223 => 56,  217 => 54,  197 => 52,  153 => 127,  150 => 126,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  124 => 20,  121 => 19,  118 => 18,  111 => 14,  108 => 13,  105 => 12,  101 => 126,  91 => 118,  89 => 52,  85 => 50,  67 => 33,  64 => 31,  62 => 25,  57 => 22,  55 => 18,  51 => 16,  49 => 12,  46 => 11,  43 => 10,  36 => 5,  33 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Tecnico:list.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Tecnico/list.html.twig");
    }
}
