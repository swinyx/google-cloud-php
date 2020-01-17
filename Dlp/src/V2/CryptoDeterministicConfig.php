<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pseudonymization method that generates deterministic encryption for the given
 * input. Outputs a base64 encoded representation of the encrypted output.
 * Uses AES-SIV based on the RFC https://tools.ietf.org/html/rfc5297.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CryptoDeterministicConfig</code>
 */
class CryptoDeterministicConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The key used by the encryption function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     */
    protected $crypto_key = null;
    /**
     * The custom info type to annotate the surrogate with.
     * This annotation will be applied to the surrogate by prefixing it with
     * the name of the custom info type followed by the number of
     * characters comprising the surrogate. The following scheme defines the
     * format: {info type name}({surrogate character count}):{surrogate}
     * For example, if the name of custom info type is 'MY_TOKEN_INFO_TYPE' and
     * the surrogate is 'abc', the full replacement value
     * will be: 'MY_TOKEN_INFO_TYPE(3):abc'
     * This annotation identifies the surrogate when inspecting content using the
     * custom info type 'Surrogate'. This facilitates reversal of the
     * surrogate when it occurs in free text.
     * Note: For record transformations where the entire cell in a table is being
     * transformed, surrogates are not mandatory. Surrogates are used to denote
     * the location of the token and are necessary for re-identification in free
     * form text.
     * In order for inspection to work properly, the name of this info type must
     * not occur naturally anywhere in your data; otherwise, inspection may either
     * - reverse a surrogate that does not correspond to an actual identifier
     * - be unable to parse the surrogate and result in an error
     * Therefore, choose your custom info type name carefully after considering
     * what your data looks like. One way to select a name that has a high chance
     * of yielding reliable detection is to include one or more unicode characters
     * that are highly improbable to exist in your data.
     * For example, assuming your data is entered from a regular ASCII keyboard,
     * the symbol with the hex code point 29DD might be used like so:
     * ⧝MY_TOKEN_TYPE.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType surrogate_info_type = 2;</code>
     */
    protected $surrogate_info_type = null;
    /**
     * A context may be used for higher security and maintaining
     * referential integrity such that the same identifier in two different
     * contexts will be given a distinct surrogate. The context is appended to
     * plaintext value being encrypted. On decryption the provided context is
     * validated against the value used during encryption. If a context was
     * provided during encryption, same context must be provided during decryption
     * as well.
     * If the context is not set, plaintext would be used as is for encryption.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 2. the field is not present when transforming a given value,
     * plaintext would be used as is for encryption.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId context = 3;</code>
     */
    protected $context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\CryptoKey $crypto_key
     *           The key used by the encryption function.
     *     @type \Google\Cloud\Dlp\V2\InfoType $surrogate_info_type
     *           The custom info type to annotate the surrogate with.
     *           This annotation will be applied to the surrogate by prefixing it with
     *           the name of the custom info type followed by the number of
     *           characters comprising the surrogate. The following scheme defines the
     *           format: {info type name}({surrogate character count}):{surrogate}
     *           For example, if the name of custom info type is 'MY_TOKEN_INFO_TYPE' and
     *           the surrogate is 'abc', the full replacement value
     *           will be: 'MY_TOKEN_INFO_TYPE(3):abc'
     *           This annotation identifies the surrogate when inspecting content using the
     *           custom info type 'Surrogate'. This facilitates reversal of the
     *           surrogate when it occurs in free text.
     *           Note: For record transformations where the entire cell in a table is being
     *           transformed, surrogates are not mandatory. Surrogates are used to denote
     *           the location of the token and are necessary for re-identification in free
     *           form text.
     *           In order for inspection to work properly, the name of this info type must
     *           not occur naturally anywhere in your data; otherwise, inspection may either
     *           - reverse a surrogate that does not correspond to an actual identifier
     *           - be unable to parse the surrogate and result in an error
     *           Therefore, choose your custom info type name carefully after considering
     *           what your data looks like. One way to select a name that has a high chance
     *           of yielding reliable detection is to include one or more unicode characters
     *           that are highly improbable to exist in your data.
     *           For example, assuming your data is entered from a regular ASCII keyboard,
     *           the symbol with the hex code point 29DD might be used like so:
     *           ⧝MY_TOKEN_TYPE.
     *     @type \Google\Cloud\Dlp\V2\FieldId $context
     *           A context may be used for higher security and maintaining
     *           referential integrity such that the same identifier in two different
     *           contexts will be given a distinct surrogate. The context is appended to
     *           plaintext value being encrypted. On decryption the provided context is
     *           validated against the value used during encryption. If a context was
     *           provided during encryption, same context must be provided during decryption
     *           as well.
     *           If the context is not set, plaintext would be used as is for encryption.
     *           If the context is set but:
     *           1. there is no record present when transforming a given value or
     *           2. the field is not present when transforming a given value,
     *           plaintext would be used as is for encryption.
     *           Note that case (1) is expected when an `InfoTypeTransformation` is
     *           applied to both structured and non-structured `ContentItem`s.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The key used by the encryption function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     * @return \Google\Cloud\Dlp\V2\CryptoKey
     */
    public function getCryptoKey()
    {
        return $this->crypto_key;
    }

    /**
     * The key used by the encryption function.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CryptoKey crypto_key = 1;</code>
     * @param \Google\Cloud\Dlp\V2\CryptoKey $var
     * @return $this
     */
    public function setCryptoKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CryptoKey::class);
        $this->crypto_key = $var;

        return $this;
    }

    /**
     * The custom info type to annotate the surrogate with.
     * This annotation will be applied to the surrogate by prefixing it with
     * the name of the custom info type followed by the number of
     * characters comprising the surrogate. The following scheme defines the
     * format: {info type name}({surrogate character count}):{surrogate}
     * For example, if the name of custom info type is 'MY_TOKEN_INFO_TYPE' and
     * the surrogate is 'abc', the full replacement value
     * will be: 'MY_TOKEN_INFO_TYPE(3):abc'
     * This annotation identifies the surrogate when inspecting content using the
     * custom info type 'Surrogate'. This facilitates reversal of the
     * surrogate when it occurs in free text.
     * Note: For record transformations where the entire cell in a table is being
     * transformed, surrogates are not mandatory. Surrogates are used to denote
     * the location of the token and are necessary for re-identification in free
     * form text.
     * In order for inspection to work properly, the name of this info type must
     * not occur naturally anywhere in your data; otherwise, inspection may either
     * - reverse a surrogate that does not correspond to an actual identifier
     * - be unable to parse the surrogate and result in an error
     * Therefore, choose your custom info type name carefully after considering
     * what your data looks like. One way to select a name that has a high chance
     * of yielding reliable detection is to include one or more unicode characters
     * that are highly improbable to exist in your data.
     * For example, assuming your data is entered from a regular ASCII keyboard,
     * the symbol with the hex code point 29DD might be used like so:
     * ⧝MY_TOKEN_TYPE.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType surrogate_info_type = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType
     */
    public function getSurrogateInfoType()
    {
        return $this->surrogate_info_type;
    }

    /**
     * The custom info type to annotate the surrogate with.
     * This annotation will be applied to the surrogate by prefixing it with
     * the name of the custom info type followed by the number of
     * characters comprising the surrogate. The following scheme defines the
     * format: {info type name}({surrogate character count}):{surrogate}
     * For example, if the name of custom info type is 'MY_TOKEN_INFO_TYPE' and
     * the surrogate is 'abc', the full replacement value
     * will be: 'MY_TOKEN_INFO_TYPE(3):abc'
     * This annotation identifies the surrogate when inspecting content using the
     * custom info type 'Surrogate'. This facilitates reversal of the
     * surrogate when it occurs in free text.
     * Note: For record transformations where the entire cell in a table is being
     * transformed, surrogates are not mandatory. Surrogates are used to denote
     * the location of the token and are necessary for re-identification in free
     * form text.
     * In order for inspection to work properly, the name of this info type must
     * not occur naturally anywhere in your data; otherwise, inspection may either
     * - reverse a surrogate that does not correspond to an actual identifier
     * - be unable to parse the surrogate and result in an error
     * Therefore, choose your custom info type name carefully after considering
     * what your data looks like. One way to select a name that has a high chance
     * of yielding reliable detection is to include one or more unicode characters
     * that are highly improbable to exist in your data.
     * For example, assuming your data is entered from a regular ASCII keyboard,
     * the symbol with the hex code point 29DD might be used like so:
     * ⧝MY_TOKEN_TYPE.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType surrogate_info_type = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setSurrogateInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->surrogate_info_type = $var;

        return $this;
    }

    /**
     * A context may be used for higher security and maintaining
     * referential integrity such that the same identifier in two different
     * contexts will be given a distinct surrogate. The context is appended to
     * plaintext value being encrypted. On decryption the provided context is
     * validated against the value used during encryption. If a context was
     * provided during encryption, same context must be provided during decryption
     * as well.
     * If the context is not set, plaintext would be used as is for encryption.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 2. the field is not present when transforming a given value,
     * plaintext would be used as is for encryption.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId context = 3;</code>
     * @return \Google\Cloud\Dlp\V2\FieldId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A context may be used for higher security and maintaining
     * referential integrity such that the same identifier in two different
     * contexts will be given a distinct surrogate. The context is appended to
     * plaintext value being encrypted. On decryption the provided context is
     * validated against the value used during encryption. If a context was
     * provided during encryption, same context must be provided during decryption
     * as well.
     * If the context is not set, plaintext would be used as is for encryption.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 2. the field is not present when transforming a given value,
     * plaintext would be used as is for encryption.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId context = 3;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->context = $var;

        return $this;
    }

}

