import {getDisplay,getDegreeOrNon} from './enrollment.js';

const sidebarButton = document.querySelector('#sidebar_menu');
const closeButton = document.querySelector('.sidebar__closeBtn');
const trimWord = document.querySelectorAll('#describeString');
const year = document.querySelector('#newYear');

// open and close sidebar
sidebarButton.addEventListener('click', ()=>{
    document.querySelector('.sidebar').style.width = "100%";
});

closeButton.addEventListener('click', ()=> {
    document.querySelector('.sidebar').style.width = "0";
});

// shorten string
function truncateString(str, num) {
    if (str.length <= num) {
    return str
    }
    const newText = str.slice(0, num) + '...'
    trimWord.forEach(data => {
        data.textContent = newText;
    })
}

trimWord.forEach(data => {
    truncateString(data.textContent,40);
});

// pembuatan tanggal
year.innerHTML = new Date().getFullYear();

// enrollment landing page
getDisplay();
getDegreeOrNon();

