const burger = document.querySelector(".icon");


burger.addEventListener("click", (e) => {
  const nav = document.querySelector("nav");
  const menu = document.querySelector(".nav-menu");
  menu.style.display = "block";
  menu.classList.add('box-shadow');
  nav.style.display = "block";
  nav.style.textAlign = "center";
  const closeBtn = document.createElement("button");  
  closeBtn.innerText = "Collapse Menu";
  closeBtn.classList.add("btn-dark");
  closeBtn.style.margin = "0.5rem 0";
  burger.style.display = "none";
  menu.appendChild(closeBtn);
  closeBtn.addEventListener("click", (e) => {
    menu.style.display = "none";
    burger.style.display = "block";
    nav.style.display = "flex";
    menu.removeChild(closeBtn);
  });
});


// Opens a modul to see the demo in section three
const content = document.querySelectorAll(".item-inner");

for (cont of content) {
  cont.addEventListener("click", (e) => {
    const modalContent = document.querySelector(".modal-content");
    const modal = document.querySelector("#myModal");
    const clone = e.target.parentElement.cloneNode(true);
    clone.removeChild(clone.lastElementChild);
    modalContent.prepend(clone);
    modal.style.display = "block";
    const closeBtn = document.querySelector(".close-modal");
    closeBtn.addEventListener("click", (e) => {
      modal.style.display = "none";
      modalContent.removeChild(clone);
    });
    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
        modalContent.removeChild(clone);
      }
    });
  });
}
