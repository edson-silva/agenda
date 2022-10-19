(function(win,doc){
    'use strict';

    const urlRoot = 'http://localhost:8000/';

    if(doc.querySelector('.calendar')){
        doc.addEventListener('DOMContentLoaded', function() {
            let calendarEl = doc.querySelector('.calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'listWeek',
              locale:'pt-br',
              events: urlRoot+'admin/agenda/eventos',
              eventDidMount: function(info) {
                if (info.event.extendedProps.status === 'Finalizado') {                          
                  info.el.style.backgroundColor = 'rgb(195, 230, 203)';                              
                  var dotEl = info.el.getElementsByClassName('fc-event-dot')[0];
                  if (dotEl) {
                    dotEl.style.backgroundColor = 'white';
                  }
                }
              },
              eventClick: function(info) {
                let idEvent = info.event.id;
                win.location.href = urlRoot+'admin/agenda/eventos/deletar/'+idEvent;          
              }
            });
            calendar.render();
          });
    }

})(window,document);
