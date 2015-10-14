// var language = document.getElementById("language");

// //Create array of options to be added
// var arrayOfValue = ["EN","JP","VI"];
// var arrayOfText = ["<?=Yii::t('app', 'P0023') ?>","<?=Yii::t('app', 'P0024') ?>","<?=Yii::t('app', 'P0022') ?>"];

// //Create and append select list
// var selectList = document.createElement("select");
// selectList.setAttribute("id", "input");
// language.appendChild(selectList);

// //Create and append the options
// for (var i = 0; i < arrayOfValue.length; i++) {
//     var option = document.createElement("option");
//     option.setAttribute("value", arrayOfValue[i]);
//     option.text = arrayOfText[i];
//     selectList.appendChild(option);
// }
$( "select" ).change(function () {
    value = $("#input").val();
    pathArray = location.href.split( '/' );
	protocol = pathArray[0];
	host = pathArray[2];
	url = protocol + '//' + host + "/";

	window.location = url+"?lang="+value ;
    localStorage.setItem("value", value);
});
