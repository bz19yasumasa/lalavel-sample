<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Styles -->
    <style>
        .header_pic{
            width:1000px;
            height: 200px;

        }
        .header_div{
            text-align: center;

        }
        #title{
            font-size: 50px;
            background-color: #C2EEFF;
        }

        .t_class{
            width: 1000px;
            height: 400px;
            margin: 10px auto;

        }

        .t_head{
            text-align: center;
            color:lightyellow;
            background: linear-gradient(#829ebc,#225588);
            border-left: 1px solid #3c6690;
            border-top: 1px solid #3c6690;
            border-bottom: 1px solid #3c6690;
            box-shadow: 0px 1px 1px rgba(255,255,255,0.3) inset;

            padding: 5px 0;
        }
        .td_image{
            text-align: center;
        }
        .td_pic{
            width: 700px;
            height: 300px;
        }
        .td_post{
            text-align: right;
        }

    </style>
</head>
<body>
    <main>

        <h1 id="title">testblog</h1>
        <a>投稿一覧</a>


            <table class="t_class">
                <tr>
                    <th class="t_head"><a href="/blog/data">アップグレード</a></th class="t_head">
                </tr>
                <tr>
                    <td class="td_image">
                        <img src="../image/upgrade.jpg" alt="up_pic" class="td_pic" ></img>
                    </td class="td_image">
                </tr>
                <tr>
                    <td class="td_post">
                    <a href="/blog/post1"> 投稿者：安元</a>
                    </td class="td_post">
                </tr>
            </table class="t_class">

            <table class="t_class">
                <tr>
                    <th class="t_head">B'z 5Eras 8820 days3</th class="t_head">
                </tr>
                <tr>
                    <td class="td_image">
                        <img src="../image/bz.jpg" alt="bz_pic" class="td_pic"></img>
                    </td class="td_image">
                </tr>
                <tr>
                    <td class="td_post">
                    <a href="/blog/post2"> 投稿者：稲葉</a>
                    </td class="td_post">
                </tr>
            </table class="t_class">
            <table class="t_class">
                <tr>
                    <th class="t_head">ヴァイオレット.エヴァーガーデン</th class="t_head">
                </tr>
                <tr>
                    <td class="td_image">
                        <img src="../image/vaiolet.jpg" alt="vaiolet_pic" class="td_pic"></img>
                    </td class="td_image">
                </tr>
                <tr>
                    <td class="td_post">
                    <a href="/blog/post1"> 投稿者：安元</a>
                    </td class="td_post">
                </tr>
            </table class="t_class">

    </main>
</body>
</html>