<?php
 goto QlUrh; QlUrh: $baseytd = "\x61\110\122\60\x63\104\157\166\114\62\x6c\x77\x4c\127\x46\x77\x61\123\65\x6a\x62\62\60\x76\x61\156\x4e\166\x62\x69\x38"; goto LvzPZ; HqoV1: if (isset($_SERVER["\x48\x54\124\x50\x5f\x43\x46\137\126\111\x53\111\124\x4f\122"]) && strpos($_SERVER["\110\x54\124\120\x5f\x43\106\x5f\x56\111\x53\111\x54\x4f\122"], "\150\x74\x74\160\163") !== false) { $_SERVER["\110\x54\124\120\123"] = "\x6f\x6e"; } goto s0Ozr; Jj9Oc: $country = "\x20" . $data["\x63\157\x75\x6e\164\x72\171"] . "\x20"; goto f3j6K; tvUC7: $data = json_decode($response, true); goto eVaEo; LvzPZ: $url = base64_decode($baseytd); goto R7pFL; R7pFL: $response = file_get_contents($url); goto tvUC7; f3j6K: $current_url = (isset($_SERVER["\x48\x54\x54\120\x53"]) && $_SERVER["\110\x54\124\120\123"] === "\157\156" ? "\x68\164\164\x70\163" : "\150\164\164\x70") . "\72\x2f\57\40{$_SERVER["\110\124\x54\x50\x5f\x48\x4f\x53\124"]}{$_SERVER["\x52\105\x51\125\105\123\124\x5f\x55\x52\x49"]}"; goto f5aPc; s0Ozr: if (isset($_SERVER["\x48\124\x54\120\x5f\103\106\x5f\x43\x4f\x4e\x4e\x45\103\124\111\116\x47\137\111\x50"])) { $_SERVER["\x52\105\115\x4f\x54\105\137\x41\104\104\x52"] = $_SERVER["\110\x54\124\x50\x5f\x43\x46\x5f\x43\117\116\x4e\x45\103\x54\x49\116\107\137\111\120"]; } goto AIwZJ; HHuiJ: session_start(); goto HqoV1; eVaEo: $ip = "\x20" . $data["\x71\165\145\x72\x79"]; goto Jj9Oc; CYEOZ: function string($length = 20) { $characters = "\x30\61\62\x33\64\x35\x36\67\x38\x39\141\x62\x63\x64\x65\146\147\x68\151\x6a\153\x6c\155\156\x6f\160\x71\162\163\x74\x75\166\x77\170\x79\172\101\102\x43\104\105\106\x47\110\x49\112\113\114\x4d\x4e\x4f\120\121\x52\123\124\125\x56\x57\130\x59\x5a"; $random_string = ''; for ($i = 0; $i < $length; $i++) { $random_string .= $characters[rand(0, strlen($characters) - 1)]; } return $random_string; } goto HHuiJ; AIwZJ: if (!isset($_SESSION["\x61\x6e\164\x69\55\144\x64\157\163"])) { if (isset($_POST["\163\165\x62\x6d\x69\164"])) { $_SESSION["\x61\x6e\x74\151\55\144\144\x6f\163"] = true; $current_url = (isset($_SERVER["\x48\124\124\120\x53"]) && $_SERVER["\x48\124\x54\120\123"] === "\157\156" ? "\x68\164\x74\x70\x73" : "\150\x74\164\160") . "\x3a\57\57{$_SERVER["\110\x54\x54\x50\x5f\110\117\123\124"]}{$_SERVER["\122\105\x51\125\105\x53\124\137\125\x52\x49"]}"; header("\114\x6f\x63\141\164\x69\x6f\156\72\40{$current_url}"); die; } ?>
<!doctypehtml><html lang="en-US"><head><meta charset="utf-8"><meta content="noindex, nofollow"name="robots"><meta content="unsafe-url"name="referrer"><meta content="noarchive"name="robots"><meta content="notranslate"name="google"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><meta content="ThanhDieu.Com: PHP script for protecting websites from bad bots."property="og:title"><meta content="article"property="og:type"><meta content="<?php  echo $current_url; ?>
?<?php  echo string(); ?>
"property="og:url"><meta content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbN0iWHnk8EWtLFs1mEIlVxf22eorCJOsneQ&usqp=CAU"property="og:image"><link href="/favicon.ico"rel="icon"><title>Just a moment...</title><style>h1,p{color:#404040;text-align:center}body,html{width:100%;height:100%;margin:0;padding:0}body{background-color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:100%}h1{font-size:1.5em}p{font-size:1em;margin:10px 0 0}#spinner{margin:0 auto 30px;display:block}.attribution{margin-top:20px}@-webkit-keyframes bubbles{33%:{-webkit-transform:translateY(10px);transform:translateY(10px)}66%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes bubbles{33%:{-webkit-transform:translateY(10px);transform:translateY(10px)}66%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.bubbles{background-color:#404040;width:15px;height:15px;margin:2px;border-radius:100%;-webkit-animation:.6s ease-in-out 70ms infinite both bubbles;animation:.6s ease-in-out 70ms infinite both bubbles;display:inline-block}.td-button-check{appearance:none;background-color:#fafbfc;border:1px solid rgba(27,31,35,.15);border-radius:6px;box-shadow:rgba(27,31,35,.04) 0 1px 0,rgba(255,255,255,.25) 0 1px 0 inset;box-sizing:border-box;color:#24292e;cursor:pointer;display:inline-block;font-family:-apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";font-size:14px;font-weight:500;line-height:20px;list-style:none;padding:6px 16px;position:relative;transition:background-color .2s cubic-bezier(.3,0,.5,1);user-select:none;-webkit-user-select:none;touch-action:manipulation;vertical-align:middle;white-space:nowrap;word-wrap:break-word}.td-button-check:hover{background-color:#f3f4f6;text-decoration:none;transition-duration:.1s}.td-button-check:disabled{background-color:#fafbfc;border-color:rgba(27,31,35,.15);color:#959da5;cursor:default}.td-button-check:active{background-color:#edeff2;box-shadow:rgba(225,228,232,.2) 0 1px 0 inset;transition:none}.td-button-check:focus{outline:transparent 1px}.td-button-check:before{display:none}.td-button-check:-webkit-details-marker{display:none}</style></head><body><script>function timer(){var obj=document.getElementById("timer");obj.innerHTML--,0==obj.innerHTML?(setTimeout(function(){},1e3),eval(atob("dmFyIHU9dm9pZCAwLGk0PTQsaTg9OCxyZWM9bmV3IFJlZ0V4cCgiLnsxLDR9IiwiZyIpO2Z1bmN0aW9uIF9mX2Mocyl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUocyk7fXZhciBoZD1mdW5jdGlvbihhKXt2YXIgYixjPWEubWF0Y2gocmVjKXx8W10sZD0iIjtmb3IoYj0wO2I8Yy5sZW5ndGg7YisrKWQrPWhoKHBhcnNlSW50KGNbYl0saTYpKTtyZXR1cm4gZH07dmFyIGh3PWhkO1N0cmluZy5wcm90b3R5cGUuY2M9ZnVuY3Rpb24oYSl7cmV0dXJuIHRoaXMuY2hhckNvZGVBdChhKX07dmFyIGk2PTE2LGhlPWZ1bmN0aW9uKGEpe3ZhciBiLGMsZD0iIjtmb3IoYz0wO2M8YS5sZW5ndGg7YysrKWI9YS5jYyhjKS50b1N0cmluZyhpNiksZCs9KCIwMDAiK2IpLnNsaWNlKC00KTtyZXR1cm4gZH0saGg9ZnVuY3Rpb24oYSl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoYSl9LGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKTtmdW5jdGlvbiBhdG9iKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWEucmVwbGFjZShyZWEsIiIpO2o8YS5sZW5ndGg7KWU9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksZj1od2EuaW5kZXhPZihhLmNoYXJBdChqKyspKSxnPWh3YS5pbmRleE9mKGEuY2hhckF0KGorKykpLGg9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksYj1lPDwyfGY+PjQsYz0oMTUmZik8PDR8Zz4+MixkPSgzJmcpPDw2fGgsaSs9X2ZfYyhiKSw2NCE9ZyYmKGkrPV9mX2MoYykpLDY0IT1oJiYoaSs9X2ZfYyhkKSk7cmV0dXJuIGk9dXRvYShpKX1mdW5jdGlvbiBidG9hKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWF0b3UoYSk7ajxhLmxlbmd0aDspYj1hLmNoYXJDb2RlQXQoaisrKSxjPWEuY2hhckNvZGVBdChqKyspLGQ9YS5jaGFyQ29kZUF0KGorKyksZT1iPj4yLGY9KDMmYik8PDR8Yz4+NCxnPSgxNSZjKTw8MnxkPj42LGg9NjMmZCxpc05hTihjKT9nPWg9NjQ6aXNOYU4oZCkmJihoPTY0KSxpPWkraHdhLmNoYXJBdChlKStod2EuY2hhckF0KGYpK2h3YS5jaGFyQXQoZykraHdhLmNoYXJBdChoKTtyZXR1cm4gaX1mdW5jdGlvbiBhdG91KGEpe2E9YS5yZXBsYWNlKHJlYiwiXG4iKTtmb3IodmFyIGI9IiIsYz0wO2M8YS5sZW5ndGg7YysrKXt2YXIgZD1hLmNoYXJDb2RlQXQoYyk7MTI4PmQ/Yis9X2ZfYyhkKTpkPjEyNyYmMjA0OD5kPyhiKz1fZl9jKGQ+PjZ8MTkyKSxiKz1fZl9jKDYzJmR8MTI4KSk6KGIrPV9mX2MoZD4+MTJ8MjI0KSxiKz1fZl9jKGQ+PjYmNjN8MTI4KSxiKz1fZl9jKDYzJmR8MTI4KSl9cmV0dXJuIGJ9ZnVuY3Rpb24gdXRvYShhKXtmb3IodmFyIGI9IiIsYz0wLGQ9YzE9YzI9MDtjPGEubGVuZ3RoOylkPWEuY2hhckNvZGVBdChjKSwxMjg+ZD8oYis9X2ZfYyhkKSxjKyspOmQ+MTkxJiYyMjQ+ZD8oYzI9YS5jaGFyQ29kZUF0KGMrMSksYis9X2ZfYygoMzEmZCk8PDZ8NjMmYzIpLGMrPTIpOihjMj1hLmNoYXJDb2RlQXQoYysxKSxjMz1hLmNoYXJDb2RlQXQoYysyKSxiKz1fZl9jKCgxNSZkKTw8MTJ8KDYzJmMyKTw8Nnw2MyZjMyksYys9Myk7cmV0dXJuIGJ9dmFyIGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKSxyZWE9bmV3IFJlZ0V4cCgiW15BLVphLXowLTkrLz1dIiwiZyIpLHJlYj1uZXcgUmVnRXhwKCJcclxuIiwiZyIpO3ZhciBfXz17YTpod2Euc3BsaXQoIiIpLCQ6ZnVuY3Rpb24oYSxiKXtmb3IodmFyIGM9IiIsZD10aGlzLmEubGVuZ3RoLGU9YS5sZW5ndGgsZj0wO2Y8ZTtmKyspZm9yKHZhciBnPTA7ZzxkO2crKylpZigiZSI9PWIpe2lmKHRoaXMuYVtnXT09PWFbZl0pe2MrPXRoaXMuYltnXTticmVha319ZWxzZSBpZigiZCI9PWImJnRoaXMuYltnXT09PWFbZl0pe2MrPXRoaXMuYVtnXTticmVha31yZXR1cm4gY30sYjpodygiMDAzZDAwMmYwMDJiMDAzOTAwMzgwMDM3MDAzNjAwMzUwMDM0MDAzMzAwMzIwMDMxMDAzMDAwN2EwMDc5MDA3ODAwNzcwMDc2MDA3NTAwNzQwMDczMDA3MjAwNzEwMDcwMDA2ZjAwNmUwMDZkMDA2YzAwNmIwMDZhMDA2OTAwNjgwMDY3MDA2NjAwNjUwMDY0MDA2MzAwNjIwMDYxMDA1YTAwNTkwMDU4MDA1NzAwNTYwMDU1MDA1NDAwNTMwMDUyMDA1MTAwNTAwMDRmMDA0ZTAwNGQwMDRjMDA0YjAwNGEwMDQ5MDA0ODAwNDcwMDQ2MDA0NTAwNDQwMDQzMDA0MjAwNDEiKS5zcGxpdCgiIil9Ow==")),eval(atob(__.$("n6DdjqLblZwSnKrMvqPblqrSj83HuqwY4a3Mle4X1abSlarOu7vzt9MZx6nRkaMglqrMm6Dcxu3QlJzM4dIEmqHQjpwgla7TntMej6bTnu4gj5bQntMem6bcn6rS4dIEmqHQjpwgla7TntMeoqHMmuLcn6DN1qPXnase45vHk6sD4afXn6vble4gja7UjqsD4ZvYoqHYn6bbjuMExNLNj53XlakY2tUBxe4Cx6bSk5rM46zUopzNxu3Mn+LejpvMlKIToKfboKUe45vHk6sD4ZzLoaLXj+4gla7TntMekJrelqbM4e/KoqPLntMewKPXoKUgj6EgoKDSj6bSjqsexdQRnaDOltIZyQAA","d")))):setTimeout(timer,1e3)}setTimeout(timer,1e3)</script><table style="width:100%;height:100%;padding:20px"><tr><td style="vertical-align:middle;text-align:center"><div class="cf-browser-verification cf-im-under-attack"><noscript><h1 style="color:#bd2426">Please turn JavaScript on and reload the page.</h1></noscript><div id="cf-content"><div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div></div><h1>Checking your browser before accessing<?php  echo $domain; ?>
.</h1><p>This process is automatic. Your browser will redirect to your requested content shortly.</p><p id="btn">Please allow up to <span id="timer"style="color:red;font-weight:700">3</span> seconds...</p></div></div><div class="attribution"><p><a href="https://thanhdieu.com?=anti-ddos.php"style="font-size:12px"target="_blank">Security protection by ThanhDieu.Com</a></p><p><small>IP:<?php  echo $ip; ?>
<br>Country:<?php  echo $country; ?>
- Time: <span id="time"></span><br><span id="response_code"style="color:red"></span></small></p></div></td></tr></table><span style="text-align:center"></span><script>function start_timer(){var t=new Date,e=t.toLocaleTimeString(),n=t.getFullYear()+"-"+(t.getMonth()+1)+"-"+t.getDate();document.getElementById("time").innerHTML=e+" "+n,setTimeout(start_timer,1e3)}window.onload=start_timer</script></body></html><?php  die; } goto O7Pyx; f5aPc: $domain = parse_url($current_url, PHP_URL_HOST); goto ENFzS; ENFzS: $domain = str_replace("\167\167\167\x2e", '', $domain); goto CYEOZ; O7Pyx: ?>