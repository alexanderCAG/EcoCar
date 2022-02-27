<?php 

        if($_SESSION['catItem']!=NULL){
                $info_cat = $_SESSION['catItem'];
                $info_mq = $_SESSION['mqItem'];
                $info_col = $_SESSION['colItem'];
        }
        else if($_SESSION['mqItem']!=NULL){
                $info_cat = $_SESSION['catItem'];
                $info_mq = $_SESSION['mqItem'];
                $info_col = $_SESSION['colItem'];
        }
        else if($_SESSION['colItem']!=NULL){
                $info_cat = $_SESSION['catItem'];
                $info_mq = $_SESSION['mqItem'];
                $info_col = $_SESSION['colItem'];
        }else{
                $info_cat = 0;
                $info_mq = 0;
                $info_col = 0;
        }

        if ($total_no_of_pages <= 10){  	 
                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                if ($counter == $page_no) {
                echo "<li class='active page-item'><a class='page-link'>$counter</a></li>";	
                        }else{
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$counter</a></li>";
                        }
                }
        }
        elseif($total_no_of_pages > 10){
                
        if($page_no <= 4) {			
        for ($counter = 1; $counter < 8; $counter++){		 
                if ($counter == $page_no) {
                echo "<li class='active page-item'><a class='page-link'>$counter</a></li>";	
                        }else{
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$counter</a></li>";
                        }
                }
                echo "<li class='page-item'><a class='page-link'>...</a></li>";
                echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$second_last</a></li>";
                echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$total_no_of_pages</a></li>";
                }

        elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                echo "<li class='page-item'><a class='page-link' href='?page_no=1&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>1</a></li>";
                echo "<li class='page-item'><a class='page-link' href='?page_no=2&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>2</a></li>";
                echo "<li class='page-item'><a class='page-link'>...</a></li>";
                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                if ($counter == $page_no) {
                echo "<li class='active page-item'><a class='page-link'>$counter</a></li>";	
                        }else{
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$counter</a></li>";
                        }                  
        }
        echo "<li class='page-item'><a class='page-link'>...</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$second_last</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$total_no_of_pages</a></li>";      
                }
                
                else {
                echo "<li class='page-item'><a class='page-link' href='?page_no=1&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>1</a></li>";
                echo "<li class='page-item'><a class='page-link' href='?page_no=2&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>2</a></li>";
                echo "<li class='page-item'><a class='page-link'>...</a></li>";

                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                if ($counter == $page_no) {
                echo "<li class='active page-item'><a class='page-link'>$counter</a></li>";	
                        }else{
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter&amp;mqItem=$info_mq&amp;catItem=$info_cat&amp;colItem=$info_col'>$counter</a></li>";
                        }                   
                        }
                }
        }
?>