//add hovered class in selected list
//  let list = document.querySelectorAll('.navigation li');
//  function activeLink() {
//      list.forEach((item) => item.classList.remove('hovered'));
//      this.classList.add('hovered');
//  }
//  list.forEach((item) =>item.addEventListener('mouseover',activeLink));


let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
// let topbar = document.querySelector('.topbar');
let cardboxChild = document.querySelector('.cardboxChild');
let nav = document.querySelector('.user');
let logobni = document.getElementById('logobni');
let sidebar = false;

toggle.onclick = function () {
    sidebar = !sidebar;
    navigation.classList.toggle('active');
    main.classList.toggle('active');
    // topbar.classList.toggle('active');
    nav.classList.toggle('active');
    cardboxChild.classList.toggle('active');
    console.log(nav);

 
}
