const formComentario = document.getElementById("abreDialog");


const progressCard = document.querySelector('[data-zero]').value
const progressCard1 = document.querySelector('[data-um]').value
const progressCard2 = document.querySelector('[data-dois]').value
const progressCard3 = document.querySelector('[data-tres]').value
const progressCard4 = document.querySelector('[data-quatro]').value
const progressCard5 = document.querySelector('[data-cinco]').value
const progressCard6 = document.querySelector('[data-seis]').value

let options = {
    startAngle: -1.55,
    size: 150,
    value: progressCard / 100,
    fill: { gradient: ['#619bff', '#002a74'] }
}

$(".circle .bar").circleProgress(options).on('circle-animation-progress',
    function (event, progress, stepValue) {
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
    });

$(".circle.art1 .bar").circleProgress({ value: progressCard1 / 100 });
$(".circle.art2 .bar").circleProgress({ value: progressCard2 / 100 });
$(".circle.art3 .bar").circleProgress({ value: progressCard3 / 100 });
$(".circle.art4 .bar").circleProgress({ value: progressCard4 / 100 });
$(".circle.art5 .bar").circleProgress({ value: progressCard5 / 100 });
$(".circle.art6 .bar").circleProgress({ value: progressCard6 / 100 });