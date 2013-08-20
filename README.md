Enom API Wrapper For PHP
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

    // Laravel Specific
    // $output = Enom::execute( $params );
    
    // Codeigniter Specific
    // $this->enom->execute( $params );
