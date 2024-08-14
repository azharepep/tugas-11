<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas azhar ganteng</title>
    <style>
        table {
            width: 100%;

        }
        th, td {
            border: 2px solid pink;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: red;
        }
    </style>
</head>
<body>
    <table>
        <body>
            <tr>
                <th>Position</th>
                <th>link</th>
                <th>Title</th>
                <th>Deskripsi</th>
            </tr> 
            <?php
                $data = [
                    [
                        "position" => 1,
                        "url" => "https://www.nike.com/",
                        "title" => "Nike Just Do It",
                        "description" => "Nike menghadirkan produk, pengalaman, dan layanan inovatif untuk menginspirasi para atlet."
                    ],
                    [
                        "position" => 2,
                        "url" => "https://www.instagram.com/nike/?hl=de",
                        "title" => "Nike - Instagram foto dan vidio",
                        "description" => "255 juta Pengikut, 147 Mengikuti, 1019 Postingan - Lihat foto dan video Instagram dari Nike"
                      ],
                    [
                        "position" => 3,
                        "url" => "https://twitter.com/nike",
                        "title" => "Nike - Twitter",
                        "description" => "Selamat datang di Nike FC. Kami bukan klub. Kami adalah komunitas. Jika Anda menyukai permainan sepak bola, Anda adalah bagian dari Nike FC."
                    ],
                    [
                        "position" => 4,
                        "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
                        "title" => "Nike - Wikipedia",
                        "description" => "Nike, Inc merupakan perusahaan multinasional Amerika yang bergerak di bidang desain, pengembangan, manufaktur, serta pemasaran dan penjualan alas kaki di seluruh dunia"
                    ],
                    [
                        "position" => 5,
                        "url" => "https://www.youtube.com/user/nike",
                        "title" => "Nike - YouTube",
                        "description" => "Kami akan terus memperjuangkan kesetaraan dan berupaya untuk mendobrak hambatan bagi atlet* di seluruh dunia."
                    ],
                    [
                        "position" => 6,
                        "url" => "https://www.footlocker.com/category/brands/nike.html",
                        "title" => "Sepatu, Pakaian, dan Aksesori Nike - Foot Locker",
                        "description" => "Belanja koleksi terbaru Nike di Foot Locker. Temukan koleksi sepatu kets terbaru dari merek seperti Jordan, Nike, Under Armour dan masih banyak jenis lainnya"
                    ]
                ];

                foreach ($data as $row) {
                    print "<tr>";
                    print "<td>{$row['position']}</td>";
                    print "<td><a href='{$row['url']}' target='_blank'>{$row['url']}</a></td>";
                    print "<td>{$row['title']}</td>";
                    print "<td>{$row['description']}</td>";
                    print "</tr>";
                }
            ?>

        </body>
    </table>
</html>
