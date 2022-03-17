<?php
    
    class User{
        //Propriété 
        private $id_;
        private $nom_;
        private $mdp_;
        
        


        //Méthodes + constructeur
        public function __construct($id_,$NewNom, $NewMdp)
        {
            $this-> nom_ = $NewNom;
            $this-> mdp_ = $NewMdp;
            $this->id_ = $id_;
        }
        public function getNom()
        {
            return $this->nom_;
            
        }

        public function SeConnecter($UnMotDePasse)
        {
            if ($UnMotDePasse ==$this->mdp_)
            {
                return true;
            }
            else
            {
                return false;
            }
 
        }
       
    }

?>