<footer>
    <ul>
        <a href="index.php">Home</a>
        <a href="Algemeneinformatie.php">Algemeen</a>
        <a href="Geschiedenis.php">Geschiedenis</a>
        <a href="Leefgebieden.php">Leefgebieden</a>
        <a href="Activiteiten.php">Activiteiten</a>
    </ul>
    <p class="footer-title">Contact</p>
    <div class="contact"></div>
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

    .contact {
        color: #fff;
    }

    ul {
        display: flex;
        flex-direction: column;
        gap: 7px;
    }

    footer a {
        color: #fff;
    }
</style>