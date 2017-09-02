<?php
class Pagination_custom {
    
function paginationCustom($page_val=0,$start_from_val=0,$num_rec_per_page_val=10,$total_records_val=0,$previous_val=0,$next_val=0){
    
        $page = $page_val;
        $start_from = $start_from_val;
        $pagination = "";
        $num_rec_per_page = $num_rec_per_page_val;
        $total_pages = ceil($total_records_val / $num_rec_per_page); 
        $previous = $previous_val;
        $next = $next_val;
        
        if($page > 10)
        {  
            $show_pages_start = $page - 5;
            $show_pages_end = $page + 10;
            
            if($show_pages_end >= $total_pages)
            {
                $show_pages_end = $total_pages;
            }
            
            $pagination .= "<a href='?page=1'>".'First'."</a> "; // Goto 1st page  
            if($previous >= 1){
                $pagination .= "<a href='?page=".$previous."'>Previous</a> "; // Goto 1st page
            }
            for ($j=$show_pages_start; $j<=$show_pages_end; $j++) { 
                $pagination .= "<a href='?page=".$j."'>".$j."</a> "; 
            } 
            if($next <= $total_pages){
            $pagination .= "<a href='?page=".$next."'>".'Next'."</a> "; // Goto 1st page
            }
            $pagination .= "<a href='?page=$total_pages'>".'Last'."</a> "; // Goto last page
        }
        else {
            
            $start_from = ($page-1) * $num_rec_per_page;   
            $pagination .= "<a href='?page=1'>".'First'."</a> "; // Goto 1st page  
            if($previous >= 1){
                $pagination .= "<a href='?page=".$previous."'>Previous</a> "; // Goto 1st page
            }
            for ($i=1; $i<=$total_pages; $i++) { 
                $pagination .= "<a href='?page=".$i."'>".$i."</a> "; 
                if($i == 15)  break;
            } 
            if($next <= $total_pages){
            $pagination .= "<a href='?page=$next'>".'Next'."</a> "; // Goto last page
            }
            $pagination .= "<a href='?page=$total_pages'>".'Last'."</a> "; // Goto last page
            
        }
        return $pagination;
}


}