    <?php
    session_start();
    require_once '../model.php';

    function fetchAllUsers()
    {
        return showAllUsers();
    }
    function fetchUser($id)
    {
        return showUser($id);
    }
