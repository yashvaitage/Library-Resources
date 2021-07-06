var img = 0;
carousel();
function carousel(){
    var i;
    var x = document.getElementsByClassName('jsslider');
    for(i=0;i<x.length;i++){
        x[i].style.display = "none";
    }
    img++;
    if(img>x.length){
        img=1;
    }
    x[img-1].style.display = "block";
    setTimeout(carousel,2000);
}


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

/* ************************ Edit Profile ************************ */
$(document).ready(function(){

    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });
  
    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });
  
  });