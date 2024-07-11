l
<!DOCTYPE html><html><head><meta http-equiv=Content-Type content="text/html; charset=utf-8"><meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"><meta name=format-detection content="telephone=no"><meta charset=utf-8><meta http-equiv=cache-control content=no-cache><meta http-equiv=Pragma content=no-cache><meta http-equiv=expires content=0><title>mobilelegendsaccount</title><script type=text/javascript src=https://play.mobilelegends.com/base/report/report.js></script><style>.grecaptcha-badge{
      display: none;
    }</style><link href=/static/css/app.71a82bf1ea1eb85f15250a8ed4dcf3b0.css rel=stylesheet></head><body><div id=app></div><div class="loadingwrapper hide"><div class=spinner><div class="spinner-container container1"><div class=circle1></div><div class=circle2></div><div class=circle3></div><div class=circle4></div></div><div class="spinner-container container2"><div class=circle1></div><div class=circle2></div><div class=circle3></div><div class=circle4></div></div><div class="spinner-container container3"><div class=circle1></div><div class=circle2></div><div class=circle3></div><div class=circle4></div></div></div></div><script>var isIE = function (ver) {
      var b = document.createElement('b');
      b.innerHTML = '<!--[if IE ' + ver + ']><i></i><![endif]-->';
      return b.getElementsByTagName('i').length === 1
    }
    if (isIE(6) || isIE(7) || isIE(8)) {
      alert(
        "Dear player, your current browser isn't compatible with this page. Please open in a mobile browser or a different PC browser such as Chrome etc. Thank you."
        );
      location.href = 'https://www.google.com/chrome/browser/desktop/index.html';
    }</script><script>if (window.location.href.indexOf('/#/') > 0) {
      var herf = window.location.href.split('/#/')[0] + '/' + window.location.href.split('/#/')[1];
      window.location.replace(herf)
    }

    function KeyboardNotify(isopen, height) {
      if (!isopen) {
        //          document.getElementsByClassName('bigwrapper')[0].style.marginTop = 0;
        var inputs = document.getElementsByTagName('input');
        var length = inputs.length;
        for (var i = 0; i < length; i++) {
          inputs[i].blur();
        }
        document.getElementsByClassName('bigwrapper')[0].style.marginTop = '0px';
      }
    }
    function b64DecodeUnicode(str) {
      return decodeURIComponent(atob(str).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
      }).join(''));
    }
    //客户端调用
    function LoadPage(pagename, language, ntf, maccode) {
      try {
        const IndexMlog = new Mlog({
          activity: 'mtacc'
        })
        IndexMlog.visitLog({
          behavior: 'load_page',
          pagename: pagename,
          language: language,
          ntf: ntf,
          maccode: maccode
        })
      } catch (e) {}
      localStorage.setItem('language', language);
      var ntfData = ntf.split(',')[0];
      var emailData = ntf.split(',')[1];
      localStorage.setItem('ntf', ntfData);
      emailData && localStorage.setItem('emailsended', emailData)
      let phoneServicer = 0
      if(emailData){
        const res = b64DecodeUnicode(emailData);
        if(JSON.parse(res).phoneServicer){
          phoneServicer = JSON.parse(res).phoneServicer;
        }
      }
      localStorage.setItem('sms_type', phoneServicer);
      var urlOrigin = window.location.origin + '/v2.1/'
      switch (pagename) {
        case 'unbind-phone':
          location.href = urlOrigin + 'inapp/unbind-phone';
          break;
        case 'new-bindemail':
          location.href = urlOrigin + 'inapp/new-bindemail';
          break;
        case 'email-register':
          location.href = urlOrigin + 'inapp/email-register';
          break;
        case 'phone-register':
          location.href = urlOrigin + 'inapp/phone-register';
          break;
        case 'forgotpassword-email':
          location.href = urlOrigin + 'inapp/forgotpassword-email';
          break;
        case 'changbind-confirm':
          location.href = urlOrigin + 'inapp/changbind-confirm';
          break;
        case 'changeemail-success':
          location.href = urlOrigin + 'inapp/changeemail-success';
          break;
        case 'changebindphone':
          location.href = urlOrigin + 'inapp/changebindphone';
          break;
        case 'changebindemail':
          location.href = urlOrigin + 'inapp/changebindemail';
          break;
        case 'login-new':
          location.href = urlOrigin + 'inapp/login-new';
          break;
        case 'loginbyemail':
          location.href = urlOrigin + 'inapp/loginbyemail';
          break;
        case 'forgotpassword-phone':
          location.href = urlOrigin + 'inapp/forgotpassword-phone';
          break;
        case 'forgotpassword3':
          location.href = urlOrigin + 'inapp/forgotpassword-3';
          break;
        case 'login':
          location.href = urlOrigin + 'inapp/login';
          break;
        case 'bindemail':
          location.href = urlOrigin + 'inapp/bindemail';
          break;
        case 'createaccount2':
          location.href = urlOrigin + 'inapp/createaccount2';
          break;
        case 'createaccount4':
          location.href = urlOrigin + 'inapp/createaccount4';
          break;
        case 'phonebind':
          location.href = urlOrigin + 'inapp/bindphone';
          break;
        case 'bindphonewithemail': // 已有邮箱绑定手机号
          location.href = urlOrigin + 'inapp/bindphonewithemail';
          break;
        case 'bindemailwithphone': // 已有手机号绑定邮箱
          location.href = urlOrigin + 'inapp/bindemailwithphone';
          break;
        case 'bindphonewithemail2': // 已有邮箱绑定手机号
          location.href = urlOrigin + 'inapp/bindphonewithemail?s=2';
          break;
        case 'bindemailwithphone2': // 已有手机号绑定邮箱
          location.href = urlOrigin + 'inapp/bindemailwithphone?s=2';
          break;
        default:
          break;
      }
    }</script><script type=text/javascript src=/static/js/manifest.6ee29452b9c46050a163.js></script><script type=text/javascript src=/static/js/vendor.1d5f40c1b4d064deafdf.js></script><script type=text/javascript src=/static/js/app.2ad5e7e10367aa26ebb6.js></script></body></html>
