/*       ****************************
         *         HEADER           *
         ****************************

*/


function changeX(x) {
      x.classList.toggle("change");
}

var y = 0;
    var bouton = document.getElementById("bouton");
    var mySidenav =  document.getElementById("mySidenav");

    bouton.addEventListener
    ("click", function()
      {
          if (y == 0)
          {
            y = 1;
            mySidenav.classList.add("animation-left");
            mySidenav.classList.remove("animation-right");
          }
          else
          {
            y = 0;
            mySidenav.classList.add("animation-right");
            mySidenav.classList.remove("animation-left");
          }
      }

  );

  /*       ****************************
           *        FIN HEADER        *
           ****************************/



  /*       ****************************
           *        CONNEXION        *
           ****************************/


  function showvis(checked) {
      if (checked === true)
        $('#exp').fadeOut(200);
        $('#adm').fadeOut(200);
        $('#vis').fadeIn(2000);
  }

  function showexp(checked) {
      if (checked === true)
        $('#vis').fadeOut(200);
        $('#adm').fadeOut(200);
        $('#exp').fadeIn(2000);
  }

  function showadm(checked) {
      if (checked === true)
        $('#vis').fadeOut(200);
        $('#exp').fadeOut(200);
        $('#adm').fadeIn(2000);
  }

  /*       ****************************
           *        FIN CONNEXION      *
           ****************************

  */

  /*       ****************************
           *        SOCIAL BAR        *
           ****************************

  */

  $(".socialappear").hide();

  $(".socialhide").click(function () {
    $(".icon-bar").hide('slide', {direction: 'right'}, 1000);
    $(".socialappear").show(1000);
  });

  $(".socialappear").click(function () {
            $(".icon-bar").show('slide', {direction: 'right'}, 1000);
            $(".socialappear").hide();
  });

  /*       ****************************
           *        SCROLL TOP        *
           ****************************

  */

  /*       ****************************
           *          PARALLAX        *
           ****************************
  */

  var object1=$('#object1');
      var object2=$('#object2');
      var object3=$('#object3')
      var layer=$('#layer');

      layer.mousemove(function(e){
         var valueX=(e.pageX * -1 / 12);
         var valueY=(e.pageY * -1 / 12);

          object1.css({
              'transform':'translate3d('+valueX+'px,'+valueY+'px,0) '
          });
      });
