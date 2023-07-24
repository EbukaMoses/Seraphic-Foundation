$(document).ready(function (e) {
  let $uploadfile = $('#register .upload-profile-image input[type="file"]');

  $uploadfile.change(function () {
    readURL(this);
  });

  //   $("#reg-form").submit(function (event) {
  //     let $password = $("#password");
  //     let $confirm = $("#confirm_pwd");
  //     let $error = $("#confirm_error");

  //     if ($password.val() === $confirm.val()) {
  //       return true;
  //     } else {
  //       $error.text("Password not Match!");
  //       event.preventDefault();
  //     }
  //   });
});

function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      $("#register .upload-profile-image .img").attr("src", e.target.result);
      $("#register .upload-profile-image .camera_icon").css({
        display: "none",
      });
      $("#register .small_text").css({
        display: "none",
      });
    };
    reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function (e) {
  let $uploadfile = $('#register .upload-profile-image input[type="file"]');

  $uploadfile.change(function () {
    readURL(this);
  });

  $("#reg-form").submit(function (event) {
    let $password = $("#password");
    let $confirm = $("#confirm_pwd");
    let $error = $("#confirm_error");

    if ($password.val() === $confirm.val()) {
      return true;
    } else {
      $error.text("Password not Match!");
      event.preventDefault();
    }
  });
});

function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      $("#register .upload-profile-image .img").attr("src", e.target.result);
      $("#register .upload-profile-image .camera_icon").css({
        display: "none",
      });
    };
    reader.readAsDataURL(input.files[0]);
  }
}













// var TxtType = function (el, toRotate, period) {
//   this.toRotate = toRotate;
//   this.el = el;
//   this.loopNum = 0;
//   this.period = parseInt(period, 10) || 2000;
//   this.txt = "";
//   this.tick();
//   this.isDeleting = false;
// };

// TxtType.prototype.tick = function () {
//   var i = this.loopNum % this.toRotate.length;
//   var fullTxt = this.toRotate[i];

//   if (this.isDeleting) {
//     this.txt = fullTxt.substring(0, this.txt.length - 1);
//   } else {
//     this.txt = fullTxt.substring(0, this.txt.length + 1);
//   }

//   this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

//   var that = this;
//   var delta = 200 - Math.random() * 100;

//   if (this.isDeleting) {
//     delta /= 2;
//   }

//   if (!this.isDeleting && this.txt === fullTxt) {
//     delta = this.period;
//     this.isDeleting = true;
//   } else if (this.isDeleting && this.txt === "") {
//     this.isDeleting = false;
//     this.loopNum++;
//     delta = 500;
//   }

//   setTimeout(function () {
//     that.tick();
//   }, delta);
// };

// window.onload = function () {
//   var elements = document.getElementsByClassName("typewrite");
//   for (var i = 0; i < elements.length; i++) {
//     var toRotate = elements[i].getAttribute("data-type");
//     var period = elements[i].getAttribute("data-period");
//     if (toRotate) {
//       new TxtType(elements[i], JSON.parse(toRotate), period);
//     }
//   }
//   // INJECT CSS
//   var css = document.createElement("style");
//   css.type = "text/css";
//   css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
//   document.body.appendChild(css);
// };
