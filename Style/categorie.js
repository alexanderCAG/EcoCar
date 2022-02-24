
jQuery(document).ready(function(){
    

});

var cpt_cate_side1 = 0;
function cate_side1(){
    if(cpt_cate_side1%2==0){
        $(".categorie1_side").hide();
        cpt_cate_side1++;
    }else{
        $(".categorie1_side").show();
        cpt_cate_side1++;
    }
}

var cpt_cate_side2 = 0;
function cate_side2(){
    if(cpt_cate_side2%2==0){
        $(".categorie2_side").hide();
        cpt_cate_side2++;
    }else{
        $(".categorie2_side").show();
        cpt_cate_side2++;
    }
}

var cpt_cate_side3 = 0;
function cate_side3(){
    if(cpt_cate_side3%2==0){
        $(".categorie3_side").hide();
        cpt_cate_side3++;
    }else{
        $(".categorie3_side").show();
        cpt_cate_side3++;
    }
}