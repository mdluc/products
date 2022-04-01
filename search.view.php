<form method="get" style="margin-block:20px;">
    <input id="myInput" type="txt" name="search" 
    value="<?=isset($_GET['search']) ? $_GET['search']:''?>"
    placeholder="search for something..."/>
    <button type="submit" id="submitSearch">search</button>
</form>
