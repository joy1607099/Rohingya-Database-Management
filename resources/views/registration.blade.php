<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rohingya - Homepage</title>
    
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
            margin-left: 100px;
           
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
            width: 150px;
            height: 150px;

            padding: 20px 0 0;
            margin-right:50px;
            margin-bottom: 100px;
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

        #username, #password{
            width: 70%;
            padding: 8px 4px 8px 10px;
            margin-bottom: 15px;
            margin-left:140px;
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

        .form input::before {
            color: grey;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        #username:hover,
        #password:hover {
            border-color: #333;
        }

        #username:focus,
        #password:focus,
        #Button1:focus {
            box-shadow:
                0 1px 0 rgba(255, 255, 255, 0.2),
                inset 0 1px 1px rgba(0, 0, 0, 0.1),
                0 0 0 3px rgba(255, 255, 255, 0.15);
            outline: none;
        }

        #Button1{
            margin-left:140px;
            width: 70px;
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

        #Button1:hover {
            box-shadow:
                inset 0 1px rgba(255, 255, 255, 0.2),
                inset 0 20px 30px rgba(99, 64, 86, 0.5);
        }

        .no-boxshadow #Button1:hover {
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
            position:static;
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
        .auto-style1 {
            width: 512px;
            height: 512px;
        }
        

    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <div>

                <div class="mainDetails">
                    <div id="pro_pic">
                            <a href="Homepage.html"><img src="images/mace.png" alt="bidworld" /></a>
                    </div>
                    <div id="name">
                        <h1 style="font-size:30px; color: #88b8ff;">Welcome to BidWorld!</h1>
                        <h2 style="color:#f3f3f3">Homepage</h2>
                    </div>

                    <div id="contactDetails">
                        <a href="login_buyer.aspx" style="color:azure;"><span>Buyer LogIn</span></a>
                        <a href="logon_seller.aspx" style="color:azure;"><span>Seller LogIn</span></a>
                        <a href="login_admin.aspx" style="color:azure;"><span>Admin LogIn</span></a>
                    </div>
                    <div class="clear"></div>
                </div>
           
        </div>
        <div>
            <ul id="topmost">
                <li><a class="active" href="http://localhost:8000/home">Home</a></li>
                <li><a href="http://localhost:8000/">Log In</a></li>
                <li><a href="http://localhost:8000/reg">Register</a></li>
                <li><a href="customer_care.aspx">Customer Care</a></li>
                <li><a href="#contact">Today's Deals</a></li>
                <li><a href="#contact">Gift Card</a></li>
                <li><a href="#contact">Sales</a></li>
                <li><a href="#contact">registry</a></li>
                <li><a href="#contact">Help</a></li>
                <li style="float:right"><a href="about.aspx">About</a></li>
            </ul>

        </div>
        <nav>
            <a href="/html/">All Departments</a>
            <a href="/css/">Search for products</a>
            <a href="/js/">All Category</a>
            <a href="/jquery/">Search</a>
        </nav>
    
    </div>
        <div id="mainArea">
            <div>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>

            </div>
            <div>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>
                <section>
                
                </section>

            </div>
            

            

        </div>

    </form>
</body>
</html>
