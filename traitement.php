<?php
// Vérifier que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);
    $pays = htmlspecialchars($_POST['pays']);
    // Contenu du message
    if (strlen($nom)>0)
        $contenu = "Nom : $nom\n";
    else
        $contenu= "pas de nom\n";
    if (strlen($pays)>0)
        $contenu .= "Pays : $pays\n";
    else 
        $contenue.="pas de pays";
    if (strlen($message)>0)
        $contenu .= "Message :\n$message\n";
    else
        $contenu .= "pas de message\n";
    echo $contenu;
}
else
{
    echo "formulaire vide";
}
?>
