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

/* MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig */
class __TwigTemplate_859ea0ece15cb36f3354af0a99c126d902de3f3aace3d85bb0e661553c546e14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MProdLicenciaCyPBundle:Page:index.html.twig", "MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig", 1);
        $this->blocks = [
            'cuerpo' => [$this, 'block_cuerpo'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'cardHeader' => [$this, 'block_cardHeader'],
            'cardBody' => [$this, 'block_cardBody'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "MProdLicenciaCyPBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_cuerpo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "licenciaForm_message"], "method")) {
            // line 3
            echo "<div class=\"alert alert-success\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "licenciaForm_message"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 5
                echo "  ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\"></div>
";
        // line 10
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 13
        echo " ";
        $this->displayBlock('cardHeader', $context, $blocks);
        // line 25
        echo "
<div class=\"row form\">
  <div class=\"col-lg-12\">
    <div class=\"card bg-light mb-12\">
      ";
        // line 29
        $this->displayBlock('cardBody', $context, $blocks);
        // line 316
        echo "    </div>
  </div>
</div>
";
        // line 319
        if (((isset($context["urlBoletaPago"]) || array_key_exists("urlBoletaPago", $context)) &&  !twig_test_empty((isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago"))))) {
            // line 320
            echo "<div class=\"row elevencol\">
  <input
    style=\"float: right !important\"
    type=\"button\"
    value=\"Imprimir Boleta Pago\"
    onclick=\"imprimirBoletaPago('";
            // line 325
            echo twig_escape_filter($this->env, (isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago")), "html", null, true);
            echo "')\"
  />
  ";
        }
        // line 328
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        $context["breadoption"] = ["Inicio" => "path_home", "Detalle de
Licencia Generada" => "#"];
        // line 12
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_cardHeader($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardHeader"));

        echo " ";
        if (((isset($context["urlBoletaPago"]) || array_key_exists("urlBoletaPago", $context)) &&  !twig_test_empty(        // line 14
(isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago"))))) {
            // line 15
            echo "<div class=\"row elevencol\">
  <input
    style=\"float: right !important\"
    type=\"button\"
    value=\"Imprimir Boleta Pago\"
    onclick=\"imprimirBoletaPago('";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago")), "html", null, true);
            echo "')\"
  />
  ";
        }
        // line 23
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_cardBody($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardBody"));

        // line 30
        echo "     <form>
        <div id=\"mprod_licenciacypbundle_licencia_readOnly\" readonly=\"readonly\">
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_tipoLicencia\"
              
              >Tipo Licencia</label
            ><input
                  type=\"text\" readonly
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][telefono]\"
                  readonly=\"readonly\"
                  placeholder=\"3420000000\"
                  value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "tipoLicencia", []), "descripcion", []), "html", null, true);
        echo "\"
                />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              
              >Fecha emitida</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaEmitida]\"
              readonly=\"readonly\"
              required=\"required\"                            
              value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "fechaEmitida", []), "d/m/Y"), "html", null, true);
        echo "\"
            />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaDesde\"
              
              >Fecha desde</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaDesde\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaDesde]\"
              readonly=\"readonly\"
              required=\"required\"                            
              value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "fechaDesde", []), "d/m/Y"), "html", null, true);
        echo "\"
            />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              
              >Fecha Hasta</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaVencimiento\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaVencimiento]\"
              readonly=\"readonly\"
              required=\"required\"                                       
              value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "fechaVencimiento", []), "d/m/Y"), "html", null, true);
        echo "\"
            />
          </div>
          <div>
            <label >Persona</label>
            <div
              id=\"mprod_licenciacypbundle_licencia_readOnly_persona\"
              readonly=\"readonly\"
              disabled=\"disabled\"
            >              
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_nombre\"
                  
                  >Nombre</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_nombre\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][nombre]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"
                  value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "nombre", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_apellido\"
                  
                  >Apellido</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_apellido\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][apellido]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"
                  value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "apellido", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_fechaNacimiento\"
                  >Fecha de Nacimiento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_fechaNacimiento\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][fechaNacimiento]\"
                  readonly=\"readonly\"                  
                  value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "fechaNacimiento", []), "d/m/Y"), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_tipoDocumento\"
                  >Tipo Documento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_tipoDocumento.descripcion\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][tipoDocumento.descripcion]\"
                  readonly=\"readonly\"                  
                  value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "tipoDocumento", []), "tipo", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_numeroDocumento\"
                  
                  >Número de Documento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_numeroDocumento\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][numeroDocumento]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  placeholder=\"99999999\"
                  value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "numeroDocumento", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioCalle\"
                  
                  >Domicilio calle</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioCalle\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][domicilioCalle]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"                  
                  value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "domicilioCalle", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioNumero\"
                  >Domicilio numero</label
                ><input
                  type=\"number\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioNumero\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][domicilioNumero]\"
                  readonly=\"readonly\"
                  value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "domicilioNumero", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                  >Sexo</label
                >
                ";
        // line 199
        if (($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "sexo", []) == "m")) {
            // line 200
            echo "                  <input
                    type=\"text\"
                    id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                    name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                    readonly=\"readonly\"
                    value=\"Masculino\"
                  />
                ";
        } else {
            // line 208
            echo "                   <input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                  readonly=\"readonly\"
                  value=\"Femenino\"
                  />
                ";
        }
        // line 216
        echo "              </div>
              <div>
                <label >Jubilado </label>
                <div
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubilado\"
                  readonly=\"readonly\"
                >
                  
                 ";
        // line 224
        if (($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "jubilado", []) == true)) {
            echo "                
                      <input
                          type=\"text\"
                          id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubiladoSi\"
                          name=\"mprod_licenciacypbundle_licencia_readOnly[persona][jubiladoSi]\"
                          readonly=\"readonly\"
                          value=\"SI\"
                          />

                    ";
        } else {
            // line 234
            echo "                    <input
                          type=\"text\"
                          id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubiladoNO\"
                          name=\"mprod_licenciacypbundle_licencia_readOnly[persona][jubiladoNO]\"
                          readonly=\"readonly\"
                          value=\"NO\"
                          />
                  ";
        }
        // line 242
        echo "                </div>
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  >Teléfono</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][telefono]\"
                  readonly=\"readonly\"
                  placeholder=\"3420000000\"
                  value=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "telefono", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  
                  >Email</label
                ><input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "email", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidad\"
                  
                  >Localidad</label                
                >
                <input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidad", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_provincia\"
                  >Provincia</label
                > <input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "provincia", []), "html", null, true);
        echo "\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  >Localidad Otra Provincia</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][localidadOtraProvincia]\"
                  readonly=\"readonly\"
                  value=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidadOtraProvincia", []), "html", null, true);
        echo "\"
                />
              </div>
            </div>
          </div>
         
</form>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 329
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 330
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script language=\"javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/licencia.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 332,  534 => 330,  528 => 329,  513 => 308,  498 => 296,  482 => 283,  464 => 268,  447 => 254,  433 => 242,  423 => 234,  410 => 224,  400 => 216,  390 => 208,  380 => 200,  378 => 199,  367 => 191,  352 => 179,  333 => 163,  315 => 148,  300 => 136,  285 => 124,  266 => 108,  240 => 85,  223 => 71,  206 => 57,  189 => 43,  174 => 30,  168 => 29,  160 => 23,  154 => 20,  147 => 15,  145 => 14,  138 => 13,  129 => 12,  120 => 10,  112 => 328,  106 => 325,  99 => 320,  97 => 319,  92 => 316,  90 => 29,  84 => 25,  81 => 13,  79 => 10,  76 => 9,  72 => 7,  63 => 5,  59 => 4,  56 => 3,  54 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"MProdLicenciaCyPBundle:Page:index.html.twig\" %} {% block cuerpo %}
{% if app.session.flashBag.has('licenciaForm_message') %}
<div class=\"alert alert-success\">
  {% for msg in app.session.flashBag.get('licenciaForm_message') %}
  {{ msg }}
  {% endfor %}
</div>
{% endif %}
<div class=\"row\"></div>
{% block breadcrumb %} {% set breadoption = { 'Inicio': 'path_home', 'Detalle de
Licencia Generada': '#'} %}
{{ parent() }}
{% endblock %} {% block cardHeader %} {% if urlBoletaPago is defined and
urlBoletaPago is not empty %}
<div class=\"row elevencol\">
  <input
    style=\"float: right !important\"
    type=\"button\"
    value=\"Imprimir Boleta Pago\"
    onclick=\"imprimirBoletaPago('{{ urlBoletaPago }}')\"
  />
  {% endif %}
</div>
{% endblock %}

<div class=\"row form\">
  <div class=\"col-lg-12\">
    <div class=\"card bg-light mb-12\">
      {% block cardBody %}
     <form>
        <div id=\"mprod_licenciacypbundle_licencia_readOnly\" readonly=\"readonly\">
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_tipoLicencia\"
              
              >Tipo Licencia</label
            ><input
                  type=\"text\" readonly
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][telefono]\"
                  readonly=\"readonly\"
                  placeholder=\"3420000000\"
                  value=\"{{licencia.tipoLicencia.descripcion}}\"
                />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              
              >Fecha emitida</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaEmitida]\"
              readonly=\"readonly\"
              required=\"required\"                            
              value=\"{{licencia.fechaEmitida |date(\"d/m/Y\")}}\"
            />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaDesde\"
              
              >Fecha desde</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaDesde\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaDesde]\"
              readonly=\"readonly\"
              required=\"required\"                            
              value=\"{{licencia.fechaDesde |date(\"d/m/Y\")}}\"
            />
          </div>
          <div>
            <label
              for=\"mprod_licenciacypbundle_licencia_readOnly_fechaEmitida\"
              
              >Fecha Hasta</label
            ><input
              type=\"text\"
              id=\"mprod_licenciacypbundle_licencia_readOnly_fechaVencimiento\"
              name=\"mprod_licenciacypbundle_licencia_readOnly[fechaVencimiento]\"
              readonly=\"readonly\"
              required=\"required\"                                       
              value=\"{{licencia.fechaVencimiento |date(\"d/m/Y\")}}\"
            />
          </div>
          <div>
            <label >Persona</label>
            <div
              id=\"mprod_licenciacypbundle_licencia_readOnly_persona\"
              readonly=\"readonly\"
              disabled=\"disabled\"
            >              
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_nombre\"
                  
                  >Nombre</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_nombre\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][nombre]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"
                  value=\"{{licencia.persona.nombre}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_apellido\"
                  
                  >Apellido</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_apellido\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][apellido]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"
                  value=\"{{licencia.persona.apellido}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_fechaNacimiento\"
                  >Fecha de Nacimiento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_fechaNacimiento\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][fechaNacimiento]\"
                  readonly=\"readonly\"                  
                  value=\"{{licencia.persona.fechaNacimiento |date(\"d/m/Y\")}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_tipoDocumento\"
                  >Tipo Documento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_tipoDocumento.descripcion\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][tipoDocumento.descripcion]\"
                  readonly=\"readonly\"                  
                  value=\"{{licencia.persona.tipoDocumento.tipo}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_numeroDocumento\"
                  
                  >Número de Documento</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_numeroDocumento\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][numeroDocumento]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  placeholder=\"99999999\"
                  value=\"{{licencia.persona.numeroDocumento}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioCalle\"
                  
                  >Domicilio calle</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioCalle\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][domicilioCalle]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  maxlength=\"60\"
                  pattern=\".{3,}\"                  
                  value=\"{{licencia.persona.domicilioCalle}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioNumero\"
                  >Domicilio numero</label
                ><input
                  type=\"number\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_domicilioNumero\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][domicilioNumero]\"
                  readonly=\"readonly\"
                  value=\"{{licencia.persona.domicilioNumero}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                  >Sexo</label
                >
                {% if licencia.persona.sexo == 'm' %}
                  <input
                    type=\"text\"
                    id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                    name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                    readonly=\"readonly\"
                    value=\"Masculino\"
                  />
                {% else %}
                   <input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                  readonly=\"readonly\"
                  value=\"Femenino\"
                  />
                {% endif %}
              </div>
              <div>
                <label >Jubilado </label>
                <div
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubilado\"
                  readonly=\"readonly\"
                >
                  
                 {% if licencia.persona.jubilado == true %}                
                      <input
                          type=\"text\"
                          id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubiladoSi\"
                          name=\"mprod_licenciacypbundle_licencia_readOnly[persona][jubiladoSi]\"
                          readonly=\"readonly\"
                          value=\"SI\"
                          />

                    {% else %}
                    <input
                          type=\"text\"
                          id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubiladoNO\"
                          name=\"mprod_licenciacypbundle_licencia_readOnly[persona][jubiladoNO]\"
                          readonly=\"readonly\"
                          value=\"NO\"
                          />
                  {% endif %}
                </div>
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  >Teléfono</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_telefono\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][telefono]\"
                  readonly=\"readonly\"
                  placeholder=\"3420000000\"
                  value=\"{{licencia.persona.telefono}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  
                  >Email</label
                ><input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"{{licencia.persona.email}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidad\"
                  
                  >Localidad</label                
                >
                <input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"{{licencia.persona.localidad}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_provincia\"
                  >Provincia</label
                > <input
                  type=\"email\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_email\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][email]\"
                  readonly=\"readonly\"
                  required=\"required\"
                  value=\"{{licencia.persona.provincia}}\"
                />
              </div>
              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  >Localidad Otra Provincia</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][localidadOtraProvincia]\"
                  readonly=\"readonly\"
                  value=\"{{licencia.persona.localidadOtraProvincia}}\"
                />
              </div>
            </div>
          </div>
         
</form>
      {% endblock %}
    </div>
  </div>
</div>
{% if urlBoletaPago is defined and urlBoletaPago is not empty %}
<div class=\"row elevencol\">
  <input
    style=\"float: right !important\"
    type=\"button\"
    value=\"Imprimir Boleta Pago\"
    onclick=\"imprimirBoletaPago('{{ urlBoletaPago }}')\"
  />
  {% endif %}
</div>
{% endblock %} {% block javascripts %}
{{ parent() }}

<script language=\"javascript\" src=\"{{ asset('js/licencia.js') }}\"></script>

{% endblock %}
", "MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Licencia/licencia.generada.detail.html.twig");
    }
}
