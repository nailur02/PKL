<link rel="stylesheet" href="<?=base_url();?>konten/jqueryui/jquery-ui.min.css"/>
<link rel="stylesheet" href="<?=base_url();?>konten/jqueryui/themes/overcast/jquery-ui.min.css"/>
<script src="<?=base_url();?>konten/jqueryui/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
    $("#tukarphoto").click(function(e){
        e.preventDefault();
        $("#file").trigger('click');
    });
    
    $("#file").change(function(){
        var photo=$(this).val();
        if(photo=="")
        {
            return false;
        }else{
            $("#formphoto").trigger('submit');
        }
    });
    
    if($(".tanggal").length)
	{
		$(".tanggal").datepicker({
			dateFormat: "yy-mm-dd",
			showAnim:"slide",
			changeMonth: true,
			changeYear: true,
			yearRange:'c-70:c+10',
		});
	}
    
    $("#formphoto").submit(function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: '<?=base_url();?>profil/uploadphoto',
            type: 'POST',
            dataType:'JSON',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                
            },
            success: function (x) {
              if(x.status=="ok")
              {
              	reload_avatar(x.url);
			  	$("#photo").attr('src',x.url);			  	
			  	alert(x.message);
			  }else{
			  	alert(x.message);
			  }			  
            }
        });
     
          return false;
    });
});

function reload_avatar(img)
{
	$(".image_avatar").attr("src",img);
	
}
</script>
<h3 class="box-title margin text-center">Profil</h3>
<center> <div class="batas"> </div></center>
<hr/>
<div class="col-md-3">
	<form id="formphoto" style="text-align:center;">
      <div>                        
        <img style="width:150px;height:150px;" alt="" id="photo" src="<?=user_avatar();?>"/>
      </div>
	  <span id="tukarphoto" style="margin-top: 5px;" class="btn btn-warning"><i class="fa fa-wrench"></i> Ganti Foto</span>
        <input type="file" name="file" id="file" style="display: none;"/>
    </form>
</div>
<div class="col-md-9">
<?php
$this->load->view('tema/profiltemplate/'.akses().'.php');
?>
</div>