Enom API For Laravel 4
======================
Requires Curl Wrapper: http://getsparks.org/packages/curl/show ( included )<br>
Enom API Catalog: http://www.enom.com/APICommandCatalog/index.htm

Example:

    $params = array(
      'uid'           => 'username',
      'pw'            => 'password',
      'command'       => 'GetHomeDomainList',
      'Display'       => 100,
      'ResponseType'  => 'xml',
    );

    $output = Enom::execute( $params );
