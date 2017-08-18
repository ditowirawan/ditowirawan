<!-- ini adalah header content -->
<div>
	<div class="row">
		<div class="col-md-9"><b>DASHBOARD</b></div>
		<div class="col-md-3">
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Dashboard Event</li>
			</ol>
		</div>
	</div>
</div>

<!-- Ini contents -->
<div>
	<section class="content">

		<div class="row">
			<!-- BAR CHART -->
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<b>INFORMASI JADWAL RAPAT</b>
					</div>
					<div class="box-body">
						<!-- THE CALENDAR -->
						<div id="calendar" ></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
						<b>LOKASI RAPAT TERPAKAI</b>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="barChart" style="height:460px"></canvas>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<b>PROGRES RAPAT BERDASARKAN JENIS</b>
					</div>
					<div class="box-body">
						<div id="chartContainer" style="height: 300px; width: 100%;"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<b>RUANG RAPAT TERSEDIA</b>
					</div>
					<div class="box-body">
						<!-- <div class="col-md-6"> -->
						<!-- <div class="box box-solid"> -->
						<!-- /.box-header -->

						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('assets/img/rapat1.jpg') ?>" alt="First slide" style="height: 300px; width: 600px">

									<div class="carousel-caption">

									</div>
								</div>
								<div class="item">
									<img src="<?php echo base_url('assets/img/rapat2.jpg') ?>" alt="First slide" style="height: 300px; width: 600px">

									<div class="carousel-caption">

									</div>
								</div>
								<div class="item">
									<img src="<?php echo base_url('assets/img/rapat3.jpeg') ?>" alt="First slide" style="height: 300px; width: 600px">

									<div class="carousel-caption">

									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="fa fa-angle-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="fa fa-angle-right"></span>
							</a>
						</div>

						<!-- /.box-body -->
						<!-- </div> -->
						<!-- /.box -->
						<!-- </div> -->
						<!-- /.col -->
					</div>
				</div>
			</div>
			
		</div>

	</section>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/chartjs/Chart.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="<?php echo base_url()?>assets/js/barChart.js"></script>




<script>
	$(function () {

    /* initialize the external events
    -----------------------------------------------------------------*/
    function ini_events(ele) {
    	ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
      };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
        	zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
      });

    });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
    -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear();
    $('#calendar').fullCalendar({
    	header: {
    		left: 'prev,next today',
    		center: 'title',
    		right: 'month,agendaWeek,agendaDay'
    	},
    	buttonText: {
    		today: 'today',
    		month: 'month',
    		week: 'week',
    		day: 'day'
    	},
      //Random default events
      events: [
      {
      	title: 'All Day Event',
      	start: new Date(y, m, 1),
          backgroundColor: "#f56954", //red
          borderColor: "#f56954" //red
      },
      {
      	title: 'Long Event',
      	start: new Date(y, m, d - 5),
      	end: new Date(y, m, d - 2),
          backgroundColor: "#f39c12", //yellow
          borderColor: "#f39c12" //yellow
      },
      {
      	title: 'Meeting',
      	start: new Date(y, m, d, 10, 30),
      	allDay: false,
          backgroundColor: "#0073b7", //Blue
          borderColor: "#0073b7" //Blue
      },
      {
      	title: 'Lunch',
      	start: new Date(y, m, d, 12, 0),
      	end: new Date(y, m, d, 14, 0),
      	allDay: false,
          backgroundColor: "#00c0ef", //Info (aqua)
          borderColor: "#00c0ef" //Info (aqua)
      },
      {
      	title: 'Birthday Party',
      	start: new Date(y, m, d + 1, 19, 0),
      	end: new Date(y, m, d + 1, 22, 30),
      	allDay: false,
          backgroundColor: "#00a65a", //Success (green)
          borderColor: "#00a65a" //Success (green)
      },
      {
      	title: 'Click for Google',
      	start: new Date(y, m, 28),
      	end: new Date(y, m, 29),
      	url: 'http://google.com/',
          backgroundColor: "#3c8dbc", //Primary (light-blue)
          borderColor: "#3c8dbc" //Primary (light-blue)
      }
      ],
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
      }

  }
});

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
    	e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
  });
    $("#add-new-event").click(function (e) {
    	e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
      	return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
  });
});
</script>


