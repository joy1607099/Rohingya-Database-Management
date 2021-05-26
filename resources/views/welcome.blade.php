<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
        html,
        body,
        div,
        span,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        abbr,
        address,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        samp,
        small,
        strong,
        sub,
        sup,
        var,
        b,
        i,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            border: 0;
            font: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }



        html,
        body {
            background-image: url("images/oqitDqs-full-black-wallpaper.jpg");
            font-family: 'Lato', helvetica, arial, sans-serif;
            font-size: 16px;
            color: #222;
        }

        .clear {
            clear: both;
        }

        p {
            font-size: 1.05em;
            line-height: 1.45em;
            margin-bottom: 20px;
            color: azure;
        }

        #cv {
            width: 90%;
            max-width: 800px;
            background: #f3f3f3;
            margin: 30px auto;
        }

        .mainDetails {
            padding: 25px 35px;
            border-bottom: 2px solid #88b8ff;

        }


        #mainArea {
            padding: 0 40px;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 100px;
        }

        #contactDetails {
            float: right;
            font-weight: bold;
            color: azure;
        }

        #contactDetails span {
            background: rgba(200, 200, 200, 0.2);
            display: inline-block;
            box-shadow: 0 0 0 2px #88b8ff;
            padding-bottom: 20px;
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            margin-right: 50px;
            border-radius: 10px;
        }



        section {
            background: rgba(200, 200, 200, 0.2);
            display: inline-block;
            border: 2px solid rgb(86, 180, 239);
            box-shadow: 2px 4px 3px 3px rgba(0, 0, 0, 0.05) inset, 0px 0px 10px rgba(82, 168, 236, 0.6);
            border-radius: 10px;
            width: 750px;
            height: 400px;

            padding: 20px 0 0;
            margin-bottom: 400px;
        }



        .sectionTitle {
            padding-left: 30px;
            margin-bottom: 50px;
        }

        .sectionContent {
            padding-left: 30px;
            margin-bottom: 20px;
        }

        .sectionTitle h1 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            font-style: italic;
            font-size: 1.5em;
            color: azure;
        }


        .subDetails {
            font-size: 0.8em;
            font-style: italic;
            margin-bottom: 3px;
        }

        #name {
            float: left;
        }

        #name h1 {
            font-size: 2.5em;
            font-weight: 700;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            margin-bottom: -6px;
        }

        #name h2 {
            font-size: 2em;
            margin-left: 2px;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        }

        #pro_pic {
            margin-right: -80px;
            margin-left: 30px;
            width: 12.5%;
            float: left;
        }


        #pro_pic img {
            width: 35%;
            height: auto;
            border-radius: 50px;
        }

        .form {
            width: 300px;
            margin: 60px auto 30px;
            padding: 10px;
            position: relative;
            color: azure;
            text-shadow: 0 2px 1px rgba(0, 0, 0, 0.3);
        }

        .form h1 {
            font-size: 22px;
            padding-bottom: 20px;
        }

        .form input[type=text],
        .form input[type=password] {
            width: 100%;
            padding: 8px 4px 8px 10px;
            margin-bottom: 15px;
            color: azure;
            border: 1px solid #4e3043;
            border: 1px solid rgba(78, 48, 67, 0.8);
            background: rgba(0, 0, 0, 0.75);
            border-radius: 2px;
            box-shadow:
                0 1px 2px rgba(255, 255, 255, 0.2),
                inset 0 1px 2px rgba(0, 0, 0, 0.1);
            font-size: 13px;
        }

        .form input::placeholder {
            color: grey;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        .form input[type=text]:hover,
        .form input[type=password]:hover {
            border-color: #333;
        }

        .form input[type=text]:focus,
        .form input[type=password]:focus,
        .form input[type=submit]:focus {
            box-shadow:
                0 1px 0 rgba(255, 255, 255, 0.2),
                inset 0 1px 1px rgba(0, 0, 0, 0.1),
                0 0 0 3px rgba(255, 255, 255, 0.15);
            outline: none;
        }

        .form input[type=submit] {
            width: 50%;
            padding: 8px 5px;
            background: linear-gradient(rgba(99, 64, 86, 0.5), rgba(76, 49, 65, 0.7));
            border-radius: 5px;
            border: 1px solid #4e3043;
            box-shadow:
                inset 0 1px rgba(255, 255, 255, 0.4),
                0 2px 1px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.3s ease-out;
            color: azure;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
            font-size: 16px;
            font-weight: bold;
            font-family: 'Raleway', 'Lato', Arial, sans-serif;
        }

        .form input[type=submit]:hover {
            box-shadow:
                inset 0 1px rgba(255, 255, 255, 0.2),
                inset 0 20px 30px rgba(99, 64, 86, 0.5);
        }

        .no-boxshadow .form input[type=submit]:hover {
            background: #594642;
        }

        .form label {
            display: none;
            padding: 0 0 5px 2px;
            cursor: pointer;
        }

        ul {

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:  rgba(86, 180, 239,0.5);
        }

        li {
            position: sticky;
            float: left;
            border-right: 1px solid #88b8ff;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: azure;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: rgb(86, 180, 239);
        }

        .active {
            background-color: #88b8ff;
        }

        li a:hover {
            background-color: rgb(86, 180, 239);
        }
    </style>
    </head>
   
<body id="top">
    <div>
       
        <div>
            <span>
                <div class="mainDetails">
                    <div id="pro_pic">
                        <a href="Homepage.html"><img src="images/mace.png" alt="bidworld" /></a>
                    </div>
                    <div id="name">
                        <h1 style="font-size:30px; color: #88b8ff;">Welcome to BidWorld!</h1>
                        <h2 style="color:#f3f3f3">Buyer's Login</h2>
                    </div>

                    <div id="contactDetails">
                        <a href="sellerlogin.html" style="color:azure;"><span>Seller LogIn</span></a>
                        <a href="adminlogin.html" style="color:azure;"><span>Admin LogIn</span></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </span>
        </div>
        <div>
            <ul>
                <li><a class="active" href="http://localhost:8000/home">Home</a></li>
                <li><a href="http://localhost:8000/">Log In</a></li>
                <li><a href="http://localhost:8000/reg">Register</a></li>
                <li><a href="#contact">Customer Care</a></li>
                <li><a href="#contact">Today's Deals</a></li>
                <li><a href="#contact">Gift Card</a></li>
                <li><a href="#contact">Sales</a></li>
                <li><a href="#contact">registry</a></li>
                <li><a href="#contact">Help</a></li>
                <li style="float:right"><a href="#about">About</a></li>
            </ul>
        </div>



        <div id="mainArea">
            <section>
                <article>
                    <div class="sectionTitle">
                        <form class="form">
                            <h1>Login or <a href="#" style="color:cornflowerblue">Register</a></h1>
                            <p>
                                <label for="login">Username or email</label>
                                <input type="text" name="login" placeholder="Username or email" required>
                            </p>
                            <p>
                                <label for="password">Password</label>
                                <input type="password" name='password' placeholder="Password" required>
                            </p>

                            <p>
                                <input type="submit" name="submit" value="Sign In"><br><br>
                            </p>
                        </form>
                    </div>

                </article>
                <div class="clear"></div>
            </section>

        </div>

    </div>
</body>

</html>