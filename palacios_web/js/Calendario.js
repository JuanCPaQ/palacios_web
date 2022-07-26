window.onload = function(){
    $(document).ready(function(){
        $('#Calendarioweb').fullCalendar({
            header:{
                left:'today,prev,next',
                center:'title',
                right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
            },
            customButtons:{
                
            },
            dayClick:function(date,jsEvent,view){
                alert("Valor seleccionado: "+date.format());
                alert("Vista actual"+view.name);
                $(this).css('background-color','red');
                $("#exampleModal").modal();
            },
            events:[
                {
                    title:'Evento 1',
                    start:'2021-05-21',
                    end:'2021-05-21',
                },
                {
                    title:'Evento 2',
                    start:'2021-05-22T12:30:00',
                    allDay:false
                }
            ]
        });
    });
}