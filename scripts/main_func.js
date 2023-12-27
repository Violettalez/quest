function answer(){
    if(num_question===col_question){
        endTime=new Date().getTime();
        formatTime("End Time: ", endTime);
    }

    //Перевірка відповіді
	var inputElement = document.getElementById("answer");
    var userInput = inputElement.value;
    var c=document.getElementById("clue");
    if(userInput===answers[num_question-1]){
        col_true++;
        num_question++;
        c.style.visibility = "hidden";
        console.log()
        //Перевірка завершення квесту
        if(num_question>col_question){
            var questTime = endTime-startTime;
            var q_time=formatTime("Quest Time: ",questTime);
            var userElement = document.getElementById("info");
            var user_info = userElement.textContent.split(' ');

            var name = user_info[0];
            var surname = user_info[1];
            var phone = user_info[2];

            var endT=showFormatTime(endTime);
            try {
                window.location.href = 'finish.php?time=' + q_time + '&col_true_q=' + col_true + '&col_q=' + col_question+'&time_ms='+questTime+'&name='+name+'&surname='+surname+'&phone='+phone+'&end='+endT+'&mistakes='+col_false;
            } catch (error) {
                console.error('Ошибка при переходе:', error);
            }
        }
        else{
            console.log("num_question: "+num_question+"\ncol_t: "+col_true+"\ncol_f: "+col_false);

            var nq = document.getElementById("h2_nq");
            nq.textContent="Запитання "+num_question+":";

            var tq=document.getElementById("h1_tq");
            tq.textContent=question[num_question-2];

            inputElement.value="";

            var picture=document.getElementById("photo");
            picture.src=pictures[num_question-2];
            console.log("photo = "+picture.src);

            var linked=document.getElementById("link");
            linked.href=links[num_question-2];
        }
    }
    else{
        col_false++;
        c.style.visibility = "visible";
    }
}
