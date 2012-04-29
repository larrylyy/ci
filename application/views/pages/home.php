
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
    </head>

    <body>
        <a href="javascript:postToWb();" class="tmblog" id="share_btn_1333072111216" style="font-size:18px;"> <img src="http://mat1.gtimg.com/app/opent/images/websites/share/weiboicon32.png" border="0" alt="腾讯微博" valign="middle"/> 腾讯微博</a>

    </body>

<script type="text/javascript">
    window.__fwdCfg = {
        "text_hover_icon" : "icon-1-2.png",
        "img_hover_icon" : "icon-1-2.png"
    };
</script>
<script type="text/javascript" src="http://widget.renren.com/js/forward.js" async="true"></script>



<script type="text/javascript" charset="utf-8">
    (function(){
        var _w = 142 , _h = 32;
        var param = {
            url:location.href,
            type:'4',
            count:'', /**是否显示分享数，1显示(可选)*/
            appkey:'', /**您申请的应用appkey,显示分享来源(可选)*/
            title:'这是写在js里面的预设文字哦', /**分享的文字内容(可选，默认为所在页面的title)*/
            pic:'<?php echo FILE_SERVER_URL ?>/images/singer/8.jpg', /**分享图片的路径(可选)*/
            ralateUid:'', /**关联用户的UID，分享微博会@该用户(可选)*/
            language:'zh_cn', /**设置语言，zh_cn|zh_tw(可选)*/
            rnd:new Date().valueOf()
        }
        var temp = [];
        for( var p in param ){
            temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
        }
        document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
    })()
</script>

<script>
    function postToWb(){
        var _url = encodeURIComponent(location.href);
        var _pic = encodeURI('<?php echo FILE_SERVER_URL ?>/images/singer/8.jpg');//（例如：var _pic='图片url1|图片url2|图片url3....）
        var _t = '1111';//标题和描述信息
        var metainfo = document.getElementsByTagName("meta");
        for(var metai = 0;metai < metainfo.length;metai++){
            if((new RegExp('description','gi')).test(metainfo[metai].getAttribute("name"))){
                _t = metainfo[metai].attributes["content"].value;
            }
        }
        _t =  document.title+_t;//请在这里添加你自定义的分享内容
        if(_t.length > 120){
            _t= _t.substr(0,117)+'...';
        }
        _t = encodeURI(_t);
        var _u = 'http://share.v.t.qq.com/index.php?c=share&a=index&url='+_url+'&appkey=801120221&pic='+_pic+'&assname=&title='+_t;
        window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
    };
</script>
</html>