//page accueil popup

document.addEventListener("DOMContentLoaded", function() {
document.getElementById('popup').style.display = 'block';});
    

/*Pour fermer le PopUp et le countdown*/
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    var countDownDate = new Date().getTime() + (31 * 60 * 60 * 1000);
    var countdownFunction = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //affichage
        document.getElementById('countdown').innerHTML =  hours + "h " + minutes + "m " + seconds + "s ";
    }, 1000);