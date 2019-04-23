<?php

/* MProdLicenciaCyPBundle:Security:login.html.twig */
class __TwigTemplate_2a7adad420babc093a48a8e2ba872b819b3fcff3b79379836c970cf6df2c9202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "    <fieldset>

        <div class=\"fourcol\">

        </div>
        <div class=\"onecol\"></div>
        <div  class=\"sevencol last \">

            <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" >
                ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "                    ";
            // line 15
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "
                <label for=\"username\">Usuario:</label>

                <input type=\"text\" id=\"username\"
                       name=\"_username\"
                       value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"
                       placeholder=\"Ingrese su email\" />
                <label for=\"password\">Contraseña:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />


                <div class=\"twelvecol\">
                    <input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" />
                    <label for=\"no_cerrar\">No cerrar sesión</label>
                </div>

                <input type=\"hidden\" name=\"_target_path\" value=\"path_home\" />

                <input type=\"submit\" name=\"login\" value=\"Acceder\" />
            </form>
        </div>

    </fieldset>
";
    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  58 => 19,  52 => 16,  49 => 15,  47 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MProdLicenciaCyPBundle:Security:login.html.twig", "/var/www/html/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Security/login.html.twig");
    }
}
