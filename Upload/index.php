<?php
require_once('includes/config.php');
require_once('includes/class/main.class.php');
require_once('includes/templates/header.php');

$main = New Main();
?>

<div class="container">
<div class="index-title">
<i class="fa fa-cube" aria-hidden="true"></i>
<h1><?php echo  $site_config['website_name']; ?></h1>
<p>A fast, free bitcoin transaction accelerator</p>
</div>
  <div class="message alert alert-warning" style="display:none;"></div>
  <div class="form-group">
  <input type="text" name="txid" placeholder="Transaction ID..." id="txid" class="form-control input-lg">
</div>
<button class="btn btn-success btn-lg" onclick="sendTx($(this))">Accelerate Now</button>
<div class="what">
<h4>Speed up unconfirmed transactions</h4>
<p>Have low-fee transactions that have been unconfirmed for hours? We can speed up confirmation by rebroadcasting the transaction to the bitcoin network</p>
</div>
  </div>
<script>
    function sendTx(btn){
        var txid = $('#txid').val();
        if(txid.length != 64)
          $( "div.message" ).html('<p>The transaction ID is invalid!</p>').show();
        else {
            btn.attr('disabled','disabled'); btn.html('Loading...');
            $.get('send.php?tx=' + txid, function (data) {
                    response(data);
            });
        }
    }
    function response(data){
      var msg = JSON.parse(data);
        console.log(msg.success);
        if(msg.success == true) {
          var message = 'The transaction has been re-broadcast to the bitcoin network';
        } else {
          var message = 'Transaction has already been confirmed';
        }
        $( "div.message" ).html("<p>" + message + "</p>").show();
    }

</script>
<?php
require_once('includes/templates/footer.php');
?>
