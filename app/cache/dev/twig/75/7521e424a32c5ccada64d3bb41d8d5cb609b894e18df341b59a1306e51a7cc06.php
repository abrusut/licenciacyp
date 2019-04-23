<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ThemeAplicativoBundle:Default:footer.html.twig */
class __TwigTemplate_64e2fbe16279c72c86b5dab0e5dc2230daddff6993b8a5b4e348dabf8f7eb479 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:footer.html.twig"));

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
        echo (isset($context["pie_pagina_titulo"]) ? $context["pie_pagina_titulo"] : $this->getContext($context, "pie_pagina_titulo"));
        echo "</b></p>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_domicilio"]) ? $context["pie_pagina_domicilio"] : $this->getContext($context, "pie_pagina_domicilio")), "html", null, true);
        echo "</p>
            <p>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_telefono"]) ? $context["pie_pagina_telefono"] : $this->getContext($context, "pie_pagina_telefono")), "html", null, true);
        echo "</p>
            <p><span class=\"cc\">c</span> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["pie_pagina_copyright"]) ? $context["pie_pagina_copyright"] : $this->getContext($context, "pie_pagina_copyright")), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  64 => 21,  60 => 20,  56 => 19,  52 => 18,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
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
            <p><b>{{ pie_pagina_titulo  | raw }}</b></p>
            <p>{{ pie_pagina_domicilio }}</p>
            <p>{{ pie_pagina_telefono }}</p>
            <p><span class=\"cc\">c</span> {{ pie_pagina_copyright }}</p>
        </div>
    </div>
</div>", "ThemeAplicativoBundle:Default:footer.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/footer.html.twig");
    }
}
