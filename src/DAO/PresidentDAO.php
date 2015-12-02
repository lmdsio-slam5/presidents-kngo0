<?php

namespace Presidents\DAO;

use Doctrine\DBAL\Connection;
use Presidents\Domain\President;

class PresidentDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Returns a list of all presidents, sorted by year of birth.
     *
     * @return array A list of all presidents.
     */
    public function findAll() {
        $sql = "select * from president order by year_birth desc";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $presidents = array();
        foreach ($result as $row) {
            $id = $row['pres_id'];
            $presidents[$id] = $this->buildDomainObject($row);
        }
        return $presidents;
    }

    /**
     * Creates an President object based on a DB row.
     *
     * @param array $row The DB row containing President data.
     * @return \Presidents\Domain\President
     */
    protected function buildDomainObject($row) {
        $president = new President();
        $president->setId($row['pres_id']);
        $president->setLastName($row['last_name']);
        $president->setFirstName($row['first_name']);
        $president->setYearOfBirth($row['year_birth']);
        
        return $president;
    }
}
