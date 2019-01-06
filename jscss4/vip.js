
$('#rtgrhth_play_box').parent().hover(function(){
	$('#tongdao').stop().animate({'top':'3rem'});
},function(){
	$('#tongdao').stop().animate({'top':-60});
})

$('#tongdao a').click(function(){
	$(this).addClass('cur').siblings().removeClass('cur');
})

$(".container .tit-gg strong").click(function () {
	$(".QRCode").css("display","block");
})

$(".QRCode").click(function () {
	$(".QRCode").css("display","none");
})
