// json array movement variable
var i = 0;
var correctCount = 0;
//initialize the first question
generate(0);
// generate from json array data with index
function goBack(index) {
    if (i > 0) {
        i--;
        correctCount--;
        generate(i);
    }
}
function generate(index) {
    document.getElementById("question").innerHTML = jsonData[index].q;
    document.getElementById("optt1").innerHTML = jsonData[index].opt1;
    document.getElementById("optt2").innerHTML = jsonData[index].opt2;
    document.getElementById("optt3").innerHTML = jsonData[index].opt3;
}

function checkAnswer() {
    if (document.getElementById("opt1").checked && jsonData[i].opt1 == jsonData[i].answer) {
        correctCount++;
    }
    if (document.getElementById("opt2").checked && jsonData[i].opt2 == jsonData[i].answer) {
        correctCount++;
    }
    if (document.getElementById("opt3").checked && jsonData[i].opt3 == jsonData[i].answer) {
        correctCount++;
    }
    // increment i for next question
    i++;
    if (jsonData.length - 1 < i) {
        var percent = (correctCount / i) * 100;
        document.write("<div style = 'margin : 250px ;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5); transition: 0.3s;'><div id ='it' style='font-size : 80px ;padding: 2px 16px;'><strong>Your Score is ");
        document.write(correctCount + " out of " + i);
        document.write("</strong></div></div>");
        if (percent <= 33) {
            document.getElementById("it").style.backgroundColor = "#FFCCCB";
        }
        if (percent > 33 && percent < 65)
            document.getElementById("it").style.backgroundColor = 'yellow';
        if (percent >= 65)
            document.getElementById("it").style.backgroundColor = '#90EE90';
    }
    generate(i);
}