$(document).ready(function () {
  // Motorista
  $("#nome").on("keyup", function () {
    $("#nome-err").attr("hidden", "true");
  });

  $("#rg").on("keyup", function () {
    $("#rg-err").attr("hidden", "true");
    const numeros = $("#rg").val().replace(/\D/g, "");
    $("#rg").val(numeros);
  });

  $("#cpf").on("keyup", function () {
    $("#cpf-err").attr("hidden", "true");
    const numeros = $("#cpf").val().replace(/\D/g, "");
    $("#cpf").val(numeros);
  });

  $("#telefone").on("keyup", function () {
    $("#tel-err").attr("hidden", "true");
    const numeros = $("#telefone").val().replace(/\D/g, "");
    $("#telefone").val(numeros);
  });

  $(".motorista").on("submit", function (event) {
    const nomeVal = $("#nome").val();
    const rgVal = $("#rg").val();
    const cpfVal = $("#cpf").val();
    const telefoneVal = $("#telefone").val();
    if (nomeVal.length === 0) {
      $("#nome-err").removeAttr("hidden");
      $("#nome-err").html("O campo nome é obrigatório");
      event.preventDefault();
    }

    if (rgVal.length === 0) {
      $("#rg-err").removeAttr("hidden");
      $("#rg-err").html("O campo RG é obrigatório");
      event.preventDefault();
    }

    if (cpfVal.length === 0) {
      $("#cpf-err").removeAttr("hidden");
      $("#cpf-err").html("O campo CPF é obrigatório");
      event.preventDefault();
    }

    if (cpfVal.length < 11) {
      $("#cpf-err").removeAttr("hidden");
      $("#cpf-err").html("O campo CPF deve conter 11 caracteres");
      event.preventDefault();
    }

    if (telefoneVal.length === 0) {
      $("#tel-err").removeAttr("hidden");
      $("#tel-err").html("O campo telefone é obrigatório");
      event.preventDefault();
    }

    if (telefoneVal.length < 11) {
      $("#tel-err").removeAttr("hidden");
      $("#tel-err").html("O campo telefone deve conter 11 caracteres");
      event.preventDefault();
    }
  });

  //Veículo
  $("#placa").on("keyup", function () {
    $("#placa-err").attr("hidden", "true");
    const numeros = $("#placa").val().toUpperCase();
    $("#placa").val(numeros);
  });

  $("#renavam").on("keyup", function () {
    $("#renavam-err").attr("hidden", "true");
    const numeros = $("#renavam").val().replace(/\D/g, "");
    $("#renavam").val(numeros);
  });

  $("#modelo").on("keyup", function () {
    $("#modelo-err").attr("hidden", "true");
  });

  $("#marca").on("keyup", function () {
    $("#marca-err").attr("hidden", "true");
  });

  $("#ano").on("keyup", function () {
    $("#ano-err").attr("hidden", "true");
    const numeros = $("#ano").val().replace(/\D/g, "");
    $("#ano").val(numeros);
  });

  $("#cor").on("keyup", function () {
    $("#cor-err").attr("hidden", "true");
  });

  $(".veiculo").on("submit", function (event) {
    const placaVal = $("#placa").val();
    const renavamVal = $("#renavam").val();
    const modeloVal = $("#modelo").val();
    const marcaVal = $("#marca").val();
    const anoVal = $("#ano").val();
    const corVal = $("#cor").val();
    if (placaVal.length === 0) {
      $("#placa-err").removeAttr("hidden");
      $("#placa-err").html("O campo placa é obrigatório");
      event.preventDefault();
    }

    if (placaVal.length < 7) {
      $("#placa-err").removeAttr("hidden");
      $("#placa-err").html("O campo placa deve conter 7 caracteres");
      event.preventDefault();
    }

    if (renavamVal.length === 0) {
      $("#renavam-err").removeAttr("hidden");
      $("#renavam-err").html("O campo renavam é obrigatório");
      event.preventDefault();
    }

    if (modeloVal.length === 0) {
      $("#modelo-err").removeAttr("hidden");
      $("#modelo-err").html("O campo modelo é obrigatório");
      event.preventDefault();
    }

    if (marcaVal.length === 0) {
      $("#marca-err").removeAttr("hidden");
      $("#marca-err").html("O campo marca é obrigatório");
      event.preventDefault();
    }

    if (anoVal.length === 0) {
      $("#ano-err").removeAttr("hidden");
      $("#ano-err").html("O campo ano é obrigatório");
      event.preventDefault();
    }

    if (anoVal.length < 4) {
      $("#ano-err").removeAttr("hidden");
      $("#ano-err").html("O campo ano deve conter 4 caracteres");
      event.preventDefault();
    }

    if (corVal.length === 0) {
      $("#cor-err").removeAttr("hidden");
      $("#cor-err").html("O campo cor é obrigatório");
      event.preventDefault();
    }
  });

  //mostrar

  $(".mostra-cpf").each(function (index) {
    const cpf = $(".mostra-cpf")
      .eq(index)
      .html()
      .replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    $(".mostra-cpf").eq(index).html(cpf);
  });

  $(".mostra-tel").each(function (index) {
    const tel = $(".mostra-tel")
      .eq(index)
      .html()
      .replace(/^(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
    $(".mostra-tel").eq(index).html(tel);
  });

  $('.alert-err').css({'margin-top':'20px'});
});
