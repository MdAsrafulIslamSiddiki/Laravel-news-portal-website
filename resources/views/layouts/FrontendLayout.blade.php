<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Internationaltv24 - @yield('title', 'Homepage')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kalpurush&display=swap" rel="stylesheet">

    {{-- <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet"> --}}

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid topbar d-lg-block">
        <div class="row d-flex justify-content-between align-items-center bg-dark px-lg-5">
            <div class="col-6 col-lg-3">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item ">
                            <p class="nav-link text-white small mb-0" href="#" id="currentDate"></p>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-6 col-lg-2 text-right d-md-block">
                
                <!-- Custom Dropdown with Search (using Select2) -->
                <div class="language-dropdown notranslate">
                    <select id="customLangSelector" onchange="setLanguageFromDropdown()">
                        <option value="bn">বাংলা</option>
                        <option value="en">English</option>
                        <option value="fr">Français</option>
                        <option value="hi">हिन्दी</option>
                        <option value="oc">Occitan</option>
                        <option value="as">অসমীয়া</option>
                        <option value="ay">Aymara</option>
                        <option value="ga">Gaeilge</option>
                        <option value="is">Íslenska</option>
                        <option value="awa">अवधी</option>
                        <option value="ach">Acholi</option>
                        <option value="az">Azərbaycan dili</option>
                        <option value="aa">Afar</option>
                        <option value="af">Afrikaans</option>
                        <option value="ab">Abkhaz</option>
                        <option value="av">Avar</option>
                        <option value="am">Amharic</option>
                        <option value="ar">العربية</option>
                        <option value="hy">Հայերեն</option>
                        <option value="sq">Shqip</option>
                        <option value="alz">Avar</option>
                        <option value="ace">Assiniboine</option>
                        <option value="yua">Yukatek Maya</option>
                        <option value="uk">Українська</option>
                        <option value="ug">ئۇيغۇرچە</option>
                        <option value="yo">Yorùbá</option>
                        <option value="en">English</option>
                        <option value="ig">Igbo</option>
                        <option value="it">Italiano</option>
                        <option value="yi">ייִדיש</option>
                        <option value="iu-Latn">Inuktitut (Latin)</option>
                        <option value="iu">Inuktitut (Syllabics)</option>
                        <option value="id">Bahasa Indonesia</option>
                        <option value="iba">Iban</option>
                        <option value="sah">Саха тыла</option>
                        <option value="ilo">Ilokano</option>
                        <option value="uz">O'zbek</option>
                        <option value="udm">Udmurt</option>
                        <option value="ur">اردو</option>
                        <option value="ee">Aeway</option>
                        <option value="et">Eesti</option>
                        <option value="or">ଓଡ଼ିଆ</option>
                        <option value="war">Waray</option>
                        <option value="cy">Welsh </option>
                        <option value="om">Oromo</option>
                        <option value="wo">Wolof</option>
                        <option value="os">Ossetian</option>
                        <option value="trp">Kokborok</option>
                        <option value="kk">Kazakh</option>
                        <option value="co">Corsican</option>
                        <option value="ca">Català</option>
                        <option value="kr">Kanuri</option>
                        <option value="kn">Kannada</option>
                        <option value="pam">Kapampangan</option>
                        <option value="kl">Kalaliisut</option>
                        <option value="kg">Kikongo</option>
                        <option value="cgg">Kiga</option>
                        <option value="ktu">Kituba</option>
                        <option value="rw">Kinyarwanda</option>
                        <option value="ky">Kyrgyz</option>
                        <option value="ku">Kurdish (Kurmanji)</option>
                        <option value="ckb">Kurdish (Sorani)</option>
                        <option value="kek">K'iche</option>
                        <option value="qu">Quechu</option>
                        <option value="gom">Konkani</option>
                        <option value="kv">Komi</option>
                        <option value="ko">한국어 (Korean)</option>
                        <option value="yue">Cantonese</option>
                        <option value="kri">Creole</option>
                        <option value="crh-Latn">Crimean Tatar (Latin)</option>
                        <option value="crh">Къырым Татар (Crimean Tatar Cyrillic)</option>
                        <option value="hr">Hrvatski</option>
                        <option value="kha">Khasi</option>
                        <option value="km">ខ្មែរ (Khmer)</option>
                        <option value="gaa">Ga</option>
                        <option value="gu">ગુજરાતી (Gujarati)</option>
                        <option value="gn">Guarani</option>
                        <option value="gl">Galego</option>
                        <option value="el">Ελληνικά (Greek)</option>
                        <option value="ch">Chamorro</option>
                        <option value="ny">Chichewa</option>
                        <option value="zh-TW">Traditional Chinese</option>
                        <option value="zh-CN">Simplified Chinese</option>
                        <option value="chk">Chukchi</option>
                        <option value="cv">Chuvash</option>
                        <option value="cs">Čeština</option>
                        <option value="ce">Chechen</option>
                        <option value="ceb">Cebuano</option>
                        <option value="dz">ཇོང་ཁ (Dzongkha)</option>
                        <option value="ka">ქართული (Georgian)</option>
                        <option value="ja">日本語 (Japanese)</option>
                        <option value="zap">Zapotec</option>
                        <option value="jw">Javanese</option>
                        <option value="jam">Jamaican Patois</option>
                        <option value="de">Deutsch (German)</option>
                        <option value="kac">Jingpo</option>
                        <option value="dyu">Zulu</option>
                        <option value="zu">isiZulu (Zulu)</option>
                        <option value="xh">Xhosa</option>
                        <option value="ak">Twi</option>
                        <option value="tyv">Tuvan</option>
                        <option value="tpi">Tok Pisin</option>
                        <option value="to">Le Tongan</option>
                        <option value="ber-Latn">Tamazight</option>
                        <option value="ber">Tamazight (Tifinagh)</option>
                        <option value="ndc-ZW">Dawa</option>
                        <option value="nl">Nederlands (Dutch)</option>
                        <option value="din">Dinka</option>
                        <option value="doi">Dogri</option>
                        <option value="dov">Dombi</option>
                        <option value="da">Dansk (Danish)</option>
                        <option value="tg">Tajik</option>
                        <option value="tt">Tatar</option>
                        <option value="ta">தமிழ் (Tamil)</option>
                        <option value="ty">Tahitian</option>
                        <option value="ti">Tigrinya</option>
                        <option value="bo">བོད་ཡིག (Tibetan)</option>
                        <option value="tiv">Tiv</option>
                        <option value="tum">Tumbuka</option>
                        <option value="tk">Türkmen</option>
                        <option value="tr">Türkçe (Turkish)</option>
                        <option value="tcy">Tulu</option>
                        <option value="tet">Tetum</option>
                        <option value="te">తెలుగు (Telugu)</option>
                        <option value="th">ภาษาไทย (Thai)</option>
                        <option value="fa-AF">دری (Dari)</option>
                        <option value="dv">Dhivehi</option>
                        <option value="bm-Nkoo">Na'vi</option>
                        <option value="no">Norsk (Norwegian)</option>
                        <option value="nhe">Nahuatl (Eastern Huasteca)</option>
                        <option value="nus">Nuer</option>
                        <option value="new">नेपाली (Newar)</option>
                        <option value="ne">नेपाली (Nepali)</option>
                        <option value="nr">Ndebele (South)</option>
                        <option value="pt-PT">Português (Portugal)</option>
                        <option value="pt">Português (Brazil)</option>
                        <option value="ps">پښتو (Pashto)</option>
                        <option value="pag">Pangasinan</option>
                        <option value="pa">ਪੰਜਾਬੀ (Gurmukhi Punjabi)</option>
                        <option value="pa-Arab">پنجابی (Shahmukhi Punjabi)</option>
                        <option value="pap">Papiamento</option>
                        <option value="pl">Polski (Polish)</option>
                        <option value="fon">Fon</option>
                        <option value="fr">Français (French)</option>
                        <option value="fr-CA">Français (Canada)</option>
                        <option value="fa">فارسی (Persian)</option>
                        <option value="fj">Fijian</option>
                        <option value="fi">Suomi (Finnish)</option>
                        <option value="tl">Filipino</option>
                        <option value="ff">Fulani</option>
                        <option value="fo">Føroyskt (Faroese)</option>
                        <option value="fur">Friulian</option>
                        <option value="fy">Frisian</option>
                        <option value="bs">Bosanski (Bosnian)</option>
                        <option value="bci">Baulé</option>
                        <option value="bts">Batak Simalungun</option>
                        <option value="btx">Batak Karo</option>
                        <option value="bbc">Batak Toba</option>
                        <option value="bm">Bamanankan (Bambara)</option>
                        <option value="my">မြန်မာစာ (Burmese)</option>
                        <option value="ban">Bali</option>
                        <option value="bal">بلوچی (Balochi)</option>
                        <option value="ba">Башҡорт теле (Bashkir)</option>
                        <option value="eu">Euskara (Basque)</option>
                        <option value="bik">Bicolano</option>
                        <option value="bua">Bura</option>
                        <option value="bg">Български (Bulgarian)</option>
                        <option value="bew">Betawi</option>
                        <option value="bem">Bemba</option>
                        <option value="be">Беларуская (Belarusian)</option>
                        <option value="br">Brezhoneg (Breton)</option>
                        <option value="vi">Tiếng Việt (Vietnamese)</option>
                        <option value="vec">Veneto (Venetian)</option>
                        <option value="ve">Tshivenda</option>
                        <option value="bho">भोजपुरी (Bhojpuri)</option>
                        <option value="hmn">Mong</option>
                        <option value="mn">Монгол (Mongolian)</option>
                        <option value="mfe">Kreol Morisien (Mauritian Creole)</option>
                        <option value="mak">Makassarese</option>
                        <option value="mad">Madurese</option>
                        <option value="mam">Mam</option>
                        <option value="mi">Māori</option>
                        <option value="mwr">मारवाड़ी (Marwari)</option>
                        <option value="mr">मराठी (Marathi)</option>
                        <option value="mh">Marshallese</option>
                        <option value="ms-Arab">Malay (Jawi)</option>
                        <option value="mg">Malagasy</option>
                        <option value="ms">Dhivehi</option>
                        <option value="ml">മലയാളം (Malayalam)</option>
                        <option value="mt">Malti (Maltese)</option>
                        <option value="lus">Mizo</option>
                        <option value="chm">মিডো Mido Mari</option>
                        <option value="min">Minangkabau</option>
                        <option value="mni-Mtei">মৈতৈলোন (Meitei)</option>
                        <option value="mai">मैथिली (Maithili)</option>
                        <option value="gv">Max</option>
                        <option value="mk">Македонски (Macedonian)</option>
                        <option value="rn">Rundi</option>
                        <option value="ru">Русский (Russian)</option>
                        <option value="rom">România (Romanian)</option>
                        <option value="ro">Română (Romanian)</option>
                        <option value="lo">ລາວ (Lao)</option>
                        <option value="ltg">Latgalian</option>
                        <option value="lv">Latviešu (Latvian)</option>
                        <option value="la">Latina (Latin)</option>
                        <option value="lij">Ligure (Ligurian)</option>
                        <option value="ln">Lingala</option>
                        <option value="lt">Lietuvių (Lithuanian)</option>
                        <option value="li">Limburgish</option>
                        <option value="luo">Luo</option>
                        <option value="lb">Lëtzebuergesch (Luxembourgish)</option>
                        <option value="lg">Luganda</option>
                        <option value="lmo">Lombard</option>
                        <option value="shn">Shan</option>
                        <option value="lua">Ciluba</option>
                        <option value="sw">Kiswahili (Swahili)</option>
                        <option value="sa">संस्कृत (Sanskrit)</option>
                        <option value="szl">Śląski (Silesian)</option>
                        <option value="sat">Santali (Ol Chiki)</option>
                        <option value="sat-Latn">Santali (Latin)</option>
                        <option value="sg">Sango</option>
                        <option value="se">Sámegiella (Northern Sami)</option>
                        <option value="sm">Gagana Samoa (Samoan)</option>
                        <option value="sr">Српски (Serbian)</option>
                        <option value="si">සිංහල (Sinhalese)</option>
                        <option value="sd">سنڌي (Sindhi)</option>
                        <option value="scn">Sicilianu (Sicilian)</option>
                        <option value="sv">Svenska (Swedish)</option>
                        <option value="su">سوداني (Sudanese)</option>
                        <option value="sus">Susu</option>
                        <option value="nso">Sepedi</option>
                        <option value="crs">Seselwa (Seychellois Creole)</option>
                        <option value="st">Sesotho</option>
                        <option value="ts">Songa</option>
                        <option value="sn">Sona</option>
                        <option value="so">Soomaali (Somali)</option>
                        <option value="ss">siSwati (Swati)</option>
                        <option value="tn">Swahili</option>
                        <option value="gd">Gàidhlig (Scottish Gaelic)</option>
                        <option value="es">Español (Spanish)</option>
                        <option value="eo">Esperanto</option>
                        <option value="sk">Slovenčina (Slovak)</option>
                        <option value="sl">Slovenščina (Slovenian)</option>
                        <option value="ht">Kreyòl Ayisyen (Haitian Creole)</option>
                        <option value="ha">Hausa</option>
                        <option value="haw">ʻŌlelo Hawaiʻi (Hawaiian)</option>
                        <option value="cnh">হাকা Hakka Chinese</option>
                        <option value="hu">Magyar (Hungarian)</option>
                        <option value="hrx">Hunsrik</option>
                        <option value="hi">हिंदी (Hindi)</option>
                        <option value="iw">עברית (Hebrew)</option>
                        <option value="hil">Hiligaynon</option>
                    </select>
                </div>
                <!-- Google Translate Widget (hidden) -->
                <div id="google_element"></div>

            </div>
        </div>
        <div class="row align-items-center topbar-logo bg-white py-3 px-lg-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <a href="{{ route('homepage') }}" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-deep-orange">International<span
                            class="text-secondary font-weight-normal">tv24</span></h1>
                    {{-- <img src="{{ asset('frontend/assets/img/internationaltv24.png') }}" alt="" width="1000px" height="100px"> --}}
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-0">
            <a href="{{ route('homepage') }}" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-deep-orange">Biz<span
                        class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('homepage') }}"
                        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">হোম</a>
                    <a href="{{ route('category.news', 'Breaking_news') }}"
                        class="nav-item nav-link {{ Request::is('category/Breaking_news') ? 'active' : '' }}">সর্বশেষ সংবাদ</a>
                    <a href="{{ route('category.news', 'National') }}"
                        class="nav-item nav-link {{ Request::is('category/National') ? 'active' : '' }}">জাতীয়</a>
                    <a href="{{ route('category.news', 'International') }}"
                        class="nav-item nav-link {{ Request::is('category/International') ? 'active' : '' }}">আন্তর্জাতিক</a>
                    <a href="{{ route('category.news', 'Politics') }}"
                        class="nav-item nav-link {{ Request::is('category/Politics') ? 'active' : '' }}">রাজনীতি</a>
                    <a href="{{ route('category.news', 'Economy') }}"
                        class="nav-item nav-link {{ Request::is('category/Economy') ? 'active' : '' }}">অর্থনীতি</a>
                    <a href="{{ route('category.news', 'Sports') }}"
                        class="nav-item nav-link {{ Request::is('category/Sports') ? 'active' : '' }}">খেলাধুলা</a>
                    <div class="nav-item dropdown ">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ in_array(request()->segment(2), ['Health', 'Education', 'Science_&_Technology', 'Entertainment', 'Environment', 'Agriculture']) ? 'active' : '' }}"
                            data-toggle="dropdown">অন্যান্য</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('category.news', 'Health') }}"
                                class="dropdown-item {{ Request::is('category/Health') ? 'active' : '' }}">স্বাস্থ্য</a>
                            <a href="{{ route('category.news', 'Education') }}"
                                class="dropdown-item {{ Request::is('category/Education') ? 'active' : '' }}">শিক্ষা</a>
                            <a href="{{ route('category.news', 'Science_&_Technology') }}"
                                class="dropdown-item {{ Request::is('category/Science_&_Techonology') ? 'active' : '' }}">বিজ্ঞান ও প্রযুক্তি</a>
                            <a href="{{ route('category.news', 'Entertainment') }}"
                                class="dropdown-item {{ Request::is('category/Entertainment') ? 'active' : '' }}">বিনোদন</a>
                            <a href="{{ route('category.news', 'Environment') }}"
                                class="dropdown-item {{ Request::is('category/Environment') ? 'active' : '' }}">পরিবেশ</a>
                            <a href="{{ route('category.news', 'Agriculture') }}"
                                class="dropdown-item {{ Request::is('category/Agriculture') ? 'active' : '' }}">কৃষি</a>
                        </div>
                    </div>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex search" style="width: 100%; max-width: 300px;">
                    <form action="{{ route('news.search') }}" method="GET"
                        class="input-group ml-auto d-none d-lg-flex search" style="width: 100%; max-width: 300px;">
                        <input type="text" name="query" class="form-control border-0" placeholder="এখানে অনুসন্ধান করুন"
                            required>
                        <div class="input-group-append">
                            <button type="submit" class="text-dark bg-deep-orange border-0 px-3"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>

                </div>
                

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    @yield('content')



    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a href="{{ route('homepage') }}" class="navbar-brand p-0 d-lg-block">
                            <h1 class="m-0 fs-3 text-uppercase text-deep-orange">International<span
                                    class="text-secondary font-weight-normal">tv24</span></h1>
                        </a>
                        <div class="contact-info">
                            <p class="mt-1"><i class="fa fa-envelope"></i>Internationaltv24.com@gmail.com</p>
                            <p><i class="fa fa-phone"></i>+880 1829-325685</p>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">সাম্প্রতিক সংবাদ</h3>
                        <ul>
                            
                        @foreach ($breakingNews as $news)
                            
                        <li><a class="text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">দ্রুত লিংক</h3>
                        <ul>
                            <li><a href="#">জাতীয়</a></li>
                            <li><a href="#">আন্তর্জাতিক</a></li>
                            <li><a href="#">রাজনীতি</a></li>
                            <li><a href="#">অর্থনীতি</a></li>
                            <li><a href="#">খেলাধুলা</a></li>
                        </ul>
                    </div>
                </div>
                
                
                

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Quick Links</h3>
                        <ul>
                            <li><a href="#">Posuere egestas</a></li>
                            <li><a href="#">Sollicitudin</a></li>
                            <li><a href="#">Luctus non</a></li>
                            <li><a href="#">Duis tincidunt</a></li>
                            <li><a href="#">Elementum</a></li>
                        </ul>
                    </div>
                </div> --}}




            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                </div>

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <div class="col-md-6 template-by">
                    
                    <p>Template By <a href="https://htmlcodex.com" target="_blank">HTML Codex</a></p>
                    <p>Developed By <a href="https://mdasrafulislam.com" target="_blank">Md Asraful Islam Siddiki</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/slick/slick.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Google Translate Script -->
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        // Function to load Google Translate element
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                pageLanguage: 'bn'
            }, 'google_element');
        }
    
        // Function to change the language based on custom dropdown selection
        function setLanguageFromDropdown() {
            let selectedLang = document.getElementById('customLangSelector').value;
            setLanguage(selectedLang);
        }
    
        // Function to set language and save it to localStorage
        function setLanguage(selectedLang) {
            let googleTranslateFrame = document.querySelector('.goog-te-combo');
            if (googleTranslateFrame) {
                googleTranslateFrame.value = selectedLang;
                googleTranslateFrame.dispatchEvent(new Event('change')); // Trigger language change
                localStorage.setItem('selectedLanguage', selectedLang); // Save selected language to localStorage
            }
        }
    
        // Initialize Google Translate on page load
        window.onload = function() {
            loadGoogleTranslate();
    
            // Check if there's a language saved in localStorage
            let savedLang = localStorage.getItem('selectedLanguage');
            if (savedLang) {
                setTimeout(() => {
                    setLanguage(savedLang); // Apply the saved language
    
                    // Update the select dropdown value
                    let customLangSelector = document.getElementById('customLangSelector');
                    if (customLangSelector) {
                        customLangSelector.value = savedLang;
                    }
                }, 1000); // Delay to ensure Google Translate loads first
            }
        };
    </script>
    
    {{-- end gogle translate script --}}

    {{-- for live date --}}
    <script>
        function updateDate() {
            const date = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('currentDate').innerText = date.toLocaleDateString('bn-BD', options);
        }
        updateDate();
    </script>
    {{-- end live date section --}}
</body>

</html>
