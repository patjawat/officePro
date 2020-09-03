
$('.modal-show').click(function (e) {
  e.preventDefault();
  var url = $(this).attr('href');
  $.ajax({
      type: "get",
      url: url,
      dataType: "json",
      beforeSend: function(){
          beforLoadModal();
      },
      success: function (response) {
          $('#main-modal').modal('show');
          $('.modal-footer').show();
          $(".modal-dialog").removeClass('modal-lg modal-sm modal-md')
          $('.modal-content').addClass('card-outline card-primary');
          $(".modal-dialog").addClass('modal-lg');
          $('#main-modal-label').html(response.title);
          // $('.modal-header').html(response.title);
          $('.modal-body').html(response.content);
          $('.modal-footer').html(response.footer);
      }
  });
});
function SaveForm(){
  // $("#w0").on('beforeSubmit', function (e) {
    // e.preventDefault(); // stopping submitting
    var form = $('#w0').attr('href');
    $.ajax({
        type: "post",
        url: form,
        dataType: "json",
        success: function (response) {
            $('#main-modal').modal('show');
            $('#main-modal-label').html(response.title);
            $('.modal-body').html(response.content);
            $('.modal-footer').html(response.footer);
            $(".modal-dialog").removeClass('modal-sm');
            $(".modal-dialog").addClass('modal-lg');
            $('.modal-content').addClass('card-outline card-primary');
        }
    });
    return false;
  // });
}

function closeModal(){
    $('#main-modal').modal('toggle');
  }

  function beforLoadModal(){
    $('#main-modal-label').html('Loadding...');
    $(".modal-dialog").removeClass('modal-sm modal-md modal-lg');
    $(".modal-dialog").addClass('modal-sm');
    $('#main-modal').removeClass('fade');
    $('#main-modal').modal('show');
   
    $('.modal-body').html('<div class=" text-center fa-3x"><i class="fas fa-spinner fa-pulse"></i></div>');
}

function beforeSendData(){
  $(".modal-dialog").removeClass('modal-sm modal-md modal-lg');
  $(".modal-dialog").addClass('modal-sm');
  $('.modal-footer').hide();
  $('.modal-header').html('กำลังบันทึกข้อมูล...');
  $('.modal-body').html(
    '<div class="progress">'+
  '<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%"></div>'+
  '</div>');
}

function showModal(){
  $('#main-modal').modal('show');
  $('.modal-footer').show();
  $(".modal-dialog").removeClass('modal-lg modal-sm modal-md')
  $('.modal-content').addClass('card-outline card-primary');
  $(".modal-dialog").addClass('modal-lg');
  $('#main-modal-label').html('title');
  // $('.modal-header').html(response.title);
  $('.modal-body').html('hhh');
  $('.modal-footer').html('fff');
}
