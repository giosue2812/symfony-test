<?php


namespace App\Entity;

//This class describe a Notification
class Notification
{
    /**
     * @var string
     * Représente le titre de ma notification
     */
    private $title;
    /**
     * @var \DateTime
     * Représente la date d'activation de ma notification
     */
    private $activationDate;
    /**
     * @var NotificationBlock
     * Représente mon Notification block qui est un autre objet
     */
    private $NotificationBlock;

    //Mon constructeur pour que lorsque j'initialise l'objet, Notification Block soit initialisé
    public function __construct()
    {
        $this->NotificationBlock = new NotificationBlock();
    }

    //Mon getter pour NotificationBlock qui me retourne l'objet
    /**
     * @return NotificationBlock
     */
    public function getNotificationBlock(): ?NotificationBlock
    {
        return $this->NotificationBlock;
    }

    //Mon getter pour le title
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    //Mon setter pour le title
    /**
     * @param mixed $title
     * @return Notification
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    //Mon getter pour l'activation date
    /**
     * @return mixed
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    //Mon setter pour l'activation date
    /**
     * @param mixed $activationDate
     * @return Notification
     */
    public function setActivationDate($activationDate)
    {
        $this->activationDate = $activationDate;
        return $this;
    }

}
