function myFunction() {
    var x = document.getElementById("atoll_id").value;

    if(x=='Male City'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island" required><option value="Male">Male</option><option value="Hulhumale">Hulhumale</option><option value="Villimale">Villimale</option></select>';
    }
    if(x=='Fuvahmulah City'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Fuvahmulah">Fuvahmulah</option></select>';
    }
    if(x=='Addu City'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Feydhoo">Feydhoo</option><option value="Maradhoo">Maradhoo</option><option value="Maradhoo Feydhoo">Maradhoo Feydhoo</option><option value="Hithadhoo">Hithadhoo</option><option value="Hulhu-meedhoo">Hulhu-meedhoo</option></select>';
    }
    if(x=='HDh-Haa Dhaalu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Hanimaadhoo">Hanimaadhoo</option><option value="Finey">Finey</option><option value="Naivaadhoo">Naivaadhoo</option><option value="Nolhivaranfaru">Nolhivaranfaru</option><option value="Nellaidhoo">Nellaidhoo</option><option value="Nolhivaram">Nolhivaram</option><option value="Kurinbi">Kurinbi</option><option value="Kulhudhuffushi">Kulhudhuffushi</option><option value="Kumundhoo">Kumundhoo</option><option value="Neykurendhoo">Neykurendhoo</option><option value="Vaikaradhoo">Vaikaradhoo</option><option value="Makunudhoo">Makunudhoo</option><option value="Hirimaradhoo">Hirimaradhoo</option></select>';
    }
    if(x=='HA-Haa Alif'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Baarah">Baarah</option><option value="Dhiddhoo">Dhiddhoo</option><option value="Filladhoo">Filladhoo</option><option value="Ihavandhoo">Ihavandhoo</option><option value="Kelaa">Kelaa</option><option value="Maarandhoo">Maarandhoo</option><option value="Mulhadhoo">Mulhadhoo</option><option value="Muraidhoo">Muraidhoo</option><option value="Thanakndhoo">Thanakndhoo</option><option value="Thuraakunu">Thuraakunu</option><option value="Uligamu">Uligamu</option><option value="Utheemu">Utheemu</option><option value="Vashafaru">Vashafaru</option></select>';
    }
    if(x=='Sh-Shaviyani'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Bileffahi">Bileffahi</option><option value="Feevah">Feevah</option><option value="Foakaidhoo">Foakaidhoo</option><option value="Funadhoo">Funadhoo</option><option value="Goidhoo">Goidhoo</option><option value="Kanditheemu">Kanditheemu</option><option value="Komandoo">Komandoo</option><option value="Lhaimagu">Lhaimagu</option><option value="Maaungoodhoo">Maaungoodhoo</option><option value="Maroshi">Maroshi</option><option value="Milandhoo">Milandhoo</option><option value="Narudhoo">Narudhoo</option><option value="Noomaraa">Noomaraa</option></select>';
    }
    if(x=='N-Noonu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Foddhoo">Foddhoo</option><option value="Henbandhoo">Henbandhoo</option><option value="Holdhudhoo">Holdhudhoo</option><option value="Kendhikolhudhoo">Kendhikolhudhoo</option><option value="Kudafaree">Kudafaree</option><option value="Landhoo">Landhoo</option><option value="Lhohi">Lhohi</option><option value="Maafaru">Maafaru</option><option value="Maalhendhoo">Maalhendhoo</option><option value="Magoodhoo">Magoodhoo</option><option value="Manadhoo">Manadhoo</option><option value="Miladhoo">Miladhoo</option><option value="Velidhoo">Velidhoo</option></select>';
    }
    if(x=='R-Raa'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Alifushi">Alifushi</option><option value="Angolhitheemu">Angolhitheemu</option><option value="Fainu">Fainu</option><option value="Hulhudhuffaaru">Hulhudhuffaaru</option><option value="Inguraidhoo">Inguraidhoo</option><option value="Innamaadhoo">Innamaadhoo</option><option value="Dhuvaafaru">Dhuvaafaru</option><option value="Kinolhas">Kinolhas</option><option value="Maakurathu">Maakurathu</option><option value="Maduvvaree">Maduvvaree</option><option value="Meedhoo">Meedhoo</option><option value="Rasgetheemu">Rasgetheemu</option><option value="Rasmaadhoo">Rasmaadhoo</option><option value="Ungoofaaru">Ungoofaaru</option><option value="Vaadhoo">Vaadhoo</option></select>';
    }
    if(x=='B-Baa'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Dharavandhoo">Dharavandhoo</option><option value="Dhonfanu">Dhonfanu</option><option value="Eydhafushi">Eydhafushi</option><option value="Fehendhoo">Fehendhoo</option><option value="Fulhadhoo">Fulhadhoo</option><option value="Hithaadhoo">Hithaadhoo</option><option value="Kamadhoo">Kamadhoo</option><option value="Kendhoo">Kendhoo</option><option value="Kihaadhoo">Kihaadhoo</option><option value="Kudarikilu">Kudarikilu</option><option value="Maalhos">Maalhos</option><option value="Thulhaadhoo">Thulhaadhoo</option></select>';
    }
    if(x=='Lh-Lhaviyani'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="HInnavaru">HInnavaru</option><option value="Kurendhoo">Kurendhoo</option><option value="Naifaru">Naifaru</option><option value="Olhuvelifushi">Olhuvelifushi</option></select>';
    }
    if(x=='AA-Alif Alif'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Bodufulhadhoo">Bodufulhadhoo</option><option value="Feridhoo">Feridhoo</option><option value="Himandhoo">Himandhoo</option><option value="Mathiveri">Mathiveri</option><option value="Rasdhoo">Rasdhoo</option><option value="Thoddoo">Thoddoo</option><option value="Ukulhas">Ukulhas</option><option value="Fesdhoo">Fesdhoo</option></select>';
    }
    if(x=='ADh-Alif Dhaalu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Dhangethi">Dhangethi</option><option value="Dhigurah">Dhigurah</option><option value="Fenfushi">Fenfushi</option><option value="Haggnaameedhoo">Haggnaameedhoo</option><option value="Kunburudhoo">Kunburudhoo</option><option value="Maamigili">Maamigili</option><option value="Mahibadhoo">Mahibadhoo</option><option value="Mandhoo">Mandhoo</option><option value="Omadhoo">Omadhoo</option></select>';
    }
    if(x=='V-Vaavu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Felidhoo">Felidhoo</option><option value="Fulidhoo">Fulidhoo</option><option value="Keyodhoo">Keyodhoo</option><option value="Rakeedhoo">Rakeedhoo</option><option value="Thinadhoo">Thinadhoo</option></select>';
    }
    if(x=='M-Meemu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Boli Mulah">Boli Mulah</option><option value="Dhiggaru">Dhiggaru</option><option value="Kolhufushi">Kolhufushi</option><option value="Madifushi">Madifushi</option><option value="Muli">Muli</option><option value="Naalaafushi">Naalaafushi</option><option value="Raimmandhoo">Raimmandhoo</option><option value="Veyvah">Veyvah</option></select>';
    }
    if(x=='F-Faafu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Bileddhoo">Bileddhoo</option><option value="Dharanboodhoo">Dharanboodhoo</option><option value="Feeali">Feeali</option><option value="Nilandhoo">Nilandhoo</option></select>';
    }
    if(x=='D-Dhaalu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Bandidhoo">Bandidhoo</option><option value="Gemendhoo">Gemendhoo</option><option value="hulhudheli">hulhudheli</option><option value="Kudahuvadhoo">Kudahuvadhoo</option><option value="Maaenboodhoo">Maaenboodhoo</option><option value="Rinbudhoo">Rinbudhoo</option></select>';
    }
    if(x=='Th-Thaa'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Burunee">Burunee</option><option value="Vilufushi">Vilufushi</option><option value="Dhiyamigili">Dhiyamigili</option><option value="Gaadhiffushi">Gaadhiffushi</option><option value="Thimarafushi">Thimarafushi</option><option value="Veymandoo">Veymandoo</option><option value="Kinbidhoo">Kinbidhoo</option><option value="Hirilandhoo">Hirilandhoo</option><option value="Kandoodhoo">Kandoodhoo</option><option value="Vandhoo">Vandhoo</option></select>';
    }
    if(x=='L-Laamu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Dhanbidhoo">Dhanbidhoo</option><option value="Fonadhoo">Fonadhoo</option><option value="Gaadhoo">Gaadhoo</option><option value="Gan">Gan</option><option value="Kunahandhoo">Kunahandhoo</option><option value="Maabaidhoo">Maabaidhoo</option><option value="Maamendhoo">Maamendhoo</option><option value="Maavah">Maavah</option><option value="Mundoo">Mundoo</option><option value="Isdhoo">Isdhoo</option></select>';
    }
    if(x=='GA-Gaafu Alif'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Dhaandhoo">Dhaandhoo</option><option value="Dhevvadhoo">Dhevvadhoo</option><option value="Gemanafushi">Gemanafushi</option><option value="Kanduhulhudhoo">Kanduhulhudhoo</option><option value="Kolamaafushi">Kolamaafushi</option><option value="Kondey">Kondey</option><option value="Vilingili">Vilingili</option></select>';
    }
    if(x=='GDh-Gaafu Dhaalu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Fares-Maathodaa">Fares-Maathodaa</option><option value="Fiyoaree">Fiyoaree</option><option value="Gaddhoo">Gaddhoo</option><option value="Hoadedhoo">Hoadedhoo</option><option value="Madaveli">Madaveli</option><option value="Nadella">Nadella</option><option value="Rathafandhoo">Rathafandhoo</option></select>';
    }
    if(x=='K- Kaafu'){
        document.getElementById("island").innerHTML = '<select class="form-control" id="island_id" name="island"><option value="Dhiffushi">Dhiffushi</option><option value="Gaafaru">Gaafaru</option><option value="Gulhi">Gulhi</option><option value="Guraidhoo">Guraidhoo</option><option value="Himmafushi">Himmafushi</option><option value="Huraa">Huraa</option><option value="Kaashidhoo">Kaashidhoo</option><option value="Maafushi">Maafushi</option><option value="Thulusdhoo">Thulusdhoo</option></select>';
    }
}