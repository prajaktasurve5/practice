<html>
<head>
    <title>Side Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Basic CSS for the side menu */
        #side-menu {
            width: 250px;
            height: 100%; 
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding-top: 20px;
            overflow-y: auto;
        }

        #side-menu a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #side-menu a:hover {
            background-color: #555;
            
        }
        </style>
</head>
<body>
    <div id='side-menu'>
        <h2>Menu</h2>
        <a href='#'>dashboard</a>
        <a href='#'>user</a>
        <a href='#'>Sale</a>
        <a href='#'>Report</a>
        <a href='#'>product</a>
        <a href='logout.php'>Logout</a>
    </div>
    </body>
    </html>



