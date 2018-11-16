
function get()
{
    if(document.getElementById('username').value=="")alert("請輸入賬號！");
    else if(document.getElementById('password').value=="") alert("請輸入密碼！");
    else{
        var username = window.hex_md5(document.getElementById('username').value);
        var password = window.hex_md5(document.getElementById('password').value);
        window.location.href = "login.php?username="+username.toString()+"&password="+password.toString();
    }
    return false;
}