<?php


class Chat{

    private $sender;
    private $receiver;
    private $message;

    /**
     * Chat constructor.
     * @param $sender
     * @param $receiver
     * @param $message
     */
    public function __construct($sender, $receiver, $message)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}