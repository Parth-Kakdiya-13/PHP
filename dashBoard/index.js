
let menuBtns = document.querySelectorAll(".menu-icon");
let sideBar = document.querySelector(".sideBar");

menuBtns.forEach((menuBtn) => {
    menuBtn.addEventListener("click", () => {
        sideBar.classList.toggle("open");
    });
});