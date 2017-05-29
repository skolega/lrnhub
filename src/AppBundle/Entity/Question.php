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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, unique=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="correctAnswer", type="string", length=255)
     */
    private $correctAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="Answers", type="string", length=1200)
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

    /**
     * Constructor
     */
    public function __construct() {
        $this->lesson_part = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Question
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
     * Set description
     *
     * @param string $description
     *
     * @return Question
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
     * Set correctAnswer
     *
     * @param string $correctAnswer
     *
     * @return Question
     */
    public function setCorrectAnswer($correctAnswer) {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    /**
     * Get correctAnswer
     *
     * @return string
     */
    public function getCorrectAnswer() {
        return $this->correctAnswer;
    }

    /**
     * Set answers
     *
     * @param string $answers
     *
     * @return Question
     */
    public function setAnswers($answers) {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return string
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
    public function addTest(\AppBundle\Entity\Test $test)
    {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \AppBundle\Entity\Test $test
     */
    public function removeTest(\AppBundle\Entity\Test $test)
    {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTest()
    {
        return $this->test;
    }
}
