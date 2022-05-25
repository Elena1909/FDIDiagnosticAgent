<?php
include 'locale.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" content="NO-CACHE">
    <meta http-equiv="Cache-Control" content="no-store">
    <title><?php echo $locale[0] ?> </title>
    <style type="text/css">
    body {
        margin: 0 10%;
    }
    </style>
    <script language="JavaScript" SRC="locale.js">
    </script>
    <script language="JavaScript" SRC="_Test.js">
    </script>
    <script language="JavaScript" SRC="_Test2.js">
    </script>
</head>

<body style='font-face:Times New Roman, sans-serif;font-weight: 100;font-size:16pt;'>
    <FONT FACE="Times New Roman, sans-serif">
        <center><br><br>
            <table border="0" cellspacing="0" cellspadding="0" width="500">
                <tr>
                    <td>
                        <form name="Colors">
                            <small><?php echo $locale[26] ?>:</small><br>
                            <Select Name="schemesel" OnChange="document.bgColor = this.options[selectedIndex].value">
                                <Option Value="white" selected><?php echo $locale[34] ?>
                                <Option Value="E3F0F3"><?php echo $locale[35] ?>
                                <Option Value="F3F3A3"><?php echo $locale[36] ?>
                                <Option Value="A5F3A3"><?php echo $locale[37] ?>
                                <Option Value="F3EBA3"><?php echo $locale[38] ?>
                                <Option Value="DDDDDD"><?php echo $locale[39] ?>
                            </Select>
                        </Form>
                    <td><a OnClick="Start();Down();" href="#null">
                            <button id='bd' border=1 style="-webkit-border-radius: 15px;font-face:Segoe Script, sans-serif;font-weight:
                600;color:darkblue; background-color: white;font-size:18pt;" type="button"
                                title="<?php echo $locale[27] ?>"><?php echo $locale[27] ?></button>
                        </a>
                    <td><a onclick=Exit(); href="#null" OnClick="Exit()" ;>
                            <button style="-webkit-border-radius: 15px;font-face:Segoe Script, sans-serif;font-weight:
                600;color:darkblue; background-color: red;font-size:18pt;" type="button"
                                title="<?php echo $locale[28] ?>"><?php echo $locale[28] ?></button>
                        </a>
                </tr>
            </table>
            <hr width="600" size="1">
            <table border="0" cellspacing="0" cellspadding="0" width="70%">
                <tr>
                    <td>
                        <b>
                            <?php echo $locale[29] ?>
                        </b>
                    </td>
                    <td>
                        <div><b>
                                <input type="text" name="downtxt" id="downtxt" size=4 value="0">
                                <input type="hidden" name="tm" id="tm" size=1 value="0">
                                <input type="hidden" name="ts" id="ts" size=1 value="0">

                            </b></div>
                    </td>
                    <td>
                        <div><b><?php echo $locale[30] ?></b></div>
                    <td><img border="0" src="Pic/Test/N0.GIF" width="46">
                    <td>
                        <div><b><?php echo $locale[31] ?></b></div>
                    </td>
                    <td>
                        <div><b><?php echo $locale[32] ?>:</b></div>
                    <td><img border="0" src="Pic/Test/N0.GIF" width="46">
                    <td>
                        <div><b>&nbsp; <?php echo $locale[33] ?> 49.</b></div>
                    </td>
                </tr>
            </table>
            <table border="0" cellspacing="0" cellspadding="0" width="600">
                <tr>
                    <td><img border="1" hspace="3" src="Pic/Test/BLANK.GIF" width="120" height="120"
                            alt="<?php echo $locale[9] ?>">
                    </td>
                    <td><a href="#null" onClick="Count_a();">
                            <img border="0" hspace="3" src="Pic/Test/BLANK.GIF" width="120" height="120" alt="Вариант 1"
                                name="ex1a"></a></td>
                    <td><a href="#null" onClick="Count_b();">
                            <img border="0" hspace="3" src="Pic/Test/BLANK.GIF" width="120" height="120" alt="Вариант 2"
                                name="ex1b"></a></td>
                    <td><a href="#null" onClick="Count_c();">
                            <img border="0" hspace="3" src="Pic/Test/BLANK.GIF" width="120" height="120" alt="Вариант 3"
                                name="ex1c"></a></td>
                    <td>
                    <td><a href="#null" onClick="Count_d();">
                            <img border="0" hspace="3" src="Pic/Test/BLANK.GIF" width="120" height="120" alt="Вариант 4"
                                name="ex1d"></a></td>
                </tr>
            </table><br><br><br>
            <a onclick=Next(); href="#null">
                <button style="-webkit-border-radius: 15px;font-face:Segoe Script, sans-serif;font-weight:
                600;color:darkblue; background-color: white;font-size:18pt;" type="button"
                    title="<?php echo $locale[24] ?>"><?php echo $locale[24] ?></button>
            </a>
        </center>
    </FONT>
</body>

</html>