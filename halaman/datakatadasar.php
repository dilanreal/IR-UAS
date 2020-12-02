<div class="">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Kata Dasar</h2>
          <div class="clearfix"></div>
        </div>
          <div class="x_content">
            <p>Data kata dasar dapat di download pada link berikut : http://www.hikaruyuuki.com/wp-content/uploads/kata-dasar-indonesia.txt
          </div>
        </div>
        <?php
        include 'koneksi.php';
        $result = mysqli_query($koneksi,"SELECT * FROM tb_katadasar");
        $warna = "#DFE3FF";
        ?>
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kata Dasar</th>
                <th>Tipe Kata Dasar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_array($result)) {
              if($warna=="#DFE3FF"){$warna="#DFF0D8";}else{$warna="#DFE3FF";}
              print("<tr bgcolor='$warna'>");
                print("<td>" . $row['id_ktdasar'] . "</td><td>" . $row['katadasar'] . "</td><td>" . $row['tipe_katadasar'] . "</td>");
              print("</tr>");
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>