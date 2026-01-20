document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('velvet-calendar');
    if (!el) return;

    const calendar = new FullCalendar.Calendar(el, {
        initialView: 'dayGridMonth'
    });

    calendar.render();
});
