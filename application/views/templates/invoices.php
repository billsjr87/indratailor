<div class="table-responsive d-none" id="mstr_invoice">
  <h1 class="text-center">
    <?php echo $stor_prfl['stor_name']; ?>
  </h1>
  <h6 class="text-center">
    <i>
      <?php echo $stor_prfl['stor_addr']; ?>
    </i>
  </h6>
  <h6 class="text-center">
    <b style="font-size:0.8em;">
      <?php echo $stor_prfl['stor_phnn']; ?>
    </b>
  </h6>
  <table class="table border-top" style="margin-top:15px;">
    <thead>
      <tr>
        <td style="width: 12%;" class="border-0">
          No.Nota
        </td>
        <th id="print_nonota" style="width: 60%;" class="border-0">
          <?php echo $ordr_nmbr; ?>
        </th>
        <td style="width: 18%;" class="border-0">
          Tanggal
        </td>
        <th id="print_tanggal" style="width: 10%;" class="border-0">

        </th>
      </tr>
      <tr>
        <td class="border-0">
          Tn./Nn.
        </td>
        <th id="print_nama" class="border-0">

        </th>
        <td class="border-0">
          Tanggal Selesai
        </td>
        <th id="print_tgl_selesai" class="border-0">

        </th>
      </tr>
    </thead>
  </table>
  <table class="table" style="margin-top:10px;margin-bottom:0px;">
    <thead>
      <tr>
        <th style="width: 8%;" class="text-center">No.</th>
        <th style="width: 12%;" class="text-center">Qty</th>
        <th style="width: 45%;">Barang</th>
        <th style="width: 15%;" class="text-center">Harga</th>
        <th style="width: 20%;" class="text-center">Total</th>
      </tr>
    </thead>
    <tbody id="daftar_belanja" style="border-bottom:0.5px solid lightgrey;">

    </tbody>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th class="border-0" style="width: 65%;">&nbsp;</th>
        <th class="border-0 text-center" style="width: 15%;">Jumlah</th>
        <th style="width: 20%;padding-right:20px;" class="text-right" id="biaya">0</th>
      </tr>
      <tr>
        <th class="border-0" style="width: 65%;">&nbsp;</th>
        <th class="border-0 text-center" style="width: 15%;">Bayar</th>
        <th style="width: 20%;padding-right:20px;" class="text-right" id="bayar">0</th>
      </tr>
      <tr>
        <th class="border-0" style="width: 65%;">&nbsp;</th>
        <th class="border-0 text-center" style="width: 15%;">Sisa</th>
        <th style="width: 20%;padding-right:20px;" class="text-right" id="sisa">0</th>
      </tr>
    </thead>
  </table>
</div>
