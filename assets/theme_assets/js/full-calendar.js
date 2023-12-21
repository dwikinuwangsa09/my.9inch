(function ($) {


  document.addEventListener("DOMContentLoaded", function () {
    var fullCalendar = document.getElementById("full-calendar");
    if (fullCalendar) {
      var calendar = new FullCalendar.Calendar(fullCalendar, {
        googleCalendarApiKey: 'AIzaSyBv81Y3Uzkye75xjxGvHsO3o-pIDYc2QAU',
        headerToolbar: {
          left: "today,prev,title,next",
          right: "timeGridWeek,dayGridMonth",
        },
        listDayFormat: true,
        listDayAltFormat: true,
        eventSources: [
          {
            googleCalendarId: 'c_c73aa1c9ec0a311ca0a70891fa3ff6e86a90620e5611293fe1536203d348e1bf@group.calendar.google.com',
            className: "warning",

          },
          {
            googleCalendarId: 'id.indonesian#holiday@group.v.calendar.google.com',
            className: "success",
          }
        ],
          contentHeight: 800,

        initialView: "listMonth",

      });

    
      calendar.render();
    }
  });
  
})(jQuery);
