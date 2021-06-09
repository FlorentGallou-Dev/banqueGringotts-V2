<?php

    class Customer {
        protected int $id_cust;
        protected string $cust_fist_name;
        protected string $cust_last_name;
        protected string $cust_birth_date;
        protected string $cust_sex;
        protected int $cust_street_number;
        protected string $cust_street_name;
        protected int $cust_zip_code;
        protected string $cust_city;
        protected string $cust_email;
        protected string $cust_password;

        //setter getter for id customer
        public function setIdCust(int $id):void {
            $this->id_cust = $id;
        }
        public function getIdCust():int {
            return $this->id_cust;
        }

        //setter getter for customer first name
        public function setCustFirstName(string $first_name):void {
            $this->cust_fist_name = $first_name;
        }
        public function getCustFirstName():string {
            return $this->cust_fist_name;
        }

        //setter getter for customer last name
        public function setCustLastName(string $last_name):void {
            $this->cust_last_name = $last_name;
        }
        public function getCustLastName():string {
            return $this->cust_last_name;
        }

        //setter getter for customer last name
        public function setCustBirthDate(string $birth_date):void {
            $this->cust_birth_date = $birth_date;
        }
        public function getCustBirthDate():string {
            return $this->cust_birth_date;
        }

        //setter getter for customer sex
        public function setCustSex(string $sex):void {
            $this->cust_sex = $sex;
        }
        public function getCustSex():string {
            return $this->cust_sex;
        }

        //setter getter for customer street number
        public function setCustStreetNumber(int $street_number):void {
            $this->cust_street_number = $street_number;
        }
        public function getCustStreetNumber():int {
            return $this->cust_street_number;
        }

        //setter getter for customer street name
        public function setCustStreetName(string $street_name):void {
            $this->cust_street_name = $street_name;
        }
        public function getCustStreetName():string {
            return $this->cust_street_name;
        }

        //setter getter for customer zip code
        public function setCustZipCode(int $zip_code):void {
            $this->cust_zip_code = $zip_code;
        }
        public function getCustZipCode():int {
            return $this->cust_zip_code;
        }

        //setter getter for customer city
        public function setCustCity(string $city):void {
            $this->cust_city = $city;
        }
        public function getCustCity():string {
            return $this->cust_city;
        }

        //setter getter for customer email
        public function setCustEmail(string $email):void {
            $this->cust_email = $email;
        }
        public function getCustEmail():string {
            return $this->cust_email;
        }

        //setter getter for customer password
        public function setCustPassword(string $password):void {
            $this->cust_password = $password;
        }
        public function getCustPassword():string {
            return $this->cust_password;
        }

        public function __construct() {
            //---------------------------------------------------------ICI
        }

    }