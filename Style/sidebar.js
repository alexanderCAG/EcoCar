
// SIDEBAR

var sidebarToggle = document.getElementsByClassName("sidebar-toggle");
var sidebar = document.getElementsByClassName("sidebar")[0];

var retract_sidebar = $(".icone_retract_sidebar");
var compteur_sidebar = 0;

sidebarToggle[0].addEventListener("click", sidebarCollapsed);

function sidebarCollapsed() {
    sidebar.classList.toggle("collapsed");

    if(compteur_sidebar%2 == 0){
        retract_sidebar.removeClass("bi-arrow-left-circle-fill");
        retract_sidebar.addClass("bi-arrow-right-circle-fill");
        compteur_sidebar++;
    }else{
        retract_sidebar.removeClass("bi-arrow-right-circle-fill");
        retract_sidebar.addClass("bi-arrow-left-circle-fill");
        compteur_sidebar++;
    }
  
}