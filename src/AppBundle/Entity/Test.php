<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="questionsId", type="string", length=255)
     */
    private $questionsId;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonId", type="string", length=255)
     */
    private $lessonId;


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
     * @return Test
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
     * @return Test
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
     * Set questionsId
     *
     * @param string $questionsId
     *
     * @return Test
     */
    public function setQuestionsId($questionsId)
    {
        $this->questionsId = $questionsId;

        return $this;
    }

    /**
     * Get questionsId
     *
     * @return string
     */
    public function getQuestionsId()
    {
        return $this->questionsId;
    }

    /**
     * Set lessonId
     *
     * @param string $lessonId
     *
     * @return Test
     */
    public function setLessonId($lessonId)
    {
        $this->lessonId = $lessonId;

        return $this;
    }

    /**
     * Get lessonId
     *
     * @return string
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }
}