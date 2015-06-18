<?php

function stateDropDown()
{
   $states_arr = array('AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");
 
    $html = '';
    $html .= '<select id="state">';
    $html .= '<option value="">Select State</option>';
    foreach($states_arr as $abbv => $state) {
        $html .= '<option value="'.$abbv.'">'.$state.'</option>';
    }

    $html .= '</select>';
    
    return $html;
    
}

function tradeDropDown()
{
    $trade_arr =
array('Electrician', 'Plumbing', 'Contracting', 'Insurance', 'Real Estate', 'Water Technician', 'Dealer');
    
    $html = '';
    $html .= '<select>';
    $html .= '<option value="">Select Trade</option>';
    foreach($trade_arr as $trade) {
        $html .= '<option value="'.$trade.'">'.$trade.'</option>';   
    }
    $html .= '</select>';
    
    return $html;
}



?>