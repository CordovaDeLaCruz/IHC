<div class="calendar col-xs-12">

    <div class="box_calendar col-xs-12 ">
        
         <div id='loading'>Cargando...</div>

          <div id='calendar'></div>
        
    </div>
</div>


<script>
    
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid', 'list', 'googleCalendar' ],

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
      },


editable: true,
disableDragging: true,
firstDay: 1,
weekends: true,
defaultEventMinutes:30,
monthNames: <?php echo json_encode($lang["calendar"]["month_array"]); ?>,
monthNameShort: <?php echo json_encode($lang["calendar"]["month_short"]); ?>,
dayNames: <?php echo json_encode($lang["calendar"]["day_names"]); ?>,
dayNamesShort: <?php echo json_encode($lang["calendar"]["day_short"]); ?>,
buttonText: {
today: <?php echo json_encode($lang["calendar"]["today"]); ?>,
month: <?php echo json_encode($lang["calendar"]["month"]); ?>,
list: <?php echo json_encode($lang["calendar"]["list"]); ?>,
week: <?php echo json_encode($lang["calendar"]["week"]); ?>,
day: <?php echo json_encode($lang["calendar"]["day"]); ?>

},
allDaySlot: false,
allDayText: 'Todo el dia',
axisFormat: 'H:mm',
      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
         locale: <?php echo json_encode($site['lang'])?>,
      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

      // US Holidays
      events: 'en.usa#holiday@group.v.calendar.google.com',

      eventClick: function(arg) {
        // opens events in a popup window
        window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

        arg.jsEvent.preventDefault() // don't navigate in main tab
      },

      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }

    });

    calendar.render();
  });

</script>