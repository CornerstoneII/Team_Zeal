function myFunction() {
    var x = document.getElementById("nav-div");
    if (x.className === "nav-div") {
      x.className += " responsive";
    } else {
      x.className = "nav-div";
    }
  }
