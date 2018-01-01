$(function(){
    //初始化弹出提示
    $('#help').popover();

    //隐藏模态框
    hidden($('#myModal1'));
    hidden($('#myModal2'));
    show($('#myModal1'));
    show($('#myModal2'));
    
    //提交锁定操作
    $('#save').on('click',function(){
        var money = $.trim($('#lock #quantity').val());
        var level = $.trim($('#lock #time').val());
        var pass = $.trim($('#lock #pwd').val());
        if (!money){
            alert('请输入数量!');
            $('#lock #quantity').val('');
			$('#lock #quantity').focus();
            return;
        }
        if (!pass) {
            alert('请输入密码!');
            $('#lock #pwd').val('');
			$('#lock #pwd').focus();
            return;
        }
        // console.log(111);
        // console.log(money);
        // console.log(level);
        // console.log(pass);
        $.ajax({
            type:'post',
            url: 'saveedu.php',
            data: {
                level: level,
                money: money,
                pass: pass
            },
            dataType: 'json',
            success: function(data){
           //     console.log(data);
                if(data.ok){
                    //清空输入框
                    $('#lock #quantity').val('');
                    $('#lock #pwd').val('');
                    alert(data.ok)
                } else if (data.err){
                    alert(data.err);
                } else if (data.login){
                    alert(data.login);
					location.href = "login.php";
                }
            }
        })
    
    })

    //充币操作
    //验证
    /* $('#myModal1 #form_amount1').blue(function(){
        var money = $.trim($('#myModal1 #form_amount1').val());
        if (!money) {
            // alert('请输入数量!');
            $("#myModal1 .comment1").text("请输入有效数量!");
            $('form_amount1').val('');
            return;
        } else {
            $("#myModal1 .comment1").text("");
        }
    }); */
    var reg = /^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^16[\d]{9}$|^17[0,1,3,6,7,8]{1}\d{8}$|^18[\d]{9}$|^19[\d]{9}$/;
    inputBlur($('#form_amount1'), $("#myModal1 .comment1"), "请输入有效数量!")
    inputBlur($('#form_tel'), $("#myModal1 .comment2"), "请输入有效手机号!")
    inputBlur($('#form_address2'), $("#myModal2 .comment1"), "地址最少11位!")
    inputBlur($('#form_amount2'), $("#myModal2 .comment2"), "请输入有效数量!")
    inputBlur($('#form_tel2'), $("#myModal2 .comment3"), "请输入有效手机号!")
    

    //验证是否输入内容
    function inputBlur(el1,el2,string){
        
        el1.blur(function(){
            test(el1, el2, string)
        })
        
    }

    function test(el1,el2,string){
        var input = $.trim(el1.val());
        if (!input) {
            el2.text(string);
            el1.val('');
            return false;
        } 
        else {
            el2.text("");
        }
        if (string === "请输入有效数量!"){
            // console.log(321)
            if (input < 10 || !(/^\d+$/.test(el1.val()))){
                el2.text("数量最少10");
                // el1.val('');
                return false;
            }else{
                el2.text("");
            }
        }
        if (string === "请输入有效手机号!") {
            if (!reg.test(input)) {
                el2.text(string);
                // el1.val('');
                return false;
            }
        } 
        else {
            el2.text("");
        }
        if (string === "地址最少11位!") {
            if (el1.val().length < 11 || el1.val().length > 128 ) {
                el2.text(string);
                // el1.val('');
                return false;
            }
        }
        else {
            el2.text("");
        }
        return true;
    }

    //获取单选框
    var $radios = $('#myModal1 input[type="radio"]');
    // console.log($radios);
    //获取充值单选框
    var $spans = $('#addressValue span');
    //充值默认地址
    $('#form_address').val($($spans[0]).text());
    //点击切换充值地址
    $radios.each(function(index,value){
        $(value).click(function(){
            // console.log($($spans[index]).text())
            $('#form_address').val($($spans[index]).text());
        })
    })

   
    //充值
    $("#recharge").on('click',function(){
		
        var add = $.trim($('#myModal1 #form_address').val());

        var laiyuan = $.trim($('#myModal1 input:checked').val());
        var money = $.trim($('#myModal1 #form_amount1').val());
        var tel = $.trim($('#myModal1 #form_tel').val());
        var beizhu = $.trim($('#myModal1 #form_remarks').val());
        
        /* console.log(laiyuan);
        console.log(add);
        console.log(money);
        console.log(tel);
        console.log(beizhu); */

		
        var telphone = test($('#form_tel'), $("#myModal1 .comment2"), "请输入有效手机号!")
        var amount1 = test($('#form_amount1'), $("#myModal1 .comment1"), "请输入有效数量!")

        if (!amount1 || !telphone) {
            return;
        }
    
        $.ajax({
            type: 'post',
            url: 'turnedu.php',
            data: {
                add:add,
                laiyuan: laiyuan,
                money: money,
                tel: tel,
                beizhu: beizhu,
                type: 1
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data.ok) {
                    $('#myModal1 #form_amount1').val('');
                    $('#myModal1 #form_tel').val('');
                    $('#myModal1 #form_remarks').val('');
                    alert(data.ok)
                    location.reload();
                } else if (data.err) {
                    alert(data.err)
                } else if (data.login) {
                    alert(data.login)
                    location.href = "login.php";
                }
            }
        })
    })


    //提币

    $("#extract").on('click', function () {
        
        var laiyuan = $.trim($('#myModal2 input:checked').val());
        var money = $.trim($('#myModal2 #form_amount2').val());
        var tel = $.trim($('#myModal2 #form_tel2').val());
        var beizhu = $.trim($('#myModal2 #form_remarks2').val());
        var add = $.trim($('#myModal2 #form_address2').val());
       
        //验证
        var address2 = test($('#form_address2'), $("#myModal2 .comment1"), "地址最少11位!")
        var amount2 = test($('#form_amount2'), $("#myModal2 .comment2"), "请输入有效数量!")
        var telphone2 = test($('#form_tel2'), $("#myModal2 .comment3"), "请输入有效手机号!")
        if (!amount2 || !telphone2 || !address2) {
            return;
        }        

        $.ajax({
            type: 'post',
            url: 'turnedu.php',
            data: {
                laiyuan: laiyuan,
                money: money,
                tel: tel,
                beizhu: beizhu,
                add:add,
                type: 2
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data.ok) {
                    // laiyuan = $('#myModal2 input:checked').val('');
                    $('#myModal2 #form_amount2').val('');
                    $('#myModal2 #form_tel2').val('');
                    $('#myModal2 #form_remarks2').val('');
                    $('#myModal2 #form_address2').val('');

                    alert(data.ok)
                    location.reload();
                } else if (data.err) {
                    alert(data.err)
                } else if (data.login){
					
                    alert(data.login)
					location.href = "login.php";
                }
            }
        })
    })
    function hidden (el){
        el.on('hidden',function(){
            el.css("display", "none");
        })
    }
    function show(el) {
        el.on('show', function () {
            el.css("display", "block");
        })
    }
})
