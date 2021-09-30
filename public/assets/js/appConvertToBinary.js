const form = document.getElementById('formText');
let messageNull = "";

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    checkInput();
});

function checkInput(){
    console.log("checando inputs");

    var textValue = document.getElementById('txtText').value;

    if((textValue === null) || (textValue.trim() === '')){
        messageNull = "Insert Text";
        alert(messageNull);
    }else{
        convert2Binary(textValue);
    }
}

function convertToBinary(textValue){
    var output = document.getElementById("txtResult");
    output.value = "";

    for (var i = 0; i < textValue.length; i++) {
        output.value += textValue[i].charCodeAt(0).toString(2) + " ";
    }
}

function convert2Binary(textValue){
    var output = document.getElementById("txtResult");
    output.value = "";

    output.value = textValue.split('').map(char =>{
        return char.charCodeAt(0).toString(2);
    }).join(' ');
}