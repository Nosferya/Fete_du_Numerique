// function pour afficher la div sur la photo de conférence 1,2,3
$("#open_conf1").click(function(){
  $("#slide_conf_1").fadeIn(1000,"linear");
});
$("#close_conf1").click(function(){
  $("#slide_conf_1").hide("slow");
});

$("#open_conf2").click(function(){
    $("#slide_conf_2").fadeIn(1000,"linear");
});
$("#close_expo_conf2").click(function(){
  $("#slide_conf_2").hide("slow");
});

$("#open_conf3").click(function(){
  $("#slide_conf_3").fadeIn(1000,"linear");
});
$("#close_expo_conf3").click(function(){
  $("#slide_conf_3").hide("slow");
});


//   $("open").click
//   (function()
//   {
//         $("figure div").each(function(){
//         fadeIn(1000,"linear");
//
// //   }
//   $('figure div').each(function(){
//
//   var elemH2 = $(this);
//
//   elemH2.replaceWith('<h3>' + elemH2.text() + '</h3>');
//
// });
// );


// function pour afficher la div surla photo des exposition1,2,3
  $("#open_expo1").click(function(){
    $("#slide_expo_1").fadeIn(1000,"linear");
  });
  $("#close_expo1").click(function(){
    $("#slide_expo_1").slideUp(1000,"linear");
});

$("#open_expo2").click(function(){
    $("#slide_expo_2").fadeIn(1000,"linear");
});
$("#close_expo2").click(function(){
  $("#slide_expo_2").fadeOut(1000,"linear");
});

$("#open_expo3").click(function(){
  $("#slide_expo_3").fadeIn(1000,"linear");
});
$("#close_expo3").click(function(){
  $("#slide_expo_3").fadeOut(1000,"linear");
});

// function pour afficher la div surla photo des animation 1,2,3
  $("#open_anim1").click(function(){
    $("#slide_anim_1").fadeIn(1000,"linear");
  });
  $("#close_anim1").click(function(){
    $("#slide_anim_1").fadeOut(1000,"linear");
});

$("#open_anim2").click(function(){
  $("#slide_anim_2").fadeIn(1000,"linear");
});
$("#close_anim2").click(function(){
  $("#slide_anim_2").fadeOut(1000,"linear");
});

$("#open_anim3").click(function(){
  $("#slide_anim_3").fadeIn(1000,"linear");
});
$("#close_anim3").click(function(){
  $("#slide_anim_3").fadeOut(1000,"linear");
});
