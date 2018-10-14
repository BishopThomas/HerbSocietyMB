function expandMenu() {
      var x = document.getElementById("myNavBar");
      if (x.className == "navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2") {
          x.classList.add("navbar-move-up")
      } else if (x.className == "navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2 sticky") {
            // x.classList.add("navbar-move-up")
            x.classList.remove("sticky")
            // x.classList.add("navbar-move-up")
            x.classList.add("sticky-expanded")
      } else if (x.className == "navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2 sticky-expanded") {
            // x.classList.add("navbar-move-up")
            x.classList.remove("sticky-expanded")
            // x.classList.add("navbar-move-up")
            x.classList.add("sticky")
      } else {
          x.classList.remove("navbar-move-up");
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
      var y = document.getElementById("mytopblock");
      if (y.className == "container-fluid bg-light topblock") {
          y.classList.add("topblock_expanded")
      } else {
          y.classList.remove("topblock_expanded");
          }
}


// When the user scrolls the page, execute myFunction
// window.setInterval(function(){
//   myFunction()
// }, 500);


// var callback = _.throttle(() => {myFunction}, 1000);
    // window.addEventListener('scroll', callback);
  // var callback= _.throttle((myFunction, 10));
  window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("myNavBar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop +140;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    if (navbar.className == "navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2") {
      navbar.classList.add("sticky");
    } else if (navbar.className == "navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2 navbar-move-up") {
      navbar.classList.add("sticky-expanded");
    }} else {
      navbar.classList.remove("sticky");
      navbar.classList.remove("sticky-expanded");
}
}

window.addEventListener('scroll', _.throttle(callback, 1000, { leading: true, trailing: true}));
