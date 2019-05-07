
function printPendingPayments() {

  $.ajax({

    url: "getPendingPayments.php",
    method: "GET",
    success: function(data) {

      var payments = JSON.parse(data);
      console.log(payments);

      var paymentsContainer = $(".payments");

      var template = $("#payments-template").html();
      var compiled = Handlebars.compile(template);


      for (var i = 0; i < payments.length; i++) {

        var payment = payments[i];

        var paymentHTML = compiled(payment);
        paymentsContainer.append(paymentHTML);
      }
    }
  });
}


function init() {

  printPendingPayments();
}


$(document).ready(init);
