checkLogin();
function checkLogin() {
    var api_token = localStorage.getItem('api_token');
    var page = 'login';
    var body = $('body');
    body.attr('class', 'hold-transition login-page');
    if (api_token) {
        page = 'layout';
        body.attr('class', 'skin-blue sidebar-mini wysihtml5-supported');
    }

    $.get(admin_base_url + '/' + page, function (data) {
        $('#app-content').html(data);
    });
}

function openPage(e, page_name) {
    $.get(admin_base_url + '/' + page_name, function (data) {
        $('.sidebar-menu').find('li').removeClass('active');
        $(e).parent().addClass('active');
        $('.content-wrapper').html(data);
    });
}

function logout() {
    localStorage.removeItem('api_token');
    checkLogin();
}