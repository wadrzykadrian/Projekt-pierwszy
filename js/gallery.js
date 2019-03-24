$(document).ready(function () {
  var limit = 5;
  var gallery = document.getElementById("gallery");
  document.querySelector("#gallery_href").addEventListener("click", function (e) {

    gallery.classList.toggle("visible");
    if (gallery.classList.contains("visible")) {
      getPhoto("%", limit);
      check();
    } else {
      removeIMG();
    }
  });


  document.getElementById("order").addEventListener("change", function () {
    removeIMG();
    this.setAttribute("disabled", "disabled");
    var category = this.value;
    getPhoto(category, limit);
    this.removeAttribute("disabled");
    check();
  })


  function getPhoto(order, limit) {
    $.ajax({
      url: "backend/get_photo.php",
      method: "POST",
      data: {
        order: order
      }
    }).done(function (response) {
      var Data = JSON.parse(response);
      var count = 0;
      if (order != "%") {
        removeIMG();
      }

      for (var i = 0; i < Data.length; i++) {
        if (i < limit) {
          createIMG(Data, i);
        } else {
          var el = createIMG(Data, i);
          el.setAttribute("data-visible", "false");
          el.style.display = "none";
          count++;
        }
      }
      if (count > 0) {
        check();
      }
    });
  }

  function createVisible(limit, photo) {

    for (var i = 0; i < limit && i < photo.length; i++) {
      photo[i].style.display = "block";
      photo[i].setAttribute("data-visible", "true");
    }
    check();
  }

  function check() {
    var photo = document.querySelectorAll("[data-visible='false']");
    var button = document.getElementById("loadButton");


    if (photo.length == 0) {
      button.innerText = "Nie ma więcej zdjęć";
      button.setAttribute("disabled", "disabled");
    } else {
      button.removeAttribute("disabled");
      button.innerText = "Pokaż więcej zdjęć";

      button.onclick = function () {
        this.addEventListener("click", createVisible(limit, photo));
      }
    }
  }

  function removeIMG() {

    var photo = document.getElementsByClassName("photo");
    var photo_conteiner = document.querySelector(".photo_conteiner");

    for (var i = photo.length; i > 0; i--) {
      photo_conteiner.removeChild(photo[0]);

    }
  }

  function createIMG(Data, i) {
    var photo_conteiner = document.querySelector(".photo_conteiner");
    var el = document.createElement("a");
    var src = "photo/" + Data[i].src;
    el.setAttribute("href", src);
    el.setAttribute("data-lightbox", "image-1");
    el.setAttribute("category", Data[i].category);
    el.className = "photo";
    el.style.backgroundImage = "url(" + src + ")";
    photo_conteiner.appendChild(el);
    return el;
  }
});
