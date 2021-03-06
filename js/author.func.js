function _(id){
    return document.getElementById(id);
}

function submitForm(){
    _("contact-submit").disabled = true;
    _("status").innerHTML = 'Veuillez patienter...';
    var formdata = new FormData();
    formdata.append("name", _("name").value);
    formdata.append("email", _("email").value);
    formdata.append("subject", _("subject").value);
    formdata.append("message", _("message").value);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "controllers/author.controller.php");

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            if(ajax.responseText == "success"){
                _("contact-form").innerHTML = '<br/><br/><br/><h2>Merci ' + _("name").value +', Votre message a bien été envoyé.</h2>';
            }else{
                _("status").innerHTML = ajax.responseText;
                _("contact-submit").disabled = false;
            }
        }
    }

    ajax.send(formdata);

}
