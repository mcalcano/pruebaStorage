<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a variable or an argument possibly of a compound object type.
 * Note how the following variables are represented:
 * 1) A simple variable:
 *     int x = 5
 *     { name: "x", value: "5", type: "int" }  // Captured variable
 * 2) A compound object:
 *     struct T {
 *         int m1;
 *         int m2;
 *     };
 *     T x = { 3, 7 };
 *     {  // Captured variable
 *         name: "x",
 *         type: "T",
 *         members { name: "m1", value: "3", type: "int" },
 *         members { name: "m2", value: "7", type: "int" }
 *     }
 * 3) A pointer where the pointee was captured:
 *     T x = { 3, 7 };
 *     T* p = &x;
 *     {   // Captured variable
 *         name: "p",
 *         type: "T*",
 *         value: "0x00500500",
 *         members { name: "m1", value: "3", type: "int" },
 *         members { name: "m2", value: "7", type: "int" }
 *     }
 * 4) A pointer where the pointee was not captured:
 *     T* p = new T;
 *     {   // Captured variable
 *         name: "p",
 *         type: "T*",
 *         value: "0x00400400"
 *         status { is_error: true, description { format: "unavailable" } }
 *     }
 * The status should describe the reason for the missing value,
 * such as `<optimized out>`, `<inaccessible>`, `<pointers limit reached>`.
 * Note that a null pointer should not have members.
 * 5) An unnamed value:
 *     int* p = new int(7);
 *     {   // Captured variable
 *         name: "p",
 *         value: "0x00500500",
 *         type: "int*",
 *         members { value: "7", type: "int" } }
 * 6) An unnamed pointer where the pointee was not captured:
 *     int* p = new int(7);
 *     int** pp = &p;
 *     {  // Captured variable
 *         name: "pp",
 *         value: "0x00500500",
 *         type: "int**",
 *         members {
 *             value: "0x00400400",
 *             type: "int*"
 *             status {
 *                 is_error: true,
 *                 description: { format: "unavailable" } }
 *             }
 *         }
 *     }
 * To optimize computation, memory and network traffic, variables that
 * repeat in the output multiple times can be stored once in a shared
 * variable table and be referenced using the `var_table_index` field.  The
 * variables stored in the shared table are nameless and are essentially
 * a partition of the complete variable. To reconstruct the complete
 * variable, merge the referencing variable with the referenced variable.
 * When using the shared variable table, the following variables:
 *     T x = { 3, 7 };
 *     T* p = &x;
 *     T& r = x;
 *     { name: "x", var_table_index: 3, type: "T" }  // Captured variables
 *     { name: "p", value "0x00500500", type="T*", var_table_index: 3 }
 *     { name: "r", type="T&", var_table_index: 3 }
 *     {  // Shared variable table entry #3:
 *         members { name: "m1", value: "3", type: "int" },
 *         members { name: "m2", value: "7", type: "int" }
 *     }
 * Note that the pointer address is stored with the referencing variable
 * and not with the referenced variable. This allows the referenced variable
 * to be shared between pointers and references.
 * The type field is optional. The debugger agent may or may not support it.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.Variable</code>
 */
class Variable extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the variable, if any.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Simple value of the variable.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';
    /**
     * Variable type (e.g. `MyClass`). If the variable is split with
     * `var_table_index`, `type` goes next to `value`. The interpretation of
     * a type is agent specific. It is recommended to include the dynamic type
     * rather than a static type of an object.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     */
    private $type = '';
    /**
     * Members contained or pointed to by the variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable members = 3;</code>
     */
    private $members;
    /**
     * Reference to a variable in the shared variable table. More than
     * one variable can reference the same variable in the table. The
     * `var_table_index` field is an index into `variable_table` in Breakpoint.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value var_table_index = 4;</code>
     */
    private $var_table_index = null;
    /**
     * Status associated with the variable. This field will usually stay
     * unset. A status of a single variable only applies to that variable or
     * expression. The rest of breakpoint data still remains valid. Variables
     * might be reported in error state even when breakpoint is not in final
     * state.
     * The message may refer to variable name with `refers_to` set to
     * `VARIABLE_NAME`. Alternatively `refers_to` will be set to `VARIABLE_VALUE`.
     * In either case variable value and members will be unset.
     * Example of error message applied to name: `Invalid expression syntax`.
     * Example of information message applied to value: `Not captured`.
     * Examples of error message applied to value:
     * *   `Malformed string`,
     * *   `Field f not found in class C`
     * *   `Null pointer dereference`
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 5;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the variable, if any.
     *     @type string $value
     *           Simple value of the variable.
     *     @type string $type
     *           Variable type (e.g. `MyClass`). If the variable is split with
     *           `var_table_index`, `type` goes next to `value`. The interpretation of
     *           a type is agent specific. It is recommended to include the dynamic type
     *           rather than a static type of an object.
     *     @type \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $members
     *           Members contained or pointed to by the variable.
     *     @type \Google\Protobuf\Int32Value $var_table_index
     *           Reference to a variable in the shared variable table. More than
     *           one variable can reference the same variable in the table. The
     *           `var_table_index` field is an index into `variable_table` in Breakpoint.
     *     @type \Google\Cloud\Debugger\V2\StatusMessage $status
     *           Status associated with the variable. This field will usually stay
     *           unset. A status of a single variable only applies to that variable or
     *           expression. The rest of breakpoint data still remains valid. Variables
     *           might be reported in error state even when breakpoint is not in final
     *           state.
     *           The message may refer to variable name with `refers_to` set to
     *           `VARIABLE_NAME`. Alternatively `refers_to` will be set to `VARIABLE_VALUE`.
     *           In either case variable value and members will be unset.
     *           Example of error message applied to name: `Invalid expression syntax`.
     *           Example of information message applied to value: `Not captured`.
     *           Examples of error message applied to value:
     *           *   `Malformed string`,
     *           *   `Field f not found in class C`
     *           *   `Null pointer dereference`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the variable, if any.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the variable, if any.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Simple value of the variable.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Simple value of the variable.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Variable type (e.g. `MyClass`). If the variable is split with
     * `var_table_index`, `type` goes next to `value`. The interpretation of
     * a type is agent specific. It is recommended to include the dynamic type
     * rather than a static type of an object.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Variable type (e.g. `MyClass`). If the variable is split with
     * `var_table_index`, `type` goes next to `value`. The interpretation of
     * a type is agent specific. It is recommended to include the dynamic type
     * rather than a static type of an object.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Members contained or pointed to by the variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable members = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Members contained or pointed to by the variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable members = 3;</code>
     * @param \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\Variable::class);
        $this->members = $arr;

        return $this;
    }

    /**
     * Reference to a variable in the shared variable table. More than
     * one variable can reference the same variable in the table. The
     * `var_table_index` field is an index into `variable_table` in Breakpoint.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value var_table_index = 4;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getVarTableIndex()
    {
        return $this->var_table_index;
    }

    /**
     * Reference to a variable in the shared variable table. More than
     * one variable can reference the same variable in the table. The
     * `var_table_index` field is an index into `variable_table` in Breakpoint.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value var_table_index = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setVarTableIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->var_table_index = $var;

        return $this;
    }

    /**
     * Status associated with the variable. This field will usually stay
     * unset. A status of a single variable only applies to that variable or
     * expression. The rest of breakpoint data still remains valid. Variables
     * might be reported in error state even when breakpoint is not in final
     * state.
     * The message may refer to variable name with `refers_to` set to
     * `VARIABLE_NAME`. Alternatively `refers_to` will be set to `VARIABLE_VALUE`.
     * In either case variable value and members will be unset.
     * Example of error message applied to name: `Invalid expression syntax`.
     * Example of information message applied to value: `Not captured`.
     * Examples of error message applied to value:
     * *   `Malformed string`,
     * *   `Field f not found in class C`
     * *   `Null pointer dereference`
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 5;</code>
     * @return \Google\Cloud\Debugger\V2\StatusMessage
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status associated with the variable. This field will usually stay
     * unset. A status of a single variable only applies to that variable or
     * expression. The rest of breakpoint data still remains valid. Variables
     * might be reported in error state even when breakpoint is not in final
     * state.
     * The message may refer to variable name with `refers_to` set to
     * `VARIABLE_NAME`. Alternatively `refers_to` will be set to `VARIABLE_VALUE`.
     * In either case variable value and members will be unset.
     * Example of error message applied to name: `Invalid expression syntax`.
     * Example of information message applied to value: `Not captured`.
     * Examples of error message applied to value:
     * *   `Malformed string`,
     * *   `Field f not found in class C`
     * *   `Null pointer dereference`
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 5;</code>
     * @param \Google\Cloud\Debugger\V2\StatusMessage $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\StatusMessage::class);
        $this->status = $var;

        return $this;
    }

}

