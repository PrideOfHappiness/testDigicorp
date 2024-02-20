<?php 
    class tokenManagerIndex{
        public static $namaUser = [];

        public static function generate($user){
            if(!isset(self::$namaUser[$user])){
                self::$namaUser[$user] = [];
            }

            $token = bin2hex(random_bytes(20));
            array_push(self::$namaUser[$user], $token);
            if(count(self::$namaUser[$user]) > 10){
                array_shift(self::$namaUser[$user]);
            }

            return $token;
        }

        public static function verify_token($user, $token){
            if(isset(self::$namaUser[$user]) && isset($token)){
                $index = array_search($token, self::$namaUser[$user]);
                unset(self::$namaUser[$user][$index]);
                return true;
            }else{
                return false;
            }
        }
    }

    //Tes Token dan Validasi
    $user = 'Digicorp';
    $user1 = 'Ika Yuliani';
    $user2 = 'Ursulin';

    $token1 = tokenManagerIndex::generate($user);
    echo "Nama Pengguna: $user , Token: $token1 <br>";

    $token2 = tokenManagerIndex::generate($user1);
    echo "Nama Pengguna: $user1 , Token: $token2 <br>";

    $token3 = tokenManagerIndex::generate($user2);
    echo "Nama Pengguna: $user2 , Token: $token3 <br>";

    $validasi1 = tokenManagerIndex::verify_token($user, $token1);
    echo "Verifikasi token: " . ($validasi1 ? "True" : "False") . "<br>";
?>