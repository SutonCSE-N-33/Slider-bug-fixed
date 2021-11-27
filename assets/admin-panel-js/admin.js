$(function () {
    // Cards Click JS Start
    $('.viewcard').on('click', function(){
        $('.viewBox').addClass('block'),
        $('.subBox').removeClass('block'),
        $('.earnBox').removeClass('block')
    });

    $('.subscribercard').on('click', function(){
        $('.subBox').addClass('block'),
        $('.viewBox').removeClass('block'),
        $('.earnBox').removeClass('block')
    });
    
    $('.earningcard').on('click', function(){
        $('.earnBox').addClass('block'),
        $('.subBox').removeClass('block'),
        $('.viewBox').removeClass('block')
    });
    // //Cards Click JS End

    // sidebar Click JS Start
    $('.dashboard').on('click', function(){
        $('#dashboard').removeClass('d-none'),
        $('.mychannel').addClass('d-none'),
        $('.messagebox').addClass('d-none'),
        $('.settingsbox').addClass('d-none')
    });

    $('.channel').on('click', function(){
        $('.mychannel').removeClass('d-none'),
        $('#dashboard').addClass('d-none'),
        $('.messagebox').addClass('d-none'),
        $('.settingsbox').addClass('d-none')
    });
    // //sidebar Click JS End

    // channel component click JS Start
    $('.home').on('click', function(){
        $('.homebox').removeClass('d-none'),
        $('.videobox').addClass('d-none'),
        $('.playlistbox').addClass('d-none'),
        $('.studiobox').addClass('d-none')
    });

    $('.videos').on('click', function(){
        $('.videobox').removeClass('d-none'),
        $('.homebox').addClass('d-none'),
        $('.playlistbox').addClass('d-none'),
        $('.studiobox').addClass('d-none')
    })
    // //channel component click JS End

    // login Signup switching JS Start
    $('.switchsignup').on('click', function(){
        $('.logincard').addClass('d-none'),
        $('.signupcard').removeClass('d-none')
    });

    $('.switchlogin').on('click', function(){
        $('.signupcard').addClass('d-none'),
        $('.logincard').removeClass('d-none')
    });

    // //login Signup switching JS End
});
