const acc = document.querySelector(".accordion__course"); 

      acc.addEventListener('click', function() {
        this.classList.toggle("active__courses");

        const accShow = this.previousElementSibling;
        if(accShow.style.display === "block"){
          accShow.style.display = "none";
          const arrowDown = document.createElement('i');
          arrowDown.classList.add('bi');
          arrowDown.classList.add('bi-caret-down-fill');
          acc.children[0].replaceWith(arrowDown);
        }else{
          accShow.style.display = "block";
          const arrowUp = document.createElement('i');
          arrowUp.classList.add('bi');
          arrowUp.classList.add('bi-caret-up-fill');
          acc.children[0].replaceWith(arrowUp);
        }
});

// splide js
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        // autowidth  : 'true',
        // fixedWidth:"25rem",
        // height: "50%",
        padding: {
          left:120,
          right:120,
          top:100,
          bottom: 100,
        },
        perPage: 3,
        rewind: true,
        gap: 10,
        grid: {
            dimensions: [[ 2, 1 ]],
            gap : {
                row: '1rem',
                col: '1rem',
            }
        },
        breakpoints: {
          700: {
            perPage: 1,
            padding: {
              left:0,
              right:0,
              top:0,
              bottom: 0,
            },
            grid: {
              dimensions: [[ 1, 1 ]],
            },
          },
        },
    } ).mount(window.splide.Extensions);
} );