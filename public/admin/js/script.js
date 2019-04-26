//inscription
$('#localisation').submit((e)=>{
    e.preventDefault();
    $('.comments').empty();
    var postdata = $('#localisation').serialize();
    //console.log(postdata);
    $.ajax({
        type: 'POST',
        url: '',
        data: postdata,
        dataType: 'json',
        success: (result)=>{
        console.log(result);
        if (result.isSuccess){
            /*toastr["success"]("Are you the six fingered man?")
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }*/
            $('#table-localisation').append("<tr><td>"+result.isSuccess.id+"</td><td>"+result.isSuccess.libelle+"</td><td>"+result.isSuccess.ville+"</td><td>"+result.isSuccess.region+"</td><td><button type=\"reset\" class=\"btn btn-warning\"><i class=\"fa fa-trash\"></i> Effacer</button><button type=\"reset\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Effacer</button></td></tr>");
        $('#localisation')[0].reset();
    }
else {
        if(result.errors)
        {
            $('#Libelle + .comments').html(result.errors.libelle);
            $('#Ville + .comments').html(result.errors.ville);
            $('#Region + .comments').html(result.errors.region);

        }
    }
}
})});


$('#programmes').submit((e)=>{
    e.preventDefault();
$('.comments').empty();
var postdata = $('#programmes').serialize();
//console.log(postdata);
$.ajax({
    type: 'POST',
    url: '',
    data: postdata,
    dataType: 'json',
    success: (result)=>{
    console.log(result);
    if (result.isSuccess) {
        $('#table-programmes').append("<tr><td>"+result.isSuccess.id+"</td><td>"+result.isSuccess.libellePro+"</td><td>"+result.isSuccess.idLocalisation+"</td><td>"+result.isSuccess.region+"</td><td><button type=\"reset\" class=\"btn btn-warning\"><i class=\"fa fa-trash\"></i> Effacer</button><button type=\"reset\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Effacer</button></td></tr>");
        $('#programmes')[0].reset();
    }else
    {
        if (result.errors)
        {
            $('#libellePro + .comments').html(result.errors.libellePro);
            $('#idLocalisation + .comments').html(result.errors.idLocalisation);
        }
    }
    }
    })
})

$('#typeAppart').submit((e)=>{
    e.preventDefault();
$('.comments').empty();
console.log($('#typeAppart')[0]);
//var postdata = $('#typeAppart').serialize();
var postdata = new FormData($('#typeAppart')[0]);
//postdata.append()
//console.log(postdata);
$.ajax({
    type: 'POST',
    url: '',
    data: postdata,
    processData: false,
    contentType :false,
    success: (result)=>{
    console.log(result);
if (result.isSuccess) {
    $('#table-typeAppart').append("<tr><td>"+result.isSuccess.id+"</td><td>"+result.isSuccess.libelle+"</td><td><img width='100' src='"+result.isSuccess.representation+"'></td><td><button type=\"reset\" class=\"btn btn-warning\"><i class=\"fa fa-trash\"></i> Effacer</button><button type=\"reset\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Effacer</button></td></tr>");
    $('#typeAppart')[0].reset();
}else
{
    if (result.errors)
    {
        $('#libelle + .comments').html(result.errors.libelle);
        $('#representation + .comments').html(result.errors.representation);
    }
}
}
})
})


//appartement
$('#appartement').submit((e)=>{
    e.preventDefault();
$('.comments').empty();
console.log($('#appartement')[0]);
//var postdata = $('#typeAppart').serialize();
var postdata = new FormData($('#appartement')[0]);
//postdata.append()
//console.log(postdata);
$.ajax({
    type: 'POST',
    url: '',
    data: postdata,
    processData: false,
    contentType :false,
    success: (result)=>{
    console.log(result);
if (result.isSuccess) {
    //$('#table-appartement').append("<tr><td>"+result.isSuccess.id+"</td><td>"+result.isSuccess.libelle+"</td><td>"+result.isSuccess.superficie+"</td><td>"+result.isSuccess.piece+"</td><td>"+result.isSuccess.superficie+"</td><td>"+result.isSuccess.superficie+"</td><td>"+result.isSuccess.superficie+"</td><td><button type=\"reset\" class=\"btn btn-warning\"><i class=\"fa fa-trash\"></i> Modifier</button><button type=\"reset\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Effacer</button></td></tr>");
    window.location.reload();
    $('#appartement')[0].reset();
}else
{
    if (result.errors)
    {
        $('#libelle + .comments').html(result.errors.libelle);
        $('#superficie + .comments').html(result.errors.superficie);
        $('#piece + .comments').html(result.errors.piece);
        $('#idPrograme + .comments').html(result.errors.idPrograme);
        $('#idAppartement + .comments').html(result.errors.idAppartement);
        $('#image + .comments').html(result.errors.image);
        $('#prix + .comments').html(result.errors.prix);
    }
}
}
})
})