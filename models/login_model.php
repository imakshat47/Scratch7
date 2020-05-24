<?php
class Login_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function run($users)
    {
        $query =  $this->db->prepared("Select if FROM users Where users = ':users'");
        $query->exectue(
            array(
                ':users' => $users,
            )
        );
        $data = $query->fetchAll();
    }
}
