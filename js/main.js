$.extend( FormSerializer.patterns , {
    validate: /^[a-z][a-z0-9_-]*(?:\[(?:\d*|[a-z0-9_-]+)\])*(?:\.[a-z0-9_]+)*(?:\[\])?$/i,
    key:      /[a-z0-9_-]+|(?=\[\])/gi,
    named:    /^[a-z0-9_-]+$/i
});

$.fn.api.settings.successTest = function( response ) {
    if( response && response.success ) {
        return response.success;
    }
    return false;
};

$( '.ui.form button' ).click( function( e ) {
    e.preventDefault();
})

$( 'a.button' ).mouseup( function() { this.blur() } );
$( '.ui.form button' ).mouseup( function() { this.blur() } );

$( '.ui.modal' )
    .modal({
        blurring : true,
        onHidden : function() {
            console.log( 'I\'m gone' );
            $( '.ui.modal #confim' ).remove();
            $( '.ui.modal #error' ).remove();
            $( '.ui.modal form' ).form( 'clear' );
            $( '.ui.modal form .ui.error.message' ).empty();
            $( '#signup-form' ).show();
        },
        transition : 'vertical flip',
        selector : {
            approve : '.join'
        },
        onApprove : function() {
            console.log( 'You just clicked submit' );
            $( '.ui.form' ).form( 'submit' );
            return false;
        }
    })
    .modal( 'attach events' , 'a.signup' , 'show' )
;

$('.ui.dropdown')
    .dropdown()
;

$( '.ui.form' ).form({
    on : 'submit',
    revalidate : false,
    fields : {
        fname : {
            identifier : 'name.first',
            rules : [
                {
                    type : 'empty',
                    prompt : 'Please enter your first name'
                }
            ]
        },
        lname : {
            identifier : 'name.last',
            rules : [
                {
                    type : 'empty',
                    prompt : 'Please enter your last name'
                }
            ]
        },
        age_group : {
            identifier : 'age-group',
            rules : [
                {
                    type : 'empty',
                    prompt : 'Please select an age group'
                }
            ]
        },
        email : {
            identifier : 'email',
            rules : [
                {
                    type : 'empty',
                    prompt : 'Please enter your email address'
                },
                {
                    type : 'email',
                    prompt : 'Please enter a valid email address'
                }
            ]
        }
    },
    onSuccess : function() {
        $( '.ui.modal form' ).api({
            url : '/join',
            method : 'POST',
            on : 'now',
            serializeForm : true,
            stateContext : '#signup-form.segment',
            beforeSend : function( settings ) {
                console.log( settings.data );
                return settings;
            },
            onSuccess: function( response ) {
                console.log( response );
                $( '#signup-form' ).hide();
                $( '#signup-form' ).parent().append( '<div id="confim" class="ui center aligned basic segment"><p>Successfully Signed Up</p></div>' );
                $( '.ui.modal' ).modal( 'refresh' );
            },
            onFailure: function( response ) {
                console.log( 'request failed' );
                $( '#signup-form' ).hide();
                $( '#signup-form' ).parent().append( '<div id="error" class="ui center aligned basic segment"><p>Signup Failed. Please try again later.</p></div>' );
                $( '.ui.modal' ).modal( 'refresh' );
            }
        });

        return false;
    },
    onFailure : function() {
        console.log( 'Failed Validation' );
        return false;
    },
});
