

<script type="text/javascript">
//ipad适配
KISSY.use('core, sizzle',function(S){

  var $ = S.all;
  if(location.search.match(/ttid=.*taobao_ipad/i)){
    $('.trip-footer-20142').hide();
    $('.flasharea').hide();
    $('#guid-1407398478702').hide();
    $('#left_nav').html('');
  }
})
</script>

<style type="text/css">
 area{
  outline: none;
 }
.wrap-page{
  overflow:hidden;
  width:100%;     
  font-family: "微软雅黑";
  background-color: #ffefd1;
  min-width: 990px;
}

/*
 *  版头
 */
.hd{
  background:url(http://gtms01.alicdn.com/tps/i1/TB1IjPNFVXXXXa4XXXXKdtrMVXX-1680-804.jpg) no-repeat center 0;
  width: 100%;
  height: 804px;
}
.hd .w990{
  width: 990px;
  margin-left: auto;
  margin-right: auto;
  font-size: 0;
  line-height: 0;
  height: 804px;
  position: relative;
}

.mod-cont{
  width: 990px;
  margin-left: auto;
  margin-right: auto;
  overflow: hidden;
}

/*
 *  大商品区域
 */
.probox{
  width: 100%;
}
.bigpro ul{
  width: 1040px;
}
.bigpro ul li{
  width: 300px;
  height: 320px;
  float: left;
  _display:inline;
  margin: 0 42px 40px 0;
  border: 1px solid #e9e1c9;
  background-color: #fffaea;
  border-radius: 3px;
}
.bigpro ul li a{
  display: block;
  padding:6px 5px;
  width: 290px;
  height: 308px;
  position: relative;
  font-size: 0;
  line-height: 0;
}
.bigpro ul li a:hover{
  text-decoration: none;
}
.bigpro ul li a p.title{
  width: 100%;
  height: 46px;
  border-bottom: 1px dashed #e9e1c9;
  line-height: 22px;
  font-size: 14px;
  color: #643f17;
  overflow: hidden;
  margin-top: 8px;
}
.bigpro ul li .info{
  padding: 7px 0 0 0;
  *padding-top: 0;
  width: 100%;
}
.bigpro ul li .acprice{
  padding: 0 10px 0 0;
  line-height: 30px;
  font-weight: normal;
  font-size: 28px;
  color: #e21421;
  height: 30px;
}
.bigpro ul li .acprice em{
  font-size: 35px;
  font-weight: bold;
}
.bigpro ul li .discount{
  position: relative;
  top: -3px;
  display: inline-block;
  width: 47px;
  height: 16px;
  color: #fff;
  font-size: 12px;
  text-align: center;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  background-color: #7d6145;
  -webkit-box-shadow: 1px 2px rgba(80,50,17,0.97);
  -moz-box-shadow: 1px 2px rgba(80,50,17,0.97);
  box-shadow: 1px 2px rgba(80,50,17,0.97);
  line-height: 16px;
}
.bigpro ul li .orprice {
  display: block;
  padding: 0 5px;
  font-size: 14px;
  text-decoration: line-through;
  color: #5f411b;
  font-weight: bold;
  line-height: 20px;
  height: 20px;
  *position: absolute;
  *left: 5px;
  *bottom: 2px;
}
.bigpro ul li .btn{
  position: absolute;
  right: 10px;
  bottom: 12px;
  width: 90px;
  height: 43px;
  line-height: 43px;
  text-indent: -999em;
  overflow: hidden;
  color: #fff;
  font-size: 13px;
  text-align: center;
  background: url(http://gtms04.alicdn.com/tps/i4/TB1d_rIFVXXXXcPXpXX3w3HJpXX-90-43.png) no-repeat 0 0;
}
.pageft{
  font-size: 0;
  line-height: 0;
  width: 100%;
}
/*
 *  slider
 */
.tabarea{
  width: 990px;
  margin-right: auto;
  margin-left: auto;
  font-size: 0;
  line-height: 0;
  position: relative;
}


#slides .prev{
  position: absolute;
  top: 500px;
  left: 10px;
  width: 33px;
  height: 33px;
  adisplay: none;
  z-index: 101;
  background: url(http://gtms02.alicdn.com/tps/i2/TB19AbAFVXXXXcaXVXXgF6bGXXX-33-76.png) no-repeat 0 0;
  _background: none;
  _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://gtms02.alicdn.com/tps/i2/TB19AbAFVXXXXcaXVXXgF6bGXXX-33-76.png", sizingMethod="noscale");
  cursor: pointer;
}

#slides .next {
  position: absolute;
  top: 500px;
  right: 10px;
  width: 33px;
  height: 33px;
  adisplay: none;
  z-index: 101;
  background: url(http://gtms02.alicdn.com/tps/i2/TB19AbAFVXXXXcaXVXXgF6bGXXX-33-76.png) no-repeat 0 -43px;
  _background: none;
  _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://gtms02.alicdn.com/tps/i2/TB19AbAFVXXXXcaXVXXgF6bGXXX-33-76.png", sizingMethod="noscale");
  cursor: pointer;
}
.slides_container {
  width:990px;
  height:800px;
  overflow:hidden;
  position:relative;
}


.ju-itemlist{
  margin-left: 0;
}

.mod-cont ul.swi-nav{
  width: 100%;
  height: 85px;
  background: url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat;
}

/*
 *  小商品
 */
.switchable .cont{
  width: 990px;
  overflow: hidden;
}
.switchable .cont ul{
  width: 1010px;
}
.switchable .cont ul li{
  width: 234px;
  height: 252px;
  float: left;
  background-color: #fffaea;
  border-radius: 2px;
  border: 1px solid #efe8d3;
  font-size: 0;
  line-height: 0;
  position: relative;
  margin: 0 15px 15px 0;
  _display:inline;
}
.switchable .cont ul li a{
  padding:5px 7px;
  display: block;
}
.switchable .cont ul li a:hover{
  text-decoration: none;
}
.switchable .cont ul li p.title{
  width: 100%;
  height: 36px;
  line-height: 36px;
  font-size: 18px;
  color: #643f17;
  overflow: hidden;
  padding: 3px 0;
}
.switchable .cont ul li .info{
  width: 100%;
  padding:7px 0 0 0;
}
.switchable .cont ul li .acprice {
  padding: 0 10px 0 0;
  line-height: 1;
  font-weight: normal;
  font-size: 21px;
  color: #e21421;
}
.switchable .cont ul li .acprice em{
  font-weight: bold;
  font-size: 28px;
}
.switchable .cont ul li .btn {
  position: absolute;
  right: 10px;
  bottom: 3px;
  width: 112px;
  height: 35px;
  line-height: 35px;
  text-indent: -999em;
  overflow: hidden;
  color: #fff;
  font-size: 12px;
  text-align: center;
  background: url(http://gtms02.alicdn.com/tps/i2/TB1uqTJFVXXXXcsXFXXl5Sf_FXX-112-35.png) no-repeat 0 0;
}


/*
 *  导航切换区域
 */
.switchable .cont{
  display: none;
}
ul.swi-nav li{
  float: left;
  width: 198px;
  height: 100%;
  cursor: pointer;
}
ul.swi-nav #li1.ks-active{
  background:url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat 0 -95px;  
}
ul.swi-nav #li2.ks-active{
  background:url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat -198px -95px;  
}
ul.swi-nav #li3.ks-active{
  background:url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat -396px -95px;  
}
ul.swi-nav #li4.ks-active{
  background:url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat -594px -95px;  
}
ul.swi-nav #li5.ks-active{
  background:url('http://gtms02.alicdn.com/tps/i2/TB19yf8FVXXXXbqXXXX.STwHXXX-990-180.png') no-repeat -792px -95px;  
}

/*
 *  版头气泡
 */
.box1{
  background: url(http://gtms04.alicdn.com/tps/i4/TB1bQnPFVXXXXanXFXX7kWQTFXX-171-118.png) no-repeat;
  _background: none;
  _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://gtms04.alicdn.com/tps/i4/TB1bQnPFVXXXXanXFXX7kWQTFXX-171-118.png", sizingMethod="noscale");
  width: 171px;
  height: 118px;
  position: absolute;
  top: 330px;
  left: 20px;
  animation:mymovebox1 5s infinite;
  -moz-animation:mymovebox1 5s infinite;
  -webkit-animation:mymovebox1 5s infinite; 
  -o-animation:mymovebox1 5s infinite; 
}

@keyframes mymovebox1{
  0%   {top:330px;left:20px;opacity: 1;}
  49%   {top:335px;left: 25px;opacity: 1;}
  50%  {top:335px;left: 25px;opacity: 0;}
  99%  {top:330px;left: 20px;opacity: 0;}
  100% {top:330px;left:20px;opacity: 1;}
}
@-webkit-keyframes mymovebox1{
  0%   {top:330px;left:20px;opacity: 1;}
  49%   {top:335px;left: 25px;opacity: 1;}
  50%  {top:335px;left: 25px;opacity: 0;}
  99%  {top:330px;left: 20px;opacity: 0;}
  100% {top:330px;left:20px;opacity: 1;}
}
@-moz-keyframes mymovebox1{
  0%   {top:330px;left:20px;opacity: 1;}
  49%   {top:335px;left: 25px;opacity: 1;}
  50%  {top:335px;left: 25px;opacity: 0;}
  99%  {top:330px;left: 20px;opacity: 0;}
  100% {top:330px;left:20px;opacity: 1;}
}
@-o-keyframes mymovebox1{
  0%   {top:330px;left:20px;opacity: 1;}
  49%   {top:335px;left: 25px;opacity: 1;}
  50%  {top:335px;left: 25px;opacity: 0;}
  99%  {top:330px;left: 20px;opacity: 0;}
  100% {top:330px;left:20px;opacity: 1;}
}

.box2{
  background: url(http://gtms01.alicdn.com/tps/i1/TB1B6TNFVXXXXcuXFXX7kWQTFXX-171-118.png) no-repeat;
  _background: none;
  _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://gtms01.alicdn.com/tps/i1/TB1B6TNFVXXXXcuXFXX7kWQTFXX-171-118.png", sizingMethod="noscale");
  width: 171px;
  height: 118px;
  position: absolute;
  top: 140px;
  right: 10px;
  animation:mymovebox2 5s infinite;
  -moz-animation:mymovebox2 5s infinite;
  -webkit-animation:mymovebox2 5s infinite; 
  -o-animation:mymovebox2 5s infinite; 
}

@keyframes mymovebox2{
  0%   {top:140px;right:10px;opacity: 0;}
  49%   {top:145px;right:15px;opacity: 0;}
  50%  {top:145px;right: 15px;opacity: 1;}
  99%  {top:140px;right: 10px;opacity: 1;}
  100% {top:140px;right:10px;opacity: 0;}
}
@-webkit-keyframes mymovebox2{
  0%   {top:140px;right:10px;opacity: 0;}
  49%   {top:145px;right:15px;opacity: 0;}
  50%  {top:145px;right: 15px;opacity: 1;}
  99%  {top:140px;right: 10px;opacity: 1;}
  100% {top:140px;right:10px;opacity: 0;}
}
@-moz-keyframes mymovebox2{
  0%   {top:140px;right:10px;opacity: 0;}
  49%   {top:145px;right:15px;opacity: 0;}
  50%  {top:145px;right: 15px;opacity: 1;}
  99%  {top:140px;right: 10px;opacity: 1;}
  100% {top:140px;right:10px;opacity: 0;}
}
@-o-keyframes mymovebox2{
  0%   {top:140px;right:10px;opacity: 0;}
  49%   {top:145px;right:15px;opacity: 0;}
  50%  {top:145px;right: 15px;opacity: 1;}
  99%  {top:140px;right: 10px;opacity: 1;}
  100% {top:140px;right:10px;opacity: 0;}
}


/*导航*/
.floatnav {
  position: fixed;
 width: 173px;
  height:515px;
  top: 500px;
  margin-top: -410px;
  left: 50%;
  margin-left: 495px;
  _bottom: 0px;
  _position: absolute;
  _top: expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,0)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))-250);
  z-index: 9999;
  display: none;
}
.nav_img {
  width: 173px;
  height:515px;
  background: url("http://gtms04.alicdn.com/tps/i4/TB1mEwgFVXXXXbqXFXXxAORUVXX-173-515.png") no-repeat;
  _background: none;
  _filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="http://gtms04.alicdn.com/tps/i4/TB1mEwgFVXXXXbqXFXXxAORUVXX-173-515.png", sizingMethod="noscale");
}

.floatnav img {
  display: block;
  width: 173px;
  height:515px;
  position: relative;
}


#guid-1407398478702{
  *margin-top: 40px;
}

.w990 .flasharea{
  position: absolute;
  width: 988px;
  height: 341px;
  bottom: 0;
  left: 1px;
}
</style>
<div class="floatnav" id="left_nav"> 
  <div class="nav_img"> 
    <img src="http://img01.taobaocdn.com/tps/i1/T1XgqtXcRIXXXXXXXX-1-1.gif" border="0" usemap="#Map" />
    <map name="Map" id="Map">
      <area target="_self" shape="rect" coords="43,191,136,222" href="#f2" />
      <area target="_self" shape="rect" coords="43,230,134,262" href="#f3" />
      <area target="_self" shape="rect" coords="43,270,135,303" href="#f5" />
      <area target="_self" shape="rect" coords="41,307,135,338" href="#f4" />
      <area target="_self" shape="rect" coords="42,345,132,375" href="#f6" />
      <area target="_self" shape="rect" coords="40,382,131,415" href="#guid-1407398478702" />
      <area target="_self" shape="rect" coords="42,425,131,478" href="#f7" />
      <area target="_self" shape="rect" coords="16,485,150,510" href="#" />
    </map>
  </div> 
</div>

<div data-spm="$spm_module_id" class="wrap-page">
  <div class="hd">
    <div class="w990">
      <div class="box1"></div>
      <div class="box2"></div>
      <div class="box3"></div>
      <img src="http://gtms01.alicdn.com/tps/i1/TB1PjTOFVXXXXbuXFXXy3n6HXXX-990-462.jpg" /><img src="http://gtms04.alicdn.com/tps/i4/TB1bq2GFVXXXXXhXVXXsJTPHXXX-990-342.jpg" />
      <div class="flasharea">
        <embed src="http://gtms02.alicdn.com/tps/i2/TB14RUiFVXXXXXCXFXXeflbFXXX.swf" width="100%" height="100%" wmode="transparent" />
      </div>
    </div>
  </div>

<div id="slides" class="tabarea"><!--Slide控件开始-->
  <div class="slides_container tab-content">
    <div class="tab-pannel">
      <img src="http://gtms02.alicdn.com/tps/i2/TB1qs7gFVXXXXXMXFXXXz6UHXXX-990-402.jpg" border="0" usemap="#Map2" /><img src="http://gtms01.alicdn.com/tps/i1/TB1TeEiFVXXXXcwXpXXcB_0HXXX-990-398.jpg" border="0" usemap="#Map3" />
      <map name="Map2" id="Map2">
        <area shape="rect" target="_self" coords="726,1,988,68" href="#f2" />
        <area shape="poly" coords="225,84,157,155,53,160,48,395,347,397,325,220,283,124" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.60.B8aT0y&amp;id=40035859370&amp;rn=3012a3bfdd1478ee122af4034433c072" target="_blank" />
        <area shape="poly" coords="441,62,422,170,344,231,392,285,504,319,624,287,646,164,712,146,729,81,598,54" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.56.KD4ZUd&amp;id=40080608398&amp;rn=e999830d1e5bdf9ed9fe47d232b55e55" target="_blank" />
        <area shape="poly" coords="691,157,819,157,979,189,985,390,722,397,762,316,663,252,663,192" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.35.BUh3hK&amp;id=40060641047&amp;rn=666e4e7fb8c09d02b826428797e9a85f" target="_blank" />
      </map>
      <map name="Map3" id="Map3">
        <area shape="poly" coords="80,5,323,5,356,385,20,391,11,216" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.25.VmsVlg&amp;id=40036947703&amp;rn=2d1ef0a78e5bc9930e6117b74b2feb5e" target="_blank" />
        <area shape="poly" coords="723,5,747,106,859,107,879,8" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.35.BUh3hK&amp;id=40060641047&amp;rn=666e4e7fb8c09d02b826428797e9a85f" target="_blank" />
        <area shape="poly" coords="819,248,721,274,693,382,978,387,979,86,882,86,847,120" href="http://detail.tmall.com/item.htm?spm=a1z10.3.w4011-2508543739.41.SgZWKm&amp;id=40052006739&amp;rn=b2685d6bf149faa071bb7fc9e76f44fe" target="_blank" />
      </map>
    </div>
    <div class="tab-pannel">
      <img src="http://gtms01.alicdn.com/tps/i1/TB18inDFVXXXXaUaXXXXz6UHXXX-990-402.jpg" border="0" usemap="#Map4" /><img src="http://gtms03.alicdn.com/tps/i3/TB1xsrTFVXXXXXfXXXXcB_0HXXX-990-398.jpg" border="0" usemap="#Map5" />
      <map name="Map4" id="Map4">
        <area shape="rect" coords="725,2,987,64" href="#f4" target="_self" />
        <area shape="rect" coords="393,79,697,277" href="#f3" target="_self" />
        <area shape="rect" coords="736,175,987,398" href="#f5" target="_self" />
        <area shape="rect" coords="18,211,306,397" href="#f7" target="_self" />
      </map>
      <map name="Map5" id="Map5">
        <area shape="rect" coords="15,69,354,374" href="#f6" target="_self" />
        <area shape="rect" coords="746,85,991,368" href="#guid-1407398478702" />
        <area shape="rect" coords="744,1,981,32" href="#f5" target="_self" />
      </map>
    </div>
  </div>
  <div class="prev" id="J_pre"></div>
  <div class="next" id="J_next"></div>
</div>

  <div class="mod-cont">
    <!--比赛门票切换区域-->
    <div class="switchable" id="f2">
      <img data-ks-lazyload="http://gtms04.alicdn.com/tps/i4/TB12JHPFVXXXXagXFXXfzDlJVXX-990-68.png" border="0" usemap="#Map6" />
      <map name="Map6" id="Map6">
        <area target="_blank" shape="rect" coords="848,22,994,54" href="http://byecity.tmall.com/p/asiangame.htm?spm=a1z10.1.w5001-6983066731.3.qACSlK&scene=taobao_shop" />
      </map>
      <ul class="swi-nav clearfix">
        <cms:custom group="比赛门票" title="默认展示第几个tab（1--第一个,2--第二个,3--第三个,4--第四个,5--最后一个）" fields="num:数字:string" name="tabnum">
          <li id="li1" class="list-1" data-tabnum="$!num"></li>
        </cms:custom>
        <li id="li2" class="list-2"></li>
        <li id="li3" class="list-3"></li>
        <li id="li4" class="list-4"></li>
        <li id="li5" class="list-5"></li>
      </ul>

      <div class="cont">
        <ul class="clearfix">
          <cms:custom defaultRow="4" row="12" group="比赛门票" title="体操" fields="link:链接:url,image:图片(224x150):img,title:标题:string,price:价格:string" name="ticao">  
            #foreach ($item in $customList)
              <li>
                <a href="$!item.link" target="_blank">
                  <img imgurl="$!item.image" alt="$!item.title" width="220" height="162" />
                  <p class="title" title="$!item.title">$!item.title</p>
                  <div class="info">
                    <span class="acprice">￥<em>$!item.price</em></span>
                    <span class="btn"></span>
                  </div>
                </a>
              </li>
            #end
          </cms:custom>
        </ul>
      </div>

      <div class="cont">
        <ul class="clearfix">
          <cms:custom defaultRow="4" row="12" group="比赛门票" title="球类" fields="link:链接:url,image:图片(224x150):img,title:标题:string,price:价格:string" name="球类">  
            #foreach ($item in $customList)
              <li>
                <a href="$!item.link" target="_blank">
                  <img imgurl="$!item.image" alt="$!item.title" width="220" height="162" />
                  <p class="title" title="$!item.title">$!item.title</p>
                  <div class="info">
                    <span class="acprice">￥<em>$!item.price</em></span>
                    <span class="btn"></span>
                  </div>
                </a>
              </li>
            #end
          </cms:custom>
        </ul>
      </div>

      <div class="cont">
        <ul class="clearfix">
          <cms:custom defaultRow="4" row="12" group="比赛门票" title="水类" fields="link:链接:url,image:图片(224x150):img,title:标题:string,price:价格:string" name="水类">  
            #foreach ($item in $customList)
              <li>
                <a href="$!item.link" target="_blank">
                  <img imgurl="$!item.image" alt="$!item.title" width="220" height="162" />
                  <p class="title" title="$!item.title">$!item.title</p>
                  <div class="info">
                    <span class="acprice">￥<em>$!item.price</em></span>
                    <span class="btn"></span>
                  </div>
                </a>
              </li>
            #end
          </cms:custom>
        </ul>
      </div>
      
      <div class="cont">
        <ul class="clearfix">
          <cms:custom defaultRow="4" row="12" group="比赛门票" title="田径类" fields="link:链接:url,image:图片(224x150):img,title:标题:string,price:价格:string" name="田径类">  
            #foreach ($item in $customList)
              <li>
                <a href="$!item.link" target="_blank">
                  <img imgurl="$!item.image" alt="$!item.title" width="220" height="162" />
                  <p class="title" title="$!item.title">$!item.title</p>
                  <div class="info">
                    <span class="acprice">￥<em>$!item.price</em></span>
                    <span class="btn"></span>
                  </div>
                </a>
              </li>
            #end
          </cms:custom>
        </ul>
      </div>

      <div class="cont">
        <ul class="clearfix">
          <cms:custom defaultRow="4" row="12" group="比赛门票" title="开闭幕式" fields="link:链接:url,image:图片(224x150):img,title:标题:string,price:价格:string" name="开闭幕式">  
            #foreach ($item in $customList)
              <li>
                <a href="$!item.link" target="_blank">
                  <img imgurl="$!item.image" alt="$!item.title" width="220" height="162" />
                  <p class="title" title="$!item.title">$!item.title</p>
                  <div class="info">
                    <span class="acprice">￥<em>$!item.price</em></span>
                    <span class="btn"></span>
                  </div>
                </a>
              </li>
            #end
          </cms:custom>
        </ul>
      </div>

    </div>
    <!--比赛门票切换区域结束-->

    <div class="probox bigpro ju-itemlist" id="f3">
      <img data-ks-lazyload="http://gtms02.alicdn.com/tps/i2/TB1wuPJFVXXXXaQXVXXCM_iHXXX-990-100.png" />
      <cms:textArea group="韩国度假游" name="韩国度假游">
        <div class="J_jupicker1" data-item="$!text"></div>
      </cms:textArea>
      <ul class="clearfix">
        
      </ul>
    </div>

    <div class="probox bigpro ju-itemlist" id="f4">
      <img data-ks-lazyload="http://gtms01.alicdn.com/tps/i1/TB1Bs_MFVXXXXa6XFXXCM_iHXXX-990-100.png" />
      <cms:textArea group="韩国签证" name="韩国签证">
        <div class="J_jupicker1" data-item="$!text"></div>
      </cms:textArea>
      <ul class="clearfix">
        
      </ul>
    </div>

    <div class="probox bigpro ju-itemlist" id="f5">
      <img data-ks-lazyload="http://gtms03.alicdn.com/tps/i3/TB1zFnQFVXXXXaCXpXXCM_iHXXX-990-100.png" />
      <cms:textArea group="当地特色游" name="当地特色游">
        <div class="J_jupicker1" data-item="$!text"></div>
      </cms:textArea>
      <ul class="clearfix">
        
      </ul>
    </div>

    <div class="probox bigpro" id="f6">
      <img data-ks-lazyload="http://gtms02.alicdn.com/tps/i2/TB1ZGOAFVXXXXX6aXXXCM_iHXXX-990-100.png" />
      <ul class="clearfix">
        <cms:custom defaultRow="4" row="30" group="景点门票" title="景点门票" fields="link:链接:url,image:图片(288x192):img,title:标题:string,price:活动价:string,origprice:原价:string,discount:折扣:string" name="景点门票">  
          #foreach ($item in $customList)
            <li>
              <a href="$!item.link" target="_blank">
                <img data-ks-lazyload="$!item.image" width="288" alt="$!item.title" height="192" />
                <p class="title" title="$!item.title">$!item.title</p>
                <div class="info">
                  <span class="acprice">&yen;<em>$!item.price</em></span>
                  <span class="discount"><strong>$!item.discount</strong>折</span>
                  <span class="orprice">原价<em>$!item.origprice</em></span>
                  <span class="btn"></span>
                </div>
              </a>
            </li>
          #end
        </cms:custom>
      </ul>
    </div>

    <?php _tms_subArea('/home/admin/go/rgn/trip/ttt.php'); ?>

    <div class="pageft" id="f7">
      <iframe src="http://fun.alipay.com/tuishui-xjhb/index.htm" allowtransparency="true" frameborder="0" width="100%" height="1177" scrolling="no"></iframe>
    </div>
  </div>
</div>

<script src="http://g.tbcdn.cn/ju/common/1.0.56/js/config.js"></script>
<script id="Ju_template" type="text/html">
  <ul class="clearfix">
    {{@each item}}
      <li data-itemid="{{itemId}}">
        <a href="http://detail.ju.taobao.com/home.htm?item_id={{itemId}}&id={{juId}}" target="_blank">
          <img src="http://gju1.alicdn.com/bao/uploaded/{{picUrl}}_290x290.jpg" width="290" height="193" />
          <p class="title" title="{{shortName}}">{{shortName}}</p>
          <div class="info">
            <span class="acprice">&yen;<em>{{activityPrice/100}}</em></span>
            <span class="discount"><strong>{{discount}}</strong>折</span>
            <span class="orprice">原价<em>{{originalPrice/100}}</em></span>
            <span class="btn"></span>
          </div>
        </a>
      </li>
    {{/each}}
  </ul>
</script>

<script>
KISSY.use('gallery/slide/1.2/index',function(S,Slide){
  var C = new Slide('#slides',{
    effect:'fade',//切换效果为纵向滚动
    autoSlide:true,//自动播放
    timeout:2500,//切换时间间隔
    speed:500,//切换速度，越小越快，单位为毫秒
    hoverStop:false//鼠标经过内容是否停止播放
  });

  var $ = S.all;

  /* $('.tabarea').on('mouseover',function(){
      $('#J_pre').show();
      $('#J_next').show();
  });

  $('.tabarea').on('mouseout',function(){
      $('#J_pre').hide();
      $('#J_next').hide();
  });*/

  S.one('#J_pre').on('click',function(e){
    e.halt();
    C.previous();
    if(C.autoSlide){
      C.stop().play();
    }
  });
  S.one('#J_next').on('click',function(e){
    e.halt();
    C.next();
    if(C.autoSlide){
      C.stop().play();
    }
  });

});

KISSY.use('jbc/jupicker/v2/index,datalazyload',function(S, Jupicker, DataLazyload){
  var P = new Jupicker(),
   lazy = new DataLazyload({containers:S.one('body')}),//懒加载
   els1 = S.all('.J_jupicker1');
  var temple = S.one("#Ju_template").html();
  //修改模板
  P.sets['items/json'].template = temple; 
  S.each(els1,function (el) {
  //懒加载
  lazy.addCallback(el,function(){
    var ids = S.DOM.attr(el,'data-item'),
    styleType = S.DOM.attr(el,'data-style') || 'small';//默认小坑位
    P.use('items/json',{
      juIds : ids,
      stype : "ids",
      includeForecast : true //获取7天内却已到展示时间商品
      },function(d){
      // console.log(d)
      //放入容器中
      el.innerHTML = d.html;
      new DataLazyload({
        containers:el
      });
      })
    })
  });
});

KISSY.use('core, sizzle',function(S){

  var $ = S.all,
    _li = $('.swi-nav li'),
  _cont = $('.switchable .cont');

  //tab切换
  _li.on('mouseover',function(e){
    _li.removeClass('ks-active');
    $(this).addClass('ks-active');

    var _index = $(this).index();
    //console.log(_index);
    _cont.hide();
    _cont.item(_index).show();

    $('img',_cont.item(_index)).each(function(){
      var _url = $(this).attr('imgurl');
      $(this).attr('src',_url);
    });

  });

  var _num = parseInt($('.list-1').attr('data-tabnum'))-1;

  _li.item(_num).fire('mouseover');
  
  setTimeout(function(){
    $('#qrcode').hide();
  },100);


  //导航
  window.onscroll=function(){
    var x=document.body.scrollTop||document.documentElement.scrollTop;//获取滚动条高度
    if(x<300) S.DOM.css('#left_nav',{'display':'none'});
    else S.DOM.css('#left_nav',{'display':'block'});
  }

});

KISSY.use("node,datalazyload",function(S,NODE){
  S.DataLazyload(".wrap-page",{diff:200});}
);


</script>
