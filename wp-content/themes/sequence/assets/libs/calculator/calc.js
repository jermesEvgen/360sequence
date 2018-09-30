		const calcForm = document.querySelector('#calc-form'); // Получили доступ к форме 
		const sendButon = document.querySelector('#sendButon') // Получили доступ к кнопке 
	





		sendButon.addEventListener('click', function(event){
			event.preventDefault();

			var  peiceOne = 400; // Устанавливаем цену 
			const notice = document.querySelector('.notice'); // Уведомление  	
			const salelength = document.querySelector('#sale-length');// Размер скидки  
			const totalCoast = document.querySelector('#total-cost');	// Итого стоит 
			const noticeMatirial = document.querySelector('#notice-matirial');	// Нотис по материалу 
			const noticeInvit = document.querySelector('#notice-invit');	// Нотис по опциям выбора  



			const matirial = document.getElementById('matirial').options.selectedIndex; // Получаем доступ к селекту Материал 
			const matirialTxt = document.getElementById('matirial').options[matirial].text;
			const matirialVal = document.getElementById('matirial').options[matirial].value;

			const format = document.getElementById('format').options.selectedIndex;//Получаем доступ к селекту Формат 
			const formatTxt = document.getElementById('format').options[format].text;
			const formatVal = document.getElementById('format').options[format].value;

			const color = document.getElementById('color').options.selectedIndex;//Получаем доступ к цвету 
			const colorTxt = document.getElementById('color').options[color].text;
			const colorVal = document.getElementById('color').options[color].value;

			const number = document.getElementById('number').value;//Выводим количество  
			


			const invit = document.getElementById('invit').options.selectedIndex;//Получаем доступ к съемке у заказчика или нет  
			const invitTxt = document.getElementById('invit').options[invit].text;
			const invitVal = document.getElementById('invit').options[invit].value;

			const frequency = document.getElementById('frequency').options.selectedIndex;//Получаем доступ частоте кадров съемки   
			const frequencyTxt = document.getElementById('frequency').options[frequency].text;
			const frequencyVal = document.getElementById('frequency').options[frequency].value;



			// const optionsOrder = document.getElementById('optionsOrder').options.selectedIndex;//Получаем доступ к опциям заказа   
			// const optionsOrderTxt = document.getElementById('optionsOrder').options[optionsOrder].text;
			// const optionsOrderVal = document.getElementById('optionsOrder').options[optionsOrder].value;


			// var checkBox = getCheckedCheckBoxes();
			// checkBox = document.getElementById('frequency').checked;


			// if (option_1 == true ) {
			// 	console.log(option_1.value);
			// }	



			// if (matirialSelect 0 ) {
			// 	alert('Вы не заполнили формы ');
			// }


	        // documentInner.innerHTML =  matirialVal + ' ' + matirialTxt + '</br>' + formatVal + ' ' + formatTxt + '</br>' + colorVal + ' ' + colorTxt + '</br>' + number + '</br>' + checkBox;

	        console.log(Number(matirialVal) + ' ' + matirialTxt);
	        console.log(Number(formatVal) + ' ' +  formatTxt );
	        console.log(Number(colorVal) + ' ' + colorTxt);
	        console.log(Number(invitVal) + ' ' + invitTxt);
	        console.log(Number(frequencyVal) + ' ' + frequencyTxt);
	        console.log(Number(number) + ' ' + 'количество фотографий');

	        // var getCheckedCheckBoxes = function () {
	        //   var checkboxes = document.getElementsByClassName('checkboxClass');
	        //   var checkboxesChecked = []; // можно в массиве их хранить, если нужно использовать 
	        //   for (var index = 0; index < checkboxes.length; index++) {
	        //      if (checkboxes[index].checked) {

	        //         checkboxesChecked.push(checkboxes[index].value); // положим в массив выбранный
	        //         console.log(checkboxes[index].value); // делайте что нужно - это для наглядности
	        //      }
	        //   }
	        //   return checkboxesChecked; // для использования в нужном месте
	        // }();


	        var  resultCoeff = ( ( Number(matirialVal) + Number(formatVal) + Number(colorVal) + Number(invitVal) + Number(frequencyVal)  )  / 5);
	        
	        var resultTotal = number * peiceOne * resultCoeff;
	        // alert(resultTotal); 
	        // alert(resultTotal.toFixed(2));

	        var resultTotalMatch = Math.round(resultTotal ) +' '+ 'руб';

	





	        // Уведомления для каждого селекта 
	        // const matirialNotice = document.querySelector('.matirialNotice');



	        if (resultTotal > 10000 ) {

	        	notice.innerHTML = ' &#9745;  При заказе свыше 10 000 рублей Вам предоставляется скидка'; // Выводим уведомление 
	            var  sale =  Math.round(resultTotal *0.97 - resultTotal); // Выводим размер скидки 
	            salelength.innerHTML = ' &#9745; Ваша скидка составила: '  + ' ' + sale + ' ' +  ' руб '; 
	            totalCoastSale = resultTotal - sale ;
	            totalCoast.innerHTML = 'Итого: ' + ' ' +  Math.round(totalCoastSale)  + ' ' + ' руб ';   

	        }else {
	        	notice.innerHTML  = '';
	        	salelength.innerHTML = '';
	        	totalCoast.innerHTML = resultTotalMatch;  
	        }

	        if (matirialTxt == 'Предметы с неустойчивой формой') {
	        	noticeMatirial.innerHTML ='&#9745;'+' '+ matirialTxt + ':' + '</br> ' + 'Обычно это предметы которые требуют  каркасса, подвеса, или другое любое преспособение которое фиксирует форму'
	        }else {
	        	noticeMatirial.innerHTML = '';
	        }


	        if (invitTxt == 'Да') {
	        	noticeInvit.innerHTML = ' &#9745; Съемка у заказчика' + ':' + '</br> ' + 'Стоимость оговаривается в зависимости от удаленности места где будет происходить съемка'
	        }else {
	        	noticeInvit.innerHTML = '';
	        }




	        if (number < 10) {
	        	totalCoast.innerHTML = 'Итого: ' + ' '+  '<div class="special-notis-error"> Минимальное количество фотографий 10 штук </div>';
	        	totalCoast.style.color = "#fff";
	        	noticeInvit.innerHTML = '';
	        	noticeMatirial.innerHTML = '';
	        }else if(number > 10000){
		       	totalCoast.innerHTML = 'Итого: ' + ' '+  '<div class="special-notis"> Вы заказали свыше 10 000 фотографии. позвольте предложить Вам специальные цены. Позвоните на этот номер &#9742; <a class="notice-link" href ="+7499 394 5060">+7499 394 5060</a>  и мы обсудим Ваш заказ   &#9749; </div> ' ;
		       	totalCoast.style.color = "#fff";
		       	notice.innerHTML = '';
		       	salelength.innerHTML = ' '; 
		       	totalCoastSale = ' ';
		       	noticeInvit.innerHTML = '';
		       	noticeMatirial.innerHTML = '';
	        }else{
	        	totalCoast.innerHTML = 'Итого: ' +  resultTotalMatch ;	
	        }

		});		
		