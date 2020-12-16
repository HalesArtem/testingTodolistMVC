<br>
<?php print_r($_POST)?>
<form action="/admin/authorization" method="post">
<div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Login</span>
    <input type="text" name="login" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
</div>
<br>
<div class="input-group input-group-lg">
    <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
    <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
</div>
    <br>
    <button type="submit" name="submit" class="btn btn-lg btn-success">OK</button>
</form>