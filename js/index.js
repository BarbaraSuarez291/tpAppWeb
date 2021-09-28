//INDEX USER

const iconUser = document.getElementById("img-user")
const listaUser = document.getElementById("lista-userIndex")

iconUser.addEventListener("click", () => {
   listaUser.classList.toggle("show-user")
})