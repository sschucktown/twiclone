<?php
		//this will be an application of the MVC(model/view/controller) framework
		//model= data and DB and various interactions with it.
		//view= user interface
		//controller = is the functionality of the entire application
		//the frameword in its' entirity tries to keep the 3 separapte.
    include("functions.php");

    include("views/header.php");

    if ($_GET['page'] == 'timeline') {
        
        include("views/timeline.php");
        
    } else if ($_GET['page'] == 'yourtweets') {
        
        include("views/yourtweets.php");
        
    } else if ($_GET['page'] == 'search') {
        
        include("views/search.php");
        
    } else if ($_GET['page'] == 'publicprofiles') {
        
        include("views/publicprofiles.php");
        
    } else {

        include("views/home.php");
        
    }
        
    include("views/footer.php");


?>