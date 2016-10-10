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
    events: [
      {
        title: "2016 Seminar \n AL Fire College, Tuscaloosa, AL. \n To register: contact@al-iasiu.com",
        start: new Date(2016, 11, 10),
        end: new Date(2016, 11, 10)
      },
      {
        title: 'General Business Meeting \n   10:00 am at Allstate Insurance, 2600 Corporate Dr. Ste. 240, Birmingham, AL',
        start: new Date(2016, 12, 08),
        end: new Date(2016, 12, 08)
      }
    ],
    eventMouseover: function (data, event, view) {

      tooltip = '<div class="tooltiptopicevent" style="width:auto;height:auto;background:#feb811;position:absolute;z-index:10001;padding:10px 10px 10px 10px ;  line-height: 200%;">' + 'title: ' + ': ' + data.title + '</br>' + 'start: ' + ': ' + data.start + '</div>';


      $("body").append(tooltip);
      $(this).mouseover(function (e) {
          $(this).css('z-index', 10000);
          $('.tooltiptopicevent').fadeIn('500');
          $('.tooltiptopicevent').fadeTo('10', 1.9);
      }).mousemove(function (e) {
          $('.tooltiptopicevent').css('top', e.pageY + 10);
          $('.tooltiptopicevent').css('left', e.pageX + 20);
      });


    },
    eventMouseout: function (data, event, view) {
        $(this).css('z-index', 8);

        $('.tooltiptopicevent').remove();

    }
  });
})