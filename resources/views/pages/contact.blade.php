@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')


<div class="container margin_top">

    <div class="col-sm-1"></div>

    <div class = "col-sm-10">

        <h3>The Central Office Administration:</h3>
        <div class="row">
            <div class="col-sm-7">
                 <p><strong>Please submit the form and we will be in touch ASAP.</strong></p>			
                <form action="https://formspree.io/info@appnaok.org" method="POST">
                    
                    <div class="row">
                    
                    
                    <div class="col-md-12">
                    <div class="col-md-6">
                    
                    
                    <!-- <div class="form-group">
                    <select required name="to"  class="form-control">
                    <option value="">Select Person to Email</option>
                        <option value="ahameed@okheart.com">Aamir Hameed (ahameed@okheart.com)</option>
                        <option value="doc_zahoor@yahoo.com">Abid Zahoor (doc_zahoor@yahoo.com)</option>
                        <option value="admin@appnaok.org">Administrator Administrator (admin@appnaok.org)</option>
                        <option value="AMIR-RAZA@OUHSC.EDU">AMIR RAZA (AMIR-RAZA@OUHSC.EDU)</option>
                        <option value="chohanasim@aol.com">asim chohan (chohanasim@aol.com)</option>
                        <option value="asranayab@gmail.com">Asra Nayab (asranayab@gmail.com)</option>
                        <option value="drayeshasattar@hotmail.com">Ayesha Sattar  (drayeshasattar@hotmail.com)</option>
                        <option value="bilalsaeed_2000@yahoo.com">Bilal Saeed (bilalsaeed_2000@yahoo.com)</option>
                        <option value="dr_bilalahmad@hotmail.com">Bilal Ahmad (dr_bilalahmad@hotmail.com)</option>
                        <option value="drbushrasiddique@yahoo.com">Bushra Siddique (drbushrasiddique@yahoo.com)</option>
                        <option value="drbushrasiddique@yahoo.com">Bushra Siddique (drbushrasiddique@yahoo.com)</option>
                        <option value="ffkhan.1978@gmail.com">fahad khan (ffkhan.1978@gmail.com)</option>
                        <option value="drwasi@aol.com">FAISAL WASI (drwasi@aol.com)</option>
                        <option value="faisal.latif276@gmail.com">Faisal Latif (faisal.latif276@gmail.com)</option>
                        <option value="farrjaw@yahoo.com">FARRUKH JAWAID (farrjaw@yahoo.com)</option>
                        <option value="fazalakbarali@hotmail.com">FAZAL Ali (fazalakbarali@hotmail.com)</option>
                        <option value="fhassany@hotmail.com">Fuad Hassany (fhassany@hotmail.com)</option>
                        <option value="">Ghias Sheikh ()</option>
                        <option value="hamid_dr@hotmail.com">Hamid Mahmood (hamid_dr@hotmail.com)</option>
                        <option value="hassaan-zia@ouhsc.edu">Hassaan Zia (hassaan-zia@ouhsc.edu)</option>
                        <option value="huzaifaa.ali">huzaifa jaliawala (huzaifaa.ali)</option>
                        <option value="drsneeze@hotmail.com">Iftikhar Hussain (drsneeze@hotmail.com)</option>
                        <option value="imranashraf71@gmail.com">Imran Awan (imranashraf71@gmail.com)</option>
                        <option value="">Jahangir khan ()</option>
                        <option value="kamran007md@msn.com">Kamran Abbasi (kamran007md@msn.com)</option>
                        <option value="khalidkhanpetarian74@gmail.com">Khalid Khan (khalidkhanpetarian74@gmail.com)</option>
                        <option value="siddiquilaiq@hotmail.com">Laiq Siddiqui (siddiquilaiq@hotmail.com)</option>
                        <option value="adnan_altaf@hotmail.com">M. Adnan Altaf (adnan_altaf@hotmail.com)</option>
                        <option value="docmmg420@hotmail.com">M. Monem Gillan (docmmg420@hotmail.com)</option>
                        <option value="">Masood Ahmad ()</option>
                        <option value="rashidirshad@gmail.com">Mohammad Irshad (rashidirshad@gmail.com)</option>
                        <option value="mdotani@hotmail.com">Mohammad Dotani (mdotani@hotmail.com)</option>
                        <option value="MPARACHA65@MSN.COM">MOHAMMAD PARACHA (MPARACHA65@MSN.COM)</option>
                        <option value="abbasmubasher12@gmail.com">mubasher abbas (abbasmubasher12@gmail.com)</option>
                        <option value="mudassirsaleemi@hotmail.com">Mudassir Saleemi (mudassirsaleemi@hotmail.com)</option>
                        <option value="drsana172@hotmail.com">MUHAMMAD  SANAULLAH (drsana172@hotmail.com)</option>
                        <option value="Muhammad-Hanafi@ouhsc.edu">Muhammad Hanafi (Muhammad-Hanafi@ouhsc.edu)</option>
                        <option value="munawarmd@hotmail.com">Munawar  ALi (munawarmd@hotmail.com)</option>
                        <option value="muneer176@hotmIL.COM">MUNEER KHAN (muneer176@hotmIL.COM)</option>
                        <option value="murtaza-mazhar@ouhsc.edu">murtaza mazhar (murtaza-mazhar@ouhsc.edu)</option>
                        <option value="muzaffarsaleemi@hotmail.com">Muzaffar Saleemi (muzaffarsaleemi@hotmail.com)</option>
                        <option value="ntahirkheli@okheart.com">Naeem Tahirkheli (ntahirkheli@okheart.com)</option>
                        <option value="Nailaaziz18@yahoo.com">Naila Aziz (Nailaaziz18@yahoo.com)</option>
                        <option value="doctorlalani@gmail.com">Neelofar Lalani  (doctorlalani@gmail.com)</option>
                        <option value="doctorlalani@gmail.com">Neelofar Lalani  (doctorlalani@gmail.com)</option>
                        <option value="anser-r@juno.com">Nighat Mehdi (anser-r@juno.com)</option>
                        <option value="noeensarfraz@yahoo.com">noeen sarfraz (noeensarfraz@yahoo.com)</option>
                        <option value="omersuhaib@hotmail.com">OMER SUHAIB (omersuhaib@hotmail.com)</option>
                        <option value="qskhan140@gmail.com">Qaiser  Khan (qskhan140@gmail.com)</option>
                        <option value="rizdowite@yahoo.com">Rizwan  Aslam (rizdowite@yahoo.com)</option>
                        <option value="rizwankhan1989@yahoo.com">Rizwan Khan (rizwankhan1989@yahoo.com)</option>
                        <option value="dr_razi@live.com">Rizwana Asim (dr_razi@live.com)</option>
                        <option value="saadia.chohan@csok.org">SAADIA  CHOHAN (saadia.chohan@csok.org)</option>
                        <option value="salman.nusrat@gmail.com">SALMAN Nusrat (salman.nusrat@gmail.com)</option>
                        <option value="drszub@hotmail.com">Salman Zubair (drszub@hotmail.com)</option>
                        <option value="samid-farooqui@ouhsc.edu">Samid  Farooqui (samid-farooqui@ouhsc.edu)</option>
                        <option value="drsaqib191@gmail.com">Saqib Sheikh (drsaqib191@gmail.com)</option>
                        <option value="drsanwar@yahoo.com">Sarfaraz Anwar (drsanwar@yahoo.com)</option>
                        <option value="drsarfrazahmed@gmail.com">sarfraz Ahmed (drsarfrazahmed@gmail.com)</option>
                        <option value="drsarfrazahmed@gmail.com">sarfraz ahmed (drsarfrazahmed@gmail.com)</option>
                        <option value="saudiqbal200@yahoo.com">Saud Ahmed (saudiqbal200@yahoo.com)</option>
                        <option value="">Saud Khan ()</option>
                        <option value="dr_shaista@yahoo.com">shaista sheharyar (dr_shaista@yahoo.com)</option>
                        <option value="">Shamim  Malik ()</option>
                        <option value="sshah86@sbcglobal.net">Shujahat Shah (sshah86@sbcglobal.net)</option>
                        <option value="sul_tan1@hotmail.com">Sultan  Mahmood  (sul_tan1@hotmail.com)</option>
                        <option value="sumbalnabi@gmail.com">Sumbal Nabi  (sumbalnabi@gmail.com)</option>
                        <option value="sumbal.nabi@integrisok.com">Sumbal Nabi  (sumbal.nabi@integrisok.com)</option>
                        <option value="tariqasadkhan@gmail.com">Tariq Khan (tariqasadkhan@gmail.com)</option>
                        <option value="syedtaseenahmed@hotmail.com">Taseen Syed (syedtaseenahmed@hotmail.com)</option>
                        <option value="tauqeer-ali@ouhsc.edu">Tauqeer Ali (tauqeer-ali@ouhsc.edu)</option>
                        <option value="drtauseef@yahoo.com">Tauseef  Ali (drtauseef@yahoo.com)</option>
                        <option value="tayyaba_fazal88@yahoo.con">Tayyaba Ali  (tayyaba_fazal88@yahoo.con)</option>
                        <option value="usman-bhutta@ouhsc.edu">Usman Bhutta (usman-bhutta@ouhsc.edu)</option>
                        <option value="shanix7@gmail.com">Usman Bhatti (shanix7@gmail.com)</option>
                        <option value="wajeeha.usa@gmail.com">Wajeeha Razaq (wajeeha.usa@gmail.com)</option>
                        <option value="wajeeha.usa@gmail.com">Wajeeha  Razaq (wajeeha.usa@gmail.com)</option>
                        <option value="yasir-usman@ouhsc.edu">Yasir  Usman (yasir-usman@ouhsc.edu)</option>
                        <option value="yasminsarfraz@yahoo.co.uk">Yasmin Sarfraz (yasminsarfraz@yahoo.co.uk)</option>
                        <option value="yasminsarfraz@yahoo.co.uk">yasmin sarfraz (yasminsarfraz@yahoo.co.uk)</option>
                        <option value="yasminsarfraz@yahoo.co.uk">Yasmin Sarfraz (yasminsarfraz@yahoo.co.uk)</option>
                        <option value="zeeshanakhter50@gmail.com">Zeeshan Khan (zeeshanakhter50@gmail.com)</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <input required name="name" type="text" class="form-control"  placeholder="Name">
                    </div>
                    
                    <div class="form-group">
                        <input required name="phone" type="text" class="form-control"  placeholder="Phone">
                    </div>
                    
                    <div class="form-group">
                        <input required name="email" type="email" class="form-control"  placeholder="Email">
                    </div>
                    
                    
                    
                    </div>
                    
                    
                    <div class="col-md-6">

                    <div class="form_textarea">
                    <textarea required name="desc" class="form-control" rows="8" placeholder="Your Message"></textarea>
                    </div>
                    

                    
                    
                    </div>
                   
                    <style>
                    .buttons{background:#166232;}
                    .buttons:hover{background:#666;}
                    </style>
                    <div class="contact_input" style="margin-bottom:20px;margin-top:100px;">
                        <input type="submit" value="Submit" class="input_button btn btn-success form-control buttons" />
                    </div>
                    </div>
                    </div>
                </form>

            </div>
            <div class="col-sm-3">
                <div style="float:right">
                    <p>APPNA Oklahoma <br>
                    7307 S Yale Ave #200<br>
                    Tulsa, OK 74136<br>
                    USA<br>

                    (918) 392-4550 (Office)
                    <br>
                    (918) 392-4551 (Fax)</p>
                </div>
            </div>
        </div>
            
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.4769444472313!2d-95.9237571857225!3d36.05746928010826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b692422763fc81%3A0xf25cd9e264563528!2s7307+S+Yale+Ave+%23200%2C+Tulsa%2C+OK+74136!5e0!3m2!1sen!2sus!4v1526060887099" style="width:100%; height:400px; margin-top:20px;" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div style="margin-bottom:20px"></div>



@endsection 