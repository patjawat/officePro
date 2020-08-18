function saveEmployee(){
    $("#form-employee").submit();
}

function loadDepartments(){
    var url = 'index.php?r=hr/department'
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
}