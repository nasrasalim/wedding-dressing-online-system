<?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
  <h4 style="font-style: italic;font-family: time new romans;text-align: center;">ADD DRESSING</h4>
  <form action="addHandler.php" method="POST">
    <div class="form-group">
      <label >Dressing Name:</label>
      <select class="form-control" id="namedress" name="namedress">
        <option>Ballgown</option>
        <option>A-line</option>
        <option>Modified A-Line</option>
        <option>Trumpet</option>
         <option>Mermaid</option>
          <option>Sheath</option>
           <option>Tea-Lengh</option>
            <option>Mini</option>
      </select>
    </div>
    <div class="form-group">
      <label>Size:</label>
      <input type="numbers" class="form-control" id="size" name="size" required="">
    </div>
    <div class="form-group">
      <label>Type:</label>
      <select class="form-control" id="type" name="type">
        <option>Cotton</option>
        <option>Shifon</option>
        <option>Mpira</option>
        <option>Shela</option>
      </select>
    </div>
    <div class="form-group">
      <label>Color:</label>
      <select class="form-control" id="clr" name="color1">
        <option>Green</option>
        <option>Blue</option>
        <option>White</option>
        <option>Silver</option>
        <option>Pink</option>
      </select>
    </div>
    <div class="form-group">
      <label>Total Dressing:</label>
      <input type="numbers" class="form-control" id="total"  name="tdresng" required="">
    </div>
    
    <button type="submit" class="btn btn-primary" name="save">Send</button>
    
  </form>
</div>
</div>
