window.onload = function() {
    document.getElementById('female').onclick = function() {checkFemale()};
    document.getElementById('male').onclick = function() {checkMale()};

    var male = false;
    var female = false;

    function checkFemale() {
       document.getElementById('male').style.display = "none";
       document.getElementById('female').style.right = "calc(50% - 55px)"
       female = true;
       console.log('female check');
       var gender = true;
       window.location.href = "admin.php?gender=" + gender; 
    }

    function checkMale() {
       document.getElementById('female').style.display = "none";
       document.getElementById('male').style.left = "calc(50% - 60px)"
       male = true;
       console.log('male check');
       var gender = "male";
       window.location.href = "admin.php?gender=" + gender; 
    }

}