<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
function related($id = null)
 
	{
 
 	$ci =& get_instance();
   
 	
	$related_news = $ci->SiteModel->getlist('relatednews','RelatedID', array('NewsID' =>$id),'RelatednewsID DESC', 1, 0);
 	
	 $related_news_id = array();
	if(count($related_news)>0)
	 {
		 $related_news_id = $thePostIdArray = explode(',', $related_news[0]['RelatedID']);
		 $related_news_list = $ci->SiteModel->getwhere_in_and_where('news','NewsID, Heading', 'NewsID',  $related_news_id , array('IsActive'=>1),'NewsID DESC', 10, 0);
	 return  $related_news_list;
		} 
	
	
	else 
	
	{ 
	
	return  false;
		
		}



	}





 function parseTree($root, $arr) { 
        $return = array(); 
        # Traverse the tree and search for direct children of the root 
        foreach($arr as $child => $parent) { 
            # A direct child is found 
            if($parent == $root) { 
                # Remove item from tree (we don't need to traverse this again) 
                unset($arr[$child]); 
                # Append the child into result array and parse it's children 
                $return[] = array( 
                    'name' => $child, 
                    'children' => $this->parseTree($child, $arr) 
                ); 
            } 
        } 
        return empty($return) ? null : $return;     
    } 
     
    function printTree($arr) { 
        if(!is_null($arr) && count($arr) > 0) { 
            echo '<ol class="dd-list">'; 
            foreach($arr as $node) { 
			
					echo '<li class="dd-item dd3-item" data-id="'.$node['sect_id'].'">';
                   echo '<div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">'.  $node['sect_name'] .'</div>';
                	 
			
               
                if (array_key_exists('children', $node)) { 
                    printTree($node['children']); 
                } 
                echo '</li>'; 
            } 
            echo '</ol>'; 
        } 
    } 
 
 

?>