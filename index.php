<?php
include 'locale.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" content="NO-CACHE">
    <meta http-equiv="Cache-Control" content="no-store">
    <title><?php echo $locale[0] ?></title>
    <style type="text/css">
    body {
        margin: 0 10%;
    }
    </style>
    <script language="JavaScript">
    FontFace = "Arial"
    TopicText1 = '<?php echo $locale[1] ?>';
    TopicText2 = '<?php echo $locale[2] ?>';
    TopicText3 = '<?php echo $locale[3] ?>';
    TopicText4 = '<?php echo $locale[4] ?>';
    TopicText5 = '<?php echo $locale[5] ?>';
    TopicText6 = '<?php echo $locale[6] ?>';
    </script>
</head>

<body
    style='font-face:Times New Roman, sans-serif;font-weight: 100;font-size:16pt;background-color: #E8E8E8; border-color: #E8E8E8; '>
    <FONT FACE="Times New Roman, sans-serif">
        <center><br>
            <button style="-webkit-border-radius: 15px;font-face:Segoe Script, sans-serif;font-weight:
                600;color:darkblue; background-color: white;font-size:18pt;" type="button"
                title="<?php echo $locale[23] ?>"><?php echo $locale[23] ?></button>
            <table border="0" cellspacing="0" cellspadding="0" width="600">
                <tr><br><br>
                    <div>
                        <?php echo $locale[7] ?></div><br><br>
                    <div><?php echo $locale[8] ?></div><br><br>
                </tr>
                <tr>
                    <td><img border="1" hspace="3" src="Pic/Instr/EX1.GIF" width="120" height="120"
                            alt="<?php echo $locale[9] ?>"></td>
                    <td><a href="#null" onClick="javascript:{
                                a=document.images.ex1a.border;
                                b=document.getElementById('test1');
                                if(a=='0')
                                {document.images.ex1a.border='2';b.innerHTML='<?php echo $locale[6] ?>'+' '+'<?php echo $locale[1] ?>';}
                                else
                                {document.images.ex1a.border='0'; b.innerHTML='';};
                            }">
                            <img border="0" hspace="3" src="Pic/Instr/EX1A.GIF" width="120" height="120"
                                title="<?php echo $locale[10] ?>" name="ex1a"></a></td>
                    <td><a href="#null" onClick="javascript:{a=document.images.ex1b.border;
                                b=document.getElementById('test1');
                                if(a=='0'){document.images.ex1b.border='2';b.innerHTML='<?php echo $locale[6] ?>'+' '+'<?php echo $locale[2] ?>';}
                                else {document.images.ex1b.border='0'; b.innerHTML='';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX1B.GIF" width="120" height="120"
                                title="<?php echo $locale[11] ?>" name="ex1b"></a></td>
                    <td><a href="#null" onClick="javascript:{a=document.images.ex1c.border;
                        b=document.getElementById('test1');
                                if(a=='0'){document.images.ex1c.border='2'; b.innerHTML='<?php echo $locale[5] ?>'+' '+'<?php echo $locale[3] ?>';}
                                else {document.images.ex1c.border='0';  b.innerHTML='';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX1C.GIF" width="120" height="120"
                                title="<?php echo $locale[12] ?>" name="ex1c"></a></td>
                    <td><a href="#null" onClick="javascript:{a=document.images.ex1d.border;
                                b=document.getElementById('test1');
                                if(a=='0'){document.images.ex1d.border='2'; b.innerHTML='<?php echo $locale[5] ?>'+' '+'<?php echo $locale[4] ?>';}
                                else {document.images.ex1d.border='0'; b.innerHTML='';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX1D.GIF" width="120" height="120"
                                title="<?php echo $locale[13] ?>" name="ex1d"></a></td>
                </tr>
            </table>
            <table border="0" cellspacing="0" cellspadding="0" width="600">
                <tr><br><b><span id="test1"> </span></b>
                </tr>
                <tr>
                    <br><?php echo $locale[14] ?>
                <tr><br><br>
                    <div>
                        <?php echo $locale[15] ?>
                    </div><br><br>
                </tr>
                <tr>
                    <td><img border="1" hspace="3" src="Pic/Instr/EX2.GIF" width="120" height="120"
                            alt="<?php echo $locale[16] ?>"></td>
                    <td><a href="#null"
                            onClick="javascript:{a=document.images.ex2a.border;if(a=='0'){document.images.ex2a.border='2';} else {document.images.ex2a.border='0';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX2A.GIF" width="120" height="120"
                                title="<?php echo $locale[17] ?>" name="ex2a"></a></td>
                    <td><a href="#null"
                            onClick="javascript:{a=document.images.ex2b.border;if(a=='0'){document.images.ex2b.border='2';} else {document.images.ex2b.border='0';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX2B.GIF" width="120" height="120"
                                title="<?php echo $locale[18] ?>" name="ex2b"></a></td>
                    <td><a href="#null"
                            onClick="javascript:{a=document.images.ex2c.border;if(a=='0'){document.images.ex2c.border='2';} else {document.images.ex2c.border='0';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX2C.GIF" width="120" height="120"
                                title="<?php echo $locale[19] ?>" name="ex2c"></a></td>
                    <td>
                    <td><a href="#null"
                            onClick="javascript:{a=document.images.ex2d.border;if(a=='0'){document.images.ex2d.border='2';} else {document.images.ex2d.border='0';};}">
                            <img border="0" hspace="3" src="Pic/Instr/EX2D.GIF" width="120" height="120"
                                title="<?php echo $locale[20] ?>" name="ex2d"></a></td>
                </tr>
            </table>
            <table border="0" cellspacing="0" cellspadding="0" width="600">
                <tr><br><br>
                    <div>
                        <?php echo $locale[21] ?>
                        <br>
                        <?php echo $locale[22] ?>
                    </div><br><br>
                </tr>
            </table>
            <a href="_pztest.php">
                <button style="-webkit-border-radius: 15px;font-face:Segoe Script, sans-serif;font-weight:
                600;color:darkblue; background-color: white;font-size:18pt;" type="button"
                    title="<?php echo $locale[24] ?>"><?php echo $locale[25] ?></button>
                <br><br><br><br>
        </center>
</body>
<html>