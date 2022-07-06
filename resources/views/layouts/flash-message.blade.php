@if ($message = Session::get('success'))
<div class="alert success">
    <button type="button" onclick="this.parentElement.style.display='none';" class="closebtn" data-dismiss="alert">&times;</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert danger">
    <button  onclick="this.parentElement.style.display='none';" class="closebtn" data-dismiss="alert">&times;</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert warning">
    <button type="button" onclick="this.parentElement.style.display='none';" class="closebtn" data-dismiss="alert">&times;</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert info">
    <button type="button" onclick="this.parentElement.style.display='none';"  class="closebtn" data-dismiss="alert">&times;</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div class="alert ">
    <button type="button" onclick="this.parentElement.style.display='none';" class="closebtn" data-dismiss="alert">&times;</button>    
    PPor favor verifique os erros abaixo
</div>
@endif