<?php
/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface AgeCheckServiceIf {
  /**
   * @param int $carrier
   * @param string $sessionId
   * @param string $verifier
   * @param int $standardAge
   * @return int
   * @throws \TalkException
   */
  public function checkUserAge($carrier, $sessionId, $verifier, $standardAge);
  /**
   * @param string $openIdRedirectUrl
   * @param int $standardAge
   * @param string $verifier
   * @return \AgeCheckDocomoResult
   * @throws \TalkException
   */
  public function checkUserAgeWithDocomo($openIdRedirectUrl, $standardAge, $verifier);
  /**
   * @return string
   * @throws \TalkException
   */
  public function retrieveOpenIdAuthUrlWithDocomo();
  /**
   * @param int $carrier
   * @return \AgeCheckRequestResult
   * @throws \TalkException
   */
  public function retrieveRequestToken($carrier);
}

class AgeCheckServiceClient implements \AgeCheckServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function checkUserAge($carrier, $sessionId, $verifier, $standardAge)
  {
    $this->send_checkUserAge($carrier, $sessionId, $verifier, $standardAge);
    return $this->recv_checkUserAge();
  }

  public function send_checkUserAge($carrier, $sessionId, $verifier, $standardAge)
  {
    $args = new \AgeCheckService_checkUserAge_args();
    $args->carrier = $carrier;
    $args->sessionId = $sessionId;
    $args->verifier = $verifier;
    $args->standardAge = $standardAge;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'checkUserAge', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('checkUserAge', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_checkUserAge()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\AgeCheckService_checkUserAge_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \AgeCheckService_checkUserAge_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("checkUserAge failed: unknown result");
  }

  public function checkUserAgeWithDocomo($openIdRedirectUrl, $standardAge, $verifier)
  {
    $this->send_checkUserAgeWithDocomo($openIdRedirectUrl, $standardAge, $verifier);
    return $this->recv_checkUserAgeWithDocomo();
  }

  public function send_checkUserAgeWithDocomo($openIdRedirectUrl, $standardAge, $verifier)
  {
    $args = new \AgeCheckService_checkUserAgeWithDocomo_args();
    $args->openIdRedirectUrl = $openIdRedirectUrl;
    $args->standardAge = $standardAge;
    $args->verifier = $verifier;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'checkUserAgeWithDocomo', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('checkUserAgeWithDocomo', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_checkUserAgeWithDocomo()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\AgeCheckService_checkUserAgeWithDocomo_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \AgeCheckService_checkUserAgeWithDocomo_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("checkUserAgeWithDocomo failed: unknown result");
  }

  public function retrieveOpenIdAuthUrlWithDocomo()
  {
    $this->send_retrieveOpenIdAuthUrlWithDocomo();
    return $this->recv_retrieveOpenIdAuthUrlWithDocomo();
  }

  public function send_retrieveOpenIdAuthUrlWithDocomo()
  {
    $args = new \AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'retrieveOpenIdAuthUrlWithDocomo', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('retrieveOpenIdAuthUrlWithDocomo', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_retrieveOpenIdAuthUrlWithDocomo()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("retrieveOpenIdAuthUrlWithDocomo failed: unknown result");
  }

  public function retrieveRequestToken($carrier)
  {
    $this->send_retrieveRequestToken($carrier);
    return $this->recv_retrieveRequestToken();
  }

  public function send_retrieveRequestToken($carrier)
  {
    $args = new \AgeCheckService_retrieveRequestToken_args();
    $args->carrier = $carrier;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'retrieveRequestToken', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('retrieveRequestToken', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_retrieveRequestToken()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\AgeCheckService_retrieveRequestToken_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \AgeCheckService_retrieveRequestToken_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("retrieveRequestToken failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class AgeCheckService_checkUserAge_args {
  static $_TSPEC;

  /**
   * @var int
   */
  public $carrier = null;
  /**
   * @var string
   */
  public $sessionId = null;
  /**
   * @var string
   */
  public $verifier = null;
  /**
   * @var int
   */
  public $standardAge = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'carrier',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'sessionId',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'verifier',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'standardAge',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['carrier'])) {
        $this->carrier = $vals['carrier'];
      }
      if (isset($vals['sessionId'])) {
        $this->sessionId = $vals['sessionId'];
      }
      if (isset($vals['verifier'])) {
        $this->verifier = $vals['verifier'];
      }
      if (isset($vals['standardAge'])) {
        $this->standardAge = $vals['standardAge'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_checkUserAge_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->carrier);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sessionId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->verifier);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->standardAge);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_checkUserAge_args');
    if ($this->carrier !== null) {
      $xfer += $output->writeFieldBegin('carrier', TType::I32, 2);
      $xfer += $output->writeI32($this->carrier);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sessionId !== null) {
      $xfer += $output->writeFieldBegin('sessionId', TType::STRING, 3);
      $xfer += $output->writeString($this->sessionId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->verifier !== null) {
      $xfer += $output->writeFieldBegin('verifier', TType::STRING, 4);
      $xfer += $output->writeString($this->verifier);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->standardAge !== null) {
      $xfer += $output->writeFieldBegin('standardAge', TType::I32, 5);
      $xfer += $output->writeI32($this->standardAge);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_checkUserAge_result {
  static $_TSPEC;

  /**
   * @var int
   */
  public $success = null;
  /**
   * @var \TalkException
   */
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::I32,
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_checkUserAge_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_checkUserAge_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::I32, 0);
      $xfer += $output->writeI32($this->success);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_checkUserAgeWithDocomo_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $openIdRedirectUrl = null;
  /**
   * @var int
   */
  public $standardAge = null;
  /**
   * @var string
   */
  public $verifier = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'openIdRedirectUrl',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'standardAge',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'verifier',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['openIdRedirectUrl'])) {
        $this->openIdRedirectUrl = $vals['openIdRedirectUrl'];
      }
      if (isset($vals['standardAge'])) {
        $this->standardAge = $vals['standardAge'];
      }
      if (isset($vals['verifier'])) {
        $this->verifier = $vals['verifier'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_checkUserAgeWithDocomo_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->openIdRedirectUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->standardAge);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->verifier);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_checkUserAgeWithDocomo_args');
    if ($this->openIdRedirectUrl !== null) {
      $xfer += $output->writeFieldBegin('openIdRedirectUrl', TType::STRING, 2);
      $xfer += $output->writeString($this->openIdRedirectUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->standardAge !== null) {
      $xfer += $output->writeFieldBegin('standardAge', TType::I32, 3);
      $xfer += $output->writeI32($this->standardAge);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->verifier !== null) {
      $xfer += $output->writeFieldBegin('verifier', TType::STRING, 4);
      $xfer += $output->writeString($this->verifier);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_checkUserAgeWithDocomo_result {
  static $_TSPEC;

  /**
   * @var \AgeCheckDocomoResult
   */
  public $success = null;
  /**
   * @var \TalkException
   */
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\AgeCheckDocomoResult',
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_checkUserAgeWithDocomo_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \AgeCheckDocomoResult();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_checkUserAgeWithDocomo_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_result {
  static $_TSPEC;

  /**
   * @var string
   */
  public $success = null;
  /**
   * @var \TalkException
   */
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRING,
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_retrieveOpenIdAuthUrlWithDocomo_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_retrieveRequestToken_args {
  static $_TSPEC;

  /**
   * @var int
   */
  public $carrier = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'carrier',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['carrier'])) {
        $this->carrier = $vals['carrier'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_retrieveRequestToken_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->carrier);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_retrieveRequestToken_args');
    if ($this->carrier !== null) {
      $xfer += $output->writeFieldBegin('carrier', TType::I32, 2);
      $xfer += $output->writeI32($this->carrier);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AgeCheckService_retrieveRequestToken_result {
  static $_TSPEC;

  /**
   * @var \AgeCheckRequestResult
   */
  public $success = null;
  /**
   * @var \TalkException
   */
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\AgeCheckRequestResult',
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'AgeCheckService_retrieveRequestToken_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \AgeCheckRequestResult();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AgeCheckService_retrieveRequestToken_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


