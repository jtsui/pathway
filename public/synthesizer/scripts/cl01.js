/**
 * @fileOverview Javascript for Clotho project cl01
 * @author werner@bussedesign.com
 * @version 1
 * @requires jQuery 1.8.3
 * @reguires jQuery UI 1.10
 */

(function ($) {
    $(function () {
        // we are using a closure to limit variable scope to this function only.
        // without this we might have a problem with firebug showing the html that is loaded after an ajax call

        /**
         * toggle the tooltip menu item
         */
         $('#tooltips').find("a[data-tooltip='off']").hide();
         
        $('#tooltips').find('a').click(function() {
          if($(this).data('tooltip') == 'on') {
            $(this).hide();
            $("#tooltips a[data-tooltip='off']").show();
          }
          if($(this).data('tooltip') == 'off') {
            $(this).hide();
            $("#tooltips a[data-tooltip='on']").show();
          }
          return false;
        });
          
        
        /**
         * manage help panes
         
        // debug only -- comment this out before deployment
        localStorage.removeItem('hideTips');
         
        // if we set the hide help panes before we will not show the panes 
        if(!localStorage.getItem('hideTips')) { 
          $('.helpPane').fadeIn('slow');
          var activeTimer = setTimeout(function(){
            $('.helpPane').fadeOut('slow'); 
          }, 5000);
        }
        
        
        // we are showing help panes, each help pane has a close icon to hide it
        $('.helpPane').find('.close').click(function() {
          if(activeTimer) {
            clearTimeout(activeTimer);
          }
          $(this).parents('.helpPane').fadeOut('slow');
        });
        // we offer user the choice to never show tips again.
        // This choice is made persistent by using a flag in local storage
        $('.helpPane').find('.neverAgain input').click(function() {
          $(this).parents('.helpPane').fadeOut('slow');
          // Put a flag into storage
          localStorage.setItem('hideTips', 'true');
        });
        
        $('#searchBar').focus(function(){
          if(activeTimer) {
            clearTimeout(activeTimer);
          }
          $('.helpPane').fadeOut('slow');
        });
*/
    });
})(jQuery);