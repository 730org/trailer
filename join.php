<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

if( empty( $_POST ) ) {

    echo '<h1>Join Script</h1>';

} else {

    file_put_contents( 'php://stderr' , print_r( $_POST , TRUE ) );

    $mgClient = new Mailgun( 'key-883608b2b5de441d0ce95a7d23d5d7bf' );
    $list = 'launch@seventhirty.org';

    try {

        $result = $mgClient->post( 'lists/' . $list . '/members' , [
            'address' => $_POST[ 'email' ],
            'name' => $_POST[ 'name' ][ 'first' ] . ' ' . $_POST[ 'name' ][ 'last' ],
            'subscribed' => true,
            'vars' => '{
                "name" : { "first" : "' . $_POST[ 'name' ][ 'first' ] . '" , "last" : "' . $_POST[ 'name' ][ 'last' ] . '"  },
                "age-group" : "' . $_POST[ 'age-group' ] . '"}'
        ]);

        file_put_contents( 'php://stderr' , print_r( $result , TRUE ) );

        echo '{ "success" : "true" }';

    } catch ( Exception $e) {

        file_put_contents( 'php://stderr' , print_r( $e->getMessage() , TRUE ) );

        echo '{ "success" : false }';

    }
}
?>
