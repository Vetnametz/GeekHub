
$(document).ready(function countAction(){

    function countAction(){

        var initDate = new Date(),//grab current date
            dateFuture = new Date(2014,3,17,2,15,0),//year,month,date,hours,minutes,seconds,milliseconds
            amount = dateFuture.getTime() - initDate.getTime(),	//calc milliseconds between dates
            days,
            hours,
            mins,
            secs;
        delete initDate;


        amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

//        var days = Math.floor(amount/86400);//days
//        amount = amount%86400;

        hours = Math.floor(amount/3600);//hours
        amount = amount%3600;

        mins = Math.floor(amount/60);//minutes
        amount = amount%60;

        secs = Math.floor(amount);//seconds

        $('#hours').text(hours);
        $('#min').text(mins);
        $('#sec').text(secs);
    };
    window.onload = function(){countAction()}, setInterval(function(){countAction()}, 1000);

    $('body').append('<div class="modal"><img src=""/></div>');

    var popup = $('.modal'),
        img = $('.wrapper .content .content-main .slider-wrapper .small-photo ul li a img'),
        ancor = $('.wrapper .content .content-main .slider-wrapper .small-photo ul li a'),
        left = [],
        right = [],
        srcList = [];


    ancor.click(function(event){

        event.preventDefault();

        var mySrc = $(this).find('img').attr('src'),
            srcIndexInSrcList = $.inArray(mySrc, srcList);

        if ( srcIndexInSrcList == -1) {
            srcList.push(mySrc)
            popup.find('img').attr('src', mySrc)
            popup.addClass('active')
        } else {
            popup.find('img').attr('src', srcList[srcIndexInSrcList]);
            popup.addClass('active');
        }
    });

    popup.click(function(){
        $(popup).removeClass('active');
    });
});
