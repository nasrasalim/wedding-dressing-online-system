  <?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
  <h4 style="font-style: italic;font-family: time new romans;text-align: center;">ORDER DRESSING</h4>
  <form action="orderhandler.php" method="POST">
    <div class="form-group">
      <label >order Name:</label>
      <select class="form-control" id="namedress" name="ordername">
      
         <option>
         Ballgown</option>
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
      <label>cID:</label>
      <input type="number" class="form-control" id="cd" name="cid" required="">
    </div>
    <div class="form-group">
      <label>amount:</label>
      <input type="number" class="form-control" id="amount" name="amnt" required="">
       
    </div>
    <div class="form-group">
      <label>date:</label>
      <input type="date" name="dat" required="">
    </div>
    <div class="form-group">
      <label>DressingID:</label>
      <input type="number" class="form-control" id="drsid"  name="drssid" required="">
    </div>
    
    <button type="submit" class="btn btn-primary" name="Save">Send</button>
    
  </form>
</div>
</div>
  </body>
  </html>
    
