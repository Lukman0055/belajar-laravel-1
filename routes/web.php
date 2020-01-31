<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hallo', function () {
    return 'Halo ini Aplikasi Laravel Pertama Saya'.
    '<br>Laravel Is Magical Framework';
});
Route::get('about', function () {
    return '<h1>Halo</h1>'.
    'Selamat Datang di webapp saya<br>'.
    'Laravel, emang kerennn';
});
Route::get('about/profil/lukman', function () {
    return
    'Nama : Lukman<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/romi', function () {
    return
    'Nama : romi<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/alfi', function () {
    return
    'Nama : Alfi<br>'.
    'Kelas : XI RPL 1';
});
Route::get('about/profil/zaky', function () {
    return
    'Nama : zaky<br>'.
    'Kelas : XI MM 1';
});
Route::get('about/profil/perry', function () {
    return
    'Nama : Perry<br>'.
    'Kelas : XI TKJ 1';
});

// route parameter
Route::get('biodata/{nama}',function($a){
    return 'Halo ini biodata '.$a;
});

Route::get('autobiografi/{nama}/{alamat}/{umur}',function($a,$b,$c){
    return  'Nama : '.$a.
            '<br>Alamat : '.$b.
            '<br>Umur : '.$c.' thn';
});

Route::get('nama/{param?}',function($a="Lukman")
{
        return 'Your Name Is '.$a;
});

Route::get('pesan/{makan?}/{minum?}/{harga?}',function($a = null,$b = null,$c = null)
{
        if (isset($a)) {
            echo "Anda memesan $a";
        }
        if (isset($b)) {
            echo " & $b";
        }
        if (isset($c)) {
                if ($c >= 35000) {
                    $sz = "large";
                }
                elseif ($c >= 25000) {
                    $sz = "medium";
                }
                elseif ($c > 0) {
                    $sz = "small";
                }
                else {
                    return " Harga tidak valid";
                }
                    echo " Size $sz dengan harga $c";
        }
        if (!$a && !$b) {
            return "Silahkan Pesan Terlebih Dahulu";
        }
});

Route::get('tni/{nama?}/{bb?}/{umur?}',function($a = null,$b = null,$c = null)
{
        if (isset($a)) {
            echo "Nama Anda $a<br>";
        }
            if (isset($b)) {
                    if ($b >= 76 && $b <= 100) {
                        $sz = "Anda harus turun berat badan";
                    }
                    elseif ($b >= 65 && $b <= 75) {
                        $sz = "Berat badan anda ideal";
                    }
                    elseif ($b >= 50 && $b <= 64) {
                        $sz = "Naikan berat badan anda";
                    }
                    elseif ($b >= 1 && $b <= 50) {
                        $sz = "Anda kurang nutrisi";
                    }
                    else {
                        return " berat tidak valid";
                    }
                        echo " $sz<br>";
            }
            if (isset($c)) {
                if ($b >= 50 && $b <= 60) {
                    $sz = "perwira";
                }
                elseif ($b >= 40) {
                    $sz = "laksamana";
                }
                elseif ($b >= 30) {
                    $sz = "jendral";
                }
                else {
                    return " umur tidak valid";
                }
                    echo " Pangkat anda $sz";
        }
        if (!$a && !$b) {
            return "Silahkan Isi Terlebih Dahulu";
        }
});

//akses model post
        Route::get('/testmodel', function() {
            $query = App\siswa::all() ;
            return $query;
            });
        Route::get('/testmodel/1', function() {
            $query = App\Post::find(1) ;
            return $query;
            });
        Route::get('/testmodel/2', function() {
            $query = App\Post::where('title','like','%cepat nikah%')->get(); ;
            return $query;
            });
        Route::get('/testmodel/3', function() {
            $post = App\Post::find(1);
            $post->title = "Ciri Keluarga Sakinah";
            $post->save();
            return $post;
            });
        Route::get('/testmodel/4', function() {
            $post = App\Post::find(1);
            $post->delete();
        });
        Route::get('/testmodel/5', function() {
            $post = new App\Post;
            $post->title = "7 Amalan Pembuka Jodoh";
            $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
            $post->save();
            return $post;
            // check record baru di database
        });


            Route::get('barang/ambil3', function() {
                $query = App\Barang::all()
                ->take(3);
                return $query;
                });

            Route::get('barang/select', function() {
                $query = App\Barang::select('Nama_brg','Nomor_brg','Stok')->first();
                return $query;
                });

            Route::get('barang/tambah/{Nama_brg}/{Nomor_brg}/{Berat_brg}/{Deskripsi}/{Jenis_brg}/{Harga_brg}/{Stok}',
            function($Nama,$Nomor,$Berat,$Deskripsi,$Jenis,$Harga,$Stok) {
                $post = new App\Barang;
                $post->Nama_brg  = $Nama;
                $post->Nomor_brg = $Nomor;
                $post->Berat_brg = $Berat;
                $post->Deskripsi = $Deskripsi;
                $post->Jenis_brg = $Jenis;
                $post->Harga_brg = $Harga;
                $post->Stok = $Stok;
                $post->save();
                return $post;
            }   );

            Route::get('latihan','LatihanController@halo');
            Route::get('p1/{a?}/{b?}','LatihanController@pertambahan');
            Route::get('p2/{a?}/{b?}','LatihanController@perkalian');
            Route::get('p3/{a?}/{b?}','LatihanController@pembagian');
            Route::get('p4/{a?}/{b?}','LatihanController@pengurangan');
            Route::get('/data-loop','LatihanController@loop');
            Route::get('/data-loop1','LatihanController@loop1');
            Route::get('/data-loop2','LatihanController@loop2');
            Route::get('/data-loop3','TabunganController@index');
            Route::get('/data-loop4/{id}','TabunganController@show');
            Route::get('/data-loop5/{n}/{nm}/{k}/{j}','TabunganController@store');
            Route::get('/data-loop6/{id}/{n}/{nm}/{k}/{j}','TabunganController@edit');


            Route::get('/tgs-uk','CostumerController@index');
            Route::get('/tgs-uk1/{id}','CostumerController@show');
            Route::get('/tgs-uk2/{id}','CostumerController@delete');
            Route::get('/tgs-uk3/{cc}/{nm}/{em}/{ct}/{cy}/{add}/{cn}','CostumerController@store');
            Route::get('/tgs-uk4/{id}/{cc}/{nm}/{em}/{ct}/{cy}/{add}/{cn}','CostumerController@edit');


            // /passing data
            Route::get('pass','PracticeController@pass');
            Route::get('latihan1','PracticeController@pass1');
            Route::get('latihan2','PracticeController@pass2');
            Route::get('latihan3/{id}','PracticeController@pass3');
            Route::get('barang','BarangController@index');
            Route::get('barang1/{id}','BarangController@index1');

