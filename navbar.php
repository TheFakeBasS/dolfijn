<!-- navbar.php -->
<nav>
    <div class="logo">
        <img src="dolphin.png" alt="Logo">
        <a>Dolphien</a>
    </div>
    <div class="dropdown" onclick="toggleMenu()">
        &#9776;
    </div>
    <ul class="navdolfijnenwrapper">
        <li class="navdolfijnen"><a href="index.php">Home</a></li>
        <li class="navdolfijnen"><a href="Algemeneinformatie.php">Algemeen</a></li>
        <li class="navdolfijnen"><a href="Geschiedenis.php">Geschiedenis</a></li>
        <li class="navdolfijnen"><a href="Leefgebieden.php">Leefgebieden</a></li>
        <li class="navdolfijnen"><a href="Activiteiten.php">Activiteiten</a></li>
    </ul>
</nav>

<style>
    nav {
        display: flex;
        align-items: center; /* Center items vertically */
        justify-content: space-between; /* Space out logo and menu items */
        width: 100%;
        height: 90px;
        background-color: black;
        padding: 0 30px;
        box-sizing: border-box; /* Include padding and border in element’s total width and height */
    }

    .logo {
        flex-shrink: 0;
    }

    .logo img {
        height: 60px;
    }

    .navdolfijnenwrapper {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: row;
        list-style: none;
        align-items: center;
    }

    .navdolfijnen {
        margin-left: 10px;
        margin-right: 50px;
        display: flex;
        align-items: center;
    }

    .navdolfijnen::before {
        display: inline-block;
        width: 30px;
        height: 30px;
        background: url('dolphin.png') no-repeat center center;
        background-size: cover;
        margin-right: 10px;
    }

    a {
        color: white;
        text-decoration: none;
        font-size: larger;
    }

    .dropdown {
        display: none;
        font-size: 30px;
        cursor: pointer;
        color: white;
    }

    /* Mobile */
    @media (max-width: 425px) {
        .navdolfijnenwrapper {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 90px;
            left: 0;
            width: 100%;
            background-color: black;
            text-align: center;
        }

        .navdolfijnen {
            margin: 15px 0;
        }

        .dropdown {
            display: block;
        }

        .navdolfijnenwrapper.active {
            display: flex;
        }
    }
</style>

<script>
    function toggleMenu() {
        const nav = document.querySelector('.navdolfijnenwrapper');
        nav.classList.toggle('active');
    }
</script>
