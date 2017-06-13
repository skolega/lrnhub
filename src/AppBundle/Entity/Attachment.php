<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachment
 *
 * @ORM\Table(name="attachment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttachmentRepository")
 */
class Attachment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=500)
     */
    private $link;

    /**
     * @ORM\OneToMany(targetEntity="LessonPart", mappedBy="attachment")
     */
    private $leeson_part;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Attachment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Attachment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Attachment
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attachment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add leesonPart
     *
     * @param \AppBundle\Entity\LessonPart $leesonPart
     *
     * @return Attachment
     */
    public function addLeesonPart(\AppBundle\Entity\LessonPart $leesonPart)
    {
        $this->leeson_part[] = $leesonPart;

        return $this;
    }

    /**
     * Remove leesonPart
     *
     * @param \AppBundle\Entity\LessonPart $leesonPart
     */
    public function removeLeesonPart(\AppBundle\Entity\LessonPart $leesonPart)
    {
        $this->leeson_part->removeElement($leesonPart);
    }

    /**
     * Get leesonPart
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLeesonPart()
    {
        return $this->leeson_part;
    }
}
