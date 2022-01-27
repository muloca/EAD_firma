<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- SweetAlert --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo asset('css/custom.css') ?>" type="text/css">

  <style>
    .swal-overlay {
      background-color: rgba(31, 32, 32);
    }

    .swal-text {
      background-color: #FEFAE3;
      padding: 17px;
      border: 1px solid #F0E1A1;
      display: block;
      margin: 22px;
      text-align: center;
      color: #61534e;
    }
  </style>


  <title>@yield('title')Estudo a Distância</title>
</head>

<body style="background-color: white">

  <div class="content">
    @yield('content')
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    $(function() {

      $.ajax({
        url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

          let estados = response.sort(function(a, b) {
            if (a.nome > b.nome) {
              return 1;
            }
            if (a.nome < b.nome) {
              return -1;
            }
            return 0;
          });

          let estadosHtml = '';
          for (estado of estados) {
            estadosHtml += `<option value="${estado.sigla}">${estado.sigla}</option>`;
          }

          $('select[name="estado"]').html(estadosHtml);
        }
      });

      $('select[name="estado"]').change(function() {

        let sigla = $(this).val();

        $.ajax({
          url: `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/municipios`,
          method: 'GET',
          dataType: 'json',
          beforeSend: function(response) {
            $('select[name="cidade"]').prop('disabled', true);

          },
          success: function(response) {

            let cidades = response.sort(function(a, b) {
              if (a.nome > b.nome) {
                return 1;
              }
              if (a.nome < b.nome) {
                return -1;
              }
              return 0;
            });

            let cidadesHtml = '';
            for (cidade of cidades) {
              cidadesHtml += `<option value="${cidade.nome}">${cidade.nome}</option>`;
            }

            $('select[name="cidade"]').html(cidadesHtml);
            $('select[name="cidade"]').prop('disabled', false);
          }
        });
      });

    });
  </script>
</body>

</html>