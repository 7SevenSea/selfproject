$(function () {
  $('.modalOpen').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      console.log(modal);
      $(modal).fadeIn();
      return false;
    });
  });
  $('.modalClose,.modal-main,.modal-bg,').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});

$(function () {
  const popup = document.getElementById('popup');
  const close = document.getElementById('close');
  const payment = document.getElementById('payment');
  $(document).ready(function () {
    var session = sessionStorage.getItem('modal');
    if (session != 1) {
      $(popup).fadeIn();
    }
  });
  $('[id = close]').click(function () {
    sessionStorage.setItem('modal', '1');
    $(popup).fadeOut();
  });
  $(payment).on('click', function () {
    sessionStorage.removeItem('modal');
  });
});

function set2fig(num) {
  var ret;
  if( num < 10 ) { ret = "0" + num; }
  else { ret = num; }
  return ret;
}
function Time() {
  var realTime = new Date();
  var hour = set2fig(realTime.getHours());
  var minutes  = set2fig(realTime.getMinutes());
  var text = hour + " : " + minutes;
  document.getElementById("current-time").innerHTML = text;
}
setInterval('Time()',1000);

