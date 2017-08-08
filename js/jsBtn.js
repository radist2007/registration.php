    // alet('Спасибо!');

window.onload = function() {
    document.getElementById('female').onclick = function() {checkFemale()};
    document.getElementById('male').onclick = function() {checkMale()};

    function checkFemale() {
       document.getElementById('male').style.display = "none";
       document.getElementById('female').style.right = "calc(50% - 55px)"
    }
    function checkMale() {
       document.getElementById('female').style.display = "none";
       document.getElementById('male').style.left = "calc(50% - 60px)"
    }
}
//   var timerId;

//   var sms = document.getElementById('sms');
//   console.log(sms);
//   var result = document.getElementById('result');
//   sms.onfocus = function() {

//     var lastValue = sms.value;
//     timerId = setInterval(function() {
//       if (sms.value != lastValue) {
//         showCount();
//         lastValue = sms.value;
//       }
//     }, 20);
//   };

//   sms.onblur = function() {
//     clearInterval(timerId);
//   };

//   function showCount() {
//     result.innerHTML = sms.value.length;
//   }
// }