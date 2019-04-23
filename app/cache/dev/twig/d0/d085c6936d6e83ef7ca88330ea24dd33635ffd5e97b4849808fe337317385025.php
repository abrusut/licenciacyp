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

/* MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig */
class __TwigTemplate_cdc132d1e2a710fd7fa0a0bcce85b52c775adb8551637f32a3cdc33b32217bcf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'cuerpo' => [$this, 'block_cuerpo'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Emisi&oacute;n de Boletas Licencias Deportivas</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"copyright\" content=\"&copy;\" />
        <meta name=\"robot\" content=\"all\" />
        
 ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 25
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "      


    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "  <!-- css custom theme -->            

            <!-- assets fonts -->
            <link rel=\"stylesheet\" href=\"https://www.santafe.gob.ar/assets/standard/css/fonts.css\" type=\"text/css\">

            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
                  rel=\"stylesheet\">

        <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 26
        echo "</head>
 <body>
 ";
        // line 28
        if (((isset($context["impresion"]) || array_key_exists("impresion", $context)) && ((isset($context["impresion"]) ? $context["impresion"] : $this->getContext($context, "impresion")) == 0))) {
            // line 29
            echo "    <button onclick=\"printPDF()\" class=\"btn btn-primary float-right\"><i class=\"material-icons\">print</i></button>
";
        }
        // line 31
        echo "  <table width=\"685\"  align=\"center\"  >
  <tr>     
    <td width=\"20\" align=\"center\"></td>
  </tr>
  <tr>     
    <td height=\"190\" colspan=\"2\" align=\"center\">       
          <table border=\"0\"  width=\"100%\" height=\"210\">
            <tr> 
              <td width=\"100%\" align=\"center\" >           
                <table width=\"778\" height=\"649\" border=\"0\"  class=\"tabla\">              
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Ministerio de la Producci&oacute;n</strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Emisi&oacute;n de Boletas Licencias Deportivas </strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"2\" colspan=\"3\">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width=\"327\" height=\"21\"> 
                      <span class=\"Estilo9\"><strong>Solicitante:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "apellido", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "nombre", []), "html", null, true);
        echo "</span>
                    </td>
                    <td width=\"451\" colspan=\"2\" align=\"right\" >
                      <div align=\"left\" class=\"Estilo9\"> <span class=\"textAdmin\"><strong>Emisor:</strong> - </span></div>
                    </td>
                  </tr>
                  <tr>
                    <td height=\"15\"><span class=\"Estilo9\"><strong>Vencimiento:</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "fechaVencimiento", []), "Y-m-d H:i:s"), "html", null, true);
        echo " </span></td>
                    <td colspan=\"2\"> <span class=\"textAdmin Estilo9\"><strong>N&ordm; Boleta :</strong> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "id", []), "html", null, true);
        echo " </span> </td>
                  </tr>             
                  <tr>
                    <td height=\"19\" colspan=\"\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">DETALLE: ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "tipoLicencia", []), "descripcion", []), "html", null, true);
        echo "</div>
                    </div></td>
                    <td colspan=\"2\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">IMPORTE: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "tipoLicencia", []), "arancel", []), "html", null, true);
        echo "</div>
                    </div></td>
                  </tr>
                  <tr> 
                      <td height=\"187\" colspan=\"2\">                   
                        <div align=\"center\"> 
                        <!--img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('MProd\LicenciaCyPBundle\Twig\BarcodeTwigExtension')->getBarCodeGif($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", [])), "html", null, true);
        echo "\" width=\"568\" height=\"164\" border=\"0\">
                          <br -->                            
                            <img width=\"50%\" src=\"";
        // line 75
        echo $this->env->getExtension('Markup\BarcodeBundle\Twig\Extension')->getBarcodeDataUri($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", []), "invoice");
        echo "\">              
                        </div>

                      </td>
                    </tr>
                  <tr>
                    <td height=\"19\" colspan=\"3\">------------------------------------------------------------------------------------------------------------------<span class=\"Estilo7\">Para el Depositante</span></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Ministerio de la Producci&oacute;n</strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Emisi&oacute;n de Boletas Licencias Deportivas </strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"2\" colspan=\"3\">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width=\"327\" height=\"21\" > 
                    <span class=\"Estilo9\"><strong>Solicitante:</strong> ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "apellido", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "nombre", []), "html", null, true);
        echo "</span>
                    </td>
                    <td width=\"451\" colspan=\"2\" align=\"right\" >
                      <div align=\"left\" class=\"Estilo9\"> <span class=\"textAdmin\"><strong>Emisor:</strong> - </span></div>
                    </td>
                  </tr>
                  <tr>
                    <td height=\"15\"><span class=\"Estilo9\"><strong>Vencimiento:</strong> ";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "fechaVencimiento", []), "Y-m-d H:i:s"), "html", null, true);
        echo " </span></td>
                    <td colspan=\"2\"> <span class=\"textAdmin Estilo9\"><strong>N&ordm; Boleta :</strong> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "id", []), "html", null, true);
        echo " </span> </td>
                  </tr>             
                  <tr>
                    <td height=\"19\" colspan=\"\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">DETALLE: ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "tipoLicencia", []), "descripcion", []), "html", null, true);
        echo "</div>
                    </div></td>
                    <td colspan=\"2\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">IMPORTE: ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "tipoLicencia", []), "arancel", []), "html", null, true);
        echo "</div>
                    </div></td>
                  </tr>
                  <tr> 
                      <td height=\"187\" colspan=\"2\" width=\"100px\"> 
                        <div align=\"center\"> 
                           <img width=\"50%\" src=\"";
        // line 115
        echo $this->env->getExtension('Markup\BarcodeBundle\Twig\Extension')->getBarcodeDataUri($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", []), "invoice");
        echo "\">              

                        <!--img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('MProd\LicenciaCyPBundle\Twig\BarcodeTwigExtension')->getBarCodeGif($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", [])), "html", null, true);
        echo "\" width=\"568\" height=\"164\" border=\"0\"><br>
                            ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", []), "html", null, true);
        echo "
                        </div-->
                        
                        </td>
                    </tr>
                  <tr>
                    <td height=\"19\" colspan=\"3\">------------------------------------------------------------------------------------------------------------------<span class=\"Estilo7\">Para el Depositante</span></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
      </td>
  </tr>
</table>           

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
                integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
                integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
                crossorigin=\"anonymous\"></script>


    
    <script language = \"javascript\">
        function printPDF(){          
          var printWindow = window.open('', '', 'height=400,width=800');
          \$.get( \"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boleta_pago_imprimir", ["licenciaId" => $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "id", [])]), "html", null, true);
        echo "?impresion=1\", function( data ) {
              printWindow.document.write(data);
              printWindow.document.close();
              printWindow.print();
              printWindow.close();
          });
      }
 </script> 
<script language = \"javascript\"  src = \"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/utils.js"), "html", null, true);
        echo "\"/>              
 <script language = \"javascript\"  src = \"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/licencia.js"), "html", null, true);
        echo "\"/>              
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  306 => 163,  302 => 162,  291 => 154,  271 => 136,  265 => 135,  241 => 118,  237 => 117,  232 => 115,  223 => 109,  217 => 106,  210 => 102,  206 => 101,  194 => 94,  172 => 75,  167 => 73,  158 => 67,  152 => 64,  145 => 60,  141 => 59,  129 => 52,  106 => 31,  102 => 29,  100 => 28,  96 => 26,  90 => 25,  74 => 15,  68 => 14,  57 => 164,  55 => 135,  53 => 25,  51 => 14,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Emisi&oacute;n de Boletas Licencias Deportivas</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"copyright\" content=\"&copy;\" />
        <meta name=\"robot\" content=\"all\" />
        
 {% block css %}
  <!-- css custom theme -->            

            <!-- assets fonts -->
            <link rel=\"stylesheet\" href=\"https://www.santafe.gob.ar/assets/standard/css/fonts.css\" type=\"text/css\">

            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
                  rel=\"stylesheet\">

        <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">
   {% endblock %}
{% block cuerpo %}
</head>
 <body>
 {% if impresion is defined and impresion == 0 %}
    <button onclick=\"printPDF()\" class=\"btn btn-primary float-right\"><i class=\"material-icons\">print</i></button>
{% endif %}
  <table width=\"685\"  align=\"center\"  >
  <tr>     
    <td width=\"20\" align=\"center\"></td>
  </tr>
  <tr>     
    <td height=\"190\" colspan=\"2\" align=\"center\">       
          <table border=\"0\"  width=\"100%\" height=\"210\">
            <tr> 
              <td width=\"100%\" align=\"center\" >           
                <table width=\"778\" height=\"649\" border=\"0\"  class=\"tabla\">              
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Ministerio de la Producci&oacute;n</strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Emisi&oacute;n de Boletas Licencias Deportivas </strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"2\" colspan=\"3\">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width=\"327\" height=\"21\"> 
                      <span class=\"Estilo9\"><strong>Solicitante:</strong> {{licencia.persona.apellido}}, {{licencia.persona.nombre}}</span>
                    </td>
                    <td width=\"451\" colspan=\"2\" align=\"right\" >
                      <div align=\"left\" class=\"Estilo9\"> <span class=\"textAdmin\"><strong>Emisor:</strong> - </span></div>
                    </td>
                  </tr>
                  <tr>
                    <td height=\"15\"><span class=\"Estilo9\"><strong>Vencimiento:</strong> {{licencia.fechaVencimiento |date('Y-m-d H:i:s')}} </span></td>
                    <td colspan=\"2\"> <span class=\"textAdmin Estilo9\"><strong>N&ordm; Boleta :</strong> {{licencia.id}} </span> </td>
                  </tr>             
                  <tr>
                    <td height=\"19\" colspan=\"\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">DETALLE: {{licencia.tipoLicencia.descripcion}}</div>
                    </div></td>
                    <td colspan=\"2\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">IMPORTE: {{licencia.tipoLicencia.arancel}}</div>
                    </div></td>
                  </tr>
                  <tr> 
                      <td height=\"187\" colspan=\"2\">                   
                        <div align=\"center\"> 
                        <!--img src=\"{{ barcodeGif(licencia.comprobante.numeroCodigoBarra) }}\" width=\"568\" height=\"164\" border=\"0\">
                          <br -->                            
                            <img width=\"50%\" src=\"{{ licencia.comprobante.numeroCodigoBarra |markup_barcode_data_uri('invoice')}}\">              
                        </div>

                      </td>
                    </tr>
                  <tr>
                    <td height=\"19\" colspan=\"3\">------------------------------------------------------------------------------------------------------------------<span class=\"Estilo7\">Para el Depositante</span></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Ministerio de la Producci&oacute;n</strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"10\" colspan=\"3\"><div align=\"center\"><strong>Emisi&oacute;n de Boletas Licencias Deportivas </strong></div></td>
                  </tr>
                  <tr>
                    <td height=\"2\" colspan=\"3\">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width=\"327\" height=\"21\" > 
                    <span class=\"Estilo9\"><strong>Solicitante:</strong> {{licencia.persona.apellido}}, {{licencia.persona.nombre}}</span>
                    </td>
                    <td width=\"451\" colspan=\"2\" align=\"right\" >
                      <div align=\"left\" class=\"Estilo9\"> <span class=\"textAdmin\"><strong>Emisor:</strong> - </span></div>
                    </td>
                  </tr>
                  <tr>
                    <td height=\"15\"><span class=\"Estilo9\"><strong>Vencimiento:</strong> {{licencia.fechaVencimiento |date('Y-m-d H:i:s')}} </span></td>
                    <td colspan=\"2\"> <span class=\"textAdmin Estilo9\"><strong>N&ordm; Boleta :</strong> {{licencia.id}} </span> </td>
                  </tr>             
                  <tr>
                    <td height=\"19\" colspan=\"\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">DETALLE: {{licencia.tipoLicencia.descripcion}}</div>
                    </div></td>
                    <td colspan=\"2\" nowrap bordercolor=\"#000000\"><div align=\"center\" class=\"Estilo9\">
                      <div align=\"left\">IMPORTE: {{licencia.tipoLicencia.arancel}}</div>
                    </div></td>
                  </tr>
                  <tr> 
                      <td height=\"187\" colspan=\"2\" width=\"100px\"> 
                        <div align=\"center\"> 
                           <img width=\"50%\" src=\"{{ licencia.comprobante.numeroCodigoBarra |markup_barcode_data_uri('invoice')}}\">              

                        <!--img src=\"{{ barcodeGif(licencia.comprobante.numeroCodigoBarra) }}\" width=\"568\" height=\"164\" border=\"0\"><br>
                            {{licencia.comprobante.numeroCodigoBarra}}
                        </div-->
                        
                        </td>
                    </tr>
                  <tr>
                    <td height=\"19\" colspan=\"3\">------------------------------------------------------------------------------------------------------------------<span class=\"Estilo7\">Para el Depositante</span></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
      </td>
  </tr>
</table>           

{% endblock %}
{% block javascripts %}

       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                crossorigin=\"anonymous\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"
                integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"
                integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\"
                crossorigin=\"anonymous\"></script>


    
    <script language = \"javascript\">
        function printPDF(){          
          var printWindow = window.open('', '', 'height=400,width=800');
          \$.get( \"{{ path('boleta_pago_imprimir', {licenciaId: licencia.id}) }}?impresion=1\", function( data ) {
              printWindow.document.write(data);
              printWindow.document.close();
              printWindow.print();
              printWindow.close();
          });
      }
 </script> 
<script language = \"javascript\"  src = \"{{ asset('js/utils.js') }}\"/>              
 <script language = \"javascript\"  src = \"{{ asset('js/licencia.js') }}\"/>              
{% endblock %}      


    </body>
</html>", "MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Licencia/boleta.pago.html.twig");
    }
}
