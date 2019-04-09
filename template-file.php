// Template Code 

$globalMagazines1 = $wp_query->query_vars['firstName'];
$globalMagazines2 = $wp_query->query_vars['lastName'];


if( !empty($globalMagazines1) && !empty($globalMagazines2)){
    echo "Hi ".$globalMagazines1.'&nbsp;'.$globalMagazines2;
} 
