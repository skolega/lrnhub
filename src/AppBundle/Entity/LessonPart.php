<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LessonPart
 *
 * @ORM\Table(name="lesson_part")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LessonPartRepository")
 */
class LessonPart {

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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;
    
    /**
     * @var int
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;
    
     /**
     * @ORM\ManyToOne(targetEntity="Attachment", inversedBy="lesson_part")
     */
    private $attachment;

    /**
     * @ORM\ManyToMany(targetEntity="Lesson", mappedBy="lesson")
     */
    private $lesson;

    public function __toString() {
        if (!empty($this->name)) {
            return $this->name;
        }
        return 'empty';
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LessonPart
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return LessonPart
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return LessonPart
     */
    public function setPoints($points) {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return int
     */
    public function getPoints() {
        return $this->points;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->lesson = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add lesson
     *
     * @param \AppBundle\Entity\Lesson $lesson
     *
     * @return LessonPart
     */
    public function addLesson(\AppBundle\Entity\Lesson $lesson)
    {
        $this->lesson[] = $lesson;

        return $this;
    }

    /**
     * Remove lesson
     *
     * @param \AppBundle\Entity\Lesson $lesson
     */
    public function removeLesson(\AppBundle\Entity\Lesson $lesson)
    {
        $this->lesson->removeElement($lesson);
    }

    /**
     * Get lesson
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesson()
    {
        return $this->lesson;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return LessonPart
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set lessonPart
     *
     * @param \AppBundle\Entity\Atachment $lessonPart
     *
     * @return LessonPart
     */
    public function setLessonPart(\AppBundle\Entity\Atachment $lessonPart = null)
    {
        $this->lesson_part = $lessonPart;

        return $this;
    }

    /**
     * Get lessonPart
     *
     * @return \AppBundle\Entity\Atachment
     */
    public function getLessonPart()
    {
        return $this->lesson_part;
    }

    /**
     * Set attachment
     *
     * @param \AppBundle\Entity\Atachment $attachment
     *
     * @return LessonPart
     */
    public function setAttachment(\AppBundle\Entity\Atachment $attachment = null)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return \AppBundle\Entity\Atachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }
}
