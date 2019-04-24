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
            'css' => [$this, 'block_css'],
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
        echo "
 ";
        // line 3
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "
  ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "has", [0 => "licenciaForm_message"], "method")) {
            // line 11
            echo "  <div class=\"alert alert-success\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "licenciaForm_message"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </div>
  ";
        }
        // line 17
        echo "
<div class=\"row\"></div>

";
        // line 20
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 23
        echo " 

";
        // line 25
        $this->displayBlock('cardHeader', $context, $blocks);
        // line 36
        echo "
<div class=\"row form\">
  <div class=\"col-lg-12\">
    <div class=\"card bg-light mb-12\">
      ";
        // line 40
        $this->displayBlock('cardBody', $context, $blocks);
        // line 345
        echo "    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo "                 
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
                  rel=\"stylesheet\">

    <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_breadcrumb($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        $context["breadoption"] = ["Inicio" => "path_home", "Detalle de
Licencia Generada" => "#"];
        // line 22
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_cardHeader($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardHeader"));

        echo " 
  ";
        // line 26
        if (((isset($context["urlBoletaPago"]) || array_key_exists("urlBoletaPago", $context)) &&  !twig_test_empty(        // line 27
(isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago"))))) {
            // line 28
            echo "    <div class=\"row elevencol\">      
       <button  onclick=\"imprimirBoletaPago('";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago")), "html", null, true);
            echo "')\" class=\"btn float-right\">
          <i class=\"material-icons\" style=\"font-size: 30px\">print</i>
      </button>
    </div>
     <div class=\"row\"></div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_cardBody($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardBody"));

        // line 41
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
        // line 54
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
        // line 68
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
        // line 82
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
        // line 96
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
        // line 119
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
        // line 135
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
        // line 147
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
        // line 159
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
        // line 174
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
        // line 190
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
        // line 202
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
        // line 210
        if (($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "sexo", []) == "m")) {
            // line 211
            echo "                  <input
                    type=\"text\"
                    id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                    name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                    readonly=\"readonly\"
                    value=\"Masculino\"
                  />
                ";
        } else {
            // line 219
            echo "                   <input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_sexo\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][sexo]\"
                  readonly=\"readonly\"
                  value=\"Femenino\"
                  />
                ";
        }
        // line 227
        echo "              </div>
              <div>
                <label >Jubilado </label>
                <div
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubilado\"
                  readonly=\"readonly\"
                >
                  
                 ";
        // line 235
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
            // line 245
            echo "                    <input
                          type=\"text\"
                          id=\"mprod_licenciacypbundle_licencia_readOnly_persona_jubiladoNO\"
                          name=\"mprod_licenciacypbundle_licencia_readOnly[persona][jubiladoNO]\"
                          readonly=\"readonly\"
                          value=\"NO\"
                          />
                  ";
        }
        // line 253
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
        // line 265
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
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "email", []), "html", null, true);
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
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "provincia", []), "html", null, true);
        echo "\"
                />
              </div>
               ";
        // line 295
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidad", []))) {
            echo "      
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
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidad", []), "html", null, true);
            echo "\"
                />
              </div>
              ";
        }
        // line 312
        echo "             
              ";
        // line 313
        if (((null === $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidad", [])) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidadOtraProvincia", [])))) {
            // line 314
            echo "              <div>
                <label
                  for=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  >Localidad Otra Provincia</label
                ><input
                  type=\"text\"
                  id=\"mprod_licenciacypbundle_licencia_readOnly_persona_localidadOtraProvincia\"
                  name=\"mprod_licenciacypbundle_licencia_readOnly[persona][localidadOtraProvincia]\"
                  readonly=\"readonly\"
                  value=\"";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "persona", []), "localidadOtraProvincia", []), "html", null, true);
            echo "\"
                />
              </div>
              ";
        }
        // line 327
        echo "            </div>
          </div>         
</form>

      ";
        // line 331
        if (((isset($context["readOnly"]) || array_key_exists("readOnly", $context)) && (isset($context["readOnly"]) ? $context["readOnly"] : $this->getContext($context, "readOnly")))) {
            // line 332
            echo "        ";
            if ((isset($context["comprobante"]) || array_key_exists("comprobante", $context))) {
                // line 333
                echo "        <div class=\"row form\">
          <label>Comprobante :</label> ";
                // line 334
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comprobante"]) ? $context["comprobante"] : $this->getContext($context, "comprobante")), "id", []), "html", null, true);
                echo "
          <label>Codigo Barra :</label>";
                // line 335
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comprobante"]) ? $context["comprobante"] : $this->getContext($context, "comprobante")), "numeroCodigoBarra", []), "html", null, true);
                echo " ( ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["comprobante"]) ? $context["comprobante"] : $this->getContext($context, "comprobante")), "numeroCodigoBarra", [])), "html", null, true);
                echo " )
          <div class=\"row\">
              <img width=\"50%\" src=\"";
                // line 337
                echo $this->env->getExtension('Markup\BarcodeBundle\Twig\Extension')->getBarcodeDataUri($this->getAttribute($this->getAttribute((isset($context["licencia"]) ? $context["licencia"] : $this->getContext($context, "licencia")), "comprobante", []), "numeroCodigoBarra", []), "invoice");
                echo "\">              
          </div>                          
        </div>
          
        ";
            }
            // line 342
            echo "      ";
        }
        // line 343
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 349
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 350
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script language=\"javascript\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/licencia.js"), "html", null, true);
        echo "\"></script>
<script language=\"javascript\">
 
\$(document).ready(function()
        {
            setTimeout(function(){ 
              window.open(\"";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["urlBoletaPago"]) ? $context["urlBoletaPago"] : $this->getContext($context, "urlBoletaPago")), "html", null, true);
        echo "\",'_blank')
            }, 3000);
        });
</script>
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
        return array (  608 => 358,  599 => 352,  594 => 350,  588 => 349,  580 => 343,  577 => 342,  569 => 337,  562 => 335,  558 => 334,  555 => 333,  552 => 332,  550 => 331,  544 => 327,  537 => 323,  526 => 314,  524 => 313,  521 => 312,  514 => 308,  498 => 295,  492 => 292,  476 => 279,  459 => 265,  445 => 253,  435 => 245,  422 => 235,  412 => 227,  402 => 219,  392 => 211,  390 => 210,  379 => 202,  364 => 190,  345 => 174,  327 => 159,  312 => 147,  297 => 135,  278 => 119,  252 => 96,  235 => 82,  218 => 68,  201 => 54,  186 => 41,  180 => 40,  166 => 29,  163 => 28,  161 => 27,  160 => 26,  152 => 25,  143 => 22,  134 => 20,  117 => 3,  106 => 345,  104 => 40,  98 => 36,  96 => 25,  92 => 23,  90 => 20,  85 => 17,  81 => 15,  72 => 13,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 3,  55 => 2,  22 => 1,);
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

 {% block css %}                 
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
                  rel=\"stylesheet\">

    <link rel=\"icon\" href=\"//www.santafe.gob.ar/assets/standard/images/favicon.ico\">
  {% endblock %}

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
{% endblock %} 

{% block cardHeader %} 
  {% if urlBoletaPago is defined and
        urlBoletaPago is not empty %}
    <div class=\"row elevencol\">      
       <button  onclick=\"imprimirBoletaPago('{{ urlBoletaPago }}')\" class=\"btn float-right\">
          <i class=\"material-icons\" style=\"font-size: 30px\">print</i>
      </button>
    </div>
     <div class=\"row\"></div>
  {% endif %}
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
               {% if licencia.persona.localidad is not null %}      
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
              {% endif %}
             
              {% if licencia.persona.localidad is null and licencia.persona.localidadOtraProvincia is not null %}
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
              {% endif %}
            </div>
          </div>         
</form>

      {% if readOnly is defined and readOnly %}
        {% if comprobante is defined  %}
        <div class=\"row form\">
          <label>Comprobante :</label> {{ comprobante.id }}
          <label>Codigo Barra :</label>{{ comprobante.numeroCodigoBarra }} ( {{ comprobante.numeroCodigoBarra |length }} )
          <div class=\"row\">
              <img width=\"50%\" src=\"{{ licencia.comprobante.numeroCodigoBarra |markup_barcode_data_uri('invoice')}}\">              
          </div>                          
        </div>
          
        {% endif %}
      {% endif %}

      {% endblock %}
    </div>
  </div>
</div>

{% endblock %} {% block javascripts %}
{{ parent() }}

<script language=\"javascript\" src=\"{{ asset('js/licencia.js') }}\"></script>
<script language=\"javascript\">
 
\$(document).ready(function()
        {
            setTimeout(function(){ 
              window.open(\"{{ urlBoletaPago }}\",'_blank')
            }, 3000);
        });
</script>
{% endblock %}
", "MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig", "/home/abrusut/Documentos/symfony/licenciaCyP/src/MProd/LicenciaCyPBundle/Resources/views/Licencia/licencia.generada.detail.html.twig");
    }
}
