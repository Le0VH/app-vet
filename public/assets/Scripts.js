jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});


$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});


$(document).ready(function() {
  $('#schedule-calendar').fullCalendar({
      header: {
          left: 'title',
      },
      events: [{
              title: 'Schedule 1',
              start: '2018-02-21'
          },
          {
              title: 'Schedule 2',
              start: '2018-02-11'
          },
          {
              title: 'Schedule 3',
              start: '2018-03-01'
          },
          {
              title: 'Schedule 4',
              start: '2018-03-12'
          }
      ],
      eventClick: function(event) {
          var modal = $("#schedule-edit");
          modal.modal();
      },
      dayClick: function(date, jsEvent, view) {
          $('#schedule-add').modal('show');
      }
  });
});