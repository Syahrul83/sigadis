
<!doctype html>
<html lang="en">
     <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">

       <title>{{ $judul }}</title>

         <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <style type="text/css" media="all">


        table, th, td {

            font-family: 'Times New Roman', Times, serif; font-size: 12px;

            border-collapse: collapse;
            text-align: center;

          border: 1px solid black;
          padding: 3px;



        }


        .bdr table, .bdr th, .bdr td {

            font-family: 'Times New Roman', Times, serif; font-size: 9px;

            border-collapse: collapse;

          border: 1px solid black;

        }


        .tulis {

            font-family: 'Times New Roman', Times, serif; font-size: 12px;

        }


        .noborder, .noborder tr, .noborder th, .noborder td {

            border:none;

        }

        .noborder1, .noborder1 tr, .noborder1 th, .noborder1 td {

            border:none;

            font-size: 10px;

        }

            </style><style type="text/css" media="all">

        table, th, td {

            font-family: 'Times New Roman', Times, serif; font-size: 12px;

            border-collapse: collapse;
            text-align: center;

          border: 1px solid black;



        }


        .bdr table, .bdr th, .bdr td {

            font-family: 'Times New Roman', Times, serif; font-size: 9px;

            border-collapse: collapse;

          border: 1px solid black;

        }


        .tulis {

            font-family: 'Times New Roman', Times, serif; font-size: 12px;

        }


        .noborder, .noborder tr, .noborder th, .noborder td {

            border:none;

        }

        .noborder1, .noborder1 tr, .noborder1 th, .noborder1 td {

            border:none;

            font-size: 10px;

        }

        .button-34 {
  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}

.table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #000203;
}

            </style>

<style type="text/css" media="print">
    @page {
         size: legal {{ $size }};
         margin-bottom: 20px ;
    }

    #printPageButton {
    display: none;

  }




    .tbl td, .tbl th {
        font-size: 7px;
    }

</style>

<script type="text/javascript">
    window.print()
    </script>

     </head>
     <body>
<div id="printPageButton">
   <button class="button-34"   onClick="window.print();">Save PDF</button>
</div>
<br>
<table class="noborder" cellspacing="0" cellpadding="0">

  <tr>
    <td width="91" rowspan="4"><div align="center"><img src="{{ url('/img/pln1.png') }}" width="90px"></div></td>
    <td colspan="2" width="277"><div style="color:#00AFEF;" align="left"><b>PT.    PLN (Persero )</b></div></td>
  </tr>
  <tr>
    <td colspan="2"><div style="color:#00AFEF;" align="left"><b>UIW KALIMANTAN TIMUR DAN    KALIMANTAN UTARA</b></div></td>
  </tr>
  <tr>
    <td colspan="2"><div style="color:#00AFEF;" align="left"><b>UP3 KALIMANTAN UTARA</b></div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="left">DATA GARDU    DISTRIBUSI </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">ULP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</div></td>
    <td><div align="left">{{ getData('masterawals','ulp',$awal->masterawal_id) }}</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">BULAN :</div></td>
    <td><div align="left">{{ $awal->bulan }}</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">TAHUN :</div></td>
    <td align="right"><div align="left">{{ $awal->tahun }}</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">Cos ɸ &nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td align="right"><div align="left">{{ $awal->cos }}</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">WBP  &nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td align="right"><div align="left">{{ $awal->wbp }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp / kWH</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">LWBP 1 :</div></td>
    <td align="right"><div align="left">{{ $awal->lwbp1 }} &nbsp;&nbsp;&nbsp;&nbsp; Rp / kWH</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left">LWBP 2 :</div></td>
    <td align="right"><div align="left">{{ $awal->lwbp2 }} &nbsp;&nbsp;&nbsp;&nbsp; Rp / kWH</div></td>
  </tr>
</table>
<br>
{{ $awal->judul }} &nbsp&nbsp&nbsp Tanggal : {{ tgl_indo(date('Y-m-d')) }}&nbsp&nbsp
        @if (request()->segment(1) == 'pdf1')
        @include('pdf.perhitungan.pehitungan')
        @elseif (request()->segment(1) == 'pdf2')
        @include('pdf.perhitungan.losses')
        {{-- @elseif (request()->segment(1) == 'pdf3')
        @include('pdf.perhitungan.pembebanan') --}}
        @elseif (request()->segment(1) == 'pdf4')
        @include('pdf.perhitungan.siang')
        {{-- @elseif (request()->segment(1) == 'pdf5')
        @include('pdf.perhitungan.malam') --}}
        @elseif (request()->segment(1) == 'data-trafo')
        @include('pdf.perhitungan.data-trafo')
        @elseif (request()->segment(1) == 'grafik')
        @include('pdf.perhitungan.grafik')
        @endif

        <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

</body>
</html>
