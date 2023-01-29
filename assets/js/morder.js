$( function() {

    var modalMenu = $( '#modal_menu' );

    var isOpenModalMenu;

    var modalMenuElements = modalMenu.find( 'a, button, li' );

    $( '#open_modal' ).click( function() {
        isOpenModalMenu = true;
        $( '#close_modal' ).focus();
        modalMenu.show();
    });

    $( '#close_modal' ).click( function() {
        isOpenModalMenu = false;
        modalMenu.hide();
    });

    $( document ).keydown( function( event ) {

        if ( showDrawer ) {

            var activeEl = document.activeElement;

            var firstEl = modalMenuElements[0];

            var lastEl = modalMenuElements[ modalMenuElements.length - 1 ];

            var tabKey = ( 9 === event.keyCode );

            var shiftKey = event.shiftKey;

            if ( ! shiftKey && tabKey && lastEl === activeEl ) {
                event.preventDefault();
                firstEl.focus();
            }

            if ( shiftKey && tabKey && firstEl === activeEl ) {
                event.preventDefault();
                lastEl.focus();
            }
        }
    });
});
