<?php
        @$url = $_REQUEST['url'];
        @$pass = isset($_REQUEST['pass'])?$_REQUEST['pass']:-1;
        switch($pass)
        {
        case 0:
                $jxurl = 'https://aikan-tv.com/tong.php?url=';
                break;
        case 1:
                $jxurl = 'http://api.baiyug.cn/vip/index.php?url=';
                break;
        case 2:
                $jxurl = 'https://api.daidaitv.com/index/?url=';
                break;
        case 3:
                $jxurl = 'http://jx.maoyun.tv/index.php?id=';
                break;
        case 4:
                $jxurl = 'http://www.sfsft.com/admin.php?url=';
                break;
        case 5:
                $jxurl = 'http://www.vipjiexi.com/tong.php?url=';
                break;
        case 6:
                $jxurl = 'http://api.iy11.cn/apiget.php?url=';
                break;
        case 7:
                $jxurl = 'http://jx.agxia.com/index.php?url=';
                break;
        case 8:
                $jxurl = 'http://jiexi.071811.cc/jx2.php?url=';
                break;
        default:
                if(strpos($url, 'pptv.com')) {$pass = 2; $jxurl = 'https://api.daidaitv.com/index/?url=';}
                elseif(strpos($url, 'qq.com')) {$pass = 2; $jxurl = 'https://api.daidaitv.com/index/?url=';}
                else {$pass = 0;  $jxurl = 'http://000o.cc/jx/yk.php?url=';}
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>自动用解析</title>
<link type="text/css" rel="stylesheet" href="/jscss4/v.css?v=20170303">
<base target="_blank"/>
<?php if(strpos($url, 'baofeng.com')) echo '<script>window.parent.location.href="'.$url.'";</script>';?>
</head>
<body>
<!--主框架-->
<iframe id="rtgrhth_play_box" height='100%' width='100%' src='<? echo $jxurl.$url;?>' frameborder=0 border="0"  allowfullscreen="true"></iframe>
<div id="tongdao">
<a class="<?if($pass==0) echo 'cur';?>" target="_self" href="vip.php?pass=0&url=<?=$url?>">本站</a>
     <a class="<?if($pass==1) echo 'cur';?>" target="_self" href="vip.php?pass=1&url=<?=$url?>">一线</a>
     <a class="<?if($pass==2) echo 'cur';?>" target="_self" href="vip.php?pass=2&url=<?=$url?>">二线</a>
     <a class="<?if($pass==3) echo 'cur';?>" target="_self" href="vip.php?pass=3&url=<?=$url?>">三线</a>
         <a class="<?if($pass==4) echo 'cur';?>" target="_self" href="vip.php?pass=4&url=<?=$url?>">四线</a>
         <a class="<?if($pass==5) echo 'cur';?>" target="_self" href="vip.php?pass=5&url=<?=$url?>">五线</a>
         <a class="<?if($pass==6) echo 'cur';?>" target="_self" href="vip.php?pass=6&url=<?=$url?>">六线</a>
         <a class="<?if($pass==7) echo 'cur';?>" target="_self" href="vip.php?pass=7&url=<?=$url?>">七线</a>
</div>
<!--主框架-->
<script src="/Public/jquery/1.11.3/jquery.min.js"></script>
<script src="/jscss4/vip.js?v=20170303"></script>
<script>
    $(function(){
        var h = $(window).height();
        $('body').height(h);
        $(window).resize(function(){
            var h = $(window).height();
            $('body').height(h);
        })
    });
</script>
</body>
</html>
