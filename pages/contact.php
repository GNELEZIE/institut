<?php
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
require_once $layout.'/header.php';
?>

    <div class="page-title__area pt-110" style="background-image: url(<?=$cdn_domaine?>/media/mur2.png);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper text-center">
                        <h3 class="pb-100">Contactez-nous</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="contact-group-area pb-70 pt-145">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-6 col-lg-6 ">
                <div class="contact__gpinfo grey-soft2-bg mb-50">
                    <div class="contact__gpinfo-icon text-center">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <div class="contact__gpinfo-content">
                        <ul>
                            <li><a href="tel:"> <span>Téléphone</span>: <p>00225 00 00 00 00 </p></a></li>
                            <li><a href="tel:+1980589360"> <span>WhatsApp</span>: <p>00225 00 00 00 00 </p> </a></li>
                            <li><a href="#"><span>Fix</span>: <p>23 24 25 26 27</p> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6">
                <div class="contact__gpinfo grey-soft2-bg mb-50">
                    <div class="contact__gpinfo-icon text-center">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="contact__gpinfo-content">
                        <ul>
                            <li><a href="#"> <span>Adresse</span>: <p>Abidjan Yopougon</p></a></li>
                            <li><a href="tel:+2980589360"> <span>Email</span>: <p>is2gyop@gmail.com</p> </a></li>
                            <li><a href="#"><span>Email</span>: <p>support@gmail.com</p> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="contact__area">
        <div class="contact__vmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4431673262293!2d-4.098919285725766!3d5.3491296371842605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfb83a8e9beff779%3A0x56c916b7e211bb86!2sYOPOUGON%2C%20ANANERAIE!5e0!3m2!1sfr!2sci!4v1679487118340!5m2!1sfr!2sci" class="google-map__one" allowfullscreen=""></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
                <div class="col-xl-6 col-xl-6 col-lg-6">
                    <div class="contact__form pt-110">
                        <form id="contactForm" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <input name="nom" class="contact__input" type="text" placeholder="Nom et prénom" required>
                                </div>
                                <div class="col-xl-12">
                                    <input name="email" class="contact__input" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <input name="phone" id="phone" class="contact__input" type="text" required>
                                    <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                    <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                </div>
                                <div class="col-xl-12 mt-3">
                                    <input name="sujet" class="contact__input" type="text" placeholder="Sujet">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <textarea name="message" class="contact__input txt-area " cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row pb-5">
                                <div class="col-xl-12">
                                    <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                                    <button class="theme-btn radius-6">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






<?php
require_once $layout.'/footer.php';
?>
<script>
    $(document).ready(function(){

        $('#contactForm').submit(function(e){
            e.preventDefault();
            $('.loarder').html('<i class="fas fa-circle-notch fa-spin pagi-icon"></i>');
            var value = document.getElementById('contactForm');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controle/save.contact',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
//                alert(data);
                    if(data == "ok"){
                        swal("Votre message a été envoyé avec succès !!!","", "success");
                        $('.loarder').html('');
                        $('#phone').val('');
                        $('#message').val('');
                        $('#nom').val('');

                    }else if(data == "1"){
                        $('.loarder').html('');
                        swal("Action Impossible !", " Votre adresse email n\'est pas correct", "error");
                    }
                    else {
                        $('.loarder').html('');
                        swal("Action Impossible !", "Une erreur s\'est produite lors du traitement des données !", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });

        });


        $("#phone").keyup(function (event) {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
        });

        var inputPhone = document.querySelector("#phone");
        window.intlTelInput(inputPhone, {
            initialCountry: 'CI',
            onlyCountries: ["ci"],
            utilsScript: "<?=$cdn_domaine?>/assets/libs/intltelinput/js/utils.js"
        });
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
        inputPhone.addEventListener("countrychange", function() {
            var iti = window.intlTelInputGlobals.getInstance(inputPhone);
            var countryData = iti.getSelectedCountryData();
            $('#isoPhone').val(countryData["iso2"]);
            $('#dialPhone').val(countryData["dialCode"]);
        });

    });
</script>