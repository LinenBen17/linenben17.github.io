$(".example").TimeCircles({ time: {
    Days: { 
       	text: "Días",
       	color: "#620396" 
    },
    Hours: { 
       	text: "Horas",
       	color: "#7803B8" 
    },
    Minutes: { 
       	text: "Minutos",
       	color: "#9811E2" 
    },
    Seconds: { 
       	text: "Segundos",
       	color: "#A334E0" 
    }
}});
$(".example").TimeCircles({circle_bg_color:"transparent"});
$(".example").TimeCircles({count_past_zero: false}).addListener(countdownComplete);

function countdownComplete(unit, value, total){
    if(total<=0){
        $(this).fadeOut('slow');
        $("h2").text("Llegó a cero:3. Redireccionando...")
        setTimeout(function(){
            window.location.href = "felizcumple.html";
        }, 4000)
    }
}
if($(".example").TimeCircles().getTime() <= 0){
    $('.example').fadeOut('slow');
    $("h2").text("Llegó a cero:3. Redireccionando...")
    setTimeout(function(){
        window.location.href = "felizcumple.html";
    }, 4000)
}