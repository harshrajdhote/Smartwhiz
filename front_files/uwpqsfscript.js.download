jQuery(document).ready(function($) {
	$('#tax-check-0, #tax-check-1, #tax-check-2').wrapAll('<div class="wrap locationblock" id="location-0">');
	$('#location-0').prepend('<div class="serp-filter-search"><input type="text" id="searchText" placeholder="Search Locations"><span id="filterClear-0" class="filterClear">×</span></div>');
	$('#location-0').prepend('<span class="togglearrow"><a href="javascript:void"><i class="fa fa-chevron-up fa-x" aria-hidden="true"></i></a></span>');
	$('#location-0').prepend('<span class="taxolabel-0">Location</span><span class="clearalltop" id="clear-0" name="clearall">Clear</span>');
	$('#tax-check-0, #tax-check-1, #tax-check-2').wrapAll('<div class="locationinnerblock" id="locationinner-0">');
	$("#locationinner-0 .uwpqsf_class .clearall").css('display','none');
	 var $ulVal = $(".locationinnerblock .uwpqsf_class .cmf-custom-div"),
        $li = $ulVal.children(),
        $checks = $ulVal.find('input[type="checkbox"]');
        $('.filterClear').css('display','none');

	$(document).on("click",".selectedval",function(){    
      var selvalue=$(this).attr('data-val');
      $(this).remove();
      $("#"+selvalue).prop("checked",false);
  }); 
$(".slctd-fltrtags a.clearAll").click(function(){
  $(this).prev().remove();
  $('a.clearAll').prepend("<span></span>");
  $('input[type="checkbox"]:checked').prop("checked",false);
  $(".slctd-fltrtags").css('display','none');
});
	$("#searchText").on("keyup", function () {
        $('.filterClear').css({'display':'block','cursor':'pointer'});
        var regex = new RegExp(this.value, "gi");        
        $li.hide();
        $('.locationinnerblock span').css('display','none');
        $checks.filter(function() {
            return regex.test(this.value);
        }).parent().show();
    });
    $('.filterClear').click(function(){
    	var clearfilter=this.id;    	
    	var seachfield=$("#"+clearfilter).prev().attr("id");
    	$("#"+seachfield).val("");
    	 $('.filterClear').css('display','none');
    	 $li.show();
    	 $('.locationinnerblock span').css('display','block');
    	 $("#locationinner-0 .uwpqsf_class .clearall").css('display','none');
	
    });
	 $(".uwpqsf_class.togglecheck span:first-child").click(function(){
	 	var toggleid=$(this).parent().attr("id");
        $("#"+toggleid+" .cmf-custom-div").slideToggle('500');
        $('span.togglearrow').find('i').toggleClass('fa-chevron-up fa-chevron-down');
    });
	  $("span.taxolabel-0").click(function(){
	 	var toggleid=$(this).parent().attr("id");
        $("#"+toggleid+" .locationinnerblock").slideToggle('500');
         $('span.togglearrow').find('i').toggleClass('fa-chevron-up fa-chevron-down');
    });
$('span.togglearrow').click(function(){
	var toggleid=$(this).parent().attr("id");
    $("#"+toggleid+" div").slideToggle('500');
    $(this).find('i').toggleClass('fa-chevron-up fa-chevron-down');
});
$('.clearalltop').click(function(){
		var clearpart1=this.id;	
		var parid1= $("#"+clearpart1).parent().attr("id");
		var clearbelow1=[];
		var cleartop1=[];
		var allfilterlength=$(".slctd-fltrtags span a").length;
		$('#'+parid1+' input[type="checkbox"]:checked').each(function(i){
			clearbelow1[i]=$(this).attr('id');
			$('.slctd-fltrtags span a').each(function(f){
			cleartop1[f]=$(this).attr('id');
			if(clearbelow1[i]==cleartop1[f]){
				$("#"+cleartop1[f]).remove();
				$("#"+clearbelow1[i]).prop("checked",false);
				var countval=allfilterlength;
				if(countval=='1'){
					$(".slctd-fltrtags").css('display','none');	
				}
			}
			});
		});
	});

	$('.clearall').click(function(){
		var clearpart=this.id;
		var parid= $("#"+clearpart).parent().attr("id");
		var clearbelow=[];
		var cleartop=[];
		var allfilterlength=$(".slctd-fltrtags span a").length;
		$('#'+parid+' input[type="checkbox"]:checked').each(function(i){
			clearbelow[i]=$(this).attr('id');
			$('.slctd-fltrtags span a').each(function(f){
			cleartop[f]=$(this).attr('id');
			if(clearbelow[i]==cleartop[f]){
				$("#"+cleartop[f]).remove();
				$("#"+clearbelow[i]).prop("checked",false);
			}
			else{
				var countval=allfilterlength;
				if(countval=='1'){
					$(".slctd-fltrtags").css('display','none');	
				}
			}
			});
		});
	});
   
	$('input[type="checkbox"]').change(function(e) {
		var selval = $(this).val();
		var selval1 = $(this).attr('id');
		var allfilterlength=$(".slctd-fltrtags span a").length;
			if($(this).is(':checked')){
				$(".slctd-fltrtags").css('display','block');
				var selectedval='<a href="javascript:void(0);" data-section="" class="selectedval" id="'+selval1+'" data-val="'+selval1+'">'+selval+'<i>x</i></a>';
				$(".slctd-fltrtags span").append(selectedval);
			}
			else{
				var val = [];
				var countval=allfilterlength;
				$('.slctd-fltrtags span a').each(function(i){
					val[i] = $(this).attr('data-val');
					if(selval1==val[i]){
						$(".slctd-fltrtags span a#"+val[i]).remove();
					}
				});
				if(countval=='1'){
					$(".slctd-fltrtags").css('display','none');
				}
			}
			process_data($(this));
			return false;
		});
		$('body').on('click','.upagievent', function(e) {
			var pagenumber =  $(this).attr('id');
			var formid = $('#curuform').val();
			upagi_ajax(pagenumber, formid);
			return false;
		});

		$('body').on('keypress','.uwpqsftext',function(e) {
		  if(e.keyCode == 13){
                e.preventDefault();
                var form = $(this).parent().parent().attr('id');
                if (!form) {
                    id = $(this);
                }else{
                    var id = $('#'+form); 
                }
                process_data(id);		   
		  }
		});
		
		window.process_data = function ($obj) {
			var ajxdiv = $obj.closest("form").find("#uajaxdiv").val();	
			var res = {loader:$('<div />',{'class':'umloading'}),container : $(''+ajxdiv+'')};
            var formid = $obj.parent().parent().attr('id'); console.log(formid);
			var getdata = $obj.closest("form").serialize();
			var pagenum = '1';
		
			jQuery.ajax({
				 type: 'POST',	 
				 url: ajax.url,
				 data: ({action : 'uwpqsf_ajax',getdata:getdata, pagenum:pagenum }),
				 beforeSend:function() {$(''+ajxdiv+'').empty();res.container.append(res.loader);$obj.closest("form").find('input, textarea, button, select').attr("disabled", true);},
				 success: function(html) {
					res.container.find(res.loader).remove();
				  $(''+ajxdiv+'').html(html);
				  $obj.closest("form").find('input, textarea, button, select').attr("disabled", false);
				
				 }
				 });
			
		}	
		
		window.upagi_ajax = function (pagenum, formid) {
			var ajxdiv = $(''+formid+'').find("#uajaxdiv").val();	
			var res = {loader:$('<div />',{'class':'umloading'}),container : $(''+ajxdiv+'')};
			var getdata = $(''+formid+'').serialize();
		
			jQuery.ajax({
				 type: 'POST',	 
				 url: ajax.url,
				 data: ({action : 'uwpqsf_ajax',getdata:getdata, pagenum:pagenum }),
				 beforeSend:function() {$(''+ajxdiv+'').empty(); res.container.append(res.loader);},
				 success: function(html) {
				  res.container.find(res.loader).remove();
				  $(''+ajxdiv+'').html(html);
				
				//res.container.find(res.loader).remove();
				 }
				 });
		}
		
	 $('body').on('click', '.chktaxoall, .chkcmfall',function () {
		
	    $(this).closest('.togglecheck').find('input:checkbox').prop('checked', this.checked);
		
         });



});//end of script
