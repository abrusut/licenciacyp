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

/* ThemeAplicativoBundle:Default:jquery.html.twig */
class __TwigTemplate_7f4b2d83593d9e7bf325c395830fbf9e978c86d415eb4a7d5e133f6c197b5505 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ThemeAplicativoBundle:Default:jquery.html.twig"));

        // line 1
        echo "<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery-1.10.2.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery-ui.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery.ui.datepicker-es.js\"></script>

<script src=\"//www.santafe.gob.ar/assets/jquery/jquery.ui.touch-punch.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/standard/js/match-media.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ThemeAplicativoBundle:Default:jquery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery-1.10.2.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery-ui.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/jquery-ui/jquery-ui-1.10.3/js/jquery.ui.datepicker-es.js\"></script>

<script src=\"//www.santafe.gob.ar/assets/jquery/jquery.ui.touch-punch.min.js\"></script>
<script src=\"//www.santafe.gob.ar/assets/standard/js/match-media.js\"></script>

{#% javascripts 'bundles/themeaplicativo/js/jquery-1.10.2.min.js' 'bundles/themeaplicativo/js/jquery-ui.min.js' 'bundles/themeaplicativo/js/jquery.ui.touch-punch.min.js' 'bundles/themeaplicativo/js/jquery.ui.datepicker-es.js' %} <script src=\"{{
asset_url }}\"></script> {% endjavascripts %#}
", "ThemeAplicativoBundle:Default:jquery.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/vendor/stg/theme-bundle/STG/DEIM/Themes/Bundles/AplicativoBundle/Resources/views/Default/jquery.html.twig");
    }
}
