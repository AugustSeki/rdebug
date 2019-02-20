<?php
namespace Midi\Koala\Replayed;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property CallFromInbound CallFromInbound 
    * @property ReturnInbound ReturnInbound 
    * @property string SessionId 
    * @property ReplayedAction[] Actions 
*/ 
class ReplayedSession extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => ReplayedSession::class,
        'className' => 'Midi\Koala\Replayed\ReplayedSession',
        'annotations' => array(),
        'fields' => array(
            "CallFromInbound" => array(
                "fieldId" => 2, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => CallFromInbound::class, 
            ),
            "ReturnInbound" => array(
                "fieldId" => 3, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => ReturnInbound::class, 
            ),
            "SessionId" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "Actions" => array(
                "fieldId" => 4, 
                "thriftType" => 'LIST',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => ReplayedAction::class, 
            ),
        ),
    );

    public function __construct($array = null) 
    {
        if (!isset($array)) { 
            parent::__construct(array(), \ArrayObject::ARRAY_AS_PROPS);
            return;
        }

        parent::__construct($array, \ArrayObject::ARRAY_AS_PROPS); 

        if(isset($array["CallFromInbound"])) { 
            $this->setCallFromInbound($array["CallFromInbound"]);
        }

        if(isset($array["ReturnInbound"])) { 
            $this->setReturnInbound($array["ReturnInbound"]);
        }

        if(isset($array["SessionId"])) { 
            $this->setSessionId($array["SessionId"]);
        }

        if(isset($array["Actions"])) { 
            $this->setActions($array["Actions"]);
        }

    }

    /** 
     * @return CallFromInbound 
    */ 
    public function getCallFromInbound()/* : CallFromInbound */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["CallFromInbound"], CallFromInbound::class);
    }

    /** 
     * @param CallFromInbound $val 
    */ 
    public function setCallFromInbound(/* CallFromInbound */ $val) {
        $this["CallFromInbound"] = \Midi\Koala\Common\TypeConverter::to_struct($val, CallFromInbound::class);
    }

    /** 
     * @return ReturnInbound 
    */ 
    public function getReturnInbound()/* : ReturnInbound */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["ReturnInbound"], ReturnInbound::class);
    }

    /** 
     * @param ReturnInbound $val 
    */ 
    public function setReturnInbound(/* ReturnInbound */ $val) {
        $this["ReturnInbound"] = \Midi\Koala\Common\TypeConverter::to_struct($val, ReturnInbound::class);
    }

    /** 
     * @return string 
    */ 
    public function getSessionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["SessionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setSessionId(/* string */ $val) {
        $this["SessionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return ReplayedAction[] 
    */ 
    public function getActions()/* : ReplayedAction[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["Actions"], '\Midi\Koala\Common\TypeConverter::to_struct', array(ReplayedAction::class,));
    }

    /** 
     * @param ReplayedAction[] $val 
    */ 
    public function setActions(/* ReplayedAction[] */ $val) {
        $this["Actions"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_struct', array(ReplayedAction::class,));
    }
}

/* THRIFT IDL
namespace php koala.replayed
include "idl/koala/replayed/CallFromInbound.thrift"
include "idl/koala/replayed/ReturnInbound.thrift"
include "idl/koala/replayed/CallOutbound.thrift"
include "idl/koala/replayed/AppendFile.thrift"

union ReplayedAction {
    1: string ActionId
    2: i64 OccurredAt
    3: string ActionType
}

struct ReplayedSession {
    1: string SessionId
    2: CallFromInbound.CallFromInbound CallFromInbound
    3: ReturnInbound.ReturnInbound ReturnInbound
    4: list<ReplayedAction> Actions
}
*/