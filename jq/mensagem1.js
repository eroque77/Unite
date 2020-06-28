        /*
    FUNÇÃO DE MENSAGEM. MOSTRA UMA MENSAGEM DE AVISO NA TELA DEPOIS DE ALGUM PROCESSAMENTO
    **/
    function mensagem1(mensagem, tempo, cor, corbotao){
        // se houver outro alert desse sendo exibido, cancela essa requisição
        if($("#message1").is(":visible")){
        
        return false;
        }
        // se não setar o tempo, o padrão é 3 segundos
        if(!tempo){
        var tempo = 300;
        }
        // se não setar o tipo, o padrão é alert-info
        if(!tipo){
        var tipo = "info";
        }
        // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
        var cssMessage = "display: block; position: fixed; top: 40%; left: 35%; right: 35%; width: 30%; z-index: 9999;font-size:15px;";
        var cssInner = "margin: 0 auto; box-shadow: 1px 1px 5px black;";

        // monta o html da mensagem com Bootstrap
        var dialogo = "";
        dialogo += '<div id="message1" align="center" style="'+cssMessage+'">';
        dialogo += ' <div align="center" class="alert alert-dismissable" style="'+cssInner+'">';
        // dialogo += ' <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
        dialogo +=mensagem;

        //dialogo += '<br><br> <button type="submit" value="item" name="nm_alert" id="id_alert" class="btn additem btn-mini" style="background-color:"'+corbotao+'><i class="fa fa-check"></i> Ok</button>';
        dialogo += ' </div>';
        dialogo += '</div>';     

        // adiciona ao body a mensagem com o efeito de fade
        $("body").append(dialogo);
        $("#message1").hide();
        $("#message1").fadeIn(200);

        // contador de tempo para a mensagem sumir
        
        setTimeout(function() {
            $('#message1').fadeOut(200, function(){
            $(this).remove();
        });
        }, tempo); // milliseconds */

           //Cor personalizada no fundo do alert
           $('#message1').css('backgroundColor',cor);
         return 2;
    } 

    function mensagem2(mensagem, tempo, cor, corbotao){
        // se houver outro alert desse sendo exibido, cancela essa requisição
        if($("#message1").is(":visible")){
        
        return false;
        }
        // se não setar o tempo, o padrão é 3 segundos
        if(!tempo){
        var tempo = 300;
        }
        // se não setar o tipo, o padrão é alert-info
        if(!tipo){
        var tipo = "info";
        }
        // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
        var cssMessage = "display: block; position: fixed; top: 40%; left: 35%; right: 35%; width: 30%; z-index: 9999;font-size:15px;color:white";
        var cssInner = "margin: 0 auto; box-shadow: 1px 1px 5px black;";

        // monta o html da mensagem com Bootstrap
        var dialogo = "";
        dialogo += '<div id="message1" align="center" style="'+cssMessage+'">';
        dialogo += ' <div align="center" class="alert alert-dismissable" style="'+cssInner+'">';
        // dialogo += ' <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
        dialogo +=mensagem;

        //dialogo += '<br><br> <button type="submit" value="item" name="nm_alert" id="id_alert" class="btn additem btn-mini" style="background-color:"'+corbotao+'><i class="fa fa-check"></i> Ok</button>';
        dialogo += ' </div>';
        dialogo += '</div>';     

        // adiciona ao body a mensagem com o efeito de fade
        $("body").append(dialogo);
        $("#message1").hide();
        $("#message1").fadeIn(200);

        // contador de tempo para a mensagem sumir
        
        setTimeout(function() {
            $('#message1').fadeOut(200, function(){
            $(this).remove();
        });
        }, tempo); // milliseconds */

           //Cor personalizada no fundo do alert
           $('#message1').css('backgroundColor',cor);
         return 2;
    } 