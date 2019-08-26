<?php 
    include("includes/header-design.php");
	include("adminpanel/lib/classes/user.php");

    $url=$eventsurl."/event_name/1";  
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
    $response=curl_exec($ch);
    if($response==false){
        die(curl_error($ch));
    }else{
        $datas=$enc_obj->b64decode($response);
        $datas = json_decode($datas,true); 
    }
    curl_close($ch);
        
        
    $url=$usersurl."/all/1";    
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json','Accept: application/json'));
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
    $response=curl_exec($ch);
    $data=$enc_obj->b64decode($response);    
    $data1 = json_decode($data,true);
    curl_close($ch);
    
    if(isset($_GET['uname']) || isset($_GET['email'])){        
        $url=$usersurl."/Advertisedata/";
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HEADER, false );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));
        $data=$enc_obj->b64encode(array("enc_resp"=>'1',"uname"=>$_GET['uname'],"email"=>$_GET['email']));
        $data=json_encode($data);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        $response=curl_exec($ch);
        if($response==false){
            die(curl_error($ch));
        }else{
            $res=$enc_obj->b64decode($response);
            $data = json_decode($res,true);
        }
        curl_close($ch);
        echo '<script>window.location.href = "index.php"</script>';
    }
    	
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
    
.slide-text2{top: 3.5%;}
.bs-slider{max-height: 590px;}
@media (max-width: 767px) {
.bs-slider{max-height: 400px;}
}

@media (max-width: 480px) {.mar-bot

{margin-bottom:12px; display:block}

}

.home-flash-pad0{background: #fff}
/* added by Jayesh for pop up design */
#myModal{
width:496px;
max-width: 100%;
height:496px;
max-height: 100%;
left: 50%;
top: 60%;
transform: translate(-50%, -50%);
position:fixed;

}

</style>

<!-- header popup -->
 <div id="myModal" class="modal fade ho-pd" role="dialog">
  <div class="modal-dialog home-flash-wrap1" style="width:auto;">
    <!-- Modal content-->
   <a href="../../tax/itr-filing.php" target="_blank">
    <div class="modal-content br-rad">
      <div class="modal-header home-flash-pad0">
        
		<div class="home-flash">
		<button type="button" class="close home-flash-close" data-dismiss="modal" style="position: absolute;right: 1%;">&times;</button>
		<div class="home-flash-left1"><img class="img-responsive" src="images/pop_up_tax_planning.png" alt="online tax preparation">
             <!-- <p style="position: absolute;bottom: 2%;right: 17%;"> <button class="btn btn-primary" style="background: #fcbd00;color: #fff;padding: 8px;border-color:#fcbd00;font-weight: 600;">Register</button></p> -->
        </div>
		<!-- <div class="home-flash-right">
			
			
			<div class="heading-fls pad-fls1"> <img src="images/webinar-img1.jpg" class="img-responsive-fls"> </div>
			<div class="heading-fls"> 
            <h3 style="color: red;margin-top: 0">Union Budget Special Webinar</h3>
            <p><span>By CA Manish P.Hingar</span></p>
            <p style="font-size: 18px;">Need Expert opinion in solving budget related queries?</p>
           
            </div>
		      <div style="clear:both"></div>
			
		</div> -->
		<div style="clear:both"></div>
		</div>
		
      </div></a>
    </div>
  </div>
</div>
<!-- close popup -->

<!-- script to show this pop up is done in index.php -->

<!-- Header start -->
	<!-- sider start-->

 <!-- Add this css File in head tag-->

         <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- minty slider -->
                <div  class="item active">

                    <!-- Slide Background -->
                    <img src="images/banner-01.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    
                    <div class="slide-text cont-right ">
                        <h1>Get the most from  <br> <span> your money</span></h1>
                        <h2> Get Peace of mind and ensure you are maximizing <br> the return on your investments </h2>
                        <ul>
                            <li> Your own dedicated financial advisor </li>
                            <li> Investment Planning </li>
                            <li> Retirement Planning </li>
                            <li> Estate Planning </li>
                        </ul>
                        
                        <input type="button" class="slide-button"  onclick="window.open('<?php echo SITE_HTTP_URL?>/contact-us.php','_blank')" value="Get in touch to find out how we can help">
                    </div>
                </div>
                <!-- minty Slide end -->
                
                
                
                <!-- fintoo slider -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images/banner-02.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    
                    <div class="slide-text cont-right cont-left  ">
                        <h1>Plan your <span> tax</span></h1>
                        <h2> Our experts take a proactive approach to ensure you get maximum tax benefits </h2>
                        <ul>
                            <li> Dedicated tax planner </li>
                            <li> Goal based tax plan </li>
                            <li> Confidential Environment </li>
                        </ul>
                        
                        <input type="button" class="slide-button" onclick="window.open('<?php echo SITE_HTTP_URL?>/advisory/tax-planning-strategies.php','_blank')" value="Get in touch to find out how we can help">
                    </div>
                </div>
                <!-- fintoo Slide end -->
                
                <!-- tax planning slider -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images/banner-03.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text cont-right ">
                        <h1><img src="images/fintoo-logo-slider2.png"></h1>
                        <h2> A single online platform for all your investment needs </h2>
                        <ul>
                            <li> Mutual Fund investment </li>
                            <li> Buy Insurance </li>
                            <li> Apply for loan </li>
                        </ul>
                        
                        <input type="button" class="slide-button" onclick="window.open('https://www.fintoo.in/','_blank')" value="Explore Now!">
                    </div>
                </div>
                <!-- tax planning Slide end -->
                
                <!-- Income tax return slider -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="images/banner-04.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text cont-right cont-left  ">
                        <h1><img src="images/minty-slider.png"></h1>
                        <h2> India's best Financial & Tax Experts for advice on the go! </h2>
                        <a href="https://goo.gl/6UtMq5" target="_blank"> <img src="images/minty-app-ios.png"> </a> <a href="https://goo.gl/14bUH5" target="_blank"> <img src="images/minty-app-android.png"></a> 
                    </div>
                </div>
                <!-- Income tax return Slide end -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        

<!-- slider end --> 

<script>

/*Bootstrap Carousel Touch Slider.

http://bootstrapthemes.co

Credits: Bootstrap, jQuery, TouchSwipe, Animate.css, FontAwesome

 */


(function(a){if(typeof define==="function"&&define.amd&&define.amd.jQuery){define(["jquery"],a)}else{if(typeof module!=="undefined"&&module.exports){a(require("jquery"))}else{a(jQuery)}}}(function(f){var y="1.6.15",p="left",o="right",e="up",x="down",c="in",A="out",m="none",s="auto",l="swipe",t="pinch",B="tap",j="doubletap",b="longtap",z="hold",E="horizontal",u="vertical",i="all",r=10,g="start",k="move",h="end",q="cancel",a="ontouchstart" in window,v=window.navigator.msPointerEnabled&&!window.navigator.pointerEnabled&&!a,d=(window.navigator.pointerEnabled||window.navigator.msPointerEnabled)&&!a,C="TouchSwipe";var n={fingers:1,threshold:75,cancelThreshold:null,pinchThreshold:20,maxTimeThreshold:null,fingerReleaseThreshold:250,longTapThreshold:500,doubleTapThreshold:200,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,pinchIn:null,pinchOut:null,pinchStatus:null,click:null,tap:null,doubleTap:null,longTap:null,hold:null,triggerOnTouchEnd:true,triggerOnTouchLeave:false,allowPageScroll:"auto",fallbackToMouseEvents:true,excludedElements:"label, button, input, select, textarea, a, .noSwipe",preventDefaultEvents:true};f.fn.swipe=function(H){var G=f(this),F=G.data(C);if(F&&typeof H==="string"){if(F[H]){return F[H].apply(this,Array.prototype.slice.call(arguments,1))}else{f.error("Method "+H+" does not exist on jQuery.swipe")}}else{if(F&&typeof H==="object"){F.option.apply(this,arguments)}else{if(!F&&(typeof H==="object"||!H)){return w.apply(this,arguments)}}}return G};f.fn.swipe.version=y;f.fn.swipe.defaults=n;f.fn.swipe.phases={PHASE_START:g,PHASE_MOVE:k,PHASE_END:h,PHASE_CANCEL:q};f.fn.swipe.directions={LEFT:p,RIGHT:o,UP:e,DOWN:x,IN:c,OUT:A};f.fn.swipe.pageScroll={NONE:m,HORIZONTAL:E,VERTICAL:u,AUTO:s};f.fn.swipe.fingers={ONE:1,TWO:2,THREE:3,FOUR:4,FIVE:5,ALL:i};function w(F){if(F&&(F.allowPageScroll===undefined&&(F.swipe!==undefined||F.swipeStatus!==undefined))){F.allowPageScroll=m}if(F.click!==undefined&&F.tap===undefined){F.tap=F.click}if(!F){F={}}F=f.extend({},f.fn.swipe.defaults,F);return this.each(function(){var H=f(this);var G=H.data(C);if(!G){G=new D(this,F);H.data(C,G)}})}function D(a5,au){var au=f.extend({},au);var az=(a||d||!au.fallbackToMouseEvents),K=az?(d?(v?"MSPointerDown":"pointerdown"):"touchstart"):"mousedown",ax=az?(d?(v?"MSPointerMove":"pointermove"):"touchmove"):"mousemove",V=az?(d?(v?"MSPointerUp":"pointerup"):"touchend"):"mouseup",T=az?(d?"mouseleave":null):"mouseleave",aD=(d?(v?"MSPointerCancel":"pointercancel"):"touchcancel");var ag=0,aP=null,a2=null,ac=0,a1=0,aZ=0,H=1,ap=0,aJ=0,N=null;var aR=f(a5);var aa="start";var X=0;var aQ={};var U=0,a3=0,a6=0,ay=0,O=0;var aW=null,af=null;try{aR.bind(K,aN);aR.bind(aD,ba)}catch(aj){f.error("events not supported "+K+","+aD+" on jQuery.swipe")}this.enable=function(){aR.bind(K,aN);aR.bind(aD,ba);return aR};this.disable=function(){aK();return aR};this.destroy=function(){aK();aR.data(C,null);aR=null};this.option=function(bd,bc){if(typeof bd==="object"){au=f.extend(au,bd)}else{if(au[bd]!==undefined){if(bc===undefined){return au[bd]}else{au[bd]=bc}}else{if(!bd){return au}else{f.error("Option "+bd+" does not exist on jQuery.swipe.options")}}}return null};function aN(be){if(aB()){return}if(f(be.target).closest(au.excludedElements,aR).length>0){return}var bf=be.originalEvent?be.originalEvent:be;var bd,bg=bf.touches,bc=bg?bg[0]:bf;aa=g;if(bg){X=bg.length}else{if(au.preventDefaultEvents!==false){be.preventDefault()}}ag=0;aP=null;a2=null;aJ=null;ac=0;a1=0;aZ=0;H=1;ap=0;N=ab();S();ai(0,bc);if(!bg||(X===au.fingers||au.fingers===i)||aX()){U=ar();if(X==2){ai(1,bg[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}if(au.swipeStatus||au.pinchStatus){bd=P(bf,aa)}}else{bd=false}if(bd===false){aa=q;P(bf,aa);return bd}else{if(au.hold){af=setTimeout(f.proxy(function(){aR.trigger("hold",[bf.target]);if(au.hold){bd=au.hold.call(aR,bf,bf.target)}},this),au.longTapThreshold)}an(true)}return null}function a4(bf){var bi=bf.originalEvent?bf.originalEvent:bf;if(aa===h||aa===q||al()){return}var be,bj=bi.touches,bd=bj?bj[0]:bi;var bg=aH(bd);a3=ar();if(bj){X=bj.length}if(au.hold){clearTimeout(af)}aa=k;if(X==2){if(a1==0){ai(1,bj[1]);a1=aZ=at(aQ[0].start,aQ[1].start)}else{aH(bj[1]);aZ=at(aQ[0].end,aQ[1].end);aJ=aq(aQ[0].end,aQ[1].end)}H=a8(a1,aZ);ap=Math.abs(a1-aZ)}if((X===au.fingers||au.fingers===i)||!bj||aX()){aP=aL(bg.start,bg.end);a2=aL(bg.last,bg.end);ak(bf,a2);ag=aS(bg.start,bg.end);ac=aM();aI(aP,ag);be=P(bi,aa);if(!au.triggerOnTouchEnd||au.triggerOnTouchLeave){var bc=true;if(au.triggerOnTouchLeave){var bh=aY(this);bc=F(bg.end,bh)}if(!au.triggerOnTouchEnd&&bc){aa=aC(k)}else{if(au.triggerOnTouchLeave&&!bc){aa=aC(h)}}if(aa==q||aa==h){P(bi,aa)}}}else{aa=q;P(bi,aa)}if(be===false){aa=q;P(bi,aa)}}function M(bc){var bd=bc.originalEvent?bc.originalEvent:bc,be=bd.touches;if(be){if(be.length&&!al()){G(bd);return true}else{if(be.length&&al()){return true}}}if(al()){X=ay}a3=ar();ac=aM();if(bb()||!am()){aa=q;P(bd,aa)}else{if(au.triggerOnTouchEnd||(au.triggerOnTouchEnd==false&&aa===k)){if(au.preventDefaultEvents!==false){bc.preventDefault()}aa=h;P(bd,aa)}else{if(!au.triggerOnTouchEnd&&a7()){aa=h;aF(bd,aa,B)}else{if(aa===k){aa=q;P(bd,aa)}}}}an(false);return null}function ba(){X=0;a3=0;U=0;a1=0;aZ=0;H=1;S();an(false)}function L(bc){var bd=bc.originalEvent?bc.originalEvent:bc;if(au.triggerOnTouchLeave){aa=aC(h);P(bd,aa)}}function aK(){aR.unbind(K,aN);aR.unbind(aD,ba);aR.unbind(ax,a4);aR.unbind(V,M);if(T){aR.unbind(T,L)}an(false)}function aC(bg){var bf=bg;var be=aA();var bd=am();var bc=bb();if(!be||bc){bf=q}else{if(bd&&bg==k&&(!au.triggerOnTouchEnd||au.triggerOnTouchLeave)){bf=h}else{if(!bd&&bg==h&&au.triggerOnTouchLeave){bf=q}}}return bf}function P(be,bc){var bd,bf=be.touches;if(J()||W()){bd=aF(be,bc,l)}if((Q()||aX())&&bd!==false){bd=aF(be,bc,t)}if(aG()&&bd!==false){bd=aF(be,bc,j)}else{if(ao()&&bd!==false){bd=aF(be,bc,b)}else{if(ah()&&bd!==false){bd=aF(be,bc,B)}}}if(bc===q){if(W()){bd=aF(be,bc,l)}if(aX()){bd=aF(be,bc,t)}ba(be)}if(bc===h){if(bf){if(!bf.length){ba(be)}}else{ba(be)}}return bd}function aF(bf,bc,be){var bd;if(be==l){aR.trigger("swipeStatus",[bc,aP||null,ag||0,ac||0,X,aQ,a2]);if(au.swipeStatus){bd=au.swipeStatus.call(aR,bf,bc,aP||null,ag||0,ac||0,X,aQ,a2);if(bd===false){return false}}if(bc==h&&aV()){clearTimeout(aW);clearTimeout(af);aR.trigger("swipe",[aP,ag,ac,X,aQ,a2]);if(au.swipe){bd=au.swipe.call(aR,bf,aP,ag,ac,X,aQ,a2);if(bd===false){return false}}switch(aP){case p:aR.trigger("swipeLeft",[aP,ag,ac,X,aQ,a2]);if(au.swipeLeft){bd=au.swipeLeft.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case o:aR.trigger("swipeRight",[aP,ag,ac,X,aQ,a2]);if(au.swipeRight){bd=au.swipeRight.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case e:aR.trigger("swipeUp",[aP,ag,ac,X,aQ,a2]);if(au.swipeUp){bd=au.swipeUp.call(aR,bf,aP,ag,ac,X,aQ,a2)}break;case x:aR.trigger("swipeDown",[aP,ag,ac,X,aQ,a2]);if(au.swipeDown){bd=au.swipeDown.call(aR,bf,aP,ag,ac,X,aQ,a2)}break}}}if(be==t){aR.trigger("pinchStatus",[bc,aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchStatus){bd=au.pinchStatus.call(aR,bf,bc,aJ||null,ap||0,ac||0,X,H,aQ);if(bd===false){return false}}if(bc==h&&a9()){switch(aJ){case c:aR.trigger("pinchIn",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchIn){bd=au.pinchIn.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break;case A:aR.trigger("pinchOut",[aJ||null,ap||0,ac||0,X,H,aQ]);if(au.pinchOut){bd=au.pinchOut.call(aR,bf,aJ||null,ap||0,ac||0,X,H,aQ)}break}}}if(be==B){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);if(Z()&&!I()){O=ar();aW=setTimeout(f.proxy(function(){O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}},this),au.doubleTapThreshold)}else{O=null;aR.trigger("tap",[bf.target]);if(au.tap){bd=au.tap.call(aR,bf,bf.target)}}}}else{if(be==j){if(bc===q||bc===h){clearTimeout(aW);clearTimeout(af);O=null;aR.trigger("doubletap",[bf.target]);if(au.doubleTap){bd=au.doubleTap.call(aR,bf,bf.target)}}}else{if(be==b){if(bc===q||bc===h){clearTimeout(aW);O=null;aR.trigger("longtap",[bf.target]);if(au.longTap){bd=au.longTap.call(aR,bf,bf.target)}}}}}return bd}function am(){var bc=true;if(au.threshold!==null){bc=ag>=au.threshold}return bc}function bb(){var bc=false;if(au.cancelThreshold!==null&&aP!==null){bc=(aT(aP)-ag)>=au.cancelThreshold}return bc}function ae(){if(au.pinchThreshold!==null){return ap>=au.pinchThreshold}return true}function aA(){var bc;if(au.maxTimeThreshold){if(ac>=au.maxTimeThreshold){bc=false}else{bc=true}}else{bc=true}return bc}function ak(bc,bd){if(au.preventDefaultEvents===false){return}if(au.allowPageScroll===m){bc.preventDefault()}else{var be=au.allowPageScroll===s;switch(bd){case p:if((au.swipeLeft&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case o:if((au.swipeRight&&be)||(!be&&au.allowPageScroll!=E)){bc.preventDefault()}break;case e:if((au.swipeUp&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break;case x:if((au.swipeDown&&be)||(!be&&au.allowPageScroll!=u)){bc.preventDefault()}break}}}function a9(){var bd=aO();var bc=Y();var be=ae();return bd&&bc&&be}function aX(){return !!(au.pinchStatus||au.pinchIn||au.pinchOut)}function Q(){return !!(a9()&&aX())}function aV(){var bf=aA();var bh=am();var be=aO();var bc=Y();var bd=bb();var bg=!bd&&bc&&be&&bh&&bf;return bg}function W(){return !!(au.swipe||au.swipeStatus||au.swipeLeft||au.swipeRight||au.swipeUp||au.swipeDown)}function J(){return !!(aV()&&W())}function aO(){return((X===au.fingers||au.fingers===i)||!a)}function Y(){return aQ[0].end.x!==0}function a7(){return !!(au.tap)}function Z(){return !!(au.doubleTap)}function aU(){return !!(au.longTap)}function R(){if(O==null){return false}var bc=ar();return(Z()&&((bc-O)<=au.doubleTapThreshold))}function I(){return R()}function aw(){return((X===1||!a)&&(isNaN(ag)||ag<au.threshold))}function a0(){return((ac>au.longTapThreshold)&&(ag<r))}function ah(){return !!(aw()&&a7())}function aG(){return !!(R()&&Z())}function ao(){return !!(a0()&&aU())}function G(bc){a6=ar();ay=bc.touches.length+1}function S(){a6=0;ay=0}function al(){var bc=false;if(a6){var bd=ar()-a6;if(bd<=au.fingerReleaseThreshold){bc=true}}return bc}function aB(){return !!(aR.data(C+"_intouch")===true)}function an(bc){if(!aR){return}if(bc===true){aR.bind(ax,a4);aR.bind(V,M);if(T){aR.bind(T,L)}}else{aR.unbind(ax,a4,false);aR.unbind(V,M,false);if(T){aR.unbind(T,L,false)}}aR.data(C+"_intouch",bc===true)}function ai(be,bc){var bd={start:{x:0,y:0},last:{x:0,y:0},end:{x:0,y:0}};bd.start.x=bd.last.x=bd.end.x=bc.pageX||bc.clientX;bd.start.y=bd.last.y=bd.end.y=bc.pageY||bc.clientY;aQ[be]=bd;return bd}function aH(bc){var be=bc.identifier!==undefined?bc.identifier:0;var bd=ad(be);if(bd===null){bd=ai(be,bc)}bd.last.x=bd.end.x;bd.last.y=bd.end.y;bd.end.x=bc.pageX||bc.clientX;bd.end.y=bc.pageY||bc.clientY;return bd}function ad(bc){return aQ[bc]||null}function aI(bc,bd){bd=Math.max(bd,aT(bc));N[bc].distance=bd}function aT(bc){if(N[bc]){return N[bc].distance}return undefined}function ab(){var bc={};bc[p]=av(p);bc[o]=av(o);bc[e]=av(e);bc[x]=av(x);return bc}function av(bc){return{direction:bc,distance:0}}function aM(){return a3-U}function at(bf,be){var bd=Math.abs(bf.x-be.x);var bc=Math.abs(bf.y-be.y);return Math.round(Math.sqrt(bd*bd+bc*bc))}function a8(bc,bd){var be=(bd/bc)*1;return be.toFixed(2)}function aq(){if(H<1){return A}else{return c}}function aS(bd,bc){return Math.round(Math.sqrt(Math.pow(bc.x-bd.x,2)+Math.pow(bc.y-bd.y,2)))}function aE(bf,bd){var bc=bf.x-bd.x;var bh=bd.y-bf.y;var be=Math.atan2(bh,bc);var bg=Math.round(be*180/Math.PI);if(bg<0){bg=360-Math.abs(bg)}return bg}function aL(bd,bc){var be=aE(bd,bc);if((be<=45)&&(be>=0)){return p}else{if((be<=360)&&(be>=315)){return p}else{if((be>=135)&&(be<=225)){return o}else{if((be>45)&&(be<135)){return x}else{return e}}}}}function ar(){var bc=new Date();return bc.getTime()}function aY(bc){bc=f(bc);var be=bc.offset();var bd={left:be.left,right:be.left+bc.outerWidth(),top:be.top,bottom:be.top+bc.outerHeight()};return bd}function F(bc,bd){return(bc.x>bd.left&&bc.x<bd.right&&bc.y>bd.top&&bc.y<bd.bottom)}}}));!function(n){"use strict";n.fn.bsTouchSlider=function(i){var a=n(".carousel");return this.each(function(){function i(i){var a="webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";i.each(function(){var i=n(this),t=i.data("animation");i.addClass(t).one(a,function(){i.removeClass(t)})})}var t=a.find(".item:first").find("[data-animation ^= 'animated']");a.carousel(),i(t),a.on("slide.bs.carousel",function(a){var t=n(a.relatedTarget).find("[data-animation ^= 'animated']");i(t)}),n(".carousel .carousel-inner").swipe({swipeLeft:function(n,i,a,t,e){this.parent().carousel("next")},swipeRight:function(){this.parent().carousel("prev")},threshold:0})})}}(jQuery);



//Initialise Bootstrap Carousel Touch Slider
// Curently there are no option available.

$('#bootstrap-touch-slider').bsTouchSlider();

</script>
	<!-- Header end -->




     <!-- services start -->
    <div class="services">
		<div class="container container-pad ">
			<h2>Advisory </h2>
			
			<!-- secetion 1 -->
			<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
                            <div class="pro-img"> <img src="images/home-fp.png" alt="Financial planning, Financial advisory services" title="Financial planning, Financial advisory services" class="img-responsive2"> </div>
				<a href="<?php echo ADVISORY_SITE_HTTP_URL?>/financial-planning.php" class="forborder">
                <h3>Financial Planning</h3></a>
				<p class="content-pad">We help you create wealth by providing proper Financial advice based on your goals !</p>
			</div> 
			
			<!-- secetion 2 -->	
			<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
                            <div class="pro-img"> <img src="images/home-retirement-planning.png" alt="Retirement planning advisor" title="Retirement planning advisor"  class="img-responsive2"> </div>
                <a href="<?php echo ADVISORY_SITE_HTTP_URL?>/retirement-planning.php" class="forborder">
				<h3>Retirement Planning</h3></a>
                                <p class="content-pad" style="padding: 0px 73px !important;">Our retirement consultants can help you bring your assets together and offer tailored advice based on your needs</p>
			</div> 
			
			<!-- secetion 3 -->
			<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
				<div class="pro-img"> <img src="new_assets/personalised-dvise.png" alt="Tax preparation services" title="Tax preparation services" class="img-responsive2"> </div>
                 <a href="<?php echo ADVISORY_SITE_HTTP_URL?>/tax-planning-strategies.php" class="forborder">
				<h3>Tax Planning</h3></a>
				<p class="content-pad">Instead of filing your tax, plan your taxes for saving + for creating wealth  </p>
			</div>
		            
			 <!--<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
				<div class="pro-img"> <img src="new_assets/personalised-dvise.png" class="img-responsive2"> </div>
                 <a href="<?php echo ADVISORY_SITE_HTTP_URL?>/estate-planning.php" class="forborder">
				<h3>Estate Planning</h3></a>
				<p class="content-pad">Plan your investment from a tax perspective. </p>
			</div>
            
			<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
				<div class="pro-img"> <img src="new_assets/personalised-dvise.png" class="img-responsive2"> </div>
                 <a href="<?php echo ADVISORY_SITE_HTTP_URL?>/wealth-management.php" class="forborder">
				<h3>Wealth Management</h3></a>
				<p class="content-pad">Plan your investment from a tax perspective. </p>
			</div>
        
			<div class="col-sm-4 col-md-4 col-lg-4 marbot2"> 
				<div class="pro-img"> <img src="new_assets/personalised-dvise.png" class="img-responsive2"> </div>
                 <a href="<?php echo ADVISORY_SITE_HTTP_URL?>/nri-consultancy.php" class="forborder">
				<h3>NRI Investment Consultancy</h3></a>
				<p class="content-pad">Plan your investment from a tax perspective. </p>
			</div>-->
			
            
			<div class="clear"></div>
			 <h2>Tax </h2> 
			
			<!-- secetion 1 -->
			<div class="col-sm-4 col-md-4 col-lg-4 marbot3"> 
                            <div class="pro-img"> <img src="images/income-tax-filing.png" title="income tax return filing online" alt="income tax return filing online" class="img-responsive2"> </div>
                            <a href="<?php echo TAX_SITE_HTTP_URL ?>/itr-filling.php" class="forborder"><h3>Income Tax Filling</h3></a>
				<p class="content-pad">Now e-file your Income Tax Return Online</p>
			</div> 
			
			<!-- secetion 2 -->	
			<div class="col-sm-4 col-md-4 col-lg-4 marbot3"> 
				<div class="pro-img"> <img src="images/income-tax-notices.png" alt="itr notice form" title="itr notice form" class="img-responsive2"> </div>
                                <a href="<?php echo TAX_SITE_HTTP_URL ?>/itr-notice.php" class="forborder">
                                    <h3>Income Tax Notices</h3>
                                </a>
				<p class="content-pad">Got a notice from Income Tax Department. Upload it and get it resolved!</p>
			</div> 
			
			<!-- secetion 3 -->
			<div class="col-sm-4 col-md-4 col-lg-4 marbot3"> 
				<div class="pro-img"> <img src="images/NRI-taxation.png" alt="nri taxation" title="nri taxation" class="img-responsive2"> </div>
				 <a href="<?php echo TAX_SITE_HTTP_URL ?>/nri-taxation.php" class="forborder">
                                <h3>NRI Taxation</h3>
                                 </a>
				<p class="content-pad">NRI Taxation simplified. Let the experts take care of your NRI Tax Filing!</p>
			</div>
			
			
			
		</div>
    </div>
    <!-- Services end -->
    
    
    <!-- advisory services start -->
    <div class="common-area1 advisory">
		<div class="container container-pad ">
			
			<div class="col-sm-5 col-md-5 col-lg-5 bgcolor"> 
				<h2>Expert Advice is what you deserve</h2>
				<p>In this complex investment market, expert advice is more than needed to achieve the financial goals. Our proven investment strategies, backed by seamless technology makes it easy for you to make sound financial decision.</p>
				<p>Our purpose is to help you make most of your money with the tailored advice by our in-house certified Financial Experts</p>
				<div class="button-com"><a href="<?php echo ADVISORY_SITE_HTTP_URL ?>/financial-planning.php">  Talk to experts </a></div>
			</div>
			
		</div>
    </div>
    <!-- advisory services end -->
    
    
    <!-- Smart Goal Tracking start -->
    <div class="common-area1">
		<div class="container container-pad ">
			
			<div class="col-sm-6 col-md-6 col-lg-6"> 
				<h2>Personalised Advice</h2>
				<p>Flourishing your money in today's financial market is like gardening, where you need to give special care and time to grow your money. This is what make's Financial Hospital best, as we cultivate and grow your money with special personal care and time, so that you achieve your goals every single time</p>
				<!-- <div class="button-com txt-service"><a href="#"> Get Personalised Advice! </a></div> -->
			</div>
			
			<div class="col-sm-6 col-md-6 col-lg-6 txtcenter"> 
                            <img src="images/personalised-advice.png" class="img-responsive2">
			</div>
			
		</div>
    </div>
    <!-- Smart Goal Tracking end -->
    
    
    <!-- testimonials start -->
     <?php  include("testimonials-common.php");   ?>
    <!-- testimonials end -->
    
    <!-- happy clients strat -->
    <div class="happy-clients">
		<div class="container container-pad">
			<!-- <h2> <span  data-to="94108" data-append="+">94,108+</span> happy clients and <span>250+</span> corporate tie-ups says it all</h2>-->
			
			<!-- secetion 1 -->
			<div class="col-sm-2-5 col-md-2-5 col-lg-2-5 clientP"> 
				<img src="new_assets/clients.png">
                                <?php  
                                              foreach ($data1 as $result){
                                                  //echo $result['cnt'] ;
                                              ?>
				<h3><?php echo $result['cnt']  ?></h3>
                                 <?php } ?>
				<p>Happy Clients</p>
			</div> 
			
			<!-- secetion 2 -->	
			<div class="col-sm-2-5 col-md-2-5 col-lg-2-5 clientP"> 
				<img src="new_assets/callender.png">
				<h3>14</h3>
				<p>Years in Business</p>
			</div>
			
			<!-- secetion 3 -->
			<div class="col-sm-2-5 col-md-2-5 col-lg-2-5 clientP"> 
				<img src="new_assets/tie-ups.png">
				<h3>250</h3>
				<p>Corporate tie-ups</p>
			</div>
			
			<!-- secetion 4 -->
			<div class="col-sm-2-5 col-md-2-5 col-lg-2-5 clientP"> 
				<img src="new_assets/cas.png">
				<h3>70</h3>
				<p>CAs, CFPs, MBAs</p>
			</div>
			
			<!-- secetion 5 -->
			<div class="col-sm-2-5 col-md-2-5 col-lg-2-5 clientP"> 
				<img src="new_assets/aum.png">
				<h3>100+</h3>
				<p>Crore of AUM</p>
			</div>
			
		</div>
    </div>
  
  
    
<?php
	include("includes/footer.php");  
?>
<script>
$(window).load(function(){        
  $('#myModal').modal('show');
    }); 
</script>

<script>
//$( document ).ready(function() {
// 	var poppy = sessionStorage.getItem('myPopup');

// 	if(!poppy){
// 				setTimeout(function(){ showetwealthadpopup(); }, 2000);
// 	}

// 	jQuery.validator.addMethod("noSpace", function(value, element) { 
// 		  return value.indexOf(" ") < 0 && value != ""; 
// 		}, "Space is not allowed");
	
	
	
 // $('.tooltip__content').offscreen({
	//smartResize: true,
	//rightClass: 'right-edge',
	//leftClass: 'left-edge'
 // });
//});   

// function showetwealthadpopup(){
// 		$('.Ad_popup').modal('show');
	
// }

// $('#app_ad_modal').trigger('reset');
// $('#app_ad_modal').validate({
// 	rules:{
// 		popup_uname:{required: true,noSpace:true},
// 		popup_mobile:{required: true,minlength:10},
// 		email:{required: true,email: true}
// 	},
//     messages:{
//         popup_uname:{required: "Please enter your name"},
//         popup_mobile:{required: "Please enter your mobile number", minlength:"Please enter minimum 10 digits"},
//         email:{required: "Please enter your mail id",email: "Please enter correct email id"}
//     },
// 	submitHandler: function(form) {
// 		sessionStorage.setItem('myPopup','true');
// 		//$(".Ad_popup").hide();
// 		//window.open('https://investor.hdfcfund.com/mfonline/landingpage.aspx?DistributorCode=ARN-21209&UType=FWOP&EUINNo=E106836', '_blank'); 
// 		form.submit();
// 	}
// });


// $( ".bookappointment" ).click(function() {
// 	$( "#app_ad_modal" ).submit();
// });
</script>

