function LoadSts(type) {
    if (type === 1) {
        $('#pbar').show();
    } else {
        $('#pbar').hide();
    }
}

function alerta(type, mess) {
    Swal.fire({
        icon: (type == 1 ? 'success' : 'error'),
        text: mess,
    })
}

function JAlert(type, mess) {
    var typ;
    if (type === 1) {
        typ = 'success';
    } else if (type === 2) {
        typ = 'error';
    } else {
        typ = 'warning'
    }
    Swal.fire({
        icon             : typ,
        html             : '<b>' + mess + '</b>',
        confirmButtonText: "Tamam"
    })
}

function modPopup(id) {
    var dialogShown = localStorage.getItem('' + id + 'Shown');
    if (!dialogShown) {
        $(window).load(function () {
            $('#' + id + '').modal({
                fadeDuration: 250
            });
            localStorage.setItem('' + id + 'Shown', 1)
        });
    } else {
        $.modal.close();
    }
}

function modNotification(title, img, text) {
    Notification.requestPermission().then(function (result) {
        if (!("Notification" in window)) {
            alert("This browser does not support system notifications");
        } else if (Notification.permission === "granted") {
            var notification = new Notification(title, {
                body: text,
                icon: img
            });
        }
    });
}

function sendApp(frm) {
    $.ajax({
        type      : 'POST',
        url       : frm,
        data      : $('#' + frm + '').serialize(),
        beforeSend: function () {
            //alert($('#' + frm + '').serialize())
        },
        complete  : function () {
            //LoadSts(2)
        },
        success   : function (answer) {
            var d = JSON.parse(answer);
            if (d.s == '2') {
                alerta(2, d.m)
            } else if (d.s == '1') {
                alerta(1, d.m)
            }
        }
    })
}

function messToast(type, mess) {
    var typ = (type == 1 ? 'success' : 'error');
    Swal.fire({
        position         : 'top-start',
        icon             : '' + typ + '',
        title            : mess,
        showConfirmButton: false,
        timer            : 2500,
        toast            : true
    })
}

function mngGeneral(id) {
    $.ajax({
        type      : 'POST',
        url       : 'sendVehicle',
        dataType  : "json",
        data      : $("form[name='signupForm']")["serialize"](),
        beforeSend: function () {
            loaderVehicle(1)
        },
        complete  : function () {
            loaderVehicle(2)
        },
        success   : function (resp) {
            if (resp.s == 2) {
                JAlert(2, resp.m)
                localStorage.setItem('isQueried', 2)
            } else if (resp.s == 1) {
                $('#pChaseNo').text(resp.sasiNo);
                localStorage.setItem('Vehicle', JSON.stringify(resp));
            }
        }
    })
}
