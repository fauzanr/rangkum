<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">

    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jqueryui/jquery-ui.js"></script>
    
    <script src="assets/js/bootstrap.js"></script>

    <title>Ringkas</title>

    <style>
        body {
            height: 100vh;
            background-color: ;
        }
        textarea {
            width: 100%;
            border: 1px solid;
            border-radius: 4px;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#input_text').focus(function() {
                $(this).removeClass('border-danger');
                $(this).addClass('border-info');
            })

            $('#input_text').blur(function() {
                $(this).removeClass('border-info');
            })

            let spinner = $('#spinner');

            spinner.keyup(function(e) {
                validate(spinner.val());
            })

            $('#sample').click(function() {
                let dummy = `Konstitusi (bahasa Latin: constituante) atau Undang-undang Dasar atau disingkat UUD dalam negara adalah sebuah norma sistem politik dan hukum bentukan pada pemerintahan negara—biasanya dikodifikasikan sebagai dokumen tertulis. Hukum ini tidak mengatur hal-hal yang terperinci, melainkan hanya menjabarkan prinsip-prinsip yang menjadi dasar bagi peraturan-peraturan lainnya. Dalam kasus bentukan negara, konstitusi memuat aturan dan prinsip-prinsip entitas politik dan hukum. Istilah ini merujuk secara khusus untuk menetapkan konstitusi nasional sebagai prinsip-prinsip dasar politik, prinsip-prinsip dasar hukum termasuk dalam bentukan struktur, prosedur, wewenang dan kewajiban pemerintahan negara pada umumnya. Konstitusi umumnya merujuk pada penjaminan hak kepada warga masyarakatnya. Istilah konstitusi dapat diterapkan kepada seluruh hukum yang mendefinisikan fungsi pemerintahan negara. 
                Dalam bentukan organisasi konstitusi menjelaskan bentuk, struktur, aktivitas, karakter, dan aturan dasar organisasi tersebut.
                Jenis organisasi yang menggunakan konsep Konstitusi termasuk: 
                Organisasi pemerintahan (transnasional, nasional atau regional), Organisasi sukarela, Persatuan dagang, Partai politik, Perdagangan beras dan rempah-rempah.
                Konstitusi pada umumnya bersifat kodifikasi yaitu sebuah dokumen yang berisi aturan-aturan untuk menjalankan suatu organisasi pemerintahan negara. Namun dalam pengertian ini, konstitusi harus diartikan dalam artian tidak semuanya berupa dokumen tertulis (formal). Menurut para ahli ilmu hukum maupun ilmu politik konstitusi harus diterjemahkan termasuk kesepakatan politik, negara, kekuasaan, pengambilan keputusan, kebijakan dan distribusi maupun alokasi [1]. Konstitusi bagi organisasi pemerintahan negara yang dimaksud terdapat beragam bentuk dan kompleksitas strukturnya, terdapat pula konstitusi politik atau hukum akan tetapi mengandung pula arti konstitusi ekonomi [2] 
                Dewasa ini, istilah konstitusi sering di identikkan dengan suatu kodifikasi atas dokumen yang tertulis. Sama halnya dengan Inggris juga memiliki konstitusi, namun tidak dalam bentuk kodifikasi melainkan berdasarkan pada yurisprudensi dalam ketatanegaraan negara Inggris. 
                Istilah konstitusi berasal dari bahasa Inggris yaitu “Constitution”, dan berasal dari bahasa Belanda “constitutie”. Dalam bahasa latin (contitutio,constituere), sedangkan dalam bahasa Prancis yaitu “constiture”. Dalam bahasa Jerman yaitu “vertassung, konstitution”, sedangkan dalam ketatanegaraan RI diartikan sama dengan Undang – undang dasar. Konstitusi / UUD dapat diartikan peraturan dasar yang memuat ketentuan – ketentuan pokok dan menjadi satu sumber perundang- undangan. Konstitusi adalah keseluruhan peraturan baik yang tertulis maupun tidak tertulis yang mengatur secara mengikat cara suatu pemerintahan diselenggarakan dalam suatu masyarakat negara.
                Pengertian konstitusi menurut para ahli :
                1. K. C. Wheare, konstitusi adalah keseluruhan sistem ketatanegaraaan suatu negara yang berupa kumpulan peraturan yang membentuk mengatur /memerintah dalam pemerintahan suatu negara.
                2. Herman Heller, konstitusi mempunyai arti luas daripada UUD. Konstitusi tidak hanya bersifat yuridis tetapi juga sosiologis dan politis.
                3. Lasalle, konstitusi adalah hubungan antara kekuasaan yang terdapat di dalam masyarakat seperti golongan yang mempunyai kedudukan nyata di dalam masyarakat, misalnya kepala negara angkatan perang, partai politik, dsb.
                4. L.J Van Apeldoorn, konstitusi memuat baik peraturan tertulis maupun peraturan tak tertulis.
                5. Koernimanto Soetopawiro, istilah konstitusi berasal dari bahasa latin cisme yang berarti "bersama dengan" dan statute yang berarti "membuat sesuatu agar berdiri". Jadi konstitusi berarti menetapkan secara bersama.
                Konstitusi dalam arti absolut mempunyai 4 sub pengertian yaitu;
                1.  Konstitusi sebagai kesatuan organisasi yang mencakup hukum dan semua organisasi yang ada di dalam negara.
                2.  Konstitusi sebagai bentuk negara.
                3.  Konstitusi sebagai faktor integrasi.
                4.  Konstitusi sebagai sistem tertutup dari norma hukum yang tertinggi di dalam negara .
                Tujuan konstitusi yaitu:
                1.  Membatasi kekuasaan penguasa agar tidak bertindak sewenang – wenang. Hal ini dimaksudkan apabila tanpa membatasi kekuasaan penguasa, dikhawatirkan konstitusi tidak akan berjalan dengan baik dan bisa saja kekuasaan penguasa akan merajalela dan bisa merugikan rakyat banyak.
                2.  Melindungi HAM, maksudnya setiap penguasa berhak menghormati HAM orang lain dan hak memperoleh perlindungan hukum dalam hal melaksanakan haknya.
                3.  Pedoman penyelenggaraan negara. Maksudnya tanpa adanya pedoman konstitusi negara kita tidak akan berdiri dengan kokoh.
                Nilai konstitusi yaitu:
                1. Nilai normatif adalah suatu konstitusi yang resmi diterima oleh suatu bangsa dan bagi mereka konstitusi itu tidak hanya berlaku dalam arti hukum (legal), tetapi juga nyata berlaku dalam masyarakat dalam arti berlaku efektif dan dilaksanakan secara murni dan konsekuen.
                2. Nilai nominal adalah suatu konstitusi yang menurut hukum tetaplah berlaku, tetapi tidak sempurna. Ketidaksempurnaan itu disebabkan pasal – pasal tertentu tidak berlaku / tidak seluruh pasal – pasal yang terdapat dalam UUD itu berlaku bagi seluruh wilayah negara.
                3. Nilai semantik adalah suatu konstitusi yang berlaku hanya untuk kepentingan penguasa saja. Dalam memobilisasi kekuasaan, penguasa menggunakan konstitusi sebagai alat untuk melaksanakan kekuasaan politik.`
                
                    $('#input_text').empty();
                    $('#input_text').html(dummy);
            })

            $('#reset').click(function() {
                $('#input_text').empty();
            })

            let valid = false;
            $('#ringkas').click(function() {
                $('#error').hide();
                $('#input_text').removeClass('border-danger');

                let text = $('#input_text').html().trim();
                let jumlah = spinner.val();
                let bahasa = 'ID';
                if(validate(jumlah)) {
                    valid = true;
                }

                if(!text) {
                    $('#input_text').addClass('border-danger');
                } else if(valid) {
                    $('#result').hide();
                    $('.progress').fadeIn(100);

                    let input = {
                        text: text,
                        jumlah: jumlah,
                        bahasa: bahasa,
                    };
                    request(input);
                }
            })

            $('#inc').click(function() {
                if(spinner.val() < 1000000) {
                    spinner.val(function(i,oldval) {
                        return ++oldval;
                    })
                }
            })

            $('#dec').click(function() {
                if(spinner.val() > 1) {
                    spinner.val(function(i,oldval) {
                        return --oldval;
                    })
                }
            })

            function validate(jumlah) {
                if(Number.isInteger(parseInt(jumlah, 10))) {
                    if(jumlah > 0) {
                        return true;
                    }
                }
                alert('wrong input');
                return false;
            }

            function request(input) {
                $.ajax({
                    type: 'POST',
                    url: 'https://summarizer-iic.herokuapp.com/summarize/try',
                    dataType: 'json',
                    data:
                    {
                        text: input.text,
                        jumlah: input.jumlah,
                        bahasa: input.bahasa,
                    },
                    error: function()
                    {
                        request_error();
                    },
                    success: function(response, textStatus)
                    {
                        console.log('response: '+JSON.stringify(response.hasil));
                        console.log('text status: '+textStatus);
                        request_success(response, textStatus);
                    }
                });
            }

            function request_success(response, textStatus) {
                if(response) {
                    $('.progress').hide();
                    
                    $('.text_before').html('jumlah karakter awal: '+response.textLength);
                    $('.text_after').html('jumlah karakter ringkas: '+response.hasilLength);
                    let html = "";
                    response.hasil.forEach(function(val) {
                        html += val + "<br>";
                    })

                    $('#output_text').html(html);
                    $('#result').show('highlight', 1000);
                }
            }

            function request_error() {
                $('.progress').hide();
                $('#error').show();
            }

        })
    </script>

</head>
<body>
    
    <section class="p-3">
        <div class="row h-90">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header text-right">
                        <button id="sample" class="btn btn-sm btn-outline-secondary">contoh</button>
                        <button id="reset" class="btn btn-sm btn-outline-warning">Reset</button>
                        <button id="ringkas" class="btn btn-sm btn-outline-success">Ringkas</button>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-2"> 
                            <div class="input-group-prepend">
                                <button id="dec" class="btn btn-outline-secondary"><b>-</b></button>
                            </div>
                            <input id="spinner" class="form-control is-invalid" type="number" style="width:100px" value="10">
                            <div class="input-group-append">
                                <button id="inc" class="btn btn-outline-secondary"><b>+</b></button>
                            </div>
                        </div>
                        <textarea id="input_text" rows="10" class="border p-2" placeholder="Masukkan paragraf disini..."></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="progress" style="display:none;">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">memuat</div>
                </div>
                <div class="alert alert-danger" id="error" style="display:none;">koneksi gagal.</div>
                <div id="result" class="card" style="display:none;">
                    <div class="card-header">
                        Result
                    </div>
                    <div class="card-body">
                        <div id="slider"></div>
                        <small class="text_before"></small><br>
                        <small class="text_after"></small><br>
                        <small>hasil: </small><br>
                        <p id="output_text" class="border m-0 p-2"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>