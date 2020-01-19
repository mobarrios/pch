$(function(){
    
    $("#formulario").on('submit', function(ev){
        ev.preventDefault();

        grecaptcha.ready(() => {

            grecaptcha.execute('6Ld0idAUAAAAAFjqrXLvjzfgu2PV9tjUstBopjwS', {action: 'homepage'}).then((token) => {

                $("#formulario").prepend("<input type='hidden' name='token' value='" + token + "'/>");
                $("#formulario").prepend("<input type='hidden' name='action' value='homepage'/>");
                

            });

            $("#formulario").submit();
        });

    })
})
