$( document ).ready(function() {    
    $('.loading').hide();
    configureSteps();   
    
    // Cuando cambia la provincia saco el id y nombre y busco si es de santa fe
    $( "#mprod_licenciacypbundle_licencia_persona_provincia" ).change(function() {       
       var provinciaNombre = $("#mprod_licenciacypbundle_licencia_persona_provincia option:selected").text();
       var provinciaId = this.value;
       evaluarProvincia(provinciaId,provinciaNombre);
    });
    
});

function evaluarProvincia(provinciaId,provinciaNombre){    
    var parameters= {'provinciaId':provinciaId,'provinciaNombre':provinciaNombre};
    if(!isEmpty(provinciaNombre) && 
        !isEmpty(provinciaId) )
    {
        
        $.ajax({  
            url:        'provincia/findBy/'+ provinciaId + '/' + provinciaNombre ,  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data: JSON.stringify(parameters),               
            success: function(data, status) {     
                configurarSelectLocalidad(data.santaFe);
                configurarTipoLicencia(data);
                
            },  
            error : function(xhr, textStatus, errorThrown) {                                
                console.error(xhr,textStatus,errorThrown);
                
            }  
            });  
    }else{
        console.error("No me llega el id de provincia " +provinciaId +"  y la descripcion " +provinciaNombre);
    }
}

function configurarTipoLicencia(provincia){    
    var parameters= {'provincia':JSON.stringify(provincia)};
    if(!isEmpty(provincia))      
    {
        $.ajax({  
            url:        'provincia/findTiposLicenciaForProvincia',  
            type:       'POST',   
            dataType:   'json',  
            async:      true,  
            data: JSON.stringify(parameters),               
            success: function(data, status) {     
                console.log(data);
                actualizarTiposLicenciaDisponibles(data);
            },  
            error : function(xhr, textStatus, errorThrown) {                               
                console.error(xhr,textStatus,errorThrown);
            }  
        });  
    }else{
        console.error("No me llega tipoLicenciaId");
    }
}

function actualizarTiposLicenciaDisponibles(tiposLicencia){
    var newOptions = {
       
    };
    
    var select = $('#mprod_licenciacypbundle_licencia_tipoLicencia');
    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    // Borra todas las opciones menos la primera
    $('#mprod_licenciacypbundle_licencia_tipoLicencia').children('option:not(:first)').remove();

   
    $.each(tiposLicencia, function(val, text) { 
        if(text && !isEmpty(text['descripcion'])            
            && !isEmpty(text['id']) ){
                var id = text['id'];
                var descripcion = text['descripcion'] + " $"+text['arancel'];
                
                $('#mprod_licenciacypbundle_licencia_tipoLicencia')
                    .append($("<option></option>")
                    .attr("value",id)
                    .text(descripcion));
        }
    });
       
}
function configurarSelectLocalidad(isSantaFe){
    if(isSantaFe){    
        $( "#localidad").show();                                            
        $( "#mprod_licenciacypbundle_licencia_persona_localidad").attr('required', true);
        $( "#mprod_licenciacypbundle_licencia_persona_localidadOtraProvincia").attr('required', false);                        
        $( "#localidadOtraProvincia").hide();
    }else{     
        $( "#localidad").hide();      
        $("#mprod_licenciacypbundle_licencia_persona_localidad").attr('selectedIndex', '-1').find("option:selected").removeAttr("selected");                                             
        $( "#mprod_licenciacypbundle_licencia_persona_localidad").attr('required', false);
        $( "#mprod_licenciacypbundle_licencia_persona_localidadOtraProvincia").attr('required', true);
        $( "#localidadOtraProvincia").show();                                              
    }   
}

function hayDatosCargados(){    
    var result = false;
    var tipoDocumento = $("#mprod_licenciacypbundle_licencia_persona_tipoDocumento").val();
    var numeroDocumento = $("#mprod_licenciacypbundle_licencia_persona_numeroDocumento").val();
    var sexo = $("#mprod_licenciacypbundle_licencia_persona_sexo").val();
    var apellido = $("#mprod_licenciacypbundle_licencia_persona_nombre").val();
    var nombre = $("#mprod_licenciacypbundle_licencia_persona_apellido").val();

    if(!isEmpty(tipoDocumento) &&
        !isEmpty(numeroDocumento) &&
        !isEmpty(sexo) &&
        !isEmpty(apellido) &&
        !isEmpty(nombre) 
        ){
            result=true;
        }

    return result;
}

function configureSteps(){  
    if(!hayDatosCargados())  {
        step1();
    }else{
        step3();
    }
}
function step1()
{
    $('#divTerminosYCondiciones').show();
    $('#divBusquedaPersona').hide(); 
    $('#divFormularioLicencia').hide();    
    
    $('#divBusquedaPersona').addClass("disabledPanel");
    $('#divFormularioLicencia').addClass("disabledPanel");
}

function step2()
{
    $('#divBusquedaPersona').show();    
    $('#divBusquedaPersona').removeClass("disabledPanel");         
}

function step3()
{    
    $('#divTerminosYCondiciones').hide();
    $('#divBusquedaPersona').hide(); 
    $('#divFormularioLicencia').show();       
    $('#divFormularioLicencia').removeClass("disabledPanel"); 

    var provinciaId =  $('#mprod_licenciacypbundle_licencia_persona_provincia').val();
    var provinciaNombre = $('#mprod_licenciacypbundle_licencia_persona_provincia option[value='+provinciaId +']').text();
    evaluarProvincia(provinciaId,provinciaNombre);       
}

function imprimirBoletaPago(urlBoletaPago){
    if(!isEmpty(urlBoletaPago)){
        window.open(urlBoletaPago,'_blank'); 
    }
}

function buscarPersona(){    
    var tipoDocumento = $("#mprod_licenciacypbundle_licencia_persona_tipoDocumento").val();
    var numeroDocumento = $("#mprod_licenciacypbundle_licencia_persona_numeroDocumento").val();
    var sexo = $("#mprod_licenciacypbundle_licencia_persona_sexo").val();
    var parameters= {'tipoDocumento':tipoDocumento,'numeroDocumento':numeroDocumento,'sexo':sexo}

    if(!isEmpty(tipoDocumento) && 
        !isEmpty(numeroDocumento) &&
        !isEmpty(sexo)
        )
        {
            $.ajax({  
                url:        'persona/findBy/'+ tipoDocumento + '/' + numeroDocumento +'/'+ sexo ,  
                type:       'POST',   
                dataType:   'json',  
                async:      true,  
                data: JSON.stringify(parameters),               
                success: function(data, status) {  
                        busquedaPersonaEjecutada = 1;
                        step3();
                        if(data){
                            var persona=data;
                            bindValuesToPersona(persona);
                        }else{                            
                            clearValuesPersona();
                        }              
                },  
                error : function(xhr, textStatus, errorThrown) {                
                    alert('No se pudo recuperar los datos.');  
                    console.error(xhr,textStatus,errorThrown);
                }  
                });  
        }else{
            alert("Debe completar todos los campos para buscar");
        }
}
function clearValuesPersona(persona){
    $("#mprod_licenciacypbundle_licencia_persona_nombre").val("");
    $("#mprod_licenciacypbundle_licencia_persona_apellido").val("");
    $("#mprod_licenciacypbundle_licencia_persona_fechaNacimiento").val("");
    $("#mprod_licenciacypbundle_licencia_persona_domicilioCalle").val("");
    $("#mprod_licenciacypbundle_licencia_persona_domicilioNumero").val("");
    $("#mprod_licenciacypbundle_licencia_persona_telefono").val("");
    $("#mprod_licenciacypbundle_licencia_persona_email").val("");
    $("#mprod_licenciacypbundle_licencia_persona_id").val("");
    $('#mprod_licenciacypbundle_licencia_persona_localidad').prop('selectedIndex',0);
    $('#mprod_licenciacypbundle_licencia_persona_provincia').prop('selectedIndex',0);
    $("#mprod_licenciacypbundle_licencia_persona_localidadOtraProvincia").val("");
}

function bindValuesToPersona(persona){
    $("#mprod_licenciacypbundle_licencia_persona_nombre").val(persona['nombre']);
    $("#mprod_licenciacypbundle_licencia_persona_apellido").val(persona['apellido']);
    $("#mprod_licenciacypbundle_licencia_persona_fechaNacimiento").val(persona['fechaNacimiento']);
    $("#mprod_licenciacypbundle_licencia_persona_domicilioCalle").val(persona['domicilioCalle']);
    $("#mprod_licenciacypbundle_licencia_persona_domicilioNumero").val(persona['domicilioNumero']);    
    $("#mprod_licenciacypbundle_licencia_persona_telefono").val(persona['telefono']);
    $("#mprod_licenciacypbundle_licencia_persona_email").val(persona['email']);
    $("#mprod_licenciacypbundle_licencia_persona_id").val(persona['id']);

    var jubilado = 1;
    if(persona['jubilado']==true){
        jubilado =0;
    } 
    var idJubilado="mprod_licenciacypbundle_licencia_persona_jubilado_"+ jubilado;        
    $( "#"+idJubilado ).prop( "checked", true );

    if(persona && persona['localidad']){
        var localidadId = persona['localidad']['id'];
        $("#mprod_licenciacypbundle_licencia_persona_localidad").attr('selectedIndex', '-1').find("option:selected").removeAttr("selected");                                             
        $('#mprod_licenciacypbundle_licencia_persona_localidad option[value='+localidadId +']').attr('selected','selected');
        $('#mprod_licenciacypbundle_licencia_persona_localidad').trigger('change', true);
    }
    
    if(persona && persona['provincia']){
        var provinciaId = persona['provincia']['id'];
        var provinciaNombre = persona['provincia']['nombre'];
        $('#mprod_licenciacypbundle_licencia_persona_provincia option[value='+provinciaId +']').attr('selected','selected');

        configurarSelectLocalidad(persona['provincia']['santaFe']);
        evaluarProvincia(provinciaId,provinciaNombre);
    }

    
    $("#mprod_licenciacypbundle_licencia_persona_localidadOtraProvincia").val(persona['localidadOtraProvincia']);
}
