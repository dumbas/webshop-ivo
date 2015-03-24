$(document).ready(function() {

    var sendmsg = function() {
        var dt = new Date();
        if (dt.getMinutes() < 10) {
            var minutes = '0' + dt.getMinutes();
        } else {
            var minutes = dt.getMinutes();
        }
        var newstr =  dt.getHours() + ':' + minutes + ' / ' + $('#name').val() + ': ' + $('#input').val();
        
        $.ajax({
            url: 'ajax-demo-server.php',
            type: 'post',
            data: {
                str: newstr
            },
            success: function() {
                $('textarea').val($('textarea').val() + newstr + '\n');
                $('#input').val('').focus();
            }
        });
        return false;
    }

    $('#submit').on('click', function() {
        sendmsg();
    });
    $('#input').on('keydown', function(e) {
        if (e.keyCode == 13) {
            sendmsg();
            return false;
        }
    });

    setInterval(function() {
        $.ajax({
            url: 'ajax-demo-server.php',
            success: function(t) {
                $('textarea').val(t);
            }
        })
    }, 30000);
});