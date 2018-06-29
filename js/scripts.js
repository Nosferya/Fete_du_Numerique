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
           ****************************

  */
