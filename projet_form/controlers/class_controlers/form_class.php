<?php
class form
{
    // crée la variable $data pour mettre les données
    private $id_user;
    private $login;
    private $password;
    private $repeatpassword;
    private $id_group;

    // fonction pour envoyer les données dans $data
    public function __construct($id_user = array(), $login = array(), $password = array(), $repeatpassword = array() , $id_group = array())
    {
        $this->id_user = $id_user;
        $this->login = $login;
        $this->password = $password;
        $this->password = $repeatpassword;
        $this->id_group = $id_group;

    }
    public function getId_user()
    {
        return $this->id_user;
    }
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getRepeatpassword()
    {
        return $this->repeatpassword;
    }
    public function setRepeatpassword($repeatpassword)
    {
        $this->repeatpassword = $repeatpassword;
    }
    public function getId_group()
    {
        return $this->id_group;
    }
    public function setId_group($id_group)
    {
        $this->id_group = $id_group;
    }





    //fonction qui valide la connexion de l'utilisateur
    public function sumbit_connexion_users()
    {
        if(isset($_POST['connexion'])) {

            $loginconnexion = htmlspecialchars($_POST['loginconnexion']);
            $passwordconnexion = htmlspecialchars($_POST['passwordconnexion']);

            if (!empty($loginconnexion) AND !empty($passwordconnexion)) {

                $passwordconnexion = md5($passwordconnexion);
                $this->login = $loginconnexion;
                $this->password = $passwordconnexion;

                //vérification de l'utilisateur lors de sa connexion
                verifier_users($this->login,$this->password);
            }
            else
            {
                echo "Remplir tous les champs";
            }
        }
    }

    //fonction qui valide l'inscription de l'utilisateur
    public function sumbit_formulaire_users()
    {
        if(isset($_POST['valider'])){
            $login=htmlspecialchars($_POST['login']);
            $password=htmlspecialchars($_POST['password']);
            $repeatpassword=htmlspecialchars($_POST['repeatpassword']);
            $id_group=htmlspecialchars($_POST['groupe']);


            if($login&&$password&&$repeatpassword&&$id_group) {
                if(strlen($login) >= 2) {
                    if(strlen($password) >= 4)
                    {
                        if($repeatpassword == $password)
                        {
                            $password = md5($password);
                            $this->login = $login;
                            $this->password = $password;
                            $this->repeatpassword = $repeatpassword;
                            $this->id_group = $id_group;

                            //enregistrement de l'inscription
                            enregister_users($this->login,$this->password,$this->id_group);

                        }else echo  " *Veuillez tapez le même mot de passe que le précédent*";
                    }else echo " *Mot de passe de trop court (4 caractères minimum)*";
                }else echo " *login trop court (4 caractères minimum)* ";
            }else echo " *remplir tous les champs* ";
        }
    }




}