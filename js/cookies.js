  // Original JavaScript code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value) {
      document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }


  function storeValues(form) {
      setCookie("ip", form.ip.value);
      return true;
  }


  function clearCookies() {
      deleteCookie("ip");
      alert('Configurações deletadas!');
  }

  function showCookies() {
      document.write(getCookie("ip"));
  }

  // Original JavaScript code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function getCookie(name) {
      var re = new RegExp(name + "=([^;]+)");
      var value = re.exec(document.cookie);
      return (value != null) ? unescape(value[1]) : null;
  }

  if (ip = getCookie("ip")) document.myForm.ip.value = ip;