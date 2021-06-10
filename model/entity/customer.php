<?php

    class Customer {
        const SEX = ["M.", "Mme", "Mlle"];

        protected int $id_cust;
        protected string $cust_fist_name;
        protected string $cust_last_name;
        protected DateTime $cust_birth_date;
        protected string $cust_sex;
        protected int $cust_street_number;
        protected string $cust_street_name;
        protected int $cust_zip_code;
        protected string $cust_city;
        protected string $cust_email;
        protected string $cust_password;

        //setter getter for SEX const
        public function setSEXConst(string $newSex):void {
            if (empty($newSex)) {
                session_start();
                $_SESSION["errorForm"]["newSexErr"] = "Nouveau sexe mal défini";
            } else {
                array_push(self::SEX, $newSex);
            }
        }
        public function getSEXConst():array {
            return self::SEX;
        }

        //setter getter for id customer
        public function setIdCust(int $id):void {
            if (empty($id)) {
                session_start();
                $_SESSION["errorForm"]["idErr"] = "Mauvais Id";
            } else {
                $this->id_cust = $id;
            }
        }
        public function getIdCust():int {
            return $this->test_input($this->id_cust);
        }

        //setter getter for customer first name
        public function setCustFirstName(string $first_name):void {
            if (empty($first_name) || strlen($first_name) < 3 || strlen($first_name) > 15) {
                session_start();
                $_SESSION["errorForm"]["firstNameErr"] = "Prénom non valide, doit contenir entre 3 et 15 caractères.";
            } else {
                $this->cust_fist_name = $first_name;
            }
        }
        public function getCustFirstName():string {
            return $this->test_input($this->cust_fist_name);
        }

        //setter getter for customer last name
        public function setCustLastName(string $last_name):void {
            if (empty($last_name) || strlen($last_name) < 3 || strlen($last_name) > 15) {
                session_start();
                $_SESSION["errorForm"]["lastNameErr"] = "Nom non valide, doit contenir entre 3 et 15 caractères.";
            } else {
                $this->cust_last_name = $last_name;
            }
        }
        public function getCustLastName():string {
            return $this->test_input($this->cust_last_name);
        }

        //setter getter for customer birth date
        public function setCustBirthDate(DateTime $birth_date):void {
            if (empty($birth_date)) {
                session_start();
                $_SESSION["errorForm"]["birthDateErr"] = "Date non valide.";
            } else {
                $this->cust_birth_date = $birth_date;
            }
        }
        public function getCustBirthDate():string {
            return date_format($this->cust_birth_date, 'd/m/Y H:i:s');
        }

        //setter getter for customer sex
        public function setCustSex(string $sex):void {
            if (!empty($birth_date) && in_array($sex, self::SEX)) {
                $this->cust_sex = $sex;
            } else {
                session_start();
                $_SESSION["errorForm"]["sexErr"] = "Sexe non valide.";
            }
        }
        public function getCustSex():string {
            return $this->test_input($this->cust_sex);
        }

        //setter getter for customer street number
        public function setCustStreetNumber(int $street_number):void {
                $this->cust_street_number = $street_number;
        }
        public function getCustStreetNumber():int {
            return $this->test_input($this->cust_street_number);
        }

        //setter getter for customer street name
        public function setCustStreetName(string $street_name):void {
            if (empty($street_name) || strlen($street_name) < 3 || strlen($street_name) > 255) {
                session_start();
                $_SESSION["errorForm"]["streetNameErr"] = "nom de rue non valide.";
            } else {
                $this->cust_street_name = $street_name;
            }
        }
        public function getCustStreetName():string {
            return $this->test_input($this->cust_street_name);
        }

        //setter getter for customer zip code
        public function setCustZipCode(int $zip_code):void {
            if (empty($birth_date) || $zip_code < 1000) {
                session_start();
                $_SESSION["errorForm"]["zipCodeErr"] = "Code postal non valide.";
            } else {
                $this->cust_zip_code = $zip_code;
            }
        }
        public function getCustZipCode():int {
            return $this->test_input($this->cust_zip_code);
        }

        //setter getter for customer city
        public function setCustCity(string $city):void {
            if (!empty($city) || strlen($city) < 3 || strlen($city) > 255) {
                session_start();
                $_SESSION["errorForm"]["streetNameErr"] = "Ville non valide.";
            } else {
                $this->cust_city = $city;
            }
        }
        public function getCustCity():string {
            return $this->test_input($this->cust_city);
        }

        //setter getter for customer email
        public function setCustEmail(string $email):void {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->cust_email = $email;
            } else {
                session_start();
                $_SESSION["errorForm"]["streetNameErr"] = "Email non valide.";
            }
        }
        public function getCustEmail():string {
            return $this->test_input($this->cust_email);
        }

        //setter getter for customer password
        public function setCustPassword(string $newPassword, string $confirmPassword):void {
            if(isset($newPassword) && isset($confirmPassword)) {
                if($newPassword === $confirmPassword) {
                    $this->cust_password = password_hash($newPassword, PASSWORD_DEFAULT);
                } else {
                    session_start();
                    $_SESSION["errorForm"]["passwordErr"] = "Mots de passe différents.";
                }
            } else {
                session_start();
                $_SESSION["errorForm"]["passwordErr"] = "Veuillez saisir votre mot de passe.";
            }
            
        }
        public function getCustPassword():string {
            return $this->cust_password;
        }

        //hydratation class for customer
        public function hydrate(array $data) {
            foreach ($data as $key => $value) {
              $method = "set". ucfirst($key);
              if(method_exists($this, $method)) {
                $this->$method($value);
              } elseif ($key === "newPassword") {
                $this->setCustPassword($data["newPassword"], $data["confirmPassword"]);
              }
            }
        }

        function __construct(array $data = null)
        {
            if($data) {
                $this->hydrate($data);
            }
        }

        //Private function to test parameters before using it in html
        private function test_input($data) {
            $data = trim($data); //used to get rid of start and end characters
            $data = stripslashes($data); // used to get rid of antislashs
            $data = htmlspecialchars($data); // converts html special chars into text characters
            return $data;
        }
    }