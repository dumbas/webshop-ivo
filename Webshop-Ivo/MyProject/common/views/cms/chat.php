<?php require_once('includes/header.php'); ?>

Hello World
<div class="chat">
    <textarea id="chatcontainer" readonly="readonly" rows="10" cols="80">Loading...</textarea>
    <br>
    <input type="text" id="msg" placeholder="New Msg..." size="50">
    <input type="hidden" id="username" value="<?php echo $username; ?>">
    <button type="button" id="chatsend">Send</button>
</div>

<?php require_once('includes/footer.php'); ?>