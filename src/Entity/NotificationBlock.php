<?php


namespace App\Entity;

//This class describe a NotificationBlock
class NotificationBlock
{
    /**
     * @var boolean
     * Représente un boolean
     */
    private $isValid;
    /**
     * @var NotificationBlockContent
     * Représente le content de ma Notification.
     */
    private $NotificationBlockContent;

    //Mon constructeur pour que lorsque j'initialise l'objet, NotificationBlockContent soit initialisé
    public function __construct()
    {
        $this->NotificationBlockContent = new NotificationBlockContent();
    }

    //Mon getter pour isValide retourne un boolean
    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->isValid;
    }

    //Mon setter de IsValid
    /**
     * @param bool $isValid
     * @return NotificationBlock
     */
    public function setIsValid(bool $isValid): NotificationBlock
    {
        $this->isValid = $isValid;
        return $this;
    }

    //Mon getter pour mon NotificationBlockContent
    /**
     * @return NotificationBlockContent
     */
    public function getNotificationBlockContent(): NotificationBlockContent
    {
        return $this->NotificationBlockContent;
    }


}
