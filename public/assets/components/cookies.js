function setCookie(key, value, expiry) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (expiry * 60 * 60 * 1000)); // Expires in hours
    document.cookie = key + '=' + value  + "; path=/"+ ';expires=' + expires.toUTCString();
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}

function removeCookie(key) {
    var keyValue = getCookie(key);
    setCookie(key, keyValue, '-1');
}