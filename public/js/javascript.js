(function(win,doc){
    'use strict';

    if(doc.querySelector('.calendar')){
        doc.addEventListener('DOMContentLoaded', function() {
            let calendarEl = doc.querySelector('.calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'listWeek',
              locale:'pt-br',
              events: [
                {
                  title: 'Meeting',
                  start: '2022-10-12T14:30:00',
                  extendedProps: {
                    status: 'done'
                  },
                  borderColor: 'green'
                },
                {
                  title: 'Birthday Party',
                  start: '2022-10-13T07:00:00',
                  backgroundColor: 'green',
                  borderColor: 'rgb(133, 100, 4)'
                }
              ],
              eventDidMount: function(info) {
                if (info.event.extendedProps.status === 'done') {                          
                  info.el.style.backgroundColor = 'rgb(195, 230, 203)';
            
                  // Change color of dot marker
                  var dotEl = info.el.getElementsByClassName('fc-event-dot')[0];
                  if (dotEl) {
                    dotEl.style.backgroundColor = 'white';
                  }
                }
              }
            });
            calendar.render();
          });
    }

})(window,document);