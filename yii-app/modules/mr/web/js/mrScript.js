function saveMeetingRoom(){
        var form =  $('#events-form');
        console.log($("#events-title").val() );
        if(!$("#events-title").val()){
             return $("#events-title").select();
        }else if(!$('#room_id').val()){
          $('#room_id').select2('open');
        }else{
               $.ajax({
                    url: form.attr('action'),
                    type: 'post',
                    data: form.serialize(),
                    success: function (response) {
                         console.log(response);
                         if(response){
                              closeModal()
                         }else{
                              alert(response)
                         }
                    }
               });
          }

}