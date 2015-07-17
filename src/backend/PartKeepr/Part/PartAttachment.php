<?php
namespace PartKeepr\Part;

use Doctrine\ORM\Mapping as ORM;
use PartKeepr\UploadedFileBundle\Entity\UploadedFile;

/**
 * Holds a part attachment
 *
 * @ORM\Entity
 **/
class PartAttachment extends UploadedFile
{
    /**
     * Defines if the attachment is an image.
     * @ORM\Column(type="boolean",nullable=true)
     *
     * @var boolean
     */
    private $isImage;

    /**
     * Creates a new part attachment
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("PartAttachment");
        $this->isImage = null;
    }

    /**
     * The part object
     * @ORM\ManyToOne(targetEntity="PartKeepr\Part\Part", inversedBy="attachments")
     *
     * @var Part
     */
    private $part = null;

    /**
     * Sets the part
     *
     * @param Part $part The part to set
     */
    public function setPart(Part $part)
    {
        $this->part = $part;
    }

    /**
     * Returns the part
     *
     * @return Part the part
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Returns if the attachment is an image or not.
     *
     * @return True if the attachment is an image, false otherwise
     */
    public function isImage()
    {
        //@todo: Reimplement check if attachment is an image
        return false;
    }
}
