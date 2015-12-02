<?php

namespace Presidents\Domain;

class President 
{
    /**
     * Identifier.
     *
     * @var integer
     */
    private $id;

    /**
     * Last name (nom de famille).
     *
     * @var string
     */
    private $lastName;

    /**
     * First name (prénom).
     *
     * @var string
     */
    private $firstName;

    /**
     * Year of birth.
     *
     * @var integer
     */
    private $yearOfBirth;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getYearOfBirth() {
        return $this->yearOfBirth;
    }

    public function setYearOfBirth($yearOfBirth) {
        $this->yearOfBirth = $yearOfBirth;
    }
}
