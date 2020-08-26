function abrir() {
    document.getElementById('popup').style.display = 'block';
}

function fechar() {
    document.getElementById('popup').style.display = 'none';
}

$(function() {
    // Parser para configurar a data para o formato do Brasil
    $.tablesorter.addParser({
        id: 'datetime',
        is: function(s) {
            return false;
        },
        format: function(s, table) {
            s = s.replace(/\-/g, "/");
            s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
            return $.tablesorter.formatFloat(new Date(s).getTime());
        },
        type: 'numeric'
    });

    $('.tablesorter').tablesorter({
        // Envia os cabeçalhos 
        headers: {
            // A sgunda coluna (começa do zero) 
            1: {
                // Desativa a ordenação para essa coluna 
                sorter: false
            },
            4: {
                // Ativa o parser de data na coluna 4 (começa do 0) 
                sorter: 'datetime'
            }
        },
        // Formato de data
        dateFormat: 'dd/mm/yyyy'
    });
});

function parseNumber(num) {
    return parseFloat(num.replace(/[^\d]/)) || 0;
}

var movePopUp = (function() {

    var startX;
    var startY;

    var currentPopUp = null;
    var currentWidth = 0;
    var currentHeight = 0;
    var currentLeft = 0;
    var currentTop = 0;
    var callMoveOnPopUp = null;
    var callMoveStopPopUp = null;

    var contentMove = '.popup .title';
    var move = false;

    var marginStop = 30;
    var maxWidth = window.innerWidth - marginStop;
    var maxHeight = window.innerHeight - marginStop;

    jQuery(contentMove).on('mousedown', function(e) {
        currentPopUp = this.parentNode.parentNode;
        currentLeft = parseNumber(currentPopUp.style.left);
        currentTop = parseNumber(currentPopUp.style.top);

        startX = e.clientX;
        startY = e.clientY;
        if (typeof(callMoveOnPopUp) == 'function')
            callMoveOnPopUp(currentPopUp);
        move = true;
    });

    jQuery(document).on('mouseup', function() {
        if (currentPopUp == null) return;
        if (typeof(callMoveStopPopUp) == 'function')
            callMoveStopPopUp(currentPopUp);
        currentPopUp = null;
        move = false;
    })

    jQuery(document).on('mousemove', function(e) {
        if (move == true) {
            var newX = currentLeft + e.clientX - startX;
            var newY = currentTop + e.clientY - startY;

            if (marginStop > e.clientX) return;
            if (marginStop > e.clientY) return;
            if (maxWidth < e.clientX) return;
            if (maxHeight < e.clientY) return;

            jQuery(currentPopUp).css({
                'left': newX,
                'top': newY,
            });
        }
    });

    return function(func1, func2) {
        callMoveOnPopUp = func1;
        callMoveStopPopUp = func2;
    }
})();