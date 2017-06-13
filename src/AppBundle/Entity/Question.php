<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question {

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
     * @ORM\Column(name="text", type="string", length=1200)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, unique=true)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="Answer", inversedBy="question")
     */
    private $answers;

    /**
     * @ORM\ManyToMany(targetEntity="LessonPart", mappedBy="questions")
     */
    private $lesson_part;

    /**
     * @ORM\ManyToMany(targetEntity="Test", mappedBy="questions")
     */
    private $test;

    public function __toString() {
        return $this->id. '.) ' .$this->text;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesson_part = new \Doctrine\Common\Collections\ArrayCollection();
        $this->test = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Question
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Question
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Add answer
     *
     * @param \AppBundle\Entity\Answer $answer
     *
     * @return Question
     */
    public function addAnswer(\AppBundle\Entity\Answer $answer) {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \AppBundle\Entity\Answer $answer
     */
    public function removeAnswer(\AppBundle\Entity\Answer $answer) {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers() {
        return $this->answers;
    }

    /**
     * Add lessonPart
     *
     * @param \AppBundle\Entity\LessonPart $lessonPart
     *
     * @return Question
     */
    public function addLessonPart(\AppBundle\Entity\LessonPart $lessonPart) {
        $this->lesson_part[] = $lessonPart;

        return $this;
    }

    /**
     * Remove lessonPart
     *
     * @param \AppBundle\Entity\LessonPart $lessonPart
     */
    public function removeLessonPart(\AppBundle\Entity\LessonPart $lessonPart) {
        $this->lesson_part->removeElement($lessonPart);
    }

    /**
     * Get lessonPart
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLessonPart() {
        return $this->lesson_part;
    }

    /**
     * Add test
     *
     * @param \AppBundle\Entity\Test $test
     *
     * @return Question
     */
    public function addTest(\AppBundle\Entity\Test $test) {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \AppBundle\Entity\Test $test
     */
    public function removeTest(\AppBundle\Entity\Test $test) {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTest() {
        return $this->test;
    }

}
