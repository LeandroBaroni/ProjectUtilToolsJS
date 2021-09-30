const form = document.getElementById('formText');
let messageNull = "";

function checkButtonClick(idButton){
    var textValue = document.getElementById('txtText').value;

    if((textValue === null) || (textValue.trim() === '')){
        messageNull = "Insert Text";
        alert(messageNull);
    }else{
        switch (idButton) {
            case 'formatButtonUpper':
                textToUpper(textValue);
                break;
            case 'formatButtonLower':
                textToLower(textValue);
                break;
            case 'formatButtonCapitalizeSentences':
                textCapitalizeSentences(textValue);
                break;
            case 'formatButtonCapitalizeWords':
                textCapitalizeWords(textValue);
                break;
            default:
                break;
        }
    }
}

function textToUpper(valueReturn){
    var input = document.getElementById("txtResult");
    input.value = valueReturn;

    var output = document.getElementById("txtResult");
    output.value = "";
    output.value = valueReturn.toUpperCase();
}

function textToLower(valueReturn){
    var input = document.getElementById("txtResult");
    input.value = valueReturn;

    var output = document.getElementById("txtResult");
    output.value = "";
    output.value = valueReturn.toLowerCase();
}

function textCapitalizeSentences(valueReturn){
    var input = document.getElementById("txtResult");
    input.value = valueReturn;

    var arrayText = "";
    arrayText = valueReturn.charAt(0).toUpperCase() + valueReturn.slice(1);

    var output = document.getElementById("txtResult");
    output.value = arrayText;
}

function textCapitalizeWords(valueReturn){
    var input = document.getElementById("txtResult");
    input.value = valueReturn;

    const arrayText = valueReturn.split(" ");
    for (var i = 0; i < arrayText.length; i++) {
        arrayText[i] = arrayText[i].charAt(0).toUpperCase() + arrayText[i].slice(1);
    }

    const str2 = arrayText.join(" ");
    var output = document.getElementById("txtResult");
    output.value = str2;
}