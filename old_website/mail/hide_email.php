<?php
function hideemail($people,$mail) {
    $str = "<a href=\"mailto:".$mail."\">".$people."</a>";

    $mail_js = "";
    for($i=0;$i<strlen($str);$i++) {
        $mail_js .= ord(substr($str,$i)).",";          
    }

    $mail_js = substr($mail_js,0,strlen($mail_js)-1);

    $mail_nojs = "";
    for ($i=0; $i < strlen($mail); $i++) {
        $mail_nojs .= "&#".ord(substr($mail,$i)).";";
    }

    $text = "<script type=\"text/javascript\" language=\"javascript\">{";
    $text .="document.write(String.fromCharCode(".$mail_js."))";
    $text .="} </script> <noscript>";
    $text .= $mail_nojs;
    $text .= "</noscript>\n";

    return $text;
}
?>
