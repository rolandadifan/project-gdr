export function getDisplay() {
    const appNewBtn = document.querySelector('#btnNewApp') === null ? "" : document.querySelector('#btnNewApp');
    const displayNewApp = document.querySelector('#startNewApp') === null ? "" : document.querySelector('#startNewApp');

    // function add display enrollment
    if(appNewBtn !== ""){
        appNewBtn.addEventListener('click', () => {
            displayNewApp.classList.remove('d-none');
            appNewBtn.classList.add('d-none');
        });
    }
}

export function getDegreeOrNon() {
    const degreeRadio = document.querySelector('#degree') === null ? "" : document.querySelector('#degree');
    const nonDegreeRadio = document.querySelector('#nonDegree') === null ? "" : document.querySelector('#nonDegree');
    const nextBtn = document.querySelector('#nextBtn') === null ? "" : document.querySelector('#nextBtn');
    const radiosBtn = document.querySelectorAll('input[name="app_radio"]');

    // check apakah radio button yg diklik adalah non degree or degree
    for (const radioBtn of radiosBtn){
        radioBtn.checked = false;
        radioBtn.addEventListener('click', () => {
            if(radioBtn.value === "nonDegree"){
                document.querySelector('.nonDegreePermission').classList.remove('d-none');
            }else {
                document.querySelector('.nonDegreePermission').classList.add('d-none');
            }
        })
    }

    // radiosBtn.addEventListener('click', (e) => {
    //     e.preventDefault();
        
    //     if(nonDegreeRadio.checked){
    //         document.querySelector('.nonDegreePermission').classList.remove('d-none');
    //     }else{
    //         document.querySelector('.nonDegreePermission').classList.add('d-none');
    //     }
    // })


    if(nextBtn !== undefined){
        nextBtn.addEventListener('click', () => {
            if(nonDegreeRadio.checked){
                window.location.href = "./../../pages/enrollment/non-degree/";
                nonDegreeRadio.checked = false;
            }else if(degreeRadio.checked){
                window.location.href = "./../../pages/enrollment/degree/input-degree.html";
                degreeRadio.checked = false;
            }
        })
    }
}