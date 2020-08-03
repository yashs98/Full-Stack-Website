


<?php 

    if($path == "aboutme.php") {
        echo '
        <nav class="navbar">
                    <a id="index" href="../index.php"> Home </a>
                    <a id="aboutme" href="aboutme.php" class="active"> About Me </a>
                   
                    <div class="dropdown">
                    <a> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="../javascript/jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="../javascript/jsmouse.php"> JavaScript Mouse </a>
    
                            
    
                        </div>
                    </div>	

                    <a id="quiz" href="../jquery/quiz.php"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="../csstutorials/posEx.html"> Position and Size </a>
                            <a href="../csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="../csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>		
                    
                    <div class="dropdown">
                    <a> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../php/form.php"> Form </a>
                            <a href="../php/io.php"> File I/O </a>
                            <a href="../php/vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../mysql/orderform.php"> Shop </a>
                            <a href="../mysql/allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
        </nav>
        ';
    }

    else if($path == "index.php") {
        echo '
        <nav class="navbar">
                    <a id="index" href=$path class="active"> Home </a>
                    <a id="aboutme" href="aboutme/aboutme.php"> About Me </a>
                   
                    
                    <div class="dropdown">
                    <a> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="javascript/jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="javascript/jsmouse.php"> JavaScript Mouse </a>
    
                            
    
                        </div>
                    </div>	

                    <a id="quiz" href="jquery/quiz.php"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="csstutorials/posEx.html"> Position and Size </a>
                            <a href="csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>	
                    
                    <div class="dropdown">
                    <a> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="php/form.php"> Form </a>
                            <a href="php/io.php"> File I/O </a>
                            <a href="php/vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="mysql/orderform.php"> Shop </a>
                            <a href="../mysql/allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
                    
        </nav>
        ';
    }

   

    else if($path == "quiz.php") {
        echo '
        <nav class="navbar">
                    <a id="index" href="../index.php"> Home </a>
                    <a id="aboutme" href="../aboutme/aboutme.php"> About Me </a>
                   
                    
                    <div class="dropdown">
                    <a> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="../javascript/jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="../javascript/jsmouse.php"> JavaScript Mouse </a>
    
                        </div>
                    </div>	

                    <a id="quiz" href="$path"  class="active"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="../csstutorials/posEx.html"> Position and Size </a>
                            <a href="../csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="../csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>	
                    
                    <div class="dropdown">
                    <a> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../php/form.php"> Form </a>
                            <a href="../php/io.php"> File I/O </a>
                            <a href="../php/vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../mysql/orderform.php"> Shop </a>
                            <a href="../mysql/allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
                    
        </nav>
        ';
    }

    else if($path == "jsmouse.php" || $path == "jskeyboard.php") {
        echo '
        <nav class="navbar">
                    <a id="index" href="../index.php"> Home </a>
                    <a id="aboutme" href="../aboutme/aboutme.php"> About Me </a>
                    
                    
                    <div class="dropdown">
                    <a class="active"> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="jsmouse.php"> JavaScript Mouse </a>
    
                        </div>
                    </div>	
                    
                    <a id="quiz" href="../jquery/quiz.php"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="../csstutorials/posEx.html"> Position and Size </a>
                            <a href="../csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="../csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>		
                    
                    <div class="dropdown">
                    <a> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../php/form.php"> Form </a>
                            <a href="../php/io.php"> File I/O </a>
                            <a href="../php/vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../mysql/orderform.php"> Shop </a>
                            <a href="../mysql/allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
                    
        </nav>
        ';
    }

    else if($path == "form.php" || $path == "io.php" || $path == "vieworders.php") {
        echo '
        <nav class="navbar">
                    <a id="index" href="../index.php"> Home </a>
                    <a id="aboutme" href="../aboutme/aboutme.php"> About Me </a>
                   
                    
                    <div class="dropdown">
                    <a> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="../javascript/jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="../javascript/jsmouse.php"> JavaScript Mouse </a>
    
                        </div>
                    </div>	
                    
                    <a id="quiz" href="../jquery/quiz.php"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="../csstutorials/posEx.html"> Position and Size </a>
                            <a href="../csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="../csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>		
                    
                    <div class="dropdown">
                    <a  class="active"> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="form.php"> Form </a>
                            <a href="io.php"> File I/O </a>
                            <a href="vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../mysql/orderform.php"> Shop </a>
                            <a href="../mysql/allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
                    
        </nav>
        ';

    
    }


    else if($path == "orderform.php" || $path == "allorders.php" || $path == "customer.php") {

        echo '
        <nav class="navbar">
                    <a id="index" href="../index.php"> Home </a>
                    <a id="aboutme" href="../aboutme/aboutme.php"> About Me </a>
                   
                    
                    <div class="dropdown">
                    <a> JavaScript </a> 
                        <br>
                        <div class="dropdown-content">
                            <a id="jskeyboard" href="../javascript/jskeyboard.php"> JavaScript Keyboard </a>
                            <a id="jsmouse" href="../javascript/jsmouse.php"> JavaScript Mouse </a>
    
                        </div>
                    </div>	
                    
                    <a id="quiz" href="../jquery/quiz.php"> JQuery Quiz </a>
                    
                    <div class="dropdown">
                    <a> CSS Basics </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../csstutorials/turtlecoders.html"> Turtle Coders </a>
                            <a href="../csstutorials/posEx.html"> Position and Size </a>
                            <a href="../csstutorials/floatExBoxes.html"> Box Model </a>
                            <a href="../csstutorials/clearEx.html"> Float and Clear </a>
                            
    
                        </div>
                    </div>		
                    
                    <div class="dropdown">
                    <a> PHP </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="../php/form.php"> Form </a>
                            <a href="../php/io.php"> File I/O </a>
                            <a href="../php/vieworders.php"> View Orders </a>
    
                        </div>
                    </div>	

                    <div class="dropdown">
                    <a  class="active"> MySQL </a> 
                        <br>
                        <div class="dropdown-content">
                            <a href="orderform.php"> Shop </a>
                            <a href="allorders.php"> All Orders </a>
                           
    
                        </div>
                    </div>
                    
                    
        </nav>
        ';
            
    }

   
    



?>