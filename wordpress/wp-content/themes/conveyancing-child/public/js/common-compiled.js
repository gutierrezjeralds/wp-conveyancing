/*Function for isotope configuration*/
function initIsotope() {
    $('#indexRating-posts').imagesLoaded( function(){
        $('#indexRating-posts').isotope({
            itemSelector : '.item'
        });
    });
}

initIsotope();

//Rerun isotope function when window resize
$(function() {
    var pause = 100;
    $(window).resize(function() {
        $(function() {
            var mediaScreenWidth = $(window).width();
            // console.log(mediaScreenWidth);

            initIsotope();

        }, pause );
    });

    $(window).resize();
});
//End rerun isotope function when window resize
/*Function for isotope configuration*/
