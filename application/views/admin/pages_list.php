<?$this->load->view('admin/header'); ?>
<?

//echo $title;
//echo $menu;
print_r($pagination);
print_r($articles);
?>
<div style="width:696px; padding:30px 20px 30px 20px; float:left; ">
<h2 style="margin-top:0; color:#7da546;">View Pages</h2>
<table class="task" style="margin-bottom:15px;" width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
        <th width="3%" style="border-left:1px solid #b8b8b8;">No.</th>
        <th width="10%">Page</th>
        <th width="10%">Title</th>
		<th width="40%">Description</th>
		<th colspan="3" style="text-align:center;">Action</th>
		</tr>
        
          <tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Admin</td>
        <td>admin@anathothonline.com</td>
		<td>Adminuser</td>
        <td width="3%"><img src="<?=base_url()?>assets/images/admin/active.gif" width="16" height="16"  alt=""/></td>
    <td width="4%"><img src="<?=base_url()?>assets/images/admin/b_edit.png" width="16" height="16"  alt=""/></td>
    <td width="5%"><img src="<?=base_url()?>assets/images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>
      
</table>
</div>

</div>


</div>
<? $this->load->view('admin/footer'); ?>