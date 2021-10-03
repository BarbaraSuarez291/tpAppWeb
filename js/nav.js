 const icon = document.querySelector("#icon")
 const ul = document.querySelector("#ul-lista")

 icon.addEventListener("click" , () => {

    ul.classList.toggle("show")
 })

 const iconUserNav = document.querySelector("#icon-user")
 const ulUserNav = document.querySelector("#ulNavLog")

 iconUserNav.addEventListener("click" , () => {

   ulUserNav.classList.toggle("show-user")
})


const iconUserNavResp = document.querySelector("#icon-user-responsive")
iconUserNavResp.addEventListener("click" , () => {

   ulUserNav.classList.toggle("show-user")
})


 