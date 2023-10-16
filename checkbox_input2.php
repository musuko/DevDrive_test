<?php require './header.php';?>
<form action="checkbox_output2.php" method="post">

    <!-- colorを配列にした場合: チェックしたvalue全て送信 -->
    好きな色:<label><input type="checkbox" name="color[]" value="青" checked>青</label>
    <label><input type="checkbox" name="color[]" value="黄">黄</label>
    <label><input type="checkbox" name="color[]" value="赤">赤</label>
    <label><input type="checkbox" name="color[]" value="緑">緑</label>
    <label><input type="checkbox" name="color[]" value="白">白</label>
    <label><input type="checkbox" name="color[]" value="黒">黒</label>
    <label><input type="submit" value="確定"></label>
</form>
<?php require './footer.php';?>
