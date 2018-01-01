<?php
//require 'checklogin.php';
echo '<div hidden id="U">ababa</div>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>财务中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Bluth Company">
	<link rel="shortcut icon" href="assets/ico/favicon.html">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/theme.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/alertify.css" rel="stylesheet">
	<link href="assets/css/tasks.css" rel="stylesheet">
	<link rel="Favicon Icon" href="favicon.ico">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<?php
/*echo '<span hidden id="iduwang">1</span>';
	echo '<span hidden id="idoex">2</span>';
	echo '<span hidden id="idimtoken">3</span>';
	echo '<span hidden id="idbox">4</span>';
*/
	?>
<div hidden id="addressValue">
	<span >1</span><span >2</span><span>3</span><span>4</span>
</div>


	<div id="wrap">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="logo">
						<img src="assets/img/logo.png" alt="Realm Admin Template">
					</div>
					<a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
				
					<a class="btn btn-navbar slide_menu_left visible-tablet">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
				

					<div class="top-menu visible-desktop">
						<ul class="pull-left">
							<!--
              <li>
                <a id="messages" data-notification="2" href="#">
                  <i class="icon-envelope"></i> Messages</a>
              </li>
              -->
							<li>
								<a id="notifications" data-notification="0" href="#">
                  <i class="icon-globe"></i> 通知</a>
							
							</li>
						</ul>
						<ul class="pull-right">
							<li>
								<a href="logout.php">
                  <i class="icon-off"></i> 退出</a>
							
							</li>
						</ul>
					</div>

					<div class="top-menu visible-phone visible-tablet">
						<ul class="pull-right">
							<li>
								<a title="link to View all Messages page, no popover in phone view or tablet" href="#">
                  <i class="icon-envelope"></i>
                </a>
							
							</li>
							<li>
								<a title="link to View all Notifications page, no popover in phone view or tablet" href="#">
                  <i class="icon-globe"></i>
                </a>
							
							</li>
							<li>
								<a href="logout.php">
                  <i class="icon-off"></i>
                </a>
							
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="container-fluid">

			<!-- Side menu -->
			<div class="sidebar-nav nav-collapse collapse">
				<div class="user_side clearfix">
					<img src="assets/img/odinn.jpg" alt="Odinn god of Thunder">
					<h5>Odinn</h5>
					<a href="#">
            <i class="icon-cog"></i> 更换头像</a>
				
				</div>
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_F79999" href="index.php">
                <i class="icon-home"></i>
                <span>首页</span>
              </a>
						
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_F6F1A2" href="tasks.php">
                <i class="icon-tasks"></i>
                <span>财务中心</span>
              </a>
						
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                <i class="icon-key"></i>
                <span>安全中心</span>
              </a>
						
						</div>
						<div id="collapse1" class="accordion-body collapse">
							<div class="accordion-inner">
								<a class="accordion-toggle" href="identity.html">
                  <i class="icon-credit-card"></i>　身份验证</a>
							
								<a class="accordion-toggle" href="chagepassword.html">
                  <i class="icon-star"></i>　修改登录密码</a>
							
								<a class="accordion-toggle" href="chagetradpass.html">
                  <i class="icon-list-alt"></i>　修改交易密码</a>
							
								<a class="accordion-toggle" href="info.html">
                  <i class="icon-user"></i>　个人中心</a>
							
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_C1F8A9" href="javascript:alert('暂未开放')">
                <i class="icon-bar-chart"></i>
                <span>兑换中心</span>
              </a>
						
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_9FDDF6" href="tickets.html">
                <i class="icon-bullhorn"></i>
                <span>推广中心</span>
              </a>
						
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle b_F5C294" href="help.html">
                <i class="icon-user"></i>
                <span>帮助</span>
              </a>
						
						</div>
					</div>
				</div>
			</div>
			<!-- /Side menu -->

			<!-- Main window -->
			<div class="main_container" id="tasks_page">
				<br>
				<h2 class="heading">
          财务中心
          <div class="btn-group pull-right">
            <!-- <a href="./recharge.html"> -->
            <!-- <button class="btn">
                      <i class="icon-download"></i>充币
                    </button> -->
            <button type="button" class="btn" data-toggle="modal" data-target="#myModal1">
              <i class="icon-download"></i> 充值
            </button>
            <!-- </a> -->
            <!-- <a href="./extract.html"> -->
            <button type="button" class="btn" data-toggle="modal" data-target="#myModal2">
              <i class="icon-download"></i> 提币
            </button>
            <!-- <button class="btn">
                      <i class="icon-upload"></i> 提币
                    </button> -->
            <!-- </a> -->
          </div>
        </h2>
			
				<div class="row-fluid">
					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
								
									<h4 class="modal-title" id="myModalLabel">充 值</h4>
								</div>
								<div class="modal-body">
									<form action="">
										<div class="control-group ">
											<!-- <label for="form_username">账户:</label> -->
											<div class="controls">
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle"  type="radio" checked value="1" /> 澳洲U网 </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="2" /> OEX </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="3" /> imToken </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="4" /> EDU BOX </label>
											

												<!-- <input class="btn-block" type="radio" name="tyle" value="">  -->
											</div>
										</div>
										<div class="control-group ">
											<div class="controls">
												<input class="btn-block radius5" disabled type="text" name="adress" id="form_address">
												<p class="comment0"></p>
											</div>
										</div>
										<div class="control-group ">
											<!-- <label for="form_username">账户:</label> -->
											<div class="controls">
												<input class="btn-block radius5" required placeholder="请输入数量" type="text" name="username" id="form_amount1">
												<p class="comment1"></p>
											</div>
										</div>

										<div class="control-group ">
											<!-- <label for="form_ amount">金额:</label> -->
											<div class="controls">
												<input class="btn-block radius5" required placeholder="请输入手机号" type="tel" name="tel" id="form_tel">
												<p class="comment2"></p>
											</div>
										</div>
										<!-- 备注 -->
										<div class="control-group ">
											<!-- <label for="form_ amount">金额:</label> -->
											<div class="controls">
												<input class="btn-block radius5" maxlength="255" placeholder="备注" type="text" name=" remarks" id="form_remarks">

											</div>
										</div>

										<!--
                                  							<div class="control-group ">
                                  								<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.mbl.is&amp;send=false&amp;layout=standard&amp;width=280&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=242977562501330" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:35px;" allowTransparency="true"></iframe>
                                  							</div>	
                                  			-->
										<!-- <button type="submit" class="btn btn-large btn-block"></button> -->
										<input type="button" class="btn btn-primary btn-large btn-block radius5" id="recharge" value="充   值">

									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
								
									<h4 class="modal-title" id="myModalLabel">提 币</h4>
								</div>
								<div class="modal-body">
									<form action="">

										<div class="control-group ">
											<!-- <label for="form_username">账户:</label> -->
											<div class="controls">
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle"  type="radio" checked value="1" /> 澳洲U网 </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="2" /> OEX </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="3" /> imToken </label>
											
												<label style="display: inline-block;">
                          <input style="vetical-align:middle;margin: 0;" name="tyle" type="radio" value="4" /> EDU BOX </label>
											


												<!-- <input class="btn-block" type="radio" name="tyle" value="">  -->
											</div>
										</div>
										<div class="control-group ">
											<div class="controls">
												<input class="btn-block radius5" placeholder="请输入提币地址" type="text" name="adress" id="form_address2">
												<p class="comment1"></p>
											</div>
										</div>
										<div class="control-group ">
											<!-- <label for="form_username">账户:</label> -->
											<div class="controls">
												<input class="btn-block radius5" placeholder="数量" type="text" name="amount2" id="form_amount2">
												<p class="comment2"></p>
											</div>
										</div>

										<div class="control-group ">
											<div class="controls">
												<input class="btn-block radius5" placeholder="手机号" type="text" name="tel2" id="form_tel2">
												<p class="comment3"></p>
											</div>
										</div>
										<div class="control-group ">
											<!-- <label for="form_ amount">金额:</label> -->
											<div class="controls">
												<input class="btn-block radius5" maxlength="255" placeholder="备注" type="text" name="remarks" id="form_remarks2">

											</div>
										</div>
										<!--
                          							<div class="control-group ">
                          								<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.mbl.is&amp;send=false&amp;layout=standard&amp;width=280&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=242977562501330" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:35px;" allowTransparency="true"></iframe>
                          							</div>	
                          			-->
										<!-- <button type="submit" class="btn btn-large btn-block"></button> -->
										<div class="control-group ">
											<div class="controls">
												<input type="button" id="extract" class="btn btn-primary btn-large btn-block radius5" value="提   币">
											</div>
										</div>

									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
									<div class="pull-left" style="line-height: 30px; font-size: 12px">提示: 提币产生矿工费0.5%,最低10EDU</div>
								</div>
							</div>
						</div>
					</div>
					<div class="overview_boxes">
						<div class="box_row clearfix">
							<div class="widget-tasks-statistics">
								<div class="userstats clearfix" style="margin-top: 25px;">
									<a href="javascript:void(0)" data-toggle="modal" data-target="#example_modal2">
										<div class="white">
											<i style="color:#3C00EA" class="icon-credit-card"></i>
											<p style="color:#3C00EA">100%</p>
										</div>
										<div class="widget">
											<input class="knob" data-width="120" data-height="120" data-displayInput=false data-readOnly=true data-thickness=".15" value="100">
										</div>
										<p>
											<strong>3250</strong>EDU总量</p>

									</a>
								</div>
							</div>
							<div class="widget-tasks-statistics">
								<div class="userstats clearfix" style="margin-top: 25px;">
									<a href="javascript:void(0)" data-toggle="modal" data-target="#example_modal2">
										<div class="white">
											<i style="color:#AEEA98" class="icon-credit-card"></i>
											<p style="color:#AEEA98">+96.75%</p>
										</div>
										<div class="widget">
											<input class="knob" data-width="120" data-height="120" data-displayInput=false data-readOnly=true data-thickness=".15" value="96.75">
										</div>
										<p>
											<strong>967500</strong>活期EDU</p>
									</a>
								</div>
							</div>

						</div>
						<div class="box_row clearfix">
							<div class="widget-tasks-statistics">
								<div class="userstats clearfix" style="margin-top: 25px;">
									<a href="javascript:void(0)" data-toggle="modal" data-target="#example_modal2">
										<div class="white">
											<i style="color:#98AEEA" class="icon-credit-card"></i>
											<p style="color:#98AEEA">+55%</p>
										</div>
										<div class="widget">
											<input class="knob" data-width="120" data-height="120" data-displayInput=false data-readOnly=true data-thickness=".15" value="55">
										</div>
										<p>
											<a href="taskskeep.php">
                        <strong>$14,230</strong>定期EDU</a>
										
										</p>
									</a>
								</div>
							</div>
							<div class="widget-tasks-statistics">
								<div class="userstats clearfix" style="margin-top: 25px;">
									<a href="javascript:void(0)" data-toggle="modal" data-target="#example_modal2">
										<div class="white">
											<i style="color:#F6BF99" class="icon-credit-card"></i>
											<p style="color:#F6BF99">+97%</p>
										</div>
										<div class="widget">
											<input class="knob" data-width="120" data-height="120" data-displayInput=false data-readOnly=true data-thickness=".15" value="97">
										</div>
										<p>
											<strong>592</strong>利润</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="widget">
						<div class="widget-header">
							<i class="icon-tasks"></i>
							<h5>锁定操作</h5>
						</div>
						<div class="widget-body clearfix lock">
							<form id="lock">
								<div class="row-fluid">
									<div class="item">
										<span>锁定数量:</span>
										<input type="text" name="quantity" id="quantity" value="">
									</div>
									<div class="item">
										<span>期限:</span>
										<select value="" id="time" name="level">
											<option name="level" value="1">1月期</option>
											<option name="level" value="3">3月期</option>
											<option name="level" value="6">6月期</option>
											<option name="level" value="12">12月期</option>
										</select>
									</div>
									<button id="help" class="icon-question-sign" type="button" data-container="body" data-title="123" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  </button>
								
									<div class="item">
										<span>密码:</span>
										<input type="password" name="password" id="pwd" value="">
									</div>
									<!-- <button id="save" class="btn btn-primary" type="button" data-container="body" data-toggle="popover"
                  data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  提交
                </button> -->
									<input type="button" name="save" class="btn btn-primary" id="save" value="提交">
								</div>

							</form>

						</div>
					</div>



				</div>










				<div class="row-fluid" id="tasks_page">
					<br>
					<h2 class="heading">
                存币记录
          </h2>
				








					<div class="widget">
						<div class="widget-header">
							<i class="icon-group"></i>
							<h5>我的存币记录</h5>
						</div>
						<div class="widget-body">
							<table id="users" class="table table-striped table-bordered dataTable">
								<thead>
									<tr>
										<th>存入</th>
										<th>数量</th>
										<th>期限</th>
										<th>到期</th>
										<th>年化利率</th>
									</tr>
								</thead>
								<tbody>





									<?php

									require 'config.php';


									$statement = $pdo->query( "select add_time,money,type,ok_time,lilv from edu_dingqi where userid='24' order by add_time desc" );


									while ( list( $id, $number, $value, $time, $li ) = $statement->fetch( PDO::FETCH_NUM ) ) {
										//echo   $id;

										echo '<tr><td>' . date( "Y-m-d", $id ) . '</td>';
										echo '<td>' . floatval( $number ) . '</td>';
										echo '<td>' . $value . '个月</td>';
										echo '<td>' . date( "m-d", $time ) . '</td>';
										echo '<td>' . $li * 12 / $value * 100 . '%</td></tr>';



									}
									?>










								</tbody>
							</table>
						</div>
						<!-- /widget-body -->
					</div>




				</div>










				
			</div>
			<!-- /Main window -->

		</div>
		<!--/.fluid-container-->
	</div>




	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/raphael-min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/tasks.js"></script>
	<script type="text/javascript" src='assets/js/sparkline.js'></script>
	<script type="text/javascript" src='assets/js/morris.min.js'></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.facybox.js"></script>
	<script type="text/javascript" src="assets/js/jquery.alertify.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.knob.js"></script>
	<script type='text/javascript' src='assets/js/fullcalendar.min.js'></script>
	<script type="text/javascript" src="assets/js/realm.js"></script>
	<!-- <script type="text/javascript" src="assets/js/tasks.js"></script> -->
</body>
<script>
	$( '#help' ).popover();
</script>

</html>