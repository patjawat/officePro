<?php

use app\modules\mr\models\Room;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\Pjax;
$this->title = 'ระบบจองห้องประชุม';
?>
<?php Pjax::begin(['id' => 'room-container']);?>
<div class="row">
    <div class="col-md-3">
        <div class="sticky-top mb-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ห้องประชุม</h4>
                </div>
                <div class="card-body">
                    <!-- the events -->
                    <div id="external-events">
                        <?php foreach (Room::find()->all() as $room): ?>
                        <div class="external-event bg-<?=$room->class;?>" id="<?=$room->id;?>" name="<?=$room->name;?>"
                            dbclass="<?=$room->class?>">
                            <?=$room->name;?>
                        </div>
                        <?php endforeach;?>

                        <div class="checkbox">
                            <label for="drop-remove">
                                <input type="checkbox" id="drop-remove">
                                remove after drop
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">จัดการห้องประชุม</h3>
                </div>
                <div class="card-body">
                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                        <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                        <ul class="fc-color-picker" id="color-chooser">
                            <li><a class="text-primary" color="#007bff" href="#"><i class="fas fa-square"></i></a>
                            </li>
                            <li><a class="text-warning" color="#ffc107" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-success" color="#28a745" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-danger" color="#dc3545" href="#"><i class="fas fa-square"></i></a></li>
                            <li><a class="text-muted" color="#6c757d" href="#"><i class="fas fa-square"></i></a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <div class="input-group">
                        <input id="room-id" type="text" value="" class="form-control" hidden />
                        <input id="room-class" type="text" value="" class="form-control" hidden />
                        <input id="room-color" type="text" value="" class="form-control" hidden />
                    </div>
                    <div class="input-group">
                        <input id="new-event" type="text" class="form-control" placeholder="เพิ่มห้องประชุม..">

                        <div class="input-group-append">
                            <button id="add-new-event" type="button" class="btn btn-primary">เพิ่ม</button>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-body p-3">
                <!-- THE CALENDAR -->
                <?=edofre\fullcalendar\Fullcalendar::widget([
    'options' => [
        'id' => 'calendar',
        'language' => 'th',
    ],
    'clientOptions' => [
        'weekNumbers' => true,
        'selectable' => true,
        'selectable' => true,
        'selectHelper' => true,
        'editable' => true,
        'defaultView' => 'month',
        'eventResize' => new JsExpression("
                function(event, delta, revertFunc, jsEvent, ui, view) {
                    //ย่อขยายเวลา
                    console.log('eventResize'+event);
                    getUpdateEventDrop(event)
                }
        "),
        'select' => new JSExpression("function(start, end, allDay,view,date,calEvent) {
            if (view.name == 'day') return;
                view.calendar.gotoDate(date);
                view.calendar.changeView('agendaDay');
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
                console.log(start+' === '+end);
                console.log(view.name)
                if(view.name =='agendaDay'){
                    modalShow(start,end)
                }

        }
        "),
        'eventClick' => new JsExpression("
                function(event, delta, revertFunc, jsEvent, ui, view) {
                    // คลิก update ชื่อเรื่องกับเนื้อหา
                    // console.log('eventClick'+event);
                    update(event)
                }
        "),
        'eventDragStop' => new JsExpression("
            function(event, delta, revertFunc, jsEvent, ui, view) {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                // console.log('Seart : '+start+' End : '+end)
        }
        "),
        'eventDrop' => new JsExpression("
            function(event,dayDelta,minuteDelta,allDay,revertFunc) {
                    getUpdateEventDrop(event)
            }
        "),
        'eventmoveDates' => new JsExpression("
            function(event, delta, revertFunc, jsEvent, ui, view) {
                console.log('eventReceivexx'+event);
            }
        "),
    ],
    // 'events' => $events,
    'events' => Url::to(['/mr/events/jsoncalendar']),
]);
?>
            </div>
        </div>

    </div>
</div>
<?php
$js = <<< JS
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'));

    $('.external-event').click(function (e) {
        console.log($(this).attr('id'));
        var dbclass = $(this).attr('dbclass');
        $('#room-id').val($(this).attr('id'));
        $('#new-event').val($(this).attr('name'));
        $('#add-new-event').text('แก้ไข');
        $('#add-new-event').removeClass('btn-primary btn-warning').addClass('btn btn-'+dbclass)

    });


    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()

      //Save color
      currColor = $(this).attr('class')
      var res = $(this).attr('class').split("-");
      var color = $(this).attr('color');
      $('#add-new-event').removeClass('btn-primary btn-warning btn-warning btn-success btn-danger').addClass('btn btn-'+res[1])
      //Add color effect to button
    //   $('#add-new-event').css({
    //     'background-color': currColor,
    //     'border-color'    : currColor
    //   })
    console.log(color);
    $('#room-class').val(res[1]);
    $('#room-color').val(color);
    })


    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        // return
      }else{
          $.ajax({
              type: "post",
              url: "index.php?r=mr/room/add",
              data: {
            name:$('#new-event').val(),
              id:$('#room-id').val(),
              class:$('#room-class').val(),
              color:$('#room-color').val()
              },
              dataType: "json",
              success: function (response) {
                $.pjax.reload({container:"#room-container",url:'index.php?r=mr/events'});
                console.log('save')
              }
          });
      }
      $('#new-event').val('')
    })

    function update(event){
        var id = event.id;
        $.ajax({
        type: "get",
        url: "index.php?r=mr/events/update",
        data: {id:id},
        dataType: "json",
        success: function (response) {
          $('#main-modal').modal('show');
            $(".modal-dialog").removeClass('modal-lg modal-md modal-sm');
            $('.modal-content').addClass('card-outline card-primary');
            $(".modal-dialog").addClass('modal-lg');
            $('#main-modal-label').html(response.title);
            $('.modal-body').html(response.content);
            $('.modal-footer').html(response.footer);
        }
      });
    }

    function modalShow(start,end){
      $.ajax({
        type: "get",
        url: "index.php?r=mr/events/create",
        data: {start:start,end:end},
        dataType: "json",
        success: function (response) {
          $('#main-modal').modal('show');
            $(".modal-dialog").removeClass('modal-lg modal-md modal-sm');
            $('.modal-content').addClass('card-outline card-primary');
            $(".modal-dialog").addClass('modal-lg');
            $('#main-modal-label').html(response.title);
            $('.modal-body').html(response.content);
            $('.modal-footer').html(response.footer);
        }
      });
    }
    function getUpdateEventDrop(event){
        var id = event.id;
        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            $.ajax({
            type: "post",
            url: "index.php?r=mr/events/event-update",
            data: {
                id:id,
                start:start,
                end:end
                },
            dataType: "json",
            success: function (response) {

            }
        });
    // console.log(event)

    }

JS;
$this->registerJS($js)
?>
<?php pjax::end();?>