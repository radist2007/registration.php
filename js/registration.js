window.onload = function() {
    document.getElementById('female').onclick = function() {checkFemale()};
    document.getElementById('male').onclick = function() {checkMale()};

    var male = false;
    var female = false;

    function checkFemale() {
       document.getElementById('male').style.display = "none";
       document.getElementById('female').style.right = "calc(50% - 55px)"
       female = true;
    }

    function checkMale() {
       document.getElementById('female').style.display = "none";
       document.getElementById('male').style.left = "calc(50% - 60px)"
       male = true;
    }

    if (male) {
        //Send php message about gender

    } else if (female) {
        //Send php message about gender

    } else {
        //Send php message about gender -> default -> NULL

    }
}