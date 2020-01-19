$(function(){
    
    $("#formulario").on('submit', function(ev){
        ev.preventDefault();

        let ok = false;

        grecaptcha.ready(() => {

            grecaptcha.execute('6Ld0idAUAAAAAFjqrXLvjzfgu2PV9tjUstBopjwS', {action: 'homepage'}).then((token) => {

                $("#formulario").prepend("<input type='hidden' name='token' value='" + token + "'/>");
                $("#formulario").prepend("<input type='hidden' name='action' value='homepage'/>");
                
                ok = true;
            });

        });

        if(ok){
            $("#formulario").submit();
        }
    })
})
