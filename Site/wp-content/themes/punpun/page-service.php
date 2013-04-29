<?php
/**
 * Template Name: Service
**/
get_header(); ?>

<style>
	.span12.thumbnails.listhospital ul li{
	  	margin-bottom:5px;
	}
	#main ul li{
		line-height:35px;
	}
	.dl-horizontal dt {
		float: left;
		width: 408px;
		overflow: hidden;
		clear: left;
		text-align: right;
		text-overflow: ellipsis;
		white-space: nowrap;
		line-height: 40px;
	}
	.dl-horizontal dd {
		margin-left: 421px;
		width: 318px;
		line-height: 40px;
	}
	
</style>
		    
<div class="content">
	<div class="row-fluid">
		<div class="span12 thumbnails">
			  <div class="tabbable tabs-right">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#sv2"  onclick="hideAll();"   >
							<i class="icon-caret-right"></i>
							แนะนำปันปั่น
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv1"  onclick="hideAll();"   >
							<i class="icon-caret-right"></i>
							คุณสมบัติผู้ใช้
						</a>
					</li>
					<li class="">
						<a href="http://www.punpunbikeshare.com/download/ApplicationForm.pdf" target="_blank">
							<i class="icon-caret-right"></i>
							ดาวน์โหลดใบสมัคร
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv3" onclick="showRent();" >
							<i class="icon-caret-right"></i>
							การเช่ายืม - คืนจักรยาน
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv4"  onclick="showCoin();" >
							<i class="icon-caret-right"></i>
							การเติมเงินและตรวจสอบยอดเงิน
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv5"  onclick="hideAll();" >
							<i class="icon-caret-right"></i>
							อัตราค่าใช้บริการ
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv6"  onclick="showPun();" >
							<i class="icon-caret-right"></i>
							ปั่นอย่างปลอดภัย
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#sv7"  onclick="hideAll();" >
							<i class="icon-caret-right"></i>
							การประกันอุบัติเหตุเนื่องจากการใช้จักรยาน
						</a>
					</li>
					<li class="" style="display:none">
						<a data-toggle="tab" href="#sv8"  onclick="hideAll();" >
							<i class="icon-caret-right"></i>
							กฎจราจรสำหรับผู้ขี่จักรยาน
						</a>
					</li>
				</ul><!--end nav nav-tabs-->
				
				<div class="tab-content">
					<div id="sv1" class="tab-pane">
						<div class="span12" >
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="./"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="./?page_id=27">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>คุณสมบัติผู้ใช้</li>
							</ul><!--breadcrumb-->
						</div><!--span12 breadcrumb-->
						<div class="span12 thumbnails">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service.png" class="span12 matbot5" alt="service" />
							<div class="span11">
								<h3>คุณสมบัติผู้ใช้</h3>
								<p>•	คุณสมบัติของผู้ใช้บริการให้มีอายุไม่น้อยกว่า 18 ปีบริบูรณ์ ในวันที่สมัครใช้บริการ </p>
								<p>•	ผู้ใช้บริการต้องสมัครลงทะเบียนเป็นผู้ใช้บริการจักรยานสาธารณะปันปั่นด้วยตนเอง โดยใช้บัตรประจำตัวประชาชน บัตรข้าราชการ หรือหนังสือเดินทาง และได้ชำระค่าธรรมเนียมและค่าบริการล่วงหน้าตามที่โครงการกำหนด</p>
							</div>    	        	
						</div><!--end span12-->
					</div><!--#sv1-->
					
					<div id="sv2" class="tab-pane active">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>แนะนำปันปั่น</li>
							</ul><!--breadcrumb-->
							<div class="span12 thumbnails">
							<img class="offset3" src="<?php bloginfo( 'template_url' ); ?>/images/about/twoLogo.png" alt="twoLogo" width="318" height="167" />
							<h3>แนะนำปันปั่น</h3>
							<p class="matbot5 ppun">ปันปั่น คือ โครงการจักรยานสาธารณะของกรุงเทพมหานคร ที่ให้บริการ “ให้ยืม” หรือ “ให้เช่า” รถจักรยาน
								แก่ชาวกรุงเทพฯ ด้วยระบบอัตโนมัติ เพื่อใช้ขี่ในระยะสั้นๆ สำหรับการเดินทางจากจุดหมายต้นทางไปสู่ปลายทาง 
								โดยไม่จำเป็นต้องมีรถจักรยานของตัวเอง โครงการจักรยานสาธารณะ ปันปั่น จะช่วยเติมเต็มช่องว่างในการเดินทาง
								ด้วยรถขนส่งมวลชนขนาดใหญ่อย่างรถไฟฟ้าบีทีเอสและรถไฟฟ้ามหานคร โดยจะมีสถานีจอดรถจักรยานอยู่ใกล้ ๆ 
								เพื่อปั่นต่อไปยังจุดหมายปลายทางซึ่งเป็นอาคารสำนักงานสำคัญ ๆ หรือศูนย์การค้าขนาดใหญ่ ซึ่งก็จะมีสถานีจอดรถ
								จักรยานอยู่ใกล้ ๆด้วยเช่นกัน
								</p>
							<img class="matbot5" src="<?php bloginfo( 'template_url' ); ?>/images/about/P9230829.png" alt="P9230829" width="604" height="275" />
							<p class="matbot5 ppun">แนวคิดสำคัญอีกประการหนึ่งของโครงการจักรยานสาธารณะก็คือ “การแบ่งปัน” ซึ่งก็เป็นที่มาของชื่อโครงการ 
								“ปันปั่น” ที่ส่งเสริมให้ชาวกรุงเทพฯ ได้ใช้รถจักรยานสาธารณะร่วมกันอย่างมีประสิทธิภาพ เนื่องจากจักรยานและ
								สถานีจอดรถจักรยานมีจำนวนจำกัด ผู้ใช้บริการจึงควรจะใช้งานในเวลาสั้น ๆ แล้วคืนรถจักรยานเข้าสู่ระบบ เพื่อให้
								ผู้ใช้บริการคนอื่น ๆ ได้มีโอกาสใช้ร่วมกันอย่างมีประสิทธิภาพ ดังจะเห็นได้จากการที่โครงการ “ปันปั่น” ไม่คิดค่า
								บริการในช่วง 15 นาทีแรก ซึ่งถือว่าเป็นช่วงเวลา “ให้ยืม” ใช้โดยไม่มีค่าใช้จ่าย
								</p>
						</div>
						</div><!--span12 breadcrumb-->
						
					</div><!--end #sv2-->
					
					<div id="sv3" class="tab-pane">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li style="width:400px;">การเช่ายืม - คืนจักรยาน</li>
							</ul><!--breadcrumb-->
						</div><!--span7 breadcrumb-->
						<div class="span7" style="margin-bottom:20px;">
							<iframe width="620" height="349" src="http://www.youtube.com/embed/Qdh_9mbSrW4" frameborder="0" allowfullscreen></iframe>
						</div>
					</div><!--end #sv3-->
					
					<div id="sv4" class="tab-pane">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>การเติมเงินและตรวจสอบยอดเงิน</li>
							</ul><!--breadcrumb-->
						</div><!--span7 breadcrumb-->
						<div class="span7" style="margin-bottom:20px;">
							
							<iframe width="620" height="349" src="http://www.youtube.com/embed/Qdh_9mbSrW4" frameborder="0" allowfullscreen></iframe>
						</div>
					</div><!--end #sv4-->
					
					<div id="sv5" class="tab-pane">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>อัตราค่าใช้บริการ</li>
							</ul><!--breadcrumb-->
						</div><!--span12 breadcrumb-->
						<div class="span12 thumbnails">
							<h3>อัตราค่าใช้บริการ</h3>
							<div class="span10 offset1">
								<p><span class="span6">15 นาทีแรก</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5 txtgreen">ไม่คิดค่าบริการ</span></p>
								<hr>
								<p><span class="span6">หลังจาก 15 นาทีถึง 1 ชั่วโมง</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 10 บาท</span></p>
								<hr>
								<p><span class="span6">1 - 3 ชั่วโมง</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 20 บาท</span></p>
								<hr>
								<p><span class="span6">3 - 5 ชั่วโมง</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 40 บาท</span></p>
								<hr>
								<p><span class="span6">5 - 6 ชั่วโมง</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 60 บาท</span></p>
								<hr>
								<p><span class="span6">6 - 8 ชั่วโมง</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 80 บาท</span></p>
								<hr>
								<p><span class="span6">ชั่วโมงที่ 8 เป็นต้นไป</span><span class="span1"><i class="txtgreen icon-forward"></i></span><span class="span5">คิดค่าบริการ 100 บาท</span></p>
							</div>
						</div>    	
					</div><!--end #sv5-->
					
					<div id="sv6" class="tab-pane">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>ปั่นอย่างปลอดภัย</li>
							</ul><!--breadcrumb-->
						</div><!--span12 breadcrumb-->
						<div class="span12 thumbnails">
							<h3>การเตรียมความพร้อมก่อนปั่นจักรยาน</h3>
							<ul class="thumbnails">
								<li class="span6">
									<img src="<?php bloginfo( 'template_url' ); ?>/images/service/Safety1.png" alt="Safety1" width="297" height="178" />
									<div class="caption">
										<p class="font08em">สำรวจเครื่องแต่งกายคุณว่าพร้อมกับการขี่จักรยานมากน้อยแค่ไหน เช่น อาจไม่เหมาะกับการใส่กระโปรงสั้น,รองเท้าส้นสูง รวมถึงการมีสัมภาระมากจนเกินไป</p>
									</div>
								</li>
								<li class="span6">
									<img src="<?php bloginfo( 'template_url' ); ?>/images/service/Safety2.png" alt="Safety2" width="297" height="178" />
									<div class="caption">
										<p class="font08em">สำรวจจักรยานก่อนทำการเช่าว่ามีสภาพสมบูรณ์หรือไม่ แฮนด์จักรยานแข็งแรง ยางไม่แบน เบรคใช้การได้ดี รวมถึงกระดิ่ง และต้องไม่ลืมปรับเบาะนั่งให้ความสูงเหมาะสมกับสรีระของคุณ</p>
									</div>
								</li>
							</ul>
						</div>
					</div><!--end #sv6-->
					
					<div id="sv7" class="tab-pane" style="line-height:50px">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="31" height="28"></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>การประกันอุบัติเหตุเนื่องจากการใช้จักรยาน</li>
							</ul><!--breadcrumb-->
						</div><!--span12 breadcrumb-->
						<div class="span12 thumbnails ">
							<p>โครงการจักรยานสาธารณะปันปั่นได้ทำกรมธรรม์ประกันอุบัติเหตุ เนื่องจากการใช้รถจักรยานของโครงการฯ ให้กับสมาชิกโครงการฯ โดย บริษัท ทิพยประกันภัย จำกัด (มหาชน) </p>
							<div class="row-fluid">
								<div class="span7">
									<h3>ข้อตกลงความคุ้มครอง</h3>
									<ul>
										<li>1.&nbsp;&nbsp;&nbsp;&nbsp;การเสียชีวิต สูญเสียอวัยวะ สายตา หรือ ทุพพลภาพถาวรสิ้นเชิง คนละ 50,000 บาท </li>
										<li>2.&nbsp;&nbsp;&nbsp;&nbsp;การรักษาพยาบาลต่ออบัติเหตุแต่ละครั้ง  คนละ 5,000 บาท</li>
									</ul>
								</div>
								<div class="span5">
									<img src="<?php bloginfo( 'template_url' ); ?>/images/service/hotline.png" alt="hotline" width="149" height="149">
								</div>
							</div><!--end row fluid-->
							<div class="row-fluid">
								<h3>การใช้สิทธิประโยชน์ค่ารักษาพยาบาล</h3>
								<div class="txtcenter">
									<h4>วิธีที่ 1 ใช้บัตรสมาชิกประกันสุขภาพ (บัตรจักรยานปันปั่น)</h4>
									<p>ติดต่อ Hot Line 02-6601221</p>
									<i class="txtgreen icon-caret-down icon-large"></i>
									<p>ตรวจสอบรายชื่อโรงพยาบาลที่อยู่ในเครือข่าย</p>
									<i class="txtgreen icon-caret-down icon-large"></i>
									<p>แสดงบัตรสมาชิกประกันสุขภาพ และ บัตรประชาชน</p>
									<i class="txtgreen icon-caret-down icon-large"></i>
									<p>ได้รับคุ้มครองตามผลประโยชน์ </p>
									<a class="linklisthos" data-toggle="modal" href="#myModal" style="display:none">*เช็ครายชื่อโรงพยาบาลในเครือข่าย</a>
								</div>
								<div class="txtcenter">
									<h4>วิธีที่ 2 การเข้ารับการรักษาในโรงพยาบาลที่ไม่อยู่ในเครือข่าย</h4>
									<p>สำรองจ่ายเงินค่ารักษาพยาบาลไปก่อน</p>
									<i class="txtgreen icon-caret-down icon-large"></i>
									<p>นำหลักฐานมาเรียกร้องค่าชดเชยคืนตามสิทธิความคุ้มครองที่ได้รับ</p>
								</div>
							</div><!--end row fluid-->
							<div class="row-fluid matbot5">
								<h4 style="line-height: 50px; ">หลักฐานประกอบการเรียกร้องค่าชดเชย</h4>
								<ul>
									<li>1.&nbsp;&nbsp;&nbsp;&nbsp;ใบรับรองแพทย์ซึ่งระบุคำวินิจฉัยโรคและใบรายงานการรักษา (Attending Physician’s Report) และใบสรุปหน้างบ</li>
									<li>2.&nbsp;&nbsp;&nbsp;&nbsp;ใบเสร็จรับเงินตัวจริง ระบุรายละเอียดค่าใช้จ่าย</li>
									<li>3.&nbsp;&nbsp;&nbsp;&nbsp;สำเนาบัตรสมาชิกหน้า-หลัง</li>
									<li>4.&nbsp;&nbsp;&nbsp;&nbsp;แบบฟอร์มการเรียกร้องค่าสินไหม</li>
								</ul>
							</div><!--end row fluid-->
							<div class="row-fluid">
								<h4 style="line-height:50px">การเรียกร้องค่าสินไหมทดแทนกรณีเสียชีวิต</h4>
								<ul>
									<li>1.&nbsp;&nbsp;&nbsp;&nbsp;สำเนาบัตรประชาชน/สำเนาทะเบียนบ้าน ของผูเสียชีวิต และของทายาทตามกฎหมาย</li>
									<li>2.&nbsp;&nbsp;&nbsp;&nbsp;สำเนาบันทึกประจำวันของเจ้าหน้าที่ตำรวจ</li>
									<li>3.&nbsp;&nbsp;&nbsp;&nbsp;เอกสารยืนยันผู้รับผลประโยชน์/ทายาทตามกฎหมาย</li>
								</ul>
							</div><!--end row fluid-->
							<br/>
							
							<div class="">
								<h3 id="myModalLabel">รายชื่อโรงพยาบาลในเครือข่าย</h3>
							</div>

							<div class="">								
								<dl class="dl-horizontal">
									<dt>โรงพยาบาลกรุงเทพ</dt><dd>0-2310-3000, 0-2318-0066</dd>
									<dt>โรงพยาบาลกรุงเทพคริสเตียน</dt><dd>0-2233-6981-9</dd>
									<dt>โรงพยาบาลกรุงธน1</dt><dd>0-2438-0040-5</dd>
									<dt>โรงพยาบาลกล้วยน้ำไท1</dt><dd>0-2769-2000</dd>
									<dt>โรงพยาบาลกล้วยน้ำไท2</dt><dd>0-2399-4260, 0-2399-4259-63</dd>
									<dt>โรงพยาบาลเกษมราษฎร์บางแค</dt><dd>0-2455-4500</dd>
									<dt>โรงพยาบาลเกษมราษฎร์ประชาชื่น</dt><dd>0-2910-1600-49</dd>
									<dt>โรงพยาบาลเกษมราษฎร์สุขาภิบาล3</dt><dd>0-2729-3000</dd>
									<dt>โรงพยาบาลคลองตัน</dt><dd>0-2319-2101-5</dd>
									<dt>โรงพยาบาลคามิลเลียน</dt><dd>0-2185-1444</dd>
									<dt>โรงพยาบาลเจ้าพระยา</dt><dd>0-2884-7000, 0-2434-0117,<br/>02-434-1111</dd>
									<dt>โรงพยาบาลเซนต์หลุยส์</dt><dd>0-2675-5000</dd>
									<dt>โรงพยาบาลเซ็นทรัลเยนเนอรัล</dt><dd>0-2552-8777</dd>
									<dt>โรงพยาบาลเดชา</dt><dd>0-2246-1685-93</dd>
									<dt>โรงพยาบาลเทพธารินทร์</dt><dd>0-2348-7000</dd>
									<dt>โรงพยาบาลไทยนครินทร์</dt><dd>0-2361-2727, 0-2361-2828</dd>
									<dt>โรงพยาบาลธนบุรี1</dt><dd>0-2412-0020</dd>
									<dt>โรงพยาบาลธนบุรี2</dt><dd>0-2448-3845-58</dd>
									<dt>โรงพยาบาลนครธน</dt><dd>0-2416-5454,0-2450-9999</dd>
									<dt>โรงพยาบาลนวมินทร์</dt><dd>0-2918-5080</dd>
									<dt>โรงพยาบาลนวมินทร์9</dt><dd>0-2518-1818</dd>
									<dt>โรงพยาบาลบางนา1</dt><dd>0-2746-8630-9</dd>
									<dt>โรงพยาบาลบางปะกอก1</dt><dd>0-2872-1111</dd>
									<dt>โรงพยาบาลบางปะกอก 8</dt><dd>0-2894-4111</dd>
									<dt>โรงพยาบาลบางปะกอก9อินเตอร์เนชั่นแนล</dt><dd>0-2877-1111</dd>
									<dt>โรงพยาบาลบางโพ</dt><dd>0-2587-0144, 0-2587-0136-55</dd>
									<dt>โรงพยาบาลบ้านแพ้วสาขาพร้อมมิตร</dt><dd>0-2259-0376</dd>
									<dt>โโรงพยาบาลบำรุงราษฎร์</dt><dd>0-2667-1000</dd>
									<dt>โรงพยาบาลบีแคร์เมดิคอลเซ็นเตอร์</dt><dd>0-2523-3359-71</dd>
									<dt>โรงพยาบาลบีเอ็นเอช</dt><dd>0-2686-2700</dd>
									<dt>โรงพยาบาลปิยะเวท</dt><dd>0-2625-6500</dd>
									<dt>โรงพยาบาลเปาโลเมโมเรียล พหลโยธิน</dt><dd>0-2279-7000</dd>
									<dt>โรงพยาบาลเปาโลเมโมเรียลโชคชัย4</dt><dd>0-2514-2157-9,0-2514-4140-9</dd>
									<dt>โรงพยาบาลเปาโลเมโมเรียล นวมินทร์</dt><dd>0-2944-8015-20, 0-2944-7111</dd>
									<dt>โรงพยาบาลพญาไท1</dt><dd>0-2642-7373, 0-2245-2620-1,02640-1111</dd>
									<dt>โรงพยาบาลพญาไท2</dt><dd>0-2617-2444, 0-2617-2424</dd>
									<dt>โรงพยาบาลพญาไท3</dt><dd>0-2467-1111</dd>
									<dt>โรงพยาบาลพระราม2</dt><dd>0-2451-4920-30</dd>
									<dt>โรงพยาบาลพระรามเก้า</dt><dd>0-2248-8020</dd>
									<dt>โรงพยาบาลเพชรเวช</dt><dd>0-2718-1515,0-2318-0080</dd>
									<dt>โรงพยาบาลเพชรเกษม 2</dt><dd>0-2455-5599</dd>
									<dt>โรงพยาบาลแพทย์ปัญญา</dt><dd>0-2314-0726-9</dd>
									<dt>โรงพยาบาลมงกุฎวัฒนะ</dt><dd>0-2574-5000-9</dd>
									<dt>โรงพยาบาลมิชชั่น</dt><dd>0-2282-1100</dd>
									<dt>โรงพยาบาลเมโย</dt><dd>0-2579-1770-4</dd>
									<dt>โรงพยาบาลยันฮี</dt><dd>0-2879-0300</dd>
									<dt>โรงพยาบาลรามคำแหง</dt><dd>0-2374-0200-16, 0-2732-0478-87</dd>
									<dt>โรงพยาบาลราษฎร์บูรณะ</dt><dd>0-2427-0175-9,0-2872-1001-5</dd>
									<dt>โรงพยาบาลลาดพร้าว</dt><dd>0-2932-2929, 0-2530-2556-69</dd>
									<dt>โรงพยาบาลวิชัยยุทธ</dt><dd>0-2265-7777, 0-2618-6200-10</dd>
									<dt>โรงพยาบาลวิภาราม</dt><dd>0-2722-2500</dd>
									<dt>โรงพยาบาลวิภาวดี</dt><dd>0-2561-1258-67, 0-2561-1260-7</dd>
									<dt>โรงพยาบาลเวชธานี</dt><dd>0-2734-0390</dd>
									<dt>โรงพยาบาลศรีวิชัย1</dt><dd>0-2412-0055-60</dd>
									<dt>โรงพยาบาลวิชัยเวช อินเตอร์เนชั่นแนล<br/> หนองแขม(ศรีวิชัย2)</dt><dd>0-2441-6999<br/><br/></dd>
									<dt>โรงพยาบาลศิครินทร์</dt><dd>0-2366-9900</dd>
									<dt>โรงพยาบาลศิริราชพยาบาล</dt><dd>0-2419-7000</dd>
									<dt>โรงพยาบาลสมิติเวชศรีนครินทร์</dt><dd>0-2731-7000-99</dd>
									<dt>โรงพยาบาลสมิติเวชสุขุมวิท</dt><dd>0-2711-8000</dd>
									<dt>โรงพยาบาลสินแพทย์</dt><dd>0-2948-5380-90</dd>
									<dt>โรงพยาบาลสุขุมวิท</dt><dd>0-2391-0011, 0-2714-1300</dd>
									<dt>โรงพยาบาลสุขสวัสดิ์</dt><dd>0-2874-6766-70</dd>
									<dt>โรงพยาบาลสายไหม</dt><dd>0-2991-8999</dd>
									<dt>โรงพยาบาลเสรีรักษ์</dt><dd>0-2918-9888</dd>
									<dt>โรงพยาบาลหัวเฉียว</dt><dd>0-2223-1351</dd>
								</dl>
							</div>

						
						</div>
					</div>
					
					<div id="sv8" class="tab-pane">
						<div class="span12">
							<ul class="breadcrumb" style="margin-left:25px">
								<li><a href="2_Home.html"><img src="<?php bloginfo( 'template_url' ); ?>/images/about/iconHome.png" alt="iconHome" width="26" height="18" /></a> <span class="divider">&gt;</span></li>
								<li><a href="4_Service.html">การใช้บริการ</a> <span class="divider">&gt;</span></li>
								<li>ปั่นอย่างปลอดภัย</li>
							</ul><!--breadcrumb-->
						</div><!--span12 breadcrumb-->
						
					</div><!--end #sv8-->
					
					
				</div><!--end tab content-->
				
			  </div><!--tabbable tabs-right-->
		  </div><!<--end span12 thumbnails-->
		  
				  
			<!--start bottom content svv1-->
				<div class="row-fluid" id="svv1">
					<div class="span12 martopbot12">
						<h3>การยืมจักรยาน</h3>
						<ul class="thumbnails">
							<li class="span4">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-1.png" alt="service-1" width="297" height="171" />
								<div class="caption">
									<p class="font08em">1.	เมื่อถึงที่สถานีเลือกรถจักรยานที่ต้องการยืม</p>
								</div>
							</li>
							<li class="span4">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-2.png" alt="service-2" width="300" height="171" />
								<div class="caption">
									<p class="font08em">2.	เดินไปที่ตู้ควบคุมแล้วกดปุ่มเช่าจักรยาน</p>
								</div>
							</li>
							<li class="span4">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-2.png" alt="service-2" width="300" height="171" />
								<div class="caption">
									<p class="font08em">3.	กดเลือกหมายเลขจักรยานคันที่ต้องการจะใช้</p>
								</div>
							</li>
							<li class="span4 thumbnails">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-3.png" alt="service-3" width="298" height="172" />
								<div class="caption">
									<p class="font08em">4.	แตะบัตร Smart card</p>
								</div>
							</li>
							<li class="span4">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-4.png" alt="service-4" width="305" height="175" />
								<div class="caption">
									<p class="font08em">5.	กดรหัสผ่านและกดยืนยันการใช้บริการ</p>
								</div>
							</li>
							<li class="span4">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-5.png" alt="service-5" width="303" height="175" />
								<div class="caption">
									<p class="font08em">6.	นำบัตรไปแตะที่แท่นล็อคจักรยาน เพื่อปลดระบบล็อคแล้วนำจักรยานออกมา</p>
								</div>
							</li>
	
						</ul>
					</div><!--end span12 -1 -->
					<div class="span12 thumbnails">
						<h3>การคืนจักรยาน</h3>
						<ul class="thumbnails">
							<li class="span4 thumbnails">
								<img src="<?php bloginfo( 'template_url' ); ?>/images/service/service-6.png" alt="service-6" width="296" height="171" />
								<div class="caption">
									<p class="font08em">นำจักรยานไปจอดเสียบคืนที่แท่นล็อคที่ว่างอยู่ ระบบจะทำการล็อคจักรยานและบันทึกข้อมูลการคืน</p>
								</div>
							</li>
						</ul>
					</div><!--end span12 -2 -->
				</div>
				<!--end svv1-->
				
								
								<!--svv2-->
								<div class="row-fluid " id="svv2">
									<div class="span12 martopbot12">
										<h3>การเติมเงิน</h3>
										<ul class="thumbnails">
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/refill1.jpg" alt="refill1" width="297" height="171" /> 
												<div class="caption">
													<p class="font08em">1.	เดินไปที่ตู้ควบคุม กดปุ่มเติมเงิน</p>
												</div>
											</li>
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/refill2.jpg" alt="refill2" width="302" height="171" /> 
												<div class="caption">
													<p class="font08em">2.	แตะบัตร</p>
												</div>
											</li>
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/refill3.jpg" alt="refill3" width="302" height="171" />
												<div class="caption">
													<p class="font08em">3.	เติมเงินในช่องเติมเงิน (เฉพาะธนบัตรใบละ 20,100,500 บาท)</p>
												</div>
											</li>
										</ul>
									</div><!--end span12 -1 -->
									<div class="span12 thumbnails">
										<h3>ตรวจสอบเงินในบัตร</h3>
										<ul class="thumbnails">
											<li class="span4 thumbnails">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/checkMoney1.jpg" alt="checkMoney1" width="297" height="171" />
												<div class="caption">
													<p class="font08em">1.	เดินไปที่ตู้ควบคุม กดปุ่มตรวจสอบยอดเงิน</p>
												</div>
											</li>
											<li class="span4 thumbnails">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/checkMoney2.jpg" alt="checkMoney2" width="297" height="171" />
												<div class="caption">
													<p class="font08em">2.	แตะบัตร</p>
												</div>
											</li>
										</ul>
									</div><!--end span12 -2 -->
								</div>
								<!--end svv2-->
								
								 <!--svv3-->
								<div class="row-fluid " id="svv3">
									<div class="span12">
										<ul class="thumbnails">
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/Safety3.png" alt="Safety3" width="297" height="178" />
												<div class="caption">
													<p class="font08em">จักรยานปันปั่นมีจุดสำหรับวางสัมภาระไว้ให้เพื่ออำนวย
														ความสะดวกแก่ผู้ใช้บริการ แต่มิได้ออกแบบ เพื่อขน
														สัมภาระที่มีปริมาณ, ขนาดหรือน้ำหนักที่มากจนเกินไป
														ดังนั้นผู้ใช้บริการจึงควรประเมินความสามารถในการ
														ควบคุมรถจักรยานด้วยตนเอง และที่สำคัญอย่าลืมรัด
														สัมภาระของคุณด้วยสายรัดที่เราเตรียมไว้ให้ทุกครั้งเพื่อ
														ความปลอดภัย
														</p>
												</div>
											</li>
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/Safety4.png" alt="Safety4" width="297" height="178" />
												<div class="caption">
													<p class="font08em">การใช้รถจักรยานผู้ขับขี่รถจักรยานต้องขับให้ชิด
														ขอบด้านซ้ายของทางเดินรถ ไหล่ทาง หรือทางที่จัด
														ทำไว้สำหรับรถจักรยานให้มากที่สุดเท่าที่จะทำได้ 
														แต่ในกรณีที่มีช่องเดินรถประจำทางด้านซ้ายสุดของ
														ทางเดินรถ ต้องขับขี่รถจักรยานให้ชิดช่องเดินรถ
														ประจำทางนั้น ที่สำคัญระมัดระวังทางแยก หรือซอย
														ที่มีรถเข้าออกเสมอ</p>
												</div>
											</li>
											<li class="span4">
												<img src="<?php bloginfo( 'template_url' ); ?>/images/service/Safety5.png" alt="Safety5" width="297" height="178" />
												<div class="caption">
													<p class="font08em">ไม่ขับขี่โดยประมาทหรือน่าหวาดเสียว อันอาจเกิด
														อันตรายแก่บุคคลหรือทรัพย์สิน, ขับโดยไม่จับคัน
														บังคับรถ, ขับขนานกันเกินสองคัน เว้นแต่ขับในทาง
														ที่จัดไว้สำหรับรถจักรยาน, ขับโดยนั่งบนที่อื่นอัน
														มิใช่อานที่จัดไว้เป็นที่นั่งปกติ</p>
												</div>
											</li>
										</ul>
									</div><!--end span12 -1 -->
								</div>
								<!--end svv3-->
		
	</div>
	<!--end row-fluid-->
	
	
<?php get_footer(); ?>			        
</div>
<!--end content-->
<script type="text/javascript">

$(function(){
showDefault();
});

function showDefault(){
$('#svv1').hide();
$('#svv2').hide();
$('#svv3').hide();
}

function hideAll(){
$('#svv1').hide();
$('#svv2').hide();
$('#svv3').hide();
}

function showRent(){
$('#svv1').show();
$('#svv2').hide();
$('#svv3').hide();
}

function showCoin(){
$('#svv1').hide();
$('#svv2').show();
$('#svv3').hide();
}

function showPun(){
$('#svv1').hide();
$('#svv2').hide();
$('#svv3').show();
}

</script>





