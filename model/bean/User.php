<?php

class User{

    private $nickname;
    private $email;
    private $password;
    private $genre;
    private $state;
    private $birth_date;
    private $image;
    private $statu;

    /**
     * User constructor.
     * @param $nickname
     * @param $email
     * @param $password
     * @param $genre
     * @param $state
     * @param $birth_date
     * @param $image
     * @param $status
     */
    public function __construct($nickname, $email, $password, $genre, $state, $birth_date, $image, $statu)
    {
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
        $this->genre = $genre;
        $this->state = $state;
        $this->birth_date = $birth_date;
        $this->image = $image;
        $this->statu = $statu;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @param mixed $birth_date
     */
    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * @param mixed $statu
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;
    }


}

?>