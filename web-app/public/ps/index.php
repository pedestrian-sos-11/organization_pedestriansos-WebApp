<?php
    define("notmain", "");
    include($_SERVER["DOCUMENT_ROOT"] . "/index.php");
?>
<!DOCTYPE html><html lang="en"><head><title>PS!</title><meta name="viewport" content="width=device-width,initial-scale=1.0"><meta charset="UTF-8"><style>body{text-align:center;}form{margin:1%;}form *:not(:first-child){margin-top:1%;}form,form *{max-width:90%;}form,.b{display:inline-block;padding:2px;border:2px solid #0000ff;}.b{font-size:25px;background:none;font-weight:bold;}.b:active{border-color:#0080ff;}</style></head><body><h1><a href="../" style="text-decoration:none;"><span style="color:#0000ff;">P</span><span style="color:#ff0000;">S!</span></a></h1><form method="post" enctype="multipart/form-data"><label class="b" for="a"><img alt width="32" height="32" src="../images/photovideo.svg">&nbsp;choose file(s)</label><br><input type="file" name="photovideo[]" accept="image/*,video/*" id="a" required multiple><br><label class="b" for="c"><img alt width="32" height="32" src="../images/uploadicon.svg">&nbsp;upload</label><br><button name="ps" id="c">upload</button><br><label class="b" style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1" checked><img alt width="16" height="16" src="../images/location.svg"><img alt width="16" height="16" src="../images/uploadicon.svg">&nbsp;attach my location</label></form><form method="post"><label class="b" for="b"><img alt width="32" height="32" src="../images/link.svg">&nbsp;enter link</label><br><input type="url" name="filelink" id="b" required><br><label class="b" for="d"><img alt width="32" height="32" src="../images/uploadicon.svg">&nbsp;upload</label><br><button type="submit" name="ps" id="d">upload</button><br><label class="b" style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1"><img alt width="16" height="16" src="../images/location.svg"><img alt width="16" height="16" src="../images/uploadicon.svg">&nbsp;attach my location</label></form><br><br><a href="/" class="b"><img alt width="32" height="32" src="../images/homepage.svg">&nbsp;<span>Go to main page</span></a></body></html>