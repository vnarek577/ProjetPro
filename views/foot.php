<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- <link rel="stylesheet" href="../assets/style/footer.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <title>footer</title>
</head>

<style>
    .footer {

        background-color: black;
        height: 250px;
        margin-top: 10%;

    }


    .footer .footer-main-content h3 {

        color: white;

    }

    .footer-main-content {

        display: flex;
        justify-content: space-evenly;

    }

    .footer .footer-main-content .footer-main-brand .loxt {
        height: 3px;
        border-radius: 30px;
        background-color: #e91e63;

    }

    .footer .footer-main-content .cnt .loxt {
        height: 3px;
        border-radius: 30px;
        background-color: #e91e63;

    }

    .footer .footer-main-content .footer-menu .loxt {
        height: 3px;
        border-radius: 30px;
        background-color: #e91e63;

    }

    /* .footer .footer-main-content .footer-menu {

        text-align: center;
    } */


    .footer .footer-main-content .footer-main-brand .clean {

        color: #bbbbbb;
    }

    .footer .footer-main-content .footer-menu a {

        display: block;
        text-decoration: none;
        color: #bbbbbb;
    }

    .footer .footer-main-content .footer-menu ul {

        list-style-type: none;
        align-items: start;
        padding: 12px;
    }

    .footer .footer-main-content .footer-menu i {

        margin: 4px;
    }

    .footer .footer-main-content .cnt ul {
        list-style-type: none;
        padding: 0;
        display: flex;
    }

    .footer .footer-main-content .cnt {

        text-align: center;
    }

    .footer .footer-main-content .cnt a i {

        background-color: grey;
        margin: 0 10px 10px 0;
        height: 30px;
        width: 30px;
        line-height: 30px;
        border-radius: 100px;

    }

    .footer .footer-main-content .cnt a {
        color: white;
    }

    .footer .footer-main-content .cnt a i:hover {

        color: black;
        background-color: white;
    }

    .footer-menu li a {

        color: #bbbbbb;
        text-decoration: none;

    }

    .footer .footer-me {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        color: #bbbbbb;
    }

    /* .footer-main-brand {

        text-align: center;
    } */


  
    .footer .footer-main-content .footer-main-brand {

        margin-top: 2%;

    }

    .footer .footer-main-content .cnt {

        margin-top: 2%;

    }

    .footer .footer-main-content .footer-menu {

        margin-top: 2%;

    }


    @media(max-width: 500px) {
        .footer-main-content {
            display: block;
        }

        .footer-main-brand {
            text-align: center;
            margin-bottom: 10%;
        }

        .loxt{
            margin: 0 auto;
            width: 20%;
        }

        .footer {
            height: 500px;
        }

        .footer-menu {

            margin-bottom: 10%;
        }

        .cnt .loxt {
            margin-bottom: 3%;
        }

        .footer-menu {

            text-align: center;
        }

    }
</style>

<body>



    <div class="footer">
        <div class="footer-main-content">
            <div class="footer-main-brand">

                <h3>Nous</h3>
                <hr class="loxt">

                <span class="clean">MegaCritic</span>
                <p class="clean">Un site destin?? ?? partager mes avis<br> sur les films les plus connus</p>
            </div>



            <div class="footer-menu">
                <h3>Navigation</h3>
                <hr class="loxt">

                <a href="../index.php" class=""><i class="fas fa-home"></i>Accueil</a>
                <a href="allmycritics.php" class=""><i class="fas fa-list"></i>List de films</a>
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#mentionModal"><i class="fas fa-balance-scale"></i>Mentions l??gales</a>

            </div>

            <div class="cnt">

                <h3>Rejoignez-nous</h3>
                <hr class="loxt">


                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fab fa-twitter"></i></a>


            </div>

        </div>
        <div class="footer-me">
            <p>?? MegaCritic - Tous droits r??serv??s.</p>
        </div>
    </div>


    <!-- <div class="modal" tabindex="-1" id="mentionModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Les Mention l??gales</label>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>

                    <h2>D??finitions</h2>
                    <p><b>Client :</b> tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des pr??sentes conditions g??n??rales.
                        <br>
                        <b>Prestations et Services :</b> <a href="http://pgn.fr">http://pgn.fr</a> met ?? disposition des Clients :
                    </p>

                    <p><b>Contenu :</b> Ensemble des ??l??ments constituants l???information pr??sente sur le Site, notamment textes ??? images ??? vid??os.</p>

                    <p><b>Informations clients :</b> Ci apr??s d??nomm?? ?? Information (s) ?? qui correspondent ?? l???ensemble des donn??es personnelles susceptibles d?????tre d??tenues par <a href="http://pgn.fr">http://pgn.fr</a> pour la gestion de votre compte,
                        de la gestion de la relation client et ?? des fins d???analyses et de statistiques.</p>


                    <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnomm??.</p>
                    <p><b>Informations personnelles :</b> ?? Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent ?? (article 4 de la loi n?? 78-17 du
                        6 janvier 1978).</p>
                    <p>Les termes ?? donn??es ?? caract??re personnel ??, ?? personne concern??e ??, ?? sous traitant ?? et ?? donn??es sensibles ?? ont le sens d??fini par le R??glement G??n??ral sur la Protection des Donn??es (RGPD : n?? 2016-679)</p>

                    <h2>1. Pr??sentation du site internet.</h2>
                    <p>En vertu de l'article 6 de la loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l'??conomie num??rique, il est pr??cis?? aux utilisateurs du site internet <a href="http://pgn.fr">http://pgn.fr</a> l'identit?? des diff??rents intervenants
                        dans le cadre de sa r??alisation et de son suivi:
                    </p>
                    <p><strong>Propri??taire</strong> : pgn Capital social de 10000??? Num??ro de TVA: 12454 ??? 10 Place L??on Meyer 76600 Le Havre<br>

                        <strong>Responsable publication</strong> : Gianni Cantagalli ??? contactGianni@pgn.com<br> Le responsable publication est une personne physique ou une personne morale.<br>
                        <strong>Webmaster</strong> : Vanyan Narek ??? contactNarek@pgn.com<br>
                        <strong>H??bergeur</strong> : amen ??? 12-14 Rond Point des Champs Elys??es 75008 Paris 0 811 88 77 66
                        <br>
                        <strong>D??l??gu?? ?? la protection des donn??es</strong> : Paul Boulier ??? contactPaul@pgn.com<br>
                    </p>

                    <h2>2. Conditions g??n??rales d???utilisation du site et des services propos??s.</h2>

                    <p>Le Site constitue une ??uvre de l???esprit prot??g??e par les dispositions du Code de la Propri??t?? Intellectuelle et des R??glementations Internationales applicables. Le Client ne peut en aucune mani??re r??utiliser, c??der ou exploiter
                        pour son propre compte tout ou partie des ??l??ments ou travaux du Site.</p>

                    <p>L???utilisation du site <a href="http://pgn.fr">http://pgn.fr</a> implique l???acceptation pleine et enti??re des conditions g??n??rales d???utilisation ci-apr??s d??crites. Ces conditions d???utilisation sont susceptibles d?????tre modifi??es
                        ou compl??t??es ?? tout moment, les utilisateurs du site <a href="http://pgn.fr">http://pgn.fr</a> sont donc invit??s ?? les consulter de mani??re r??guli??re.</p>

                    <p>Ce site internet est normalement accessible ?? tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut ??tre toutefois d??cid??e par <a href="http://pgn.fr">http://pgn.fr</a>, qui s???efforcera alors
                        de communiquer pr??alablement aux utilisateurs les dates et heures de l???intervention. Le site web
                        <a href="http://pgn.fr">http://pgn.fr</a> est mis ?? jour r??guli??rement par <a href="http://pgn.fr">http://pgn.fr</a> responsable. De la m??me fa??on, les mentions l??gales peuvent ??tre modifi??es ?? tout moment : elles s???imposent
                        n??anmoins ?? l???utilisateur qui est invit?? ?? s???y r??f??rer le plus souvent possible afin d???en prendre connaissance.
                    </p>

                    <h2>3. Description des services fournis.</h2>

                    <p>Le site internet <a href="http://pgn.fr">http://pgn.fr</a> a pour objet de fournir une information concernant l???ensemble des activit??s de la soci??t??.
                        <a href="http://pgn.fr">http://pgn.fr</a> s???efforce de fournir sur le site <a href="http://pgn.fr">http://pgn.fr</a> des informations aussi pr??cises que possible. Toutefois, il ne pourra ??tre tenu responsable des oublis, des
                        inexactitudes et des carences dans la mise ?? jour, qu???elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
                    </p>

                    <p>Toutes les informations indiqu??es sur le site <a href="http://pgn.fr">http://pgn.fr</a> sont donn??es ?? titre indicatif, et sont susceptibles d?????voluer. Par ailleurs, les renseignements figurant sur le site <a href="http://pgn.fr">http://pgn.fr</a> ne sont pas exhaustifs. Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne.</p>

                    <h2>4. Limitations contractuelles sur les donn??es techniques.</h2>

                    <p>Le site utilise la technologie JavaScript. Le site Internet ne pourra ??tre tenu responsable de dommages mat??riels li??s ?? l???utilisation du site. De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel
                        r??cent, ne contenant pas de virus et avec un navigateur de derni??re g??n??ration mis-??-jour Le site <a href="http://pgn.fr">http://pgn.fr</a> est h??berg?? chez un prestataire sur le territoire de l???Union Europ??enne conform??ment
                        aux dispositions du R??glement G??n??ral sur la Protection des Donn??es (RGPD : n?? 2016-679)</p>

                    <p>L???objectif est d???apporter une prestation qui assure le meilleur taux d???accessibilit??. L???h??bergeur assure la continuit?? de son service 24 Heures sur 24, tous les jours de l???ann??e. Il se r??serve n??anmoins la possibilit?? d???interrompre
                        le service d???h??bergement pour les dur??es les plus courtes possibles notamment ?? des fins de maintenance, d???am??lioration de ses infrastructures, de d??faillance de ses infrastructures ou si les Prestations et Services g??n??rent
                        un trafic r??put?? anormal.</p>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> et l???h??bergeur ne pourront ??tre tenus responsables en cas de dysfonctionnement du r??seau Internet, des lignes t??l??phoniques ou du mat??riel informatique et de t??l??phonie li?? notamment ??
                        l???encombrement du r??seau emp??chant l???acc??s au serveur.</p>

                    <h2>5. Propri??t?? intellectuelle et contrefa??ons.</h2>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> est propri??taire des droits de propri??t?? intellectuelle et d??tient les droits d???usage sur tous les ??l??ments accessibles sur le site internet, notamment les textes, images, graphismes, logos,
                        vid??os, ic??nes et sons. Toute reproduction, repr??sentation, modification, publication, adaptation de tout ou partie des ??l??ments du site, quel que soit le moyen ou le proc??d?? utilis??, est interdite, sauf autorisation ??crite
                        pr??alable de : <a href="http://pgn.fr">http://pgn.fr</a>.</p>

                    <p>Toute exploitation non autoris??e du site ou de l???un quelconque des ??l??ments qu???il contient sera consid??r??e comme constitutive d???une contrefa??on et poursuivie conform??ment aux dispositions des articles L.335-2 et suivants du Code
                        de Propri??t?? Intellectuelle.</p>

                    <h2>6. Limitations de responsabilit??.</h2>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> agit en tant qu?????diteur du site. <a href="http://pgn.fr">http://pgn.fr</a> est responsable de la qualit?? et de la v??racit?? du Contenu qu???il publie. </p>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> ne pourra ??tre tenu responsable des dommages directs et indirects caus??s au mat??riel de l???utilisateur, lors de l???acc??s au site internet <a href="http://pgn.fr">http://pgn.fr</a>, et r??sultant
                        soit de l???utilisation d???un mat??riel ne r??pondant pas aux sp??cifications indiqu??es au point 4, soit de l???apparition d???un bug ou d???une incompatibilit??.</p>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> ne pourra ??galement ??tre tenu responsable des dommages indirects (tels par exemple qu???une perte de march?? ou perte d???une chance) cons??cutifs ?? l???utilisation du site <a href="http://pgn.fr">http://pgn.fr</a>.
                        Des espaces interactifs (possibilit?? de poser des questions dans l???espace contact) sont ?? la disposition des utilisateurs. <a href="http://pgn.fr">http://pgn.fr</a> se r??serve le droit de supprimer, sans mise en demeure pr??alable,
                        tout contenu d??pos?? dans cet espace qui contreviendrait ?? la l??gislation applicable en France, en particulier aux dispositions relatives ?? la protection des donn??es. Le cas ??ch??ant, <a href="http://pgn.fr">http://pgn.fr</a> se r??serve ??galement la possibilit?? de mettre en cause la responsabilit?? civile et/ou p??nale de l???utilisateur, notamment en cas de message ?? caract??re raciste, injurieux, diffamant, ou pornographique, quel que soit le support
                        utilis?? (texte, photographie ???).</p>

                    <h2>7. Gestion des donn??es personnelles.</h2>

                    <p>Le Client est inform?? des r??glementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l???Economie Num??rique, la Loi Informatique et Libert?? du 06 Ao??t 2004 ainsi que du R??glement G??n??ral
                        sur la Protection des Donn??es (RGPD : n?? 2016-679). </p>

                    <h3>7.1 Responsables de la collecte des donn??es personnelles</h3>

                    <p>Pour les Donn??es Personnelles collect??es dans le cadre de la cr??ation du compte personnel de l???Utilisateur et de sa navigation sur le Site, le responsable du traitement des Donn??es Personnelles est : pgn. <a href="http://pgn.fr">http://pgn.fr</a>est
                        repr??sent?? par Narek Vanyan, son repr??sentant l??gal</p>

                    <p>En tant que responsable du traitement des donn??es qu???il collecte, <a href="http://pgn.fr">http://pgn.fr</a> s???engage ?? respecter le cadre des dispositions l??gales en vigueur. Il lui appartient notamment au Client d?????tablir les
                        finalit??s de ses traitements de donn??es, de fournir ?? ses prospects et clients, ?? partir de la collecte de leurs consentements, une information compl??te sur le traitement de leurs donn??es personnelles et de maintenir un registre
                        des traitements conforme ?? la r??alit??. Chaque fois que <a href="http://pgn.fr">http://pgn.fr</a> traite des Donn??es Personnelles, <a href="http://pgn.fr">http://pgn.fr</a> prend toutes les mesures raisonnables pour s???assurer
                        de l???exactitude et de la pertinence des Donn??es Personnelles au regard des finalit??s pour lesquelles <a href="http://pgn.fr">http://pgn.fr</a> les traite.</p>

                    <h3>7.2 Finalit?? des donn??es collect??es</h3>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> est susceptible de traiter tout ou partie des donn??es :
                    </p>

                    <ul>

                        <li>pour permettre la navigation sur le Site et la gestion et la tra??abilit?? des prestations et services command??s par l???utilisateur : donn??es de connexion et d???utilisation du Site, facturation, historique des commandes, etc. </li>

                        <li>pour pr??venir et lutter contre la fraude informatique (spamming, hacking???) : mat??riel informatique utilis?? pour la navigation, l???adresse IP, le mot de passe (hash??) </li>

                        <li>pour am??liorer la navigation sur le Site : donn??es de connexion et d???utilisation </li>

                        <li>pour mener des enqu??tes de satisfaction facultatives sur <a href="http://pgn.fr">http://pgn.fr</a> : adresse email </li>
                        <li>pour mener des campagnes de communication (sms, mail) : num??ro de t??l??phone, adresse email
                        </li>


                    </ul>

                    <p><a href="http://pgn.fr">http://pgn.fr</a> ne commercialise pas vos donn??es personnelles qui sont donc uniquement utilis??es par n??cessit?? ou ?? des fins statistiques et d???analyses.</p>

                    <h3>7.3 Droit d???acc??s, de rectification et d???opposition</h3>

                    <p>
                        Conform??ment ?? la r??glementation europ??enne en vigueur, les Utilisateurs de <a href="http://pgn.fr">http://pgn.fr</a> disposent des droits suivants : </p>
                    <ul>

                        <li>droit d'acc??s (article 15 RGPD) et de rectification (article 16 RGPD), de mise ?? jour, de compl??tude des donn??es des Utilisateurs droit de verrouillage ou d???effacement des donn??es des Utilisateurs ?? caract??re personnel (article
                            17 du RGPD), lorsqu???elles sont inexactes, incompl??tes, ??quivoques, p??rim??es, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite </li>

                        <li>droit de retirer ?? tout moment un consentement (article 13-2c RGPD) </li>

                        <li>droit ?? la limitation du traitement des donn??es des Utilisateurs (article 18 RGPD) </li>

                        <li>droit d???opposition au traitement des donn??es des Utilisateurs (article 21 RGPD) </li>

                        <li>droit ?? la portabilit?? des donn??es que les Utilisateurs auront fournies, lorsque ces donn??es font l???objet de traitements automatis??s fond??s sur leur consentement ou sur un contrat (article 20 RGPD) </li>

                        <li>droit de d??finir le sort des donn??es des Utilisateurs apr??s leur mort et de choisir ?? qui <a href="http://pgn.fr">http://pgn.fr</a> devra communiquer (ou non) ses donn??es ?? un tiers qu???ils aura pr??alablement d??sign??</li>
                    </ul>

                    <p>D??s que <a href="http://pgn.fr">http://pgn.fr</a> a connaissance du d??c??s d???un Utilisateur et ?? d??faut d???instructions de sa part, <a href="http://pgn.fr">http://pgn.fr</a> s???engage ?? d??truire ses donn??es, sauf si leur conservation
                        s???av??re n??cessaire ?? des fins probatoires ou pour r??pondre ?? une obligation l??gale.</p>

                    <p>Si l???Utilisateur souhaite savoir comment <a href="http://pgn.fr">http://pgn.fr</a> utilise ses Donn??es Personnelles, demander ?? les rectifier ou s???oppose ?? leur traitement, l???Utilisateur peut contacter <a href="http://pgn.fr">http://pgn.fr</a> par ??crit ?? l???adresse suivante : </p>

                    pgn ??? DPO, Paul Boulier <br> 10 Place L??on Meyer 76600 Le Havre.

                    <p>Dans ce cas, l???Utilisateur doit indiquer les Donn??es Personnelles qu???il souhaiterait que <a href="http://pgn.fr">http://pgn.fr</a> corrige, mette ?? jour ou supprime, en s???identifiant pr??cis??ment avec une copie d???une pi??ce d???identit??
                        (carte d???identit?? ou passeport). </p>

                    <p>
                        Les demandes de suppression de Donn??es Personnelles seront soumises aux obligations qui sont impos??es ?? <a href="http://pgn.fr">http://pgn.fr</a> par la loi, notamment en mati??re de conservation ou d???archivage des documents.
                        Enfin, les Utilisateurs de <a href="http://pgn.fr">http://pgn.fr</a> peuvent d??poser une r??clamation aupr??s des autorit??s de contr??le, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).
                    </p>

                    <h3>7.4 Non-communication des donn??es personnelles</h3>

                    <p>
                        <a href="http://pgn.fr">http://pgn.fr</a> s???interdit de traiter, h??berger ou transf??rer les Informations collect??es sur ses Clients vers un pays situ?? en dehors de l???Union europ??enne ou reconnu comme ?? non ad??quat ?? par la
                        Commission europ??enne sans en informer pr??alablement le client. Pour autant, <a href="http://pgn.fr">http://pgn.fr</a> reste libre du choix de ses sous-traitants techniques et commerciaux ?? la condition qu???il pr??sentent les
                        garanties suffisantes au regard des exigences du R??glement G??n??ral sur la Protection des Donn??es (RGPD : n?? 2016-679).
                    </p>

                    <p>
                        <a href="http://pgn.fr">http://pgn.fr</a> s???engage ?? prendre toutes les pr??cautions n??cessaires afin de pr??server la s??curit?? des Informations et notamment qu???elles ne soient pas communiqu??es ?? des personnes non autoris??es.
                        Cependant, si un incident impactant l???int??grit?? ou la confidentialit?? des Informations du Client est port??e ?? la connaissance de <a href="http://pgn.fr">http://pgn.fr</a>, celle-ci devra dans les meilleurs d??lais informer le
                        Client et lui communiquer les mesures de corrections prises. Par ailleurs <a href="http://pgn.fr">http://pgn.fr</a> ne collecte aucune ?? donn??es sensibles ??.
                    </p>

                    <p>
                        Les Donn??es Personnelles de l???Utilisateur peuvent ??tre trait??es par des filiales de <a href="http://pgn.fr">http://pgn.fr</a> et des sous-traitants (prestataires de services), exclusivement afin de r??aliser les finalit??s de
                        la pr??sente politique.</p>
                    <p>
                        Dans la limite de leurs attributions respectives et pour les finalit??s rappel??es ci-dessus, les principales personnes susceptibles d???avoir acc??s aux donn??es des Utilisateurs de <a href="http://pgn.fr">http://pgn.fr</a> sont
                        principalement les agents de notre service client.</p>

                    <div ng-bind-html="rgpdHTML"></div>


                    <h2>8. Notification d???incident</h2>
                    <p>
                        Quels que soient les efforts fournis, aucune m??thode de transmission sur Internet et aucune m??thode de stockage ??lectronique n'est compl??tement s??re. Nous ne pouvons en cons??quence pas garantir une s??curit?? absolue. Si nous prenions connaissance d'une
                        br??che de la s??curit??, nous avertirions les utilisateurs concern??s afin qu'ils puissent prendre les mesures appropri??es. Nos proc??dures de notification d???incident tiennent compte de nos obligations l??gales, qu'elles se situent
                        au niveau national ou europ??en. Nous nous engageons ?? informer pleinement nos clients de toutes les questions relevant de la s??curit?? de leur compte et ?? leur fournir toutes les informations n??cessaires pour les aider ?? respecter
                        leurs propres obligations r??glementaires en mati??re de reporting.</p>
                    <p>
                        Aucune information personnelle de l'utilisateur du site <a href="http://pgn.fr">http://pgn.fr</a> n'est publi??e ?? l'insu de l'utilisateur, ??chang??e, transf??r??e, c??d??e ou vendue sur un support quelconque ?? des tiers. Seule l'hypoth??se
                        du rachat de <a href="http://pgn.fr">http://pgn.fr</a> et de ses droits permettrait la transmission des dites informations ?? l'??ventuel acqu??reur qui serait ?? son tour tenu de la m??me obligation de conservation et de modification
                        des donn??es vis ?? vis de l'utilisateur du site <a href="http://pgn.fr">http://pgn.fr</a>.</p>

                    <h3>S??curit??</h3>

                    <p>
                        Pour assurer la s??curit?? et la confidentialit?? des Donn??es Personnelles et des Donn??es Personnelles de Sant??, <a href="http://pgn.fr">http://pgn.fr</a> utilise des r??seaux prot??g??s par des dispositifs standards tels que par
                        pare-feu, la pseudonymisation, l???encryption et mot de passe. </p>

                    <p>
                        Lors du traitement des Donn??es Personnelles, <a href="http://pgn.fr">http://pgn.fr</a>prend toutes les mesures raisonnables visant ?? les prot??ger contre toute perte, utilisation d??tourn??e, acc??s non autoris??, divulgation, alt??ration
                        ou destruction.</p>

                    <h2>9. Liens hypertextes ?? cookies ?? et balises (???tags???) internet</h2>
                    <p>
                        Le site <a href="http://pgn.fr">http://pgn.fr</a> contient un certain nombre de liens hypertextes vers d???autres sites, mis en place avec l???autorisation de <a href="http://pgn.fr">http://pgn.fr</a>. Cependant, <a href="http://pgn.fr">http://pgn.fr</a> n???a pas la possibilit?? de v??rifier le contenu des sites ainsi visit??s, et n???assumera en cons??quence aucune responsabilit?? de ce fait.</p>
                    Sauf si vous d??cidez de d??sactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez ?? tout moment d??sactiver ces cookies et ce gratuitement ?? partir des possibilit??s de d??sactivation qui vous sont offertes et rappel??es ci-apr??s,
                    sachant que cela peut r??duire ou emp??cher l???accessibilit?? ?? tout ou partie des Services propos??s par le site.
                    <p></p>

                    <h3>9.1. ?? COOKIES ??</h3>
                    <p>
                        Un ?? cookie ?? est un petit fichier d???information envoy?? sur le navigateur de l???Utilisateur et enregistr?? au sein du terminal de l???Utilisateur (ex : ordinateur, smartphone), (ci-apr??s ?? Cookies ??). Ce fichier comprend des informations telles que le nom
                        de domaine de l???Utilisateur, le fournisseur d???acc??s Internet de l???Utilisateur, le syst??me d???exploitation de l???Utilisateur, ainsi que la date et l???heure d???acc??s. Les Cookies ne risquent en aucun cas d???endommager le terminal
                        de l???Utilisateur.</p>
                    <p>
                        <a href="http://pgn.fr">http://pgn.fr</a> est susceptible de traiter les informations de l???Utilisateur concernant sa visite du Site, telles que les pages consult??es, les recherches effectu??es. Ces informations permettent ??
                        <a href="http://pgn.fr">http://pgn.fr</a> d???am??liorer le contenu du Site, de la navigation de l???Utilisateur.
                    </p>
                    <p>
                        Les Cookies facilitant la navigation et/ou la fourniture des services propos??s par le Site, l???Utilisateur peut configurer son navigateur pour qu???il lui permette de d??cider s???il souhaite ou non les accepter de mani??re ?? ce que des Cookies soient enregistr??s
                        dans le terminal ou, au contraire, qu???ils soient rejet??s, soit syst??matiquement, soit selon leur ??metteur. L???Utilisateur peut ??galement configurer son logiciel de navigation de mani??re ?? ce que l???acceptation ou le refus des
                        Cookies lui soient propos??s ponctuellement, avant qu???un Cookie soit susceptible d?????tre enregistr?? dans son terminal. <a href="http://pgn.fr">http://pgn.fr</a> informe l???Utilisateur que, dans ce cas,
                        il se peut que les fonctionnalit??s de son logiciel de navigation ne soient pas toutes disponibles.
                    </p>
                    <p>
                        Si l???Utilisateur refuse l???enregistrement de Cookies dans son terminal ou son navigateur, ou si l???Utilisateur supprime ceux qui y sont enregistr??s, l???Utilisateur est inform?? que sa navigation et son exp??rience sur le Site peuvent ??tre limit??es. Cela pourrait
                        ??galement ??tre le cas lorsque <a href="http://pgn.fr">http://pgn.fr</a> ou l???un de ses prestataires ne peut pas reconna??tre, ?? des fins de compatibilit?? technique, le type de navigateur utilis?? par
                        le terminal, les param??tres de langue et d???affichage ou le pays depuis lequel le terminal semble connect?? ?? Internet.</p>
                    <p>
                        Le cas ??ch??ant, <a href="http://pgn.fr">http://pgn.fr</a> d??cline toute responsabilit?? pour les cons??quences li??es au fonctionnement d??grad?? du Site et des services ??ventuellement propos??s par
                        <a href="http://pgn.fr">http://pgn.fr</a>, r??sultant (i) du refus de Cookies par l???Utilisateur (ii) de l???impossibilit?? pour <a href="http://pgn.fr">http://pgn.fr</a> d???enregistrer ou de consulter les Cookies n??cessaires ?? leur
                        fonctionnement du fait du choix de l???Utilisateur. Pour la gestion des Cookies et des choix de l???Utilisateur, la configuration de chaque navigateur est diff??rente. Elle est d??crite dans le menu d???aide du navigateur, qui permettra
                        de savoir de quelle mani??re l???Utilisateur peut modifier ses souhaits en mati??re de Cookies.
                    </p>
                    <p>
                        ?? tout moment, l???Utilisateur peut faire le choix d???exprimer et de modifier ses souhaits en mati??re de Cookies. <a href="http://pgn.fr">http://pgn.fr</a> pourra en outre faire appel aux services de prestataires externes pour
                        l???aider ?? recueillir et traiter les informations d??crites dans cette section.</p>
                    <p>
                        Enfin, en cliquant sur les ic??nes d??di??es aux r??seaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de <a href="http://pgn.fr">http://pgn.fr</a> ou dans son application mobile et si l???Utilisateur a
                        accept?? le d??p??t de cookies en poursuivant sa navigation sur le Site Internet ou l???application mobile de <a href="http://pgn.fr">http://pgn.fr</a>, Twitter, Facebook, Linkedin et Google Plus peuvent ??galement d??poser des cookies
                        sur vos terminaux (ordinateur, tablette, t??l??phone portable).</p>
                    <p>
                        Ces types de cookies ne sont d??pos??s sur vos terminaux qu????? condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l???application mobile de <a href="http://pgn.fr">http://pgn.fr</a>. ?? tout moment,
                        l???Utilisateur peut n??anmoins revenir sur son consentement ?? ce que <a href="http://pgn.fr">http://pgn.fr</a> d??pose ce type de cookies.</p>

                    <h3>Article 9.2. BALISES (???TAGS???) INTERNET</h3>


                    <p>

                        <a href="http://pgn.fr">http://pgn.fr</a> peut employer occasionnellement des balises Internet (??galement appel??es ?? tags ??, ou balises d???action, GIF ?? un pixel, GIF transparents, GIF invisibles et GIF un ?? un) et les d??ployer
                        par l???interm??diaire d???un partenaire sp??cialiste d???analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l???adresse IP de l???Utilisateur) dans un pays ??tranger.
                    </p>

                    <p>
                        Ces balises sont plac??es ?? la fois dans les publicit??s en ligne permettant aux internautes d???acc??der au Site, et sur les diff??rentes pages de celui-ci.
                    </p>
                    <p>
                        Cette technologie permet ?? <a href="http://pgn.fr">http://pgn.fr</a> d?????valuer les r??ponses des visiteurs face au Site et l???efficacit?? de ses actions (par exemple, le nombre de fois o?? une page est ouverte et les informations
                        consult??es), ainsi que l???utilisation de ce Site par l???Utilisateur. </p>
                    <p>
                        Le prestataire externe pourra ??ventuellement recueillir des informations sur les visiteurs du Site et d???autres sites Internet gr??ce ?? ces balises, constituer des rapports sur l???activit?? du Site ?? l???attention de <a href="http://pgn.fr">http://pgn.fr</a>,
                        et fournir d???autres services relatifs ?? l???utilisation de celui-ci et d???Internet.</p>
                    <p>
                    </p>
                    <h2>10. Droit applicable et attribution de juridiction.</h2>
                    <p>
                        Tout litige en relation avec l???utilisation du site <a href="http://pgn.fr">http://pgn.fr</a> est soumis au droit fran??ais. En dehors des cas o?? la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux
                        comp??tents de 76600</p>



                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X Fermer</button>
                </div>
            </div> -->

</body>

</html>