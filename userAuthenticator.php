<?php

        function isLoggedIn()
        {
                if(isset($_SESSION['username']))
                {
                        return true;
                }
                else
                {
                        return false;
                }
        }

        function authenticate($username, $password)
        {
                if($username == 'null' && $password == 'null')
                {
                        return true;
                }
                else
                {
                        return false;
                }
        }

        function logUserIn($username)
        {
                session_start();
                $_SESSION['username'] = $username;

        }

        function logout()
        {
                session_destroy();
                session_regenerate_id(true);
                redirectToLogin();
        }

        function redirectToLogin()
        {
                header('location: login.php');
        }
