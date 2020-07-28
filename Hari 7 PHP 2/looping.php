<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini
        echo $jdl = "<b>LOOPING PERTAMA</b> <br>";
        for($i = 2; $i < 22; $i+=2){
            echo $i . " -  I Love PHP <br>";
        }
        echo "<br>";
        echo $jdl = "<b>LOOPING KEDUA</b> <br>";
        $i = 20;
        while($i > 0){
            echo $i. " -  I Love PHP <br>";
        $i-=2;
        }
        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        $hasil = [];
        foreach($numbers as $key=> $numb){
            $hasil [] = $numb % 5;
        }
        echo "<br><br>";
        echo "Array sisa baginya adalah:  "; 
        print_r($hasil);
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = [
            ['id' => '001', 
            'name'=>'Keyboard Logitek',
            'price' => 60000,
            'description' => 'Keyboard yang mantap untuk kantoran',
            'source'=> 'logitek.jpeg'    
        ], 
            ['id' =>'002', 
            'name'=>'Keyboard MSI',
            'price' => 300000, 
            'description' => 'Keyboard gaming MSI mekanik', 
            'source' =>'msi.jpeg'
        ],
            ['id'=>'003', 
            'name'=>'Mouse Genius', 
            'price'=>50000,
            'description'=>'Mouse Genius biar lebih pinter', 
            'source'=>'genius.jpeg'
        ],
            ['id'=>'004',
            'name' =>'Mouse Jerry', 
            'price' => 30000, 
            'description'=>'Mouse yang disukai kucing',
            'source'=> 'jerry.jpeg'
        ]
    ];
        echo "<pre>";
        print_r($items);
        echo "</pre>";
        // Output: 
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";
        for($i=1;$i<= 6;$i++){
            for($j=$i; $j>1;$j--){
                echo "*";
            }
            echo "<br>";
        }       
    ?>

</body>
</html>