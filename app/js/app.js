$(document).ready(function(){

 $('.btn_menu').click(function(){
     $('.menu_opc_movil').toggleClass('traer_menu_opcion');
     $('.linea1').toggleClass('linea11');
     $('.linea2').toggleClass('linea22');
     $('.linea3').toggleClass('linea33');
 });
    
  
    $('#calendar').fullCalendar({
       locale: 'es'
    })
   
    $('#calendar').fullCalendar({
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      });
}); 

