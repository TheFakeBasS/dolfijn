<!-- navbar.php -->
<nav>
    <div class="logo">
        <img src="dolphin.png" alt="Logo">
        <a>Dolphien</a>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Algemeneinformatie.php">Algemeen</a></li>
        <li><a href="Geschiedenis.php">Geschiedenis</a></li>
        <li><a href="Leefgebieden.php">Leefgebieden</a></li>
        <li><a href="Activiteiten.php">Activiteiten</a></li>
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

        ul {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            list-style: none;
            align-items: center;
        }

        li {
            margin-left: 10px;
            margin-right: 50px;
            display: flex;
            align-items: center;
        }

        li::before {
            content: "";
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
    </style>