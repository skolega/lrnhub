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
     * @ORM\Column(name="lesson_order", type="integer", nullable=true)
     */
    private $lesson_order;
    
     /**
     * @ORM\ManyToOne(targetEntity="Attachment", inversedBy="lesson_part")
     */
    private $attachment;
    
    /**
     * @ORM\ManyToMany(targetEntity="Question", inversedBy="lesson_part")
     */
    private $questions;

    /**
     * @ORM\ManyToMany(targetEntity="Lesson", mappedBy="lesson_part")
     */
    private $lesson;

    public function __toString() {
        if (!empty($this->name)) {
            return $this->name;
        }
        return 'empty';
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesson = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
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
     * @return LessonPart
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
     * Set description
     *
     * @param string $description
     *
     * @return LessonPart
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return LessonPart
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set lessonOrder
     *
     * @param integer $lessonOrder
     *
     * @return LessonPart
     */
    public function setLessonOrder($lessonOrder)
    {
        $this->lesson_order = $lessonOrder;

        return $this;
    }

    /**
     * Get lessonOrder
     *
     * @return integer
     */
    public function getLessonOrder()
    {
        return $this->lesson_order;
    }

    /**
     * Set attachment
     *
     * @param \AppBundle\Entity\Attachment $attachment
     *
     * @return LessonPart
     */
    public function setAttachment(\AppBundle\Entity\Attachment $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Get attachment
     *
     * @return \AppBundle\Entity\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Add question
     *
     * @param \AppBundle\Entity\Question $question
     *
     * @return LessonPart
     */
    public function addQuestion(\AppBundle\Entity\Question $question)
    {
        $this->questions[] = $question;
        return $this;
    }

    /**
     * Remove question
     *
     * @param \AppBundle\Entity\Question $question
     */
    public function removeQuestion(\AppBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
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

}
