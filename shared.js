var backis = document.querySelector(".backis");
var SelectPlanButtons = document.querySelectorAll(".choise button");
var modal = document.querySelector(".modal");
var hamburgerNav = document.querySelector(".nav-button");
var mobileNav = document.querySelector(".mobile-nav");

// console.dir(backis);

for (var i = 0; i < SelectPlanButtons.length; i++) {
  SelectPlanButtons[i].addEventListener("click", function() {
    modal.style.display = "block";
    backis.style.display = "block";
    // modal.className = "open"; this will overwrite
    //  the complete clas list
    // 	modal.classList.add('open');
    // 	backis.classList.add('open');
  });
}

backis.addEventListener("click", function() {
  mobileNav.style.display = "none";
  closeModal();
});

if (modal) {
  modal.addEventListener("click", closeModal);
}

function closeModal() {
  if (modal) {
    modal.style.display = "none";
  }
  backis.style.display = "none";
}

hamburgerNav.addEventListener("click", function() {
  mobileNav.style.display = "block";
  backis.style.display = "block";
});
