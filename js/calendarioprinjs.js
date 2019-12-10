
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
     locale:'es',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        
      },
      nowindicator:true,
      navLinks: true, // puedes hacer clic en los dias para navegar sus eventos
      businessHours: true, // muestra ciertas horas en los que se pueden programar eventos, 9-5 por default
      editable: false, //Permite arrastrar eventos
        selectable: false, //Permite seleccionar fechas
        
      events: [  //Insertar eventos aqui
          {
            url: '/myfeed.php',  //Los eventos pueden tener varios source, ver aqui https://fullcalendar.io/docs/event-model y https://fullcalendar.io/docs/event-source-object y https://fullcalendar.io/docs/events-json-feed
          },
        {
          title: 'Conferencia Ejemplo',
          start: '2019-12-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Presentacion Ejemplo',
          start: '2019-12-13T11:00:00',
          constraint: 'availableForMeeting',
        },
        {
          title: 'Conferencia Ejemplo 2',
          start: '2019-12-18',
          end: '2019-12-20'
        },
        {
          title: 'Fiesta',
          start: '2019-12-29T20:00:00'
        },

        // Muestra ciertas areas disponibles
        {
          groupId: 'availableForMeeting',
          start: '2019-12-11T10:00:00',
          end: '2019-12-11T16:00:00',
          rendering: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2019-12-13T10:00:00',
          end: '2019-12-13T16:00:00',
          rendering: 'background'
        },

        // Eventos no pueden ser programados en estas fechas
        {
          start: '2019-12-14',
          end: '2019-12-18',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        },
        {
          start: '2019-12-25',
          end: '2019-12-29',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });