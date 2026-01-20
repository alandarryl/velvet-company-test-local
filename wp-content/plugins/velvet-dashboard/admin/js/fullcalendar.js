document.addEventListener('DOMContentLoaded', function () {
  const calendarEl = document.getElementById('velvet-calendar');

  if (!calendarEl) return;

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'fr',
    height: 'auto',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: ''
    },
    events: [] // rien pour l'instant
  });

  calendar.render();
});
