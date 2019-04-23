<?php

/* ThemeAplicativoBundle:Default:base.html.twig */
class __TwigTemplate_14229f01055cfef3c9877fcbd101328b9eff82e2c6fe9454f33ced1081dee7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'javascriptsIncludes' => array($this, 'block_javascriptsIncludes'),
            'javascripts' => array($this, 'block_javascripts'),
            'jquery' => array($this, 'block_jquery'),
            'top' => array($this, 'block_top'),
            'barraHerramientas' => array($this, 'block_barraHerramientas'),
            'menu' => array($this, 'block_menu'),
            'submenus' => array($this, 'block_submenus'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'footer' => array($this, 'block_footer'),
            'javascriptsIncludesCustom' => array($this, 'block_javascriptsIncludesCustom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["encabezado_titulo"]) ? $context["encabezado_titulo"] : null), "html", null, true);
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
    }

    // line 20
    public function block_styles($context, array $blocks = array())
    {
        // line 21
        echo "
        ";
    }

    // line 24
    public function block_javascriptsIncludes($context, array $blocks = array())
    {
        echo " 
            ";
        // line 25
        $this->loadTemplate("ThemeAplicativoBundle:Default:jquery.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 25)->display($context);
        echo " \t   
        ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
        ";
    }

    // line 31
    public function block_jquery($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    // line 51
    public function block_top($context, array $blocks = array())
    {
        // line 52
        echo "                    ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:top.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 52)->display($context);
        // line 53
        echo "                ";
    }

    // line 55
    public function block_barraHerramientas($context, array $blocks = array())
    {
        echo "                
                ";
    }

    // line 60
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                            ";
        // line 61
        $this->displayBlock('submenus', $context, $blocks);
        // line 82
        echo "                            ";
    }

    // line 61
    public function block_submenus($context, array $blocks = array())
    {
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
    }

    // line 88
    public function block_cuerpo($context, array $blocks = array())
    {
        echo " 

                ";
    }

    // line 97
    public function block_footer($context, array $blocks = array())
    {
        // line 98
        echo "                ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:footer.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 98)->display($context);
        echo " 
            ";
    }

    // line 104
    public function block_javascriptsIncludesCustom($context, array $blocks = array())
    {
        // line 105
        echo "            ";
        $this->loadTemplate("ThemeAplicativoBundle:Default:javascript-standard-gobierno.html.twig", "ThemeAplicativoBundle:Default:base.html.twig", 105)->display($context);
        echo " 
        ";
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
        return array (  267 => 105,  264 => 104,  257 => 98,  254 => 97,  246 => 88,  223 => 62,  220 => 61,  216 => 82,  214 => 61,  209 => 60,  202 => 55,  198 => 53,  195 => 52,  192 => 51,  188 => 32,  185 => 31,  178 => 28,  172 => 25,  167 => 24,  162 => 21,  159 => 20,  152 => 107,  150 => 104,  144 => 100,  142 => 97,  137 => 94,  135 => 93,  130 => 90,  128 => 88,  124 => 86,  119 => 83,  117 => 60,  112 => 57,  110 => 55,  107 => 54,  105 => 51,  85 => 33,  83 => 31,  79 => 29,  77 => 28,  73 => 26,  71 => 24,  68 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ThemeAplicativoBundle:Default:base.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/base.html.twig");
    }
}
