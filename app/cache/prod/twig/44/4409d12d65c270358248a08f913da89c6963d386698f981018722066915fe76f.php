<?php

/* MProdLicenciaCyPBundle:Page:index.html.twig */
class __TwigTemplate_a0a48ac0220ee794f91407241946b5c47301d23a7e45d45399a48cea286ea677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:base.html.twig", "MProdLicenciaCyPBundle:Page:index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'submenus' => array($this, 'block_submenus'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'nuevoybarradebusquedas' => array($this, 'block_nuevoybarradebusquedas'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MProdLicenciaCyPBundle:Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('submenus', $context, $blocks);
        // line 41
        echo "
";
    }

    // line 4
    public function block_submenus($context, array $blocks = array())
    {
        // line 5
        echo "        <li class=''>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("path_home");
        echo "\">
                <span>Generar Licencia</span>
            </a>
        </li>

        ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 12
            echo "
        ";
        }
        // line 14
        echo "        ";
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECNICO"))) {
            // line 15
            echo "            <li>

            </li>
        ";
        }
        // line 19
        echo "        ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 20
            echo "            <li>
                <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tecnico_list");
            echo "\">
                    <span>Tecnicos</span>
                </a>
            </li>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "            <li class=''>
                <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                    <span>Entrar</span>
                </a>
            </li>
        ";
        }
        // line 34
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "            <li class=\"icons\">

            </li>
        ";
        }
        // line 39
        echo "
    ";
    }

    // line 45
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 46
        echo "
    ";
        // line 47
        if (( !array_key_exists("breadoption", $context) || (null === (isset($context["breadoption"]) ? $context["breadoption"] : null)))) {
            // line 48
            echo "        ";
            $context["breadoption"] = array("Inicio" => "home_page");
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('nuevoybarradebusquedas', $context, $blocks);
        // line 81
        echo "
";
    }

    // line 51
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 52
        echo "        <div class=\"row\">
            <div class=\"twelvecol ruta-name\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadoption"]) ? $context["breadoption"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 55
                echo "                    <div style=\"float: left;\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</div>
                ";
            } else {
                // line 57
                echo "                    <div style=\"float: left;\">
                        <a href=\"";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($context["value"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a>
                    </div>
                    <span style=\"float: left;\" class=\"ui-icon ui-icon-arrow-1-e\"> </span> 
                ";
            }
            // line 62
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
        // line 63
        echo "            </div>
        </div>
    ";
    }

    // line 67
    public function block_nuevoybarradebusquedas($context, array $blocks = array())
    {
        // line 68
        echo "    <fieldset>
        <div class=\"row\">
            <div class=\"fourcol\"></div>
            ";
        // line 71
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECNICO") && ((isset($context["addEntidadPath"]) ? $context["addEntidadPath"] : null) == "add_administrador"))) {
            // line 72
            echo "                <div class=\"eightcol last \">
                    <form action=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["addEntidadPath"]) ? $context["addEntidadPath"] : null));
            echo "\" >
                        <input class=\"button\" type=\"submit\" title=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["addButtonTitle"]) ? $context["addButtonTitle"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["addButtonValue"]) ? $context["addButtonValue"] : null), "html", null, true);
            echo "\" >
                    </form>
                </div>
            ";
        }
        // line 78
        echo "        </div>
    </fieldset>
";
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
        return array (  235 => 78,  226 => 74,  222 => 73,  219 => 72,  217 => 71,  212 => 68,  209 => 67,  203 => 63,  189 => 62,  180 => 58,  177 => 57,  171 => 55,  152 => 54,  148 => 52,  145 => 51,  140 => 81,  138 => 67,  135 => 66,  133 => 51,  130 => 50,  127 => 49,  124 => 48,  122 => 47,  119 => 46,  116 => 45,  111 => 39,  105 => 35,  102 => 34,  94 => 29,  91 => 28,  89 => 27,  86 => 26,  78 => 21,  75 => 20,  72 => 19,  66 => 15,  63 => 14,  59 => 12,  57 => 11,  49 => 6,  46 => 5,  43 => 4,  38 => 41,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Page:index.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Page/index.html.twig");
    }
}
