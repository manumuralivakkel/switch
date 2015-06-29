<?php $this->load->view('admin/header');
//echo $this->session->userdata('fname');
print_r($error);
?>


<div style="width:696px; padding:30px 20px 30px 20px; float:left; ">
<h2 style="margin-top:0; color:#7da546;">Add Pages</h2>
<form action="<?=base_url().'admin/page/add'?>" method="post" enctype="multipart/form-data">
<table class="add" style="margin-bottom:15px; border: 1px solid #d0cfcf;" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr><td>&nbsp;</td></tr>

          <tr>
        <td align="right" width="33%">Menu title</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input name="mm_page_text" type="text" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>

         <tr>
        <td align="right" width="33%">Menu title*ar </td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input name="mm_page_text_arabic" type="text" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
         <tr>
        <td align="right" width="33%">Page title</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input name="mm_page_title" type="text" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
         <tr>
        <td align="right" width="33%">Page title*ar</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input name="mm_page_title_arabic" type="text" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        
        <tr>
        <td align="right" width="33%">Page URL</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input name="mm_page_url" type="text" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        
        
         <tr>
        <td align="right" width="33%">Page Image</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><input type="file" name="userfile" class="inpuu" required></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        
            <tr>
        <td align="right" width="33%">Page Content</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><?php echo $this->ckeditor->editor('mm_page_content',@$default_value);?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>

         <tr>
        <td align="right" width="33%">Page Content*ar</td>
        <td width="1%" style="padding:5px;">:</td>
        <td width="66%"><textarea name="mm_page_content_arabic" style="width:30%" class="inpuu" required></textarea></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
         
         
        
       
        
         <tr><td>&nbsp;</td></tr>
         
         <tr><td></td></tr>
         
        
        <tr>
		<td align="left"><br></td>
	    <td align="left">&nbsp;</td>
	    <td align="left"><input type="submit" class="button" name="submit" value="Save">
&nbsp;&nbsp;&nbsp;&nbsp;
</td>
	</tr>
    
      <tr><td>&nbsp;</td></tr>
                
			</tbody></table>  

</form>
        
</div>

</div>




</div>
<?php $this->load->view('admin/footer'); ?>