<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stores image properties, such as dominant colors.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ImageProperties</code>
 */
class ImageProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, dominant colors completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     */
    protected $dominant_colors = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\DominantColorsAnnotation $dominant_colors
     *           If present, dominant colors completed successfully.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * If present, dominant colors completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     * @return \Google\Cloud\Vision\V1\DominantColorsAnnotation
     */
    public function getDominantColors()
    {
        return $this->dominant_colors;
    }

    /**
     * If present, dominant colors completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.DominantColorsAnnotation dominant_colors = 1;</code>
     * @param \Google\Cloud\Vision\V1\DominantColorsAnnotation $var
     * @return $this
     */
    public function setDominantColors($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\DominantColorsAnnotation::class);
        $this->dominant_colors = $var;

        return $this;
    }

}

