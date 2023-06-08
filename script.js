document.getElementById("yorum-ekle-form").addEventListener("submit", function(event) {
  event.preventDefault();

  var isim = document.getElementById("isim").value;
  var mesaj = document.getElementById("mesaj").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "add_comment.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        animateSuccessMessage();
        setTimeout(function() {
          window.location.href = "index.php";
        }, 2000);
      } else {

        animateFailureMessage();
      }
    }
  };
  xhr.send("isim=" + isim + "&mesaj=" + mesaj);
});

function animateSuccessMessage() {
  var successMessage = document.createElement("div");
  successMessage.classList.add("success-message");
  successMessage.textContent = "Comment Added Succesfully :)";

  document.body.appendChild(successMessage);

  setTimeout(function() {
    successMessage.classList.add("hide");
    setTimeout(function() {
      successMessage.remove();
    }, 1000);
  }, 2000);
}

function animateFailureMessage() {
  var failureMessage = document.createElement("div");
  failureMessage.classList.add("failure-message");
  failureMessage.textContent = "The comment could not be submitted. :/";

  document.body.appendChild(failureMessage);

  setTimeout(function() {
    failureMessage.classList.add("hide");
    setTimeout(function() {
      failureMessage.remove();
    }, 1000);
  }, 2000);
}
