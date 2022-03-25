    <div class="navbox">
        <span class="bgcolor-dark text-white openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">
        	&#9776; 
        	<?php if(isset($_SESSION['section'])){
        		echo $_SESSION['section'];
        	};?>
        		
        	</span>
        <button class="button" style="float:right; padding:10px; margin-top:5px;">
            <a href="home.php?logout=1">LOGOUT </a>
        </button>
    </div>
   