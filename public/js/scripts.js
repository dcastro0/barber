window.onload = function(){
    var input = document.querySelector('input[type="date"]');
    input.onchange = function(){
        var day = new Date(input.value).getUTCDay();
        if(day == 0){
            alert("Domingo não é permitido");
            input.value = '';
        }
    };
};