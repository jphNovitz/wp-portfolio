$(document).ready(function () {
    $('#my-envir').each(function () {
        $(this).mouseover(function () {
            $('.back').toggleClass('move-front');
        })
        $(this).mouseout(function () {
            $('.back').toggleClass('move-front');
        })
    })
});

const spreadTarget = document.querySelectorAll(".spread-child");
var toggleSpread = 0
spreadTarget[0].addEventListener('click', () => {
    if (!toggleSpread) {
        spreadTarget[1].style.transform = 'translateY(-33vh)';
        spreadTarget[2].style.transform = 'translateX(33vw)';
        spreadTarget[3].style.transform = 'translateY(33vh)';
        spreadTarget[4].style.transform = 'translateX(-33vw)';

        for (let i = 1; i <= 4; i++) {
            let element = spreadTarget[i].getElementsByTagName('p')[0];
            // element.style.opacity = 1
            element.style.display = 'block'
        }
        toggleSpread = 1;
    } else {
        spreadTarget[1].style.transform = 'translateY(0)';
        spreadTarget[2].style.transform = 'translateX(0)';
        spreadTarget[3].style.transform = 'translateY(0)';
        spreadTarget[4].style.transform = 'translateX(0)';

        for (let i = 1; i <= 4; i++) {
            let element = spreadTarget[i].getElementsByTagName('p')[0];
            element.style.display = 'none';
            // element.style.transform = 'none';
        }
        toggleSpread = 0;
    }

});