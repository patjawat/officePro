


// $('.create-item').click(function (e) {
//     e.preventDefault();
//     var form = $(this).attr('href');
//     $.ajax({
//         type: "get",
//         url: form,
//         dataType: "json",
//         success: function (response) {
//             $('#main-modal').modal('show');
//             $('#main-modal-label').html(response.title);
//             $('.modal-body').html(response.content);
//             $('.modal-footer').html(response.footer);
//             $(".modal-dialog").removeClass('modal-sm');
//             $(".modal-dialog").addClass('modal-lg');
//             $('.modal-content').addClass('card-outline card-primary');
//         }
//     });
// });
// $("#w0").on('beforeSubmit', function (e) {
//     e.preventDefault(); // stopping submitting
//     var form = $(this).attr('href');
//     $.ajax({
//         type: "get",
//         url: form,
//         dataType: "json",
//         success: function (response) {
//             $('#main-modal').modal('show');
//             $('#main-modal-label').html(response.title);
//             $('.modal-body').html(response.content);
//             $('.modal-footer').html(response.footer);
//             $(".modal-dialog").removeClass('modal-sm');
//             $(".modal-dialog").addClass('modal-lg');
//             $('.modal-content').addClass('card-outline card-primary');
//         }
//     });
//     return false;
//   });
loadFormConfig();

function loadFormConfig(){
    $.ajax({
        type: "get",
        beforeSend: function(){
            $('.show-form').html('Loading');
        },
        url: "/financial/configs/create",
        dataType: "json",
        success: function (res) {
            $('.show-form').html(res.content);
        }
    });
}




  