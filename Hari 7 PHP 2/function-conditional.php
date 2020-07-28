<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini
        function greetings($name){
            return "Halo $name, Selamat Datang di Sanbercode!";
        }

        // Hapus komentar untuk menjalankan code!
        echo greetings("Bagas");
        echo "<br>";
        echo greetings("Wahyu");
        echo "<br>";
        echo greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
 
        // Code function di sini 
        function reverseString($name){

            $hasil = "";
            $kata = strlen($name);
            for($i =1;$i < $kata; $i++){
                $hasil .= substr($name, $kata-$i,1);
            }
            return $hasil;
        }

        // Hapus komentar di bawah ini untuk jalankan Code
        echo "abduh = ";
        echo reverseString("abduh");
        echo "<br>";
        echo "Sanbercode = ";
        echo reverseString("Sanbercode");
        echo "<br>";
        echo "We Are Sanbers Developers = ";
        echo reverseString("We Are Sanbers Developers");
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : true
            palindrome("jambu") => output : false
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */

        // function reverseString($name){

        //     $hasil = "";
        //     $kata = strlen($name);
        //     for($i =1;$i < $kata; $i++){
        //         $hasil .= substr($name, $kata-$i,1);
        //     }
        //     return $hasil;
        // }
        // Code function di sini
        function palindrome($str){
            $result = "";
            for($i = strlen($str)-1;$i >= 0;$i--){
                $result .=$str[$i];
            }
            if($result === $str){
                echo "$str output: TRUE ";
            }else{
                echo "$str output: FALSE ";
            } 
        }
        // function palindrome($name){
        //     $result = "";
        //     $kata = strlen($name);
        //     for($i = count($kata)-1; $i >= 0; $i--){
        //         $result .= $kata[$i];
        //     }
        //     if($result === $name){
        //         echo "TRUE";
        //     } else {
        //         echo "FALSE";
        //     }
        //     return $result;
        // }

        // Hapus komentar di bawah ini untuk jalankan code
        echo palindrome("civic") ; // true
        echo "<br>";
        echo palindrome("nababan") ; // true
        echo"<br>";
        echo palindrome("jambaban"); // false
        echo "<br>";
        echo palindrome("racecar"); // true
    ?>
</body>
</html>