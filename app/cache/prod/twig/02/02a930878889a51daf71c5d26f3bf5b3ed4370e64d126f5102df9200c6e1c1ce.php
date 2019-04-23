<?php

/* ThemeAplicativoBundle:Default:footer.html.twig */
class __TwigTemplate_ed842128ba73f564ddbddae3c46fc457c19883c1e5c45a6b963f9d893fb4a9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"footer\">
    <div class=\"row-back-none\">
        <div class=\"div_left\" id=\"sociales\" style=\"width: 70%\">
            <p><a href=\"/index.php/web/content/view/full/117678\">RSS / SUSCRIPCIÓN A NOTICIAS</a></p>
            <ul class=\"inline footer-ul\">
                <li><a target=\"_blank\" href=\"http://www.twitter.com/GobSantaFe\"><i class=\"icon-footertwitter\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://www.facebook.com/GobSantaFe\"><i class=\"icon-footerfacebook\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://gplus.to/GobSantaFe\"><i class=\"icon-footerg\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://gobsantafe.tumblr.com/\"><i class=\"icon-footertumblr\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://www.youtube.com/GobSantaFe\"><i class=\"icon-footeryoutube\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://instagram.com/gobsantafe\"><i class=\"icon-footerinstagram\"></i></a></li>
                <li><a target=\"_blank\" href=\"https://es.foursquare.com/gobsantafe\"><i class=\"icon-footerfoursquare\"></i></a></li>
                <li><a target=\"_blank\" href=\"https://storify.com/GobSantaFe\"><i class=\"icon-footerstorify\"></i></a></li>
                <li><a target=\"_blank\" href=\"http://www.linkedin.com/company/gobierno-de-la-provincia-de-santa-fe\"><i class=\"icon-footerlinkedin\"></i></a></li>
            </ul>
        </div>
        <div class=\"div_left\" id=\"marca\" style=\"width: 30%\">
            <p><b>";
        // line 18
        echo (isset($context["pie_pagina_titulo"]) ? $context["pie_pagina_titulo"] : null);
        echo "</b></p>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_domicilio"]) ? $context["pie_pagina_domicilio"] : null), "html", null, true);
        echo "</p>
            <p>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_telefono"]) ? $context["pie_pagina_telefono"] : null), "html", null, true);
        echo "</p>
            <p><span class=\"cc\">c</span> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_copyright"]) ? $context["pie_pagina_copyright"] : null), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  46 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ThemeAplicativoBundle:Default:footer.html.twig", "/var/www/html/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/footer.html.twig");
    }
}
