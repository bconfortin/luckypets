$(function(){
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
});
