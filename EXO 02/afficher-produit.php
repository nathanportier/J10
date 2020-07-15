function connect_to_database()
{
    $servername = "localhost";
    $username = "Didier";
    $password = "1234";
    $databasename = "basetest01";
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion avec la base de données a réussi ";

        return $pdo;
    } catch (PDOexception $e) {
        echo "Connexion avec la base de données a échoué " . $e->getMessage();
    }
}
$pdo = connect_to_basetest01();

