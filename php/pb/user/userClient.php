<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User;

/**
 */
class userClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \User\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUsers(\User\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.user/GetUsers',
        $argument,
        ['\User\GetResponse', 'decode'],
        $metadata, $options);
    }

}
