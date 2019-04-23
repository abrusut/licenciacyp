<?php

/* MProdLicenciaCyPBundle:Page:base.html.twig */
class __TwigTemplate_3c84c4819c28dc9d08f5897cd3b91fe6500482077306963d82d0766f2dfc4cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ThemeAplicativoBundle:Default:base.html.twig", "MProdLicenciaCyPBundle:Page:base.html.twig", 1);
        $this->blocks = array(
            'javascriptsIncludes' => array($this, 'block_javascriptsIncludes'),
            'javascripts' => array($this, 'block_javascripts'),
            'styles' => array($this, 'block_styles'),
            'menu' => array($this, 'block_menu'),
            'submenus' => array($this, 'block_submenus'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'nuevoybarradebusquedas' => array($this, 'block_nuevoybarradebusquedas'),
            'bloqueMensaje' => array($this, 'block_bloqueMensaje'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThemeAplicativoBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascriptsIncludes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascriptsIncludes", $context, $blocks);
        echo "

";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_styles($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\"  type=\"text/css\" />
";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayBlock('submenus', $context, $blocks);
    }

    public function block_submenus($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
    }

    // line 22
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayBlock('nuevoybarradebusquedas', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('bloqueMensaje', $context, $blocks);
    }

    // line 23
    public function block_nuevoybarradebusquedas($context, array $blocks = array())
    {
        // line 24
        echo "    ";
    }

    // line 26
    public function block_bloqueMensaje($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => (isset($context["mensaje_reporte"]) ? $context["mensaje_reporte"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "            <div class=\"alert alert-success\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
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
        return array (  123 => 33,  114 => 30,  111 => 29,  106 => 28,  104 => 27,  101 => 26,  97 => 24,  94 => 23,  90 => 26,  87 => 25,  84 => 23,  81 => 22,  76 => 18,  69 => 17,  66 => 16,  59 => 13,  56 => 12,  49 => 9,  46 => 8,  38 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Page:base.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Page/base.html.twig");
    }
}
