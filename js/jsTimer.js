function time(){

	var today = new Date();    //Отримуэмо повну інфорамацію, про дату та час - зараз

	var day = today.getDate();       //Отримуємо день
	var month = today.getMonth()+1;   //Отримуємо місяць
	var year = today.getFullYear();   //Отримуємо рік

	var hour = today.getHours();   //Отримуємо годину
	if(hour<10) hour = "0"+hour;   //Додаємо до години 0 якщо вона > 10

	var minute = today.getMinutes();     //Отримуємо хвилини
	if(minute<10) minute = "0"+minute;    //Додаємо до хвилин 0 якщо вони > 10

	var second = today.getSeconds();      //Отримуємо секунди
	if(second<10) second = "0"+second;    //Додаємо до секунд 0 якщо вони > 10

	document.getElementById("time").innerHTML =         //До елементу з id="time" 
		day+"."+month+"."+year+" | "+hour+":"+minute+":"+second;    //додаємо дату та час

	setTimeout("time()", 1000);    //Ставимо зартимку в 1 секунду

}
