
"use strict";

$(document).ready(function() {
    

    let playerQuestion = "Lionel Messi plays in Barcelona FC and Cristiano Ronaldo plays for Chelsea.";
    let worldcupQuestion = "World Cup 2022 will be held in Qatar.";
    let leaguesQuestion = "Manchester United plays in Barclays Premier League and Juventus FC plays in Serie A.";
    let rulesQuestion = "A throw-in is awarded to the opponent when the possessing team plays the ball out of bounds over the defensive team's goal line.";

    let total = 4;
    let correct = 0;
    let amountButtons = 4;
    
    $("#error2").hide();


    $("button").hover(function() {
        $(this).css("background-color", "purple");



    },


    function() {
        $(this).css("background-color", "navy");
    });


    var questionText = $(".question-text").text();
   
    if(questionText == "") {

       
        $(".topics").hover(function() {

    
            
            if($(".question-box").val() === "" || $(".question-box").val() === undefined) {
             $(".question-box").val("Click to get a question.");
            }

        },

        function() {
            if($(".question-box").val() != playerQuestion && $(".question-box").val() != worldcupQuestion && $(".question-box").val() != leaguesQuestion && $(".question-box").val() != rulesQuestion ) {
                $(".question-box").val("");

            }
        
        });

      

    }
   

    $("button").click(function(e){

       
        e.preventDefault();
        let idClicked = e.target.id;

        
        
        let chooseOption = $("input[type='radio'][name='option']:checked").val();

       
       
        $("#error").text("");
        
       

        if($(".question-box").val() != playerQuestion && $(".question-box").val() != worldcupQuestion && $(".question-box").val() != leaguesQuestion && $(".question-box").val() != rulesQuestion ) {

           
            if(idClicked === "player") {
                console.log($(".question-box").val());

                if($(".question-box").val() === worldcupQuestion || $(".question-box").val() === leaguesQuestion || $(".question-box").val() === rulesQuestion ) {

                    $("#error").text("Please answer the current question.");
        
                }

               
                else {

                    $(".question-box").val( playerQuestion);    

                }
            }

            else if(idClicked === "world-cup") {
                console.log($(".question-box").val());

                if( $(".question-box").val() === playerQuestion || $(".question-box").val() === leaguesQuestion || $(".question-box").val() === rulesQuestion ) {

                    $("#error").text("Please answer the current question.");
        
                }
               
                else {

                    $(".question-box").val( worldcupQuestion);

                }
               

            }

            else if(idClicked === "league") {
                console.log($(".question-box").val());

                if( $(".question-box").val() === playerQuestion || $(".question-box").val() === worldcupQuestion || $(".question-box").val() === rulesQuestion ) {

                    $("#error").val("Please answer the current question.");
        
                }

               
                else {

                    $(".question-box").val( leaguesQuestion);
                }
               
                
               
            }

            else if(idClicked === "rules") {

                if( $(".question-box").val() === playerQuestion || $(".question-box").val() === worldcupQuestion || $(".question-box").val() === leaguesQuestion) {

                    $("#error").val("Please answer the current question.");
        
                }

               
                else {

                    $(".question-box").val( rulesQuestion);
                }
            }

           /*  if($(".question-box").val() === worldcupQuestion || $(".question-box").val() === leaguesQuestion || $(".question-box").val() === rulesQuestion) {
                $("#error").text("Please answer the current question.");
    
            } */
            

        }

        else if(idClicked == "submit") {

          
            var radioCheckedTrue = $('#true').prop('checked');

            var radioCheckedFalse = $('#false').prop('checked');
        

            if(chooseOption === undefined) {
                $("#error").text("Please select an option.");
            }

           
          
                
        /*     if(chooseOption != "true" && chooseOption != "false" ) {
                $("#error").show("Please select an option.");
            } */

            else {

                

                if($(".question-box").val() != playerQuestion && $(".question-box").val() != worldcupQuestion && $(".question-box").val() != leaguesQuestion && $(".question-box").val() != rulesQuestion ) { 
                    $("#error").text("Please select a question.");

                 }
              
                else if($(".question-box").val() === playerQuestion) {
                    if(chooseOption === "false") {
                        $(".history").append("Correct: Player");
                        correct++;

                    }

                    else if (chooseOption === "true") {
                        $(".history").append("Incorrect: Player");
                    }

                    $("#player").remove();
                    amountButtons--;

                    $(".question-box").val("");

                    $("#error2").hide();

                    $(".history").append("<br>");




                    $("input:radio[name='option']").each(function(i) {
                        this.checked = false;
                     });

                }

                else if($(".question-box").val() === worldcupQuestion) {
                    if(chooseOption === "true") {

                        $(".history").append("Correct: World Cup");
                        correct++;

                    }

                    else if (chooseOption === "false") {
                        $(".history").append("Incorrect: World Cup");
                    }

                    $("#world-cup").remove();
                    amountButtons--;

                    $(".question-box").val("");

                    $(".history").append("<br>");

                    $("#error2").hide();
                    

                    $("input:radio[name='option']").each(function(i) {
                        this.checked = false;
                     });
                    
                }


                else if($(".question-box").val() === leaguesQuestion) {
                    if(chooseOption === "true") {
                        $(".history").append("Correct: Leagues");
                        correct++;

                    }

                    else if (chooseOption === "false") {
                        $(".history").append("Incorrect: Leagues");
                    }

                    $("#league").remove();
                    amountButtons--;

                    $(".question-box").val("");

                    $("#error2").hide();

                    $(".history").append("<br>");



                    $("input:radio[name='option']").each(function(i) {
                        this.checked = false;
                     });

                }

                else if($(".question-box").val() === rulesQuestion) {
                    if(chooseOption === "false") {
                        $(".history").append("Correct: Rules");
                        correct++;

                    }

                    else if (chooseOption === "true") {
                        $(".history").append("Incorrect: Rules");
                    }

                    $("#rules").remove();
                    amountButtons--;

                    $(".question-box").val("");

                    $("#error2").hide();

                    $(".history").append("<br>");
                    

                    $("input:radio[name='option']").each(function(i) {
                        this.checked = false;
                     });
                }

            }

            $(".score").text(correct + "/" + total + " " + (correct/total) * 100 + "%" );

           

            

     }

     

     
     else if($(".question-box").val() === worldcupQuestion || $(".question-box").val() === leaguesQuestion || $(".question-box").val() === rulesQuestion) {
        console.log("sadfas");
        $("#error2").show();

    }

     
      
   


        
      
        


         if(amountButtons === 0) {
             $(".over").text("Quiz has Ended")
             .css({"background-color": "yellow", "font-size": "20pt", "color": "darkcyan", "height": "70%", "position": "sticky", "z-index": "9"});

             $(".over").animate({
                left: '250px',
                height: '100%',
                width: '70%',
                margin: '100px',
                padding: '100px'
                
            
            })

            $(".question").fadeOut(2000);
            $(".answer").fadeOut(2000);


         }
         
       

    });


    $(".over").dblclick(function() {

        $(".over").fadeOut(2000);


    })
    
 


    





})