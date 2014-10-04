    var eventsFromCalendar;
    $(document).ready(function() {
    
    
        /* initialize the external events
        -----------------------------------------------------------------*/
    
        $('#external-events div.external-event').each(function() {
        
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
            
        });
    
    
        /* initialize the calendar
        -----------------------------------------------------------------*/
        
        eventsFromCalendar = $('#calendar').fullCalendar(  {
            
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            columnFormat: 'dddd',
            events: function(start, end, timezone, callback) {
                console.log(end);
                console.log(start);
            },
            eventClick: function(event, element) {
                console.log(event);
                event.title = "CLICKED!";
                $('#calendar').fullCalendar('updateEvent', event);
            },
            dayNames : ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            hiddenDays: [ 0, 6 ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
                console.log(date);
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                console.log("hora inicio: "+date);
                var dateEnd = new Date(date);
                dateEnd.setHours(date.getHours()+2);
                copiedEventObject.end = dateEnd;
                console.log("hora fin: "+ dateEnd);

                copiedEventObject.allDay = false;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, false);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
        });


        

      /* Bootstrap styles
        -----------------------------------------------------------------*/
        $('.fc-header').hide();
        var currDate = $('#calendar').fullCalendar('getDate');
        $('#calender-current-day').html($.fullCalendar.formatDate(currDate, "dddd"));
        $('#calender-current-date').html($.fullCalendar.formatDate(currDate, "MMM yyyy"));
        $('#cal-prev').click(function(){
            currDate = $('#calendar').fullCalendar('getDate');
            $('#calendar').fullCalendar( 'prev' );
            $('#cal-current-day').html($.fullCalendar.formatDate(currDate, "dddd"));
            $('#cal-current-date').html($.fullCalendar.formatDate(currDate, "MMM yyyy"));
        });
        $('#cal-next').click(function(){
            $('#calendar').fullCalendar( 'next' );
            currDate = $('#calendar').fullCalendar('getDate');       
            $('#calender-current-day').html($.fullCalendar.formatDate(currDate, "dddd"));
            $('#calender-current-date').html($.fullCalendar.formatDate(currDate, "MMM yyyy"));
        });
        $('#change-view-month').click(function(){
            $('#calendar').fullCalendar('changeView', 'month');
        });
        $('#change-view-week').click(function(){
             $('#calendar').fullCalendar( 'changeView', 'agendaWeek');
        });
        $('#change-view-day').click(function(){
            $('#calendar').fullCalendar( 'changeView','agendaDay');
        });
    });