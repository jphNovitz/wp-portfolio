$(document).ready ( function () {
    const sitesContainer = $('.sites-items');
    var margin = 0 ;
    $(document).on ("click", "#move-left", function () {
        margin -= 35;
        sitesContainer.css('margin-left', margin+'rem');
    });
    $(document).on ("click", "#move-right", function () {
        margin += 35;
        sitesContainer.css('margin-left', margin+'rem');
    });
});