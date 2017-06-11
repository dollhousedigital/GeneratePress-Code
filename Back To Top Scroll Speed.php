/*--BACK TO TOP SCROLL SPEED--*/

add_filter( 'generate_back_to_top_scroll_speed', 'aspiro_scroll_speed' );
function aspiro_scroll_speed()
{ 
    return '800';
}
