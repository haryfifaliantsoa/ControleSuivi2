//MODAL MANOKATRA BOUTON AJOUTER
var modalBtns = document.querySelectorAll(".modals-open");

modalBtns.forEach(function(btn){
    btn.onclick = function(){
        var modals = btn.getAttribute("data-modal");

        document.getElementById(modals).style.display="block";
    };
});

var closeBtns = document.querySelectorAll(".modals-close");

closeBtns.forEach(function(btn){
    btn.onclick = function(){
        var modals = (btn.closest(".modals_bg").style.display = "none");        
    };
});


window.onclick = function(e){
    if (e.target.className === "modals_bg"){
        e.target.style.display = "none";
    }    
};
