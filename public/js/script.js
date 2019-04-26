//inscription
$('#inscription').submit(function (e) {

    e.preventDefault();
    //$('.comments').empty();
    var postdata = $('#inscription').serialize();
    //console.log(postdata);

    $.ajax({
        type: 'POST',
        url: 'inscription',
        data: postdata,
        dataType: 'json',
        success: (result)=>{
        //console.log(result);
    if (result.isSuccess){
        swal("Félicitation", "Votre compte a été créé avec success connecté vous avec votre adresse : <strong>" + result.isSuccess.email +"</strong> pour vos opération.","success");
        $('#inscription')[0].reset();
    }
    else {
        if(result.errors)
        {
            $('#nom + .comments').html(result.errors.nom);
            $('#prenom + .comments').html(result.errors.prenom);
            $('#contact + .comments').html(result.errors.contact);
            $('#adresse + .comments').html(result.errors.adresse);
            $('#email + .comments').html(result.errors.email);
            $('#password + .comments').html(result.errors.password);
            $('#passwordC + .comments').html(result.errors.passwordC);
        }
    }
}
});


//connnexion
});$('#login-form').submit(function (e) {

    e.preventDefault();
    //$('.comments').empty();
    var postdata = $('#login-form').serialize();
    //console.log(postdata);

    $.ajax({
        type: 'POST',
        url: 'login',
        data: postdata,
        dataType: 'json',
        success: (result)=>{
        //console.log(result);
    if (result.isSuccess){
        window.location.href = '/';
    }
    else {
        if(result.errors)
        {
            $('#login + .comments').html(result.errors.login);
            $('#login_pass + .comments').html(result.errors.login_pass);
            $('#userpass').html(result.errors.userpass);

        }
    }
}
});
});