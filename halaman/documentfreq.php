<div class="">
  <div class="clearfix"></div>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h2 style="color: blue">DF</h2></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse">
        <div class="panel-body">Document Frequency.  (jumlah kali setiap istilah muncul dalam koleksi dokumen).
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Hasil DF</h2>
          <div class="clearfix"></div>
        </div>
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>TermStem</th>
                <th>Doc-ID</th>
                <th>TF(Term frequency)</th>
                <th>DF(Document frequency)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($koneksi,"select b.Id as Id,b.TermStem,b.DocId AS DocId,b.TF AS TF,a.DF AS DF from
              (select Id,TermStem,Count(Distinct Id) AS DF from tb_proses Group By TermStem) a
              left join
              (select Id,TermStem,DocId, Count AS TF  from tb_proses Group By Id) b
              on b.TermStem = a.TermStem");
              $warna = "#DFE3FF";
              $no=1;
              while($row = mysqli_fetch_array($result)) {
              if($warna=="#DFE3FF"){$warna="#DFF0D8";}else{$warna="#DFE3FF";}
              print("<tr bgcolor='$warna'>");
                print("<td>" . $no++ . "</td><td>" . $row['TermStem'] . "</td><td>" . $row['DocId'] .
              "</td><td>" . $row['TF'] .
            "</td><td>" . $row['DF'] .
          "</td>");
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