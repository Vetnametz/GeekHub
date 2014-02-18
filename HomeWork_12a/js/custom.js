
$(document).ready(function countAction(){

    function countAction(){

        var initDate = new Date();//grab current date
        var dateFuture = new Date(2014,3,17,2,15,0);//year,month,date,hours,minutes,seconds,milliseconds
        var amount = dateFuture.getTime() - initDate.getTime();	//calc milliseconds between dates
        delete initDate;
        var days,
            hours,
            mins,
            secs;


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
});
