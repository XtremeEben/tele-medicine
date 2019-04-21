/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register:');
    });
    $('.error').removeClass('alert alert-danger').html('');

}
function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('TeleMedicine Meeting System');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

function loginAjax() {
    $.post("./service/login.php", $("#login-form").serializeArray(), function (data) {
        if (data == 1) {
            $('#loginModal').modal('hide');
            processLogin();
        } else {
            console.log(data);
            shakeModal();
        }
    });
}
function signupAjax() {
    $('#d_email').val($("#f_email").val());
    // var detail = [], reg = [];
    // detail = ;
    reg = $("#reg-form").serializeArray();
    // console.log($("#detail").serializeArray());
    // console.log(reg);
    // return 0;
    $.post("./service/register.1.php", $("#detail").serializeArray(), function (data1) {
        $.post("./service/register.php", reg, function (data2) {
            data2 = JSON.parse(data2);
            if (data2 == 'true') {
                processLogin();
            } else {
                shakeModall();
            }
        });
    });
}

function processLogin() {
    window.location.reload();
}

function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}
function shakeModall() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Error registering user, Please try again");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}
function logout() {
    $.get("../service/logout.php",
        function (data, textStatus, jqXHR) {
            window.location.reload();
        }
    );
    return;
}

