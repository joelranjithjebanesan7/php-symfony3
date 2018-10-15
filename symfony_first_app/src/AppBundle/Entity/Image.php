<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 */

class Image
{

/**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
*/
private $id;

/**  
 * @var integer
 * @ORM\Column(name="question_id", type="integer", nullable=false)
 *  @ORM\Id
 */
private $question_id;

/**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=545)
*/
private $image;

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
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;

        return $this;
    }

    /**
     * Get question_id
     *
     * @return string
     */
    public function getQuestionId()
    {
        return $this->question_id;
    }
/**
     * Set question_id
     *
     * @param string $question_id
     *
     * @return QuestionId
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

   /**
     * Set image
     *
     * @param string $image
     *
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

}