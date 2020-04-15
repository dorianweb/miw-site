<template>
    <footer class="footer">
        <div class="footer_contact_logo_social">
            <div class="bande_verte"></div>
            <div class="contact_addresse">
                <div>
                    <div class="">
                        <div><a href="" class="title">Contacts</a></div>
                        <div><a href="" class="title">Partenaires</a></div>
                    </div>
                    <div class="">
                        <div class="title">Adresse</div>

                        <a href="https://www.google.com/maps/place/2+Rue+Bayard,+05000+Gap/@44.5625513,6.0772734,17z/data=!4m5!3m4!1s0x12cb406e007725a3:0x77b5f78bb62e3bee!8m2!3d44.5625513!4d6.0794621">
                            <div class="text"> 2 Rue bayard</div>
                            <div class="text"> Gap:05000</div>
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="title">Téléphone</div>
                        <a class="text" href="tel:+336"> Secrétaire :04.55.55.55.55</a>
                        <a class="text" href="tel:+33492532946">Recruteur: 04.92.53.29.46</a>
                    </div>
                    <div>
                        <div class="title">Address e-mail</div>
                        <a href="mailto:roland.grosso@univ-amu.fr" class="text">
                            Recruteur:roland.grosso@univ-amu.fr
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer_block logo_social">
                <div class="footer_contact_logo">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </div>
                <div class="footer_contact_social">
                    <a v-for="social in socials" :href="social.link?social.link:'#'" class="social">
                        <svg>
                            <use :xlink:href="'#'+social.svg_name"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer_block order-2">
                <a class="footer_contact_amu" href="https://www.univ-amu.fr/">
                    <div class="amu-icon">
                        <svg>
                            <use xlink:href="#logo-amu"></use>
                        </svg>
                    </div>

                </a>
                <div class="links">
                    <a class="mention" href="#">Mention légales</a>
                    <a class="plan" href="#">plan du site</a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'Footer',
        props: ['socials'],
        data: () => {
            return {}
        },
        methods: {},
    }
</script>

<style scoped>
    svg {
        width: 100%;
        height: 100%;
    }

    .footer {
        width: 100%;
        height: 300px;
    }

    .bande_verte {
        width: 100%;
        height: 20px;
        background-color: #2198A2;
    }

    .footer_contact_logo_social {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background: linear-gradient(#7FCFF5, #4CA6BD, #1CB1BA);
        height: fit-content;
    }


    .footer_contact_logo {
        margin-top: 15px;
        width: 50%;
        height: 68px;
        fill: black;
        opacity: 0.8;

    }

    .footer_contact_social {
        display: flex;
        width: 100%;
        justify-content: space-around;
        align-items: center;
        margin-top: 26px;
    }

    .social {
        width: 60px;
        height: 60px;
        background-color: #27AFBB;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        fill: white;
    }

    .social > svg {
        width: 50%;
        height: 50%;
    }

    .amu-icon {
        width: 100px;
        height: 50px;
        fill: white;
        fill-opacity: 0.8;
        margin-top: 40px;
    }

    .links > a {
        color: white;
        font-size: 0.7em;
        text-decoration: none;
        opacity: 0.8;
    }

    .mention {
        padding-right: 10px;
        border-right: 1px solid white;
    }

    .plan {
        padding-left: 10px;
    }

    .footer_block {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .title {
        font-size: 1.2em;
        font-style: italic;
        font-weight: bold;
        color: white;
        opacity: 1;
        padding: 5px;
    }

    .text {
        color: white;
        font-size: 0.9em;
        opacity: 0.8;
        display: block;
    }

    .contact_addresse {
        width: 100%;
        padding: 10px;
        display: flex;
        flex-direction: column;
    }

    @media screen and (min-width: 768px) {

        .footer {
            height: 200px;
        }

        .footer_contact_logo_social {
            flex-direction: row;
            justify-content: space-between;
            height: inherit;
        }

        .bande_verte {
            display: none;
        }

        .contact_addresse {
            background-color: transparent;
            flex-direction: row;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 400px;
            order: 1;
        }

        .logo_social {
            width: 200px;
            order: 0;
        }

        .amu-icon {
            margin: 0;
            width: 180px;
        }

        .footer_contact_social {
            margin-top: 10px;
        }

        .footer_contact_logo {
            margin: 0;
        }

        .social {
            width: 45px;
            height: 45px;
        }

        .title {
            font-size: 1em;
        }

        .text {
            font-size: 0.8em;
        }

    }

    @media screen and (min-width: 1024px) {

        .contact_addresse {
            padding: 1% 5%;
            justify-content: space-evenly;
            width: 50%;
        }


    }


</style>
