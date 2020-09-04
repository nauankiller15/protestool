function abrir() {
    document.getElementById('popup').style.display = 'block';
}

function fechar() {
    document.getElementById('popup').style.display = 'none';
}


$(".popup").draggable();

function fecharpopup() {
    var elem = $('#popup')[0];
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) {
            $(elem).hide();
        }
    });

}

    // $(".popup1,popup2,popup3").draggable();

    lozad('.lozad', {
        load: function(target) {
            target.src = target.dataset.src;
            target.onload = function() {
                target.classList.add('fadein');
            }
        }
    }).observe();

    // Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }
  
  
  // Install input filters.
  setInputFilter(document.getElementById("intTextBox"), function(value) {
    return /^-?\d*$/.test(value); });
  setInputFilter(document.getElementById("uintTextBox"), function(value) {
    return /^\d*$/.test(value); });
  setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
  setInputFilter(document.getElementById("floatTextBox"), function(value) {
    return /^-?\d*[.,]?\d*$/.test(value); });
  setInputFilter(document.getElementById("currencyTextBox"), function(value) {
    return /^-?\d*[.,]?\d{0,2}$/.test(value); });
  setInputFilter(document.getElementById("latinTextBox"), function(value) {
    return /^[a-z]*$/i.test(value); });
  setInputFilter(document.getElementById("hexTextBox"), function(value) {
    return /^[0-9a-f]*$/i.test(value); });