<form action="<?=asset_url()?>index.php/horarioDisponible/insertar" method="post" id="formHorasDisponibles">
  <div class="content">
             <div class="row">
            <div class="col-md-offset-1 col-md-2" id="events" >
            <h2 >Horario</h2>
            <h4>Asigne sus horas disponible</h4>
            <div id="external-events">
             
             <div class='external-event'>Tiempo Disponible</div>
            
                    
              
              </div>
            </div>
            <div class="col-md-8" id="cal">
                <div class="full-cal-header">
                  
                  <div class="pull-right">
                    <div data-toggle="buttons-radio" class="btn-group">
                      <button class="btn btn-primary active" type="button"  id="change-view-week">Semana</button>
                    </div>
                  </div>

                  
                  <div class="clearfix"></div>
                </div>
                <div id='calendar'></div>
         
            </div>
        
        </div>
        <br>
  </div>
  <input type="text" hidden="true" id="horasDisponibles" name="horasDisponibles"/>
  <div class="form-group">
  <div class="col-sm-offset-8 col-sm-10">
  <button type="submit" class="btn btn-primary" onclick="submitCalendario()">Actualizar</button>
  </div>
</div>
</form>

<script>
        function submitCalendario(){
            var events = $('#calendar').fullCalendar('clientEvents');
            var eventsForCookie = [];
            $.each(events, function(index,value) {
                var event = new Object();
                event.diaSemana = value.start.getDay();
                event.inicio = value.start.getHours()+":"+value.start.getMinutes();
                event.fin = value.end.getHours()+":"+value.end.getMinutes();
            event.allDay = value.allDay
                eventsForCookie.push(event);
            });             
            $("#horasDisponibles").val(JSON.stringify(eventsForCookie));
            $("#formHorasDisponibles").submit();
        }
</script>

<script>
  var eventosGlobal = [];
  
  function formatoFecha(hora, diaSemana){
    var date = new Date("2014-02-03");
    return date.getUTCFullYear()+"-0"+(date.getUTCMonth()+1)+"-0"+(date.getUTCDate()+diaSemana-1)+'T'+hora;
  }
  function actualizarSemana(){
    $( document ).ready(function() {
      //alert('antes');
      var day = new Array();

      <?php $contador = 0;?>
      <?php 
        foreach ($horarioDisponible as $valor) { ?>
            var date = new Date(formatoFecha('<?php echo utf8_decode($valor->inicio) ?>',<?php echo utf8_decode($valor->dia) ?>));
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var lastView;
            var daySource = new Object();
            daySource.title = 'Tiempo Disponible'; // this should be string
            daySource.start = formatoFecha('<?php echo utf8_decode($valor->inicio) ?>',<?php echo utf8_decode($valor->dia) ?>); // this should be date object
            //alert(daySource.start);
            daySource.end = formatoFecha('<?php echo utf8_decode($valor->fin) ?>',<?php echo utf8_decode($valor->dia) ?>); // this should be date object
            
            daySource.allDay = false; // will make the time show
          day[<?php echo $contador; ?>] = daySource;
          <?php $contador = $contador + 1;?>
                                  
      <?php } ?>
      $('#calendar').fullCalendar('addEventSource', day);
      $('#calendar').fullCalendar('rerenderEvents');
    });
  }

  
    
</script>



