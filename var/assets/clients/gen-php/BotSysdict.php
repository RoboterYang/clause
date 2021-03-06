<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
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

/**
 * 引用系统词典关联
 */
class BotSysdict
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'chatbotID',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'dict_id',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'createdate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $chatbotID = null;
    /**
     * @var string
     */
    public $dict_id = null;
    /**
     * @var string
     */
    public $id = null;
    /**
     * @var string
     */
    public $createdate = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['chatbotID'])) {
                $this->chatbotID = $vals['chatbotID'];
            }
            if (isset($vals['dict_id'])) {
                $this->dict_id = $vals['dict_id'];
            }
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['createdate'])) {
                $this->createdate = $vals['createdate'];
            }
        }
    }

    public function getName()
    {
        return 'BotSysdict';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->chatbotID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dict_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->createdate);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('BotSysdict');
        if ($this->chatbotID !== null) {
            $xfer += $output->writeFieldBegin('chatbotID', TType::STRING, 1);
            $xfer += $output->writeString($this->chatbotID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dict_id !== null) {
            $xfer += $output->writeFieldBegin('dict_id', TType::STRING, 2);
            $xfer += $output->writeString($this->dict_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::STRING, 3);
            $xfer += $output->writeString($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->createdate !== null) {
            $xfer += $output->writeFieldBegin('createdate', TType::STRING, 4);
            $xfer += $output->writeString($this->createdate);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
