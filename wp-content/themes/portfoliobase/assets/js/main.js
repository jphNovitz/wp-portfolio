$(document).ready ( function () {

    // jiffy appears
    var interval = setInterval(function () {
            if ($('#my-envir').is(':visible')) {

                // clearInterval(interval);
            }
            // else {
            //     // still hidden
            //     if (Date.now() - startTime > maxTime) {
            //         // hidden even after 'maxTime'. stop checking.
            //         clearInterval(interval);
            //     }
            // }
        },
        100 // 0.1 second (wait time between checks)
    );



    // maybe remove
const box = $('.after-box').width();
const sitesContainer = $('.sites-items');
const container = $('.sites-items').width();
const translate = container- (2*box);
console.log(translate);

    var padding = 0 ;
    $(document).on ("click", "#move-left", function (event) {
        event.stopPropagation();
        padding -= 23.4;
        sitesContainer.css('left', padding+'vw');
    });
    $(document).on ("click", "#move-right", function (event) {
        event.stopPropagation();
        
      /* let parent = $(event.target).parents('.after-box');
        console.log($(sitesContainer).width());
        let toto = $(parent).width();*/
        padding += 23.4;
        sitesContainer.css('left', padding+'vw');
    });
});