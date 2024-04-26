jQuery('#datetimepicker').datetimepicker({
    format: 'd.m.Y H:i',
    inline: true,
    lang: 'en'
});

$(function(){
    $('.modal').modal({
        show: false
    }).on('hidden.bs.modal', function(){
        $(this).find('video')[0].pause();
    });
});