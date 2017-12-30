$(function(){
    //初始化弹出提示
    $('#help').popover();

    //隐藏模态框
    // $('#myModal1').on('hidden', function () {
    //     // do something…
    //     $('#myModal1').css("display","none");
    // });
    // $('#myModal1').on('show', function () {
    //     $('#myModal1').css("display", "block");
    // });
    // $('#myModal2').on('hidden', function () {
    //     // do something…
    //     $('#myModal2').css("display", "none");
    // });
    // $('#myModal2').on('show', function () {
    //     $('#myModal2').css("display", "block");
    // });

    hidden($('#myModal1'));
    hidden($('#myModal2'));
    show($('#myModal1'));
    show($('#myModal2'));
    function hidden (el){
        el.on('hidden',function(){
            this.css("display", "none");
        })
    }
    function show(el) {
        el.on('show', function () {
            this.css("display", "block");
        })
    }
})
