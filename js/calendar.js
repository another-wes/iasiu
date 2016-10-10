$.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
  
  // var date = new Date();
  // var d = date.getDate();
  // var m = date.getMonth();
  // var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: false,
    timezone: 'local',
    events: [
      {
        title: "2016 Seminar \n AL Fire College, Tuscaloosa, AL. \n To register: contact@al-iasiu.com",
        start: new Date(2016, 10, 10),
        end: new Date(2016, 10, 10)
      },
      {
        title: 'General Business Meeting \n   10:00 am at Allstate Insurance, 2600 Corporate Dr. Ste. 240, Birmingham, AL',
        start: new Date(2016, 11, 08),
        end: new Date(2016, 11, 08)
      }
    ]
  });
})