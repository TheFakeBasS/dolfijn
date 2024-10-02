<footer>
    <ul>
        <a href="index.php">Home</a>
        <a href="Algemeneinformatie.php">Algemeen</a>
        <a href="Geschiedenis.php">Geschiedenis</a>
        <a href="Leefgebieden.php">Leefgebieden</a>
        <a href="Activiteiten.php">Activiteiten</a>
    </ul>
    <div class="contact">
        <p class="footer-title">Contact</p>
        <div class="item">WhatsApp: 06 54 98 74 89</div>
        <div class="item">Telefoon: 088 2333 444</div>
        <div class="item">Mail: studieinfo@rocmn.nl</div>
    </div>
    <div class="madeby">
        <p class="footer-title">Gemaakt door:</p>
        <div class="item">Mike Vergeer</div>
        <div class="item">Bas</div>
        <div class="item">Isaiah</div>
        <div class="item">Hamza</div>
        <div class="item">Thomas van Sprang</div>
    </div>
</footer>

<style>
    footer {
        display: flex;
        justify-content: space-evenly;
        background-color: black;
        padding: 50px 0;
    }

    .footer-title {
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        margin: 0;
    }

    .contact,
    .madeby {
        display: flex;
        flex-direction: column;
        color: #fff;
        gap: 7px;
    }

    ul {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin: 0;
    }

    footer a {
        color: #fff;
    }

    ul {
        padding: 0;
    }

    @media (max-width: 375px) {
        footer {
            flex-direction: column;
            gap: 25px;
        }
        ul {
            align-items: center;
        }
        .contact {
            align-items: center;
        }
        .madeby {
            align-items: center;
        }
    }
</style>