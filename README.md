Enom API
========

Example:

    $params = array(
      'uid'           => 'username',
      'pw'            => 'password',
      'command'       => 'GetHomeDomainList',
      'Display'       => 100,
      'ResponseType'  => 'xml',
    );

    $output = Enom::execute( $params );
