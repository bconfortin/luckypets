$(function(){
    var www = 'http://localhost:81/luckypets/';
    //var www = 'http://31.220.53.123/luckypets/';

    // Remover a classe container nas resoluções abaixo de 993
    // Por Bruno Confortin
    if ($(".custom-container-sm-xs")) {
        doTheContainerThingy();

        $(window).resize(function() {
            doTheContainerThingy();
        });

        function decontainerization() {
            $(".custom-container-sm-xs").removeClass("container");
        }

        function containerization() {
            $(".custom-container-sm-xs").addClass("container");
        }

        function doTheContainerThingy() {
            var resizedWindowSize = $(window).width();
            if (resizedWindowSize < 993) {
                decontainerization();
            } else {
                containerization();
            }
        }
    }

    if ($(".segmented-control")) {
        // Baseado e modificado a partir de:
        // Bootstrap 3.3.0 Snippet by renswijnmalen
        // https://bootsnipp.com/snippets/vOk57
        $('div.segmented-control a').on('click', function(){
            $(this).siblings().each(function(i,e){
                $(e).removeClass('active');
            });
            $(this).addClass('active');
            $(this).find('input').prop('checked',true);
            return false;

        });
    }

    if ($("#toggleDevMenu")) {
        $("#toggleDevMenu").on("click", function(event){
            event.preventDefault();
            $("#sessionDesc").addClass("hidden");
            $("#devMenu").toggleClass("hidden");
        });
    }

    if ($("#toggleSessionDesc")) {
        $("#toggleSessionDesc").on("click", function(event){
            event.preventDefault();
            $("#devMenu").addClass("hidden");
            $("#sessionDesc").toggleClass("hidden");
        });
    }

    $(".btnSair").on("click", function(event){
        event.preventDefault();
        $.get("clear-session.php");
        location.href = www;
    });

    $('#loginTabs a[href="#tabUsuario"]').click(function(e){
        e.preventDefault();
        $("#modalLoginLabel").text("Login de usuário");
        $("#loginTabs a").addClass("ghost transparent");
        $(this).tab('show').removeClass("ghost transparent");
    });

    $('#loginTabs a[href="#tabPrestador"]').click(function(e){
        e.preventDefault();
        $("#modalLoginLabel").text("Login de prestador");
        $("#loginTabs a").addClass("ghost transparent");
        $(this).tab('show').removeClass("ghost transparent");
    });

    $("#formLocalizacao .btnLocalizacao").on("click", function(event){
        event.preventDefault();
        $("#formLocalizacao .btnLocalizacao").addClass("disabled");
        var estado = $("#formLocalizacao select[name='estado']").val();
        var cidade = $("#formLocalizacao select[name='cidade']").val();
        if (estado !== "" && cidade !== "") {
            $.post("http://localhost:81/luckypets/session-localizacao.php", {
                "estado": estado,
                "cidade": cidade
            }).done(function(data) {
                console.log("Deu tudo certo.");
                location.href = www;
            }).fail(function() {
                alert("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
                $("#formLocalizacao .btnLocalizacao").removeClass("disabled");
            });
        }
    });

    $("#formLocalizacaoLandingPage .btnLocalizacao").on("click", function(event){
        event.preventDefault();
        $("#formLocalizacaoLandingPage .btnLocalizacao").addClass("disabled");
        var estado = $("#formLocalizacaoLandingPage select[name='estado']").val();
        var cidade = $("#formLocalizacaoLandingPage select[name='cidade']").val();
        if (estado !== "" && cidade !== "") {
            $.post("http://localhost:81/luckypets/session-localizacao.php", {
                "estado": estado,
                "cidade": cidade
            }).done(function(data) {
                console.log("Deu tudo certo.");
                location.href = www;
            }).fail(function() {
                alert("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
                $("#formLocalizacaoLandingPage .btnLocalizacao").removeClass("disabled");
            });
        }
    });
});
