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

    $('body').append('<ul class="modal">' +
                         '<li><a class="left" href=""><span class="glyphicon glyphicon-chevron-left"></span></a></li>' +
                         '<li><img src=""/>' +
                         '<li><a class="right" href=""><span class="glyphicon glyphicon-chevron-right"></span></a></li>' +
                     '</ul>');

    var popup = $('.modal'),
        img = $('.wrapper .content .content-main .slider-wrapper .small-photo ul li a img'),
        ancor = $('.wrapper .content .content-main .slider-wrapper .small-photo ul li a'),
        leftImg ,
        rightImg,
        srcList = $(".wrapper .content .content-main .slider-wrapper .small-photo ul li a img").map(function() {
                    return $(this).attr("src");
                    }).get();

    ancor.click(function(event){

        event.preventDefault();

        var mySrc = $(this).find('img').attr('src'),
            elIndex = $.inArray(mySrc, srcList);

        if (!popup.hasClass('active')){
            popup.addClass('active');
        }
        popup.find('img').attr('src', srcList[elIndex]);

//        call function myFunction and pass in it an index
//        of current src
        myFunction(elIndex);
    });
    function myFunction(elIndex){
        alert('Yes')
//        get an clicked img index of src
        if (elIndex === 0){
            leftImg = srcList[srcList.length-1]
            rightImg = srcList[elIndex+1]
        }
        else if (elIndex === srcList.length-1){
            leftImg = srcList[elIndex-1]
            rightImg = srcList[0]
        }
        else if (elIndex > 0 && elIndex < srcList.length-1){
            leftImg = srcList[elIndex-1]
            rightImg = srcList[elIndex+1]
        }
    }
    $('.modal li .left').click(function(e){
        e.preventDefault();
        alert('left')

//        HOW CAN I GET leftImg from myFunction()???????

        popup.find('img').attr('src', leftImg);
    });
    $('.modal li .right').click(function(e){
        e.preventDefault();
        alert('right')

        popup.find('img').attr('src', rightImg);
    });
    popup.click(function(e){
        if (e.target.tagName == 'DIV') {
            $(this).removeClass('active');
        }
    });
});

