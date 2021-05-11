<?php


namespace App\Entity;

//Class to describe a NotificationBlockContent
class NotificationBlockContent
{
    /**
     * @var string
     * Représente la lang de la notification
     */
    private $lang;
    /**
     * @var string
     * Représente le text de la notification
     */
    private $text;

    //Mon getter lang qui me renvoie un string
    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }
    //Mon setter lang qui me retourne NotificationBlockContent
    /**
     * @param string $lang
     * @return NotificationBlockContent
     */
    public function setLang(string $lang): NotificationBlockContent
    {
        $this->lang = $lang;
        return $this;
    }
    //Mon getter lang qui me renvoie un string
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    //Mon setter qui me renvoie un NotificationBlockContent
    /**
     * @param string $text
     * @return NotificationBlockContent
     */
    public function setText(string $text): NotificationBlockContent
    {
        $this->text = $text;
        return $this;
    }

}
