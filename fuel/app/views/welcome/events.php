<link rel='stylesheet' type='text/css' href='./assets/js/fullcalendar/fullcalendar.css' />
<script type='text/javascript' src='./assets/js/fullcalendar/fullcalendar.js'></script>
<script>
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            // put your options and callbacks here
        })

    });
</script>
<div class="container-fluid">

<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff"><?php echo $data['events_heading'];?></h1>
    </div>
</div>

    <div class="row">
        <div class="container-fluid">
            <div id='calendar' class="text-danger"></div>
        </div>
    </div>
    <div class="
    row">
        <h4 style="color:lightslategrey "><?php echo $data['events_content'];?></h4>
    </div>


</div>