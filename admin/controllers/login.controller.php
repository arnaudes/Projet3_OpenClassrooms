
<?php
/**
 * @param $email
 * @param $password
 * @return int
 * Fonction pour vérifier si l'email et le password correspondent à un admin.
 */
function is_admin($email,$password){
    global $db;
    $a = [
        'email'    => $email,
        'password' => sha1($password)
    ];
    $sql = "SELECT * FROM admins WHERE email = :email AND password = :password";
    $req = $db->prepare($sql);
    $req->execute($a);
    $exist = $req->rowCount($sql);
    return $exist;
}
